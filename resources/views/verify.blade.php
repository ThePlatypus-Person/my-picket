<x-app-layout>
    <div class="py-20 px-12">
        <div class="flex gap-5 items-center mb-5">
            <h1 class="font-inter scroll-m-20 text-3xl font-extrabold tracking-tight lg:text-4xl">
                Verify
            </h1>

            <input id="datepicker" type="date">
        </div>


        <script>
                const datePicker = document.querySelector('#datepicker');
                datePicker.addEventListener('change', (e) => {
                    console.log(e.target.value);
                });
        </script>


        <div class="justify-center w-full">

            <div
                class="p-5 w-full bg-white rounded-xl border-2 border-gray-100 shadow duration-200">
                <h3 class="font-inter scroll-m-20 text-2xl font-semibold tracking-tight mb-4">
                    Fri, 28 June 2024
                </h3>

                <div
                class="relative overflow-x-auto shadow border-2 border-gray-200 sm:rounded-lg duration-200">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Duty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr
                                class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Michael Chan
                                </th>
                                <td class="px-6 py-4">
                                    3 hours
                                </td>
                                <td class="px-6 py-4">
                                    <button onclick=""
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
                                </td>
                            </tr>

                            <tr
                                class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Nanda Goaw Putra
                                </th>
                                <td class="px-6 py-4">
                                    Missed
                                </td>
                                <td class="px-6 py-4">
                                    <button onclick=""
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
                                </td>
                            </tr>

                            <tr
                                class="odd:bg-white even:bg-gray-50 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Yudo Alfariszi
                                </th>
                                <td class="px-6 py-4">
                                    2 hours
                                </td>
                                <td class="px-6 py-4">
                                    <button onclick=""
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
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        
        
            </div>
            </div>

        </div>
    </div>
</x-app-layout>
