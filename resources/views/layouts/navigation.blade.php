@vite(['resources/css/layout-css/nav-top-bar.css'])
<nav class="bg-[rgb(181, 233, 255)] backdrop-blur-[5px] shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Left Side - Logo and Dashboard -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('dashboard') }}" class="text-[rgb(0,41,89)] font-medium">
                        <img src="{{ asset('build/assets/imgs/pm-logo.png') }}" alt="PokeDex Logo" class="block h-9 w-auto">
                    </a>
                </div>
                
                <!-- Dashboard Link with 20px left margin -->
                <div class="ml-10 d-link"> 
                    <a href="{{ route('dashboard') }}" class="nav-link @if(request()->routeIs('dashboard')) x-nav-link-active @endif">
                        {{ __('pokedex') }}
                    </a>
                </div>
                <div class="ml-5 d-link pokemon-dropdown @if(request()->routeIs('create') || request()->routeIs('edit')) active-dropdown @endif">
                    <a class="nav-link @if(request()->routeIs('create') || request()->routeIs('edit')) x-nav-link-active @endif">
                        {{ __('mypokemon') }}
                    </a>
                    <div class="pokemon-dropdown-content">
                        <x-nav-link :href="route('create')" :active="request()->routeIs('create')" class="pokemon-dropdown-link">
                            {{ __('Create') }}
                        </x-nav-link>
                        <x-nav-link :href="route('edit')" :active="request()->routeIs('edit')" class="pokemon-dropdown-link">
                            {{ __('Edit') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Right Side - User Menu -->
            <div class="flex items-center space-x-4">
                <!-- Settings Dropdown -->
                <div class="relative ml-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button  style="font-size: 13px;" class="flex items-center px-3 py-2 text-sm rounded-md text-[rgb(0,41,89)] bg-[rgba(144,192,246,0.28)] border border-[rgba(255,255,255,0.2)] backdrop-blur-[3px] hover:bg-transparent hover:text-white hover:border-[rgba(255,255,255,0.3)] transition-all">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Add a custom class to the dropdown content -->
                            <div class="custom-dropdown-content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Mobile menu button -->
                <div class="sm:hidden flex items-center ml-2">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-[rgb(0,41,89)] hover:text-white focus:outline-none transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-[rgba(53,196,255,0.4)] backdrop-blur-[5px]">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="responsive-nav-link">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-4 pb-3 border-t border-[rgba(0, 247, 255, 0.25)] px-4">
            <div class="flex items-center">
                <div>
                    <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-white/80">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer for fixed nav -->
<div class="h-16"></div>