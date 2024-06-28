<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-inter capitalize px-4 py-2 bg-slate-950 rounded-md font-semibold text-xs text-white hover:bg-gray-800 focus:bg-gray-800 active:bg-gray-900 duration-150']) }}>
    {{ $slot }}
</button>
