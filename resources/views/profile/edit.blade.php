<x-app-layout>
    <div class="py-20 px-12">
        <h1 class="font-inter scroll-m-20 text-3xl font-extrabold tracking-tight lg:text-4xl">
            Profile
        </h1>

        <div class=" mt-5 flex flex-wrap gap-20">
            <div class="p-4 bg-white rounded-lg border-2 border-gray-100 shadow focus-within:shadow-xl focus-within:bg-blue-50 hover:shadow-xl hover:bg-blue-50 duration-200">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg border-2 border-gray-100 shadow focus-within:shadow-xl focus-within:bg-violet-50 hover:shadow-xl hover:bg-violet-50 duration-200">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg border-2 border-gray-100 shadow focus-within:shadow-xl focus-within:bg-red-50 hover:shadow-xl hover:bg-red-50 duration-200">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
    </div>
</x-app-layout>
