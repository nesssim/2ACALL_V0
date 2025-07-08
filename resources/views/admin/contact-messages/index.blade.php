@extends('layouts.dashboard')

@section('head')<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div x-data="contactMessages()">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Messages de contact</h1>

        <!-- Notification -->
        <div x-show="showNotification" 
             x-transition:enter="transition ease-out duration-300" 
             x-transition:enter-start="opacity-0 transform translate-y-2" 
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100 transform translate-y-0" 
             x-transition:leave-end="opacity-0 transform translate-y-2"
             class="fixed top-4 right-4 z-50" 
             style="display: none;">
            <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <p x-text="notificationMessage"></p>
            </div>
        </div>

        <div class="bg-white shadow-xl rounded-xl overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gradient-to-r from-blue-50 to-indigo-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sujet</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($messages as $msg)
                            <tr class="hover:bg-gray-50 transition-colors duration-200" :id="'message-row-' + {{ $msg->id }}">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                                                <span class="text-sm font-medium text-white">
                                                    {{ strtoupper(substr($msg->first_name, 0, 1) . substr($msg->last_name, 0, 1)) }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $msg->first_name }} {{ $msg->last_name }}</div>
                                            <div class="text-sm text-gray-500">{{ $msg->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 max-w-xs truncate">{{ $msg->subject }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :id="'status-badge-' + {{ $msg->id }}" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
                                          :class="getStatusBadgeClass('{{ $msg->status }}')">
                                        <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="3"/>
                                        </svg>
                                        <span :id="'status-text-' + {{ $msg->id }}">{{ ucfirst($msg->status) }}</span>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $msg->created_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button @click="openModal({{ $msg->toJson() }})"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-105">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        Voir
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="bg-white px-6 py-4 border-t border-gray-200">
                {{ $messages->links() }}
            </div>
        </div>

        <!-- Modal ultra moderne -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300" 
             x-transition:enter-start="opacity-0" 
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200" 
             x-transition:leave-start="opacity-100" 
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50 p-4" 
             style="display: none;">

            <div @click.away="closeModal()"
                 x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform scale-95" 
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-200" 
                 x-transition:leave-start="opacity-100 transform scale-100" 
                 x-transition:leave-end="opacity-0 transform scale-95"
                 class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden">

                <!-- Header du modal -->
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 px-6 py-4 text-white relative">
                    <button @click="closeModal()"
                            class="absolute top-4 right-4 text-white hover:text-gray-200 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <h3 class="text-xl font-bold">Détails du message</h3>
                    <p class="text-blue-100 text-sm mt-1">Message de contact reçu</p>
                </div>

                <!-- Contenu du modal -->
                <template x-if="message">
                    <div class="flex flex-col h-full max-h-[calc(90vh-80px)]">
                        <!-- Contenu scrollable -->
                        <div class="flex-1 overflow-y-auto p-6">
                            <!-- Informations du contact -->
                            <div class="bg-gray-50 rounded-xl p-4 mb-6">
                                <div class="flex items-center mb-4">
                                    <div class="h-12 w-12 rounded-full bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center mr-4">
                                        <span class="text-lg font-medium text-white" x-text="message.first_name.charAt(0) + message.last_name.charAt(0)"></span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-900" x-text="message.first_name + ' ' + message.last_name"></h4>
                                        <p class="text-gray-600" x-text="message.email"></p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <span class="text-gray-500 block">Date de réception</span>
                                        <span class="font-medium text-gray-900" x-text="(new Date(message.created_at)).toLocaleDateString('fr-FR', {
                                            year: 'numeric',
                                            month: 'long', 
                                            day: 'numeric',
                                            hour: '2-digit',
                                            minute: '2-digit'
                                        })"></span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500 block">Statut</span>
                                        <span x-text="capitalizeFirst(currentStatus)" class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
                                              :class="getStatusBadgeClass(currentStatus)">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Sujet -->
                            <div class="mb-6">
                                <h5 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Sujet</h5>
                                <p class="text-lg font-medium text-gray-900 bg-white border border-gray-200 rounded-lg p-3 break-words" x-text="message.subject"></p>
                            </div>

                            <!-- Message -->
                            <div class="mb-6">
                                <h5 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Message</h5>
                                <div class="bg-white border border-gray-200 rounded-lg p-4">
                                    <p class="text-gray-800 leading-relaxed whitespace-pre-wrap break-words" x-text="message.message"></p>
                                </div>
                            </div>

                            <!-- Notes admin (si existantes) -->
                            <div x-show="message.admin_notes" class="mb-6">
                                <h5 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Notes administrateur</h5>
                                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                    <p class="text-yellow-800 break-words" x-text="message.admin_notes"></p>
                                </div>
                            </div>
                        </div>

                        <!-- Actions fixées en bas -->
                        <div class="border-t border-gray-200 px-6 py-4 bg-gray-50">
                            <div class="flex justify-between items-center">
                                <button @click="closeModal()"
                                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                                    Fermer
                                </button>

                                <div class="flex space-x-3">
                                    <!-- Bouton Marquer comme lu (si nouveau) -->
                                    <button x-show="currentStatus === 'nouveau'" 
                                            @click="markAsRead()"
                                            :disabled="loading"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <template x-if="!loading">
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                                </svg>
                                                Marquer comme lu
                                            </span>
                                        </template>
                                        <template x-if="loading">
                                            <span class="flex items-center">
                                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                </svg>
                                                Chargement...
                                            </span>
                                        </template>
                                    </button>

                                    <!-- Bouton Marquer comme traité (si pas fermé et pas traité) -->
                                    <button x-show="currentStatus !== 'fermé' && currentStatus !== 'traité'" 
                                            @click="markAsTreated()"
                                            :disabled="loading"
                                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-green-500 to-green-600 rounded-lg hover:from-green-600 hover:to-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200 transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <template x-if="!loading">
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                Marquer comme traité
                                            </span>
                                        </template>
                                        <template x-if="loading">
                                            <span class="flex items-center">
                                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                </svg>
                                                Chargement...
                                            </span>
                                        </template>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        function contactMessages() {
            return {
                open: false,
                message: null,
                currentStatus: '',
                originalStatus: '',
                loading: false,
                showNotification: false,
                notificationMessage: '',

                openModal(msg) {
                    console.log('Opening modal with message:', msg);
                    this.message = msg;
                    this.currentStatus = msg.status;
                    this.originalStatus = msg.status;
                    this.open = true;
                },

                async closeModal() {
                    // Si le message était "nouveau" et qu'aucune action n'a été prise, le fermer automatiquement
                    if (this.originalStatus === 'nouveau' && this.currentStatus === 'nouveau') {
                        await this.markAsClosed();
                    }
                    this.open = false;
                    this.message = null;
                },

                async markAsRead() {
                    if (this.loading) return;
                    this.loading = true;
                    console.log('Marking as read, message ID:', this.message.id);

                    try {
                        const response = await fetch(`/admin/contact-messages/${this.message.id}/read`, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        });

                        const data = await response.json();
                        console.log('Read response:', data);

                        if (data.success) {
                            this.currentStatus = 'lu';
                            this.message.status = 'lu';
                            this.updateStatusInTable(this.message.id, 'lu');
                            this.showNotificationMessage(data.message);
                        } else {
                            console.error('Failed to mark as read:', data);
                            this.showNotificationMessage('Erreur lors de la mise à jour', 'error');
                        }
                    } catch (error) {
                        console.error('Error marking as read:', error);
                        this.showNotificationMessage('Erreur lors de la mise à jour', 'error');
                    } finally {
                        this.loading = false;
                    }
                },

                async markAsTreated() {
                    if (this.loading) return;
                    this.loading = true;
                    console.log('Marking as treated, message ID:', this.message.id);

                    try {
                        const response = await fetch(`/admin/contact-messages/${this.message.id}/treated`, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        });

                        const data = await response.json();
                        console.log('Treated response:', data);

                        if (data.success) {
                            this.currentStatus = 'traité';
                            this.message.status = 'traité';
                            this.updateStatusInTable(this.message.id, 'traité');
                            this.showNotificationMessage(data.message);
                        } else {
                            console.error('Failed to mark as treated:', data);
                            this.showNotificationMessage('Erreur lors de la mise à jour', 'error');
                        }
                    } catch (error) {
                        console.error('Error marking as treated:', error);
                        this.showNotificationMessage('Erreur lors de la mise à jour', 'error');
                    } finally {
                        this.loading = false;
                    }
                },

                async markAsClosed() {
                    try {
                        const response = await fetch(`/admin/contact-messages/${this.message.id}/close`, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        });

                        const data = await response.json();

                        if (data.success) {
                            this.currentStatus = 'fermé';
                            this.message.status = 'fermé';
                            this.updateStatusInTable(this.message.id, 'fermé');
                        }
                    } catch (error) {
                        console.error('Error closing message:', error);
                    }
                },

                updateStatusInTable(messageId, newStatus) {
                    // Mettre à jour le badge de statut dans le tableau
                    const statusBadge = document.getElementById(`status-badge-${messageId}`);
                    const statusText = document.getElementById(`status-text-${messageId}`);

                    if (statusBadge && statusText) {
                        statusBadge.className = `inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${this.getStatusBadgeClass(newStatus)}`;
                        statusText.textContent = this.capitalizeFirst(newStatus);
                    }
                },

                getStatusBadgeClass(status) {
                    const classes = {
                        'nouveau': 'bg-yellow-100 text-yellow-800',
                        'lu': 'bg-blue-100 text-blue-800',
                        'traité': 'bg-green-100 text-green-800',
                        'fermé': 'bg-gray-100 text-gray-800'
                    };
                    return classes[status] || 'bg-gray-100 text-gray-800';
                },

                capitalizeFirst(str) {
                    return str.charAt(0).toUpperCase() + str.slice(1);
                },

                showNotificationMessage(message, type = 'success') {
                    this.notificationMessage = message;
                    this.showNotification = true;

                    setTimeout(() => {
                        this.showNotification = false;
                    }, 3000);
                }
            }
        }
    </script>
@endsection