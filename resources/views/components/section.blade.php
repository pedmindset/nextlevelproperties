<section class="w-full">
            <div {{$attributes->merge(['class'=>'max-w-7xl mx-auto h-[500px] px-20 py-24 flex justify-between text-5xl font-bold items-center leading-snug'])}} 
               {{$slot}}
                <button class="uppercase text-black font-bold text-base  border-2 border-black w-36 h-20 rounded-full">
                    <div class="">
                        <p>partner</p>
                        <p>with us</p>
                    </div>
                </button>
            </div>
        </section>