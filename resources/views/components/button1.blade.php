<button {{ $attributes->merge(['class' => 'uppercase border rounded-full font-bold']) }}>
    <p class="px-14 py-3">
        {{ $slot }}
    </p>
</button>