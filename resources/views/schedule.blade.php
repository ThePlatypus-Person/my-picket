<x-app-layout>
    <div class="py-20 px-12">
        <div class="flex gap-5 items-center mb-5">
            <h1 class="font-inter scroll-m-20 text-3xl font-extrabold tracking-tight lg:text-4xl">
                Schedule
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
                class="p-5 w-[50%] bg-white rounded-xl border-2 border-gray-100 shadow focus-within:shadow-xl hover:shadow-xl duration-200">
                <h3 class="font-inter scroll-m-20 text-2xl font-semibold tracking-tight mb-4">
                    {{ $dateList[3]->format('D, j F Y') }}
                </h3>

                <div class="flex gap-3">
                    <div class="border-2 border-slate-300 p-4 rounded flex-1">
                        <h4 class="font-inter scroll-m-20 text-xl font-semibold tracking-tight mb-3">
                            Person in Charge
                        </h4>
                        <p class="font-inter">Michael Chan</p>
                    </div>

                    <div class="border-2 border-slate-300 p-4 rounded flex-1">
                        <h4 class="font-inter scroll-m-20 text-xl font-semibold tracking-tight mb-3">
                            Picket Staff
                        </h4>
                        <p class="font-inter">Yudo Alfariszi</p>
                        <p class="font-inter">Nanda Goaw Putra</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
