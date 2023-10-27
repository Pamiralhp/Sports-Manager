<nav x-data="{ open: false, darkModeEnabled: false }" class="bg-gray-800 text-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <!-- Logo and Dark Mode Toggle -->
        <div class="flex items-center">
            <button @click="darkModeEnabled = !darkModeEnabled" id="darkModeToggle" class="text-white hover:text-yellow-200 focus:outline-none">
                <i x-show="!darkModeEnabled" class="material-icons dark-mode-sun">wb_sunny</i>
                <i x-show="darkModeEnabled" class="material-icons dark-mode-moon" style="display: none;">nights_stay</i>
            </button>
            <span class="text-3xl font-bold ml-2">
                <span class="text-yellow-200">Sports</span> League
            </span>
        </div>

        <!-- Navigation Links -->
        <div class="flex space-x-4">
            @if (request()->is('teams*'))
                <x-nav-link :href="route('games.index')" :active="request()->routeIs('games.index')" class="inline-flex items-center px-4 py-2 rounded-md text-white  hover:bg-yellow-400 nav-link">
                    {{ __('View Games') }}
                </x-nav-link>
                <x-nav-link :href="route('teams.create')" :active="request()->routeIs('teams.create')" class="inline-flex items-center px-4 py-2 rounded-md text-white  hover:bg-yellow-400 nav-link">
                    {{ __('Create Team') }}
                </x-nav-link>
            @elseif (request()->is('games*'))
                <x-nav-link :href="route('teams.index')" :active="request()->routeIs('teams.index')" class="inline-flex items-center px-4 py-2 rounded-md text-white  hover:bg-yellow-400 nav-link">
                    {{ __('View Teams') }}
                </x-nav-link>
                <x-nav-link :href="route('games.create')" :active="request()->routeIs('games.create')" class="inline-flex items-center px-4 py-2 rounded-md text-white  hover:bg-yellow-400 nav-link">
                    {{ __('Create Game') }}
                </x-nav-link>
            @endif
        </div>
    </div>
</nav>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
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
