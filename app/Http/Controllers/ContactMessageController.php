<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(15);
        $unreadCount = ContactMessage::unread()->count();
        
        return view('admin.contact-messages.index', compact('messages', 'unreadCount'));
    }

    public function show(ContactMessage $contactMessage)
    {
        if ($contactMessage->status === 'nouveau') {
            $contactMessage->markAsRead();
        }
        
        return view('admin.contact-messages.show', compact('contactMessage'));
    }

    public function update(Request $request, ContactMessage $contactMessage)
    {
        $validated = $request->validate([
            'status' => 'required|in:nouveau,lu,traité,fermé',
            'admin_notes' => 'nullable|string',
        ]);

        $contactMessage->update($validated);

        return redirect()->back()
            ->with('success', 'Message mis à jour avec succès !');
    }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('admin.contact-messages.index')
            ->with('success', 'Message supprimé avec succès !');
    }

    public function store(Request $request)
    {
        // Validation backend robuste
        $validated = $request->validate([
            'first_name' => [
                'required',
                'string',
                'min:2',
                'max:50',
                'regex:/^[a-zA-ZÀ-ÿ\s\-\']+$/' // Lettres, espaces, tirets, apostrophes et accents uniquement
            ],
            'last_name' => [
                'required',
                'string',
                'min:2',
                'max:50',
                'regex:/^[a-zA-ZÀ-ÿ\s\-\']+$/'
            ],
            'email' => [
                'required',
                'email:rfc,dns', // Validation email stricte avec vérification DNS
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
            ],
            'subject' => [
                'required',
                'string',
                'min:5',
                'max:200',
                'regex:/^[a-zA-ZÀ-ÿ0-9\s\-\.\,\!\?\(\)\'\"]+$/' // Caractères alphanumériques et ponctuation de base
            ],
            'message' => [
                'required',
                'string',
                'min:10',
                'max:2000'
            ]
        ], [
            // Messages d'erreur personnalisés en français
            'first_name.required' => 'Le prénom est obligatoire.',
            'first_name.min' => 'Le prénom doit contenir au moins 2 caractères.',
            'first_name.max' => 'Le prénom ne peut pas dépasser 50 caractères.',
            'first_name.regex' => 'Le prénom ne peut contenir que des lettres, espaces, tirets et apostrophes.',
            
            'last_name.required' => 'Le nom est obligatoire.',
            'last_name.min' => 'Le nom doit contenir au moins 2 caractères.',
            'last_name.max' => 'Le nom ne peut pas dépasser 50 caractères.',
            'last_name.regex' => 'Le nom ne peut contenir que des lettres, espaces, tirets et apostrophes.',
            
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'email.max' => 'L\'adresse email ne peut pas dépasser 255 caractères.',
            'email.regex' => 'Le format de l\'adresse email n\'est pas valide.',
            
            'subject.required' => 'Le sujet est obligatoire.',
            'subject.min' => 'Le sujet doit contenir au moins 5 caractères.',
            'subject.max' => 'Le sujet ne peut pas dépasser 200 caractères.',
            'subject.regex' => 'Le sujet contient des caractères non autorisés.',
            
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.'
        ]);

        // Nettoyage et sécurisation des données
        $validated['first_name'] = ucfirst(strtolower(trim($validated['first_name'])));
        $validated['last_name'] = ucfirst(strtolower(trim($validated['last_name'])));
        $validated['email'] = strtolower(trim($validated['email']));
        $validated['subject'] = trim($validated['subject']);
        $validated['message'] = trim($validated['message']);

        // Protection contre le spam (limite de fréquence)
        $recentMessages = ContactMessage::where('email', $validated['email'])
            ->where('created_at', '>=', now()->subMinutes(5))
            ->count();

        if ($recentMessages >= 2) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'Vous avez envoyé trop de messages récemment. Veuillez patienter 5 minutes.']);
        }

        // Création du message
        try {
        ContactMessage::create($validated);

        // Redirection vers la page précédente avec ancre + vider le formulaire
        return redirect()->back()
            ->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.')
            ->withInput([]); // Vider les anciennes données du formulaire
            
    } catch (\Exception $e) {
        Log::error('Erreur lors de la création du message de contact: ' . $e->getMessage());
        
        return redirect()->back()
            ->withInput()
            ->withErrors(['general' => 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer.']);
    }
}

    // Nouvelles méthodes pour les actions AJAX
    public function updateStatus(Request $request, ContactMessage $contactMessage)
    {
        $request->validate([
            'status' => 'required|in:nouveau,lu,traité,fermé'
        ]);

        $contactMessage->update([
            'status' => $request->status,
            'read_at' => in_array($request->status, ['lu', 'traité', 'fermé']) ? now() : null
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Statut mis à jour avec succès',
            'new_status' => $request->status
        ]);
    }

    public function markAsRead(ContactMessage $contactMessage)
    {
        $contactMessage->update([
            'status' => 'lu',
            'read_at' => now()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Message marqué comme lu',
            'new_status' => 'lu'
        ]);
    }

    public function markAsTreated(ContactMessage $contactMessage)
    {
        $contactMessage->update([
            'status' => 'traité',
            'read_at' => now()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Message marqué comme traité',
            'new_status' => 'traité'
        ]);
    }

    public function close(ContactMessage $contactMessage)
    {
        $contactMessage->update([
            'status' => 'fermé',
            'read_at' => now()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Message fermé',
            'new_status' => 'fermé'
        ]);
    }
}