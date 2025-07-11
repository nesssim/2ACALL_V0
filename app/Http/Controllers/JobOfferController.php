<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    public function index()
    {
        $jobOffers = JobOffer::latest()->paginate(10);
        return view('admin.job-offers.index', compact('jobOffers'));
    }

    public function create()
    {
        return view('admin.job-offers.create');
    }

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'salary' => 'nullable|numeric|min:0',
        'is_salary_negotiable' => 'boolean',
        'contract_type' => 'required|in:CDI,CDD,Stage,Freelance',
        'work_type' => 'required|in:Temps plein,Temps partiel,Remote',
        'category' => 'nullable|string|max:255',
        'description' => 'required|string',
        'requirements' => 'nullable|string',
        'benefits' => 'nullable|string',
        'is_active' => 'boolean',
    ]);

    $validated['is_active'] = $request->has('is_active');
    $validated['is_salary_negotiable'] = $request->has('is_salary_negotiable');

    JobOffer::create($validated);

    return redirect()->route('admin.job-offers.index')
        ->with('success', "Offre d'emploi créée avec succès !");
}
    public function show(JobOffer $jobOffer)
    {
        return view('admin.job-offers.show', compact('jobOffer'));
    }

    public function edit(JobOffer $jobOffer)
    {
        return view('admin.job-offers.edit', compact('jobOffer'));
    }

   public function update(Request $request, JobOffer $jobOffer)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'required|string|max:255',
        'salary' => 'nullable|numeric|min:0',
        'is_salary_negotiable' => 'boolean',
        'contract_type' => 'required|in:CDI,CDD,Stage,Freelance',
        'work_type' => 'required|in:Temps plein,Temps partiel,Remote',
        'requirements' => 'nullable|string',
        'benefits' => 'nullable|string',
        'category' => 'nullable|string|max:255',
        'is_active' => 'boolean',
    ]);

    $validated['is_active'] = $request->has('is_active');
    $validated['is_salary_negotiable'] = $request->has('is_salary_negotiable');

    $jobOffer->update($validated);

    return redirect()->route('admin.job-offers.index')
        ->with('success', "Offre d'emploi modifiée avec succès !");
}

    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();

        return redirect()->route('admin.job-offers.index')
            ->with('success', 'Offre d\'emploi supprimée avec succès !');
    }

    public function toggle(JobOffer $jobOffer)
    {
        $jobOffer->update(['is_active' => !$jobOffer->is_active]);

        $status = $jobOffer->is_active ? 'activée' : 'désactivée';
        return redirect()->back()
            ->with('success', "Offre d'emploi {$status} avec succès !");
    }
}