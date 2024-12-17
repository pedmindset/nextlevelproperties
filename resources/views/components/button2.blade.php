<a href="{{ $href ?? '#' }}">
    <button {{$attributes -> merge(['class'=>'uppercase text-black mt-5 font-bold text-base  border-2 border-black w-36 h-20 rounded-full'])}}>
        {{$slot}}
    </button>
</a>
