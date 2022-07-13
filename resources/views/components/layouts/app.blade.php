<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mon app</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

</head>

<body class="h-full">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>

            <div>
                <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
                <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
                    <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

                    <div class="fixed inset-0 flex z-40">
                        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
                        <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-700">
                            <!--
            Close button, show/hide based on off-canvas menu state.

            Entering: "ease-in-out duration-300"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-300"
              From: "opacity-100"
              To: "opacity-0"
          -->
                            <div class="absolute top-0 right-0 -mr-12 pt-2">
                                <button type="button"
                                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                                    <span class="sr-only">Close sidebar</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex-shrink-0 flex items-center px-4">
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                                    alt="Workflow">
                            </div>
                            <div class="mt-5 flex-1 h-0 overflow-y-auto">
                                <nav class="px-2 space-y-1">
                                    <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->

                                    <a href="{{ route('Employés') }}"
                                        class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <!-- Heroicon name: outline/users -->
                                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                        Employés
                                    </a>

                                    <a href="{{ route('Besoins') }}"
                                        class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                        <!-- Heroicon name: outline/folder -->
                                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                        </svg>
                                        Besoins
                                    </a>
                                </nav>
                            </div>
                        </div>

                        <div class="flex-shrink-0 w-14" aria-hidden="true">
                            <!-- Dummy element to force sidebar to shrink to fit close icon -->
                        </div>
                    </div>
                </div>

                <!-- Static sidebar for desktop -->
                <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <div class="flex flex-col flex-grow pt-5 bg-indigo-700 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                                alt="Workflow">
                        </div>
                        <div class="mt-5 flex-1 flex flex-col">
                            <nav class="flex-1 px-2 pb-4 space-y-1">
                                <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                                <a href="{{ route('Employés') }}"
                                    class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                    <!-- Heroicon name: outline/users -->
                                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    Employés
                                </a>

                                <a href="{{ route('Besoins') }}"
                                    class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                    <!-- Heroicon name: outline/folder -->
                                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                    </svg>
                                    Besoins
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="md:pl-64 flex flex-col flex-1">
                    <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
                        <button type="button"
                            class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                            <span class="sr-only">Open sidebar</span>
                            <!-- Heroicon name: outline/menu-alt-2 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </button>
                        <div class="flex-1 px-4 flex justify-between">
                            <div class="flex-1 flex">
                                {{-- <form class="w-full flex md:ml-0" action="#" method="GET">
              <label for="search-field" class="sr-only">Search</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                  <!-- Heroicon name: solid/search -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
              </div>
            </form> --}}
                            </div>
                            <div class="ml-4 flex items-center md:ml-6">
                                {{-- <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button> --}}

                                <!-- Profile dropdown -->
                                <div class="ml-3 relative">
                                    <div>
                                        {{-- <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button> --}}
                                    </div>

                                    <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <main>
                        <div class="py-6">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <h1 class="text-2xl font-semibold text-gray-900">{{ Route::currentRouteName() }}</h1>
                            </div>
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                                <!-- Replace with your content -->
                                <div class="py-4">

                                        {{ $slot }}

                                </div>
                                <!-- /End replace -->
                            </div>
                        </div>
                    </main>
                </div>
            </div>



            @livewireScripts

</body>

</html>
