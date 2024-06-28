<nav x-data="{ open: false }" class="backdrop-blur fixed w-full border-b border-b-gray-400">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-black" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="w-full text-gray-100 gap-8 items-center sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        {{ __('Profile') }}
                    </x-nav-link>

                    <x-nav-link :href="route('my picket')" :active="request()->routeIs('my picket')">
                        {{ __('My Picket') }}
                    </x-nav-link>

                    @if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'scheduler') 
                        <x-nav-link :href="route('schedule')" :active="request()->routeIs('schedule')">
                            {{ __('Schedule') }}
                        </x-nav-link>

                        <x-nav-link :href="route('verify')" :active="request()->routeIs('verify')">
                            {{ __('Verify') }}
                        </x-nav-link>
                    @endif

                    @if (Auth::user()->role->name == 'admin') 
                    <x-nav-link :href="route('accounts.index')" :active="request()->routeIs('accounts.index')">
                        {{ __('Accounts') }}
                    </x-nav-link>
                    @endif

                    <form class="ml-auto" method="POST" action="{{ route('logout') }}">
                            @csrf
                        <x-nav-link :href="route('logout')" 
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        {{ __('Log Out') }}
                        </x-nav-link>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

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
