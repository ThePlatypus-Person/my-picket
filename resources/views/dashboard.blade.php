<x-app-layout>
    <div class="py-20 px-12">
        <x-slot name="userRole">{{ $userRole }}</x-slot>

        <h1 class="font-inter scroll-m-20 text-3xl font-extrabold tracking-tight lg:text-4xl mb-5">
            Hello, {{ explode(' ', Auth::user()->name)[0] }}
        </h1>

        <a href="profile">
            <div class="p-4 border-b-gray-900 border-b hover:shadow-lg duration-200 hover:bg-blue-50">
                <h2 class="font-inter pb-2 text-3xl font-semibold tracking-tight first:mt-0">
                    Profile
                </h2>
                <p class="font-inter leading-7">
                    View and edit your account information.
                </p>
            </div>
        </a>

        <a href="my-picket">
            <div class="p-4 border-b-gray-900 border-b hover:shadow-lg duration-200 hover:bg-blue-50">
                <h2 class="font-inter pb-2 text-3xl font-semibold tracking-tight first:mt-0">
                    My Picket
                </h2>
                <p class="font-inter leading-7">
                    Check out your own personal picket duty schedule.
                </p>
            </div>
        </a>

        @if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'scheduler') 
        <a href="schedule">
            <div class="p-4 border-b-gray-900 border-b hover:shadow-lg duration-200 hover:bg-blue-50">
                <h2 class="font-inter pb-2 text-3xl font-semibold tracking-tight first:mt-0">
                    Schedule
                </h2>
                <p class="font-inter leading-7">
                    Modify the daily picket schedule.
                </p>
            </div>
        </a>

        <a href="verify">
            <div class="p-4 border-b-gray-900 border-b hover:shadow-lg duration-200 hover:bg-blue-50">
                <h2 class="font-inter pb-2 text-3xl font-semibold tracking-tight first:mt-0">
                    Verify
                </h2>
                <p class="font-inter leading-7">
                    Verify that staffs have actually done their picket duty.
                </p>
            </div>
        </a>
        @endif

        @if (Auth::user()->role->name == 'admin') 
        <a href="accounts">
            <div class="p-4 border-b-gray-900 border-b hover:shadow-lg duration-200 hover:bg-blue-50">
                <h2 class="font-inter pb-2 text-3xl font-semibold tracking-tight first:mt-0">
                    Accounts
                </h2>
                <p class="font-inter leading-7">
                    Manage all user accounts.
                </p>
            </div>
        </a>
        @endif


    </div>
</x-app-layout>
