<x-app-layout>
    <div class="py-20 px-12">
        <h1 class="font-inter scroll-m-20 text-3xl font-extrabold tracking-tight lg:text-4xl mb-5">
            Accounts
        </h1>

        {{--
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
    </div>
    @endif
    --}}


    <div
        class="relative overflow-x-auto shadow hover:shadow-lg focus-within:shadow-lg border-2 border-gray-200 sm:rounded-lg duration-200">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($userList as $user)
                    <tr
                        class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user['name'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user['email'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['role_name'] }}
                        </td>

                        @if(Auth::user()->email !== $user['email'])
                            <td class="px-6 py-4">
                                <button onclick="toggleModal('editModal{{ $user['id'] }}')"
                                    type="button"
                                    class="bg-white border-2 hover:shadow-lg focus:shadow-lg duration-200 border-gray-300 font-inter p-2 rounded-full text-white">
                                    <svg class="w-6 h-6 text-slate-700" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>


                                <button onclick="toggleModal('deleteModal{{ $user['id'] }}')"
                                    type="button"
                                    class="bg-white border-2 hover:shadow-lg focus:shadow-lg duration-200 border-gray-300 font-inter p-2 rounded-full text-white"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $user['id'] }}">
                                    <svg class="w-6 h-6 text-slate-700" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        @else
                            <td></td>
                        @endif
                    </tr>

    <!-- Edit Modal -->
    <div id="editModal{{ $user['id'] }}"
        class="fixed z-10 inset-0 hidden backdrop-blur duration-200 w-screen h-screen justify-center items-center">
        <div class="bg-white mx-auto rounded-lg shadow-lg p-8">
            <h3 class="font-inter scroll-m-20 mb-5 text-2xl font-semibold tracking-tight">
                Edit Role for {{ $user['name'] }}
            </h3>

            <form class="flex flex-col gap-5"
                action="{{ route('accounts.updateRole', $user['id']) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="role_id" class="font-inter text-sm font-medium leading-none">Select Role:</label>
                    <select id="role_id" name="role_id"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        @foreach($roles as $role)
                            <option class="font-inter" value="{{ $role->id }}"
                                {{ $user['role_id'] == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end gap-4">
                    <x-secondary-button type="button"
                        onclick="toggleModal('editModal{{ $user['id'] }}')">Cancel
                    </x-secondary-button>
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Modal -->

    <!-- Delete Modal -->
    <div id="deleteModal{{ $user['id'] }}"
    class="hidden fixed z-10 inset-0 overflow-y-auto backdrop-blur duration-200 w-screen h-screen justify-center items-center flex-col">
        <form method="POST" 
        action="{{ route('users.forceDelete', $user['id']) }}"
        class="p-6">
            @csrf
            @method('delete')

            <h3 class="font-inter scroll-m-20 mb-5 text-2xl font-semibold tracking-tight">
                Are you sure you want to delete the account {{ $user['name'] }} ?
            </h3>

            <div class="mt-6 flex justify-end">
                <x-secondary-button type="button"
                    onclick="toggleModal('deleteModal{{ $user['id'] }}')">Cancel
                </x-secondary-button>

                <x-danger-button class="ms-3" type="submit">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </div>
    <!-- Delete Modal -->
                @endforeach
            </tbody>
        </table>
    </div>



    <script>
        function toggleModal(modalId) {
            console.log(modalId);
            const modal = document.getElementById(modalId);
            console.log(modal);
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }
    </script>


    </div>
</x-app-layout>