<form wire:submit.prevent="saveEmploye" class="space-y-8 divide-y divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
        <div class="pt-8 pl-8">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Ajouter un employé</h3>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="login" class="block text-sm font-medium text-gray-700">Login</label>
                    <div class="mt-1">
                        <input type="text"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            id="login" placeholder="Login" wire:model="login">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="pays" class="block text-sm font-medium text-gray-700">Pays</label>
                    <div class="mt-1">
                        <input type="text"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            id="pays" placeholder="Pays" wire:model="pays">
                    </div>
                </div>
                <div class="pt-5">
                    <button type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Ajouter
                    </button>
                </div>
            </div>

        </div>

</form>
{{-- Do your work, then step back. --}}

<div class="space-y-8 divide-y divide-gray-200">
    <div class="pt-8 pl-8">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Liste des employés</h3>
        </div>

        <div class="mt-6 ">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($employes as $employe)
                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-3">
                                    <h3 class="text-gray-900 text-sm font-medium truncate">Login :
                                        {{ $employe->login }}</h3>
                                </div>
                                <p class="mt-1 text-gray-500 text-sm truncate">Pays : {{ $employe->pays }}</p>
                            </div>
                            <div>
                                <span wire:click="delete({{ $employe->id }})"
                                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Supprimer</span>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>


    </div>
</div>
