<form wire:submit.prevent="saveBesoin" class="space-y-8 divide-y divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
        <div class="pt-8 pl-8">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Ajouter un besoin</h3>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="materiel_a_remplacer" class="block text-sm font-medium text-gray-700">Matériel à
                        remplacer</label>
                    <div class="mt-1">
                        <input type="text"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            id="materiel_a_remplacer" placeholder="Matériel à remplacer"
                            wire:model="materiel_a_remplacer">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="materiel_souhaite" class="block text-sm font-medium text-gray-700">Matériel
                        souhaité</label>
                    <div class="mt-1">
                        <input type="text"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            id="materiel_souhaite" placeholder="Matériel souhaité" wire:model="materiel_souhaite">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="date_souhaite" class="block text-sm font-medium text-gray-700">Date souhaitée</label>
                    <div class="mt-1">
                        <input type="date"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            id="date_souhaite" placeholder="Date souhaitée" wire:model="date_souhaite">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="commentaire" class="block text-sm font-medium text-gray-700">Commentaire</label>
                    <div class="mt-1">
                        <textarea
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            id="commentaire" placeholder="Commentaire" wire:model="commentaire" rows="4">
                        </textarea>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="employe" class="block text-sm font-medium text-gray-700">Login</label>
                    <select id="employe" name="employe" wire:model="employe_id"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option hidden selected value=""> -- Sélectionnez votre login -- </option>
                        @foreach ($employes as $employe)
                            <option value="{{ $employe->id }}">{{ $employe->login }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="pt-5">
                    <button type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ajouter</button>
                </div>
            </div>
        </div>
</form>
{{-- Do your work, then step back. --}}

<div class="space-y-8 divide-y divide-gray-200">
    <div class="pt-8 pl-8">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Liste des besoins</h3>
        </div>
        <div class="mt-6">
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach ($besoins as $besoin)
                        <li>
                            {{-- <a href="{{ route('besoin', [$besoin->id]) }}" class="block hover:bg-gray-50"> --}}
                            <div class="flex items-center px-4 py-4 sm:px-6">
                                <div class="min-w-0 flex-1 flex items-center">
                                    <div class="flex-shrink-0">
                                        <span class="h-12 w-12 rounded-full">#{{ $besoin->id }}</span>
                                    </div>
                                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-3 md:gap-4">
                                        <div>
                                            <p class="text-sm font-medium text-indigo-600 truncate">Login employé :
                                                {{ $besoin->employe->login }} </p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                <!-- Heroicon name: solid/mail -->
                                                <span class="truncate">Matériel à remplacer :
                                                    {{ $besoin->materiel_a_remplacer }}</span>
                                            </p>
                                        </div>
                                        <div class="hidden md:block">
                                            <div>
                                                <p class="text-sm text-gray-900">
                                                    Matériel souhaité : {{ $besoin->materiel_souhaite }}
                                                </p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    Date souhaitée : {{ $besoin->date_souhaite }}
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-900">
                                                Commentaire : {{ $besoin->commentaire }}
                                            </p>
                                        </div>
                                        <div>
                                            <span wire:click="delete({{ $besoin->id }})"
                                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Supprimer
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </li>
                    @endforeach
            </div>
            </ul>
        </div>
    </div>
</div>

<div class="mb-10">
</div>
