<x-layout>
    <x-header>
        <x-nav>
            <a href="/" class ="w-28 h-full flex items-center pr-10 border-r border-gray-300">
                <img src="{{ asset('images/nxtlevel_logo.jpeg') }}" alt="companylogo">
            </a>
              {{-- <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div> --}}
        </x-nav>

        <video autoplay muted loop class="absolute inset-0 w-full h-screen object-cover -z-10">
            <source src="{{asset('Nxtlevel/abstract-loop-flowing-curve-white.mp4')}}" type="video/mp4">
        </video>
        <div class="max-w-7xl mx-auto">
            <div class="flex max-w-4xl mx-auto mt-12 py-14">
                <div class="text-7xl uppercase font-thin text-blue1 leading-snug tracking-wide">
                    <p>
                        Unlocking Value
                    </p>
                    <p>
                        Through Strategic
                    </p>
                    <p>
                        Investments
                    </p>
                </div>
                <button class="uppercase text-black font-bold text-base border-dashed border-2 border-black w-36 h-20 rounded-full">
                    <div class="">
                        <p>partner</p>
                        <p>with us</p>
                    </div>
                </button>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-blue2">
            <section class="max-w-7xl mx-auto px-20 flex gap-36 items-center py-32">
                <div class="flex-shrink-0">
                    <img src="{{asset('images/nxtlevel_logo_white.png')}}" alt="" class="w-[183px] h-[218px]">
                </div>
                <div class="text-white space-y-10">
                    <div class="font-bold text-2xl">
                        <p>WHO WE ARE</p>
                    </div>
                    <div class="text-sm max-w-2xl font-normal tracking-wide leading-6">
                        <p>Next-Level Capital is a leading investment firm specializing in high-return opportunities within the real estate and infrastructure sectors. Our deep market expertise, coupled with a proven track record, makes us the ideal partner for investors seeking to maximize
                             returns while contributing to the growth of thriving communities.</p>
                    </div>
                    <x-button1 class="border-white ">
                        Work with us
                     </x-button1>
                </div>
            </section>
        </div>
        <section class="max-w-7xl mx-auto py-28 px-20">
            <div>
                <p class="font-thin font-font text-4xl tracking-widest">our focus</p>
                <div>
                    <div class="flex justify-between pt-14">
                        <div class="space-y-5">
                            <p class="uppercase font-bold text-base px-6">real estate</p>
                            <div class="border-l-2 border-b-2 border-dashed border-black px-6 py-6 space-y-7">
                                <p class="max-w-xs text-sm">We identify and invest in prime real estate assets with strong growth potential, including residential,
                                    commercial, and mixed-use properties.</p>
                                <button type="button" class="rounded-full px-10 py-2.5 text-sm font-semibold uppercase   border-black border   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200">
                                    learn more
                                </button>
                            </div>
                        </div>
                        <div class="space-y-5">
                            <p class="uppercase font-bold text-base px-6">infrastructure</p>
                            <div class="border-l-2 border-b-2 border-dashed border-black px-6 py-6 space-y-7">
                                <p class="max-w-xs text-sm">We identify and invest in prime real estate assets with strong growth potential, including residential,
                                    commercial, and mixed-use properties.</p>
                                    <button type="button" class="rounded-full px-10 py-2.5 text-sm font-semibold uppercase   border-black border   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200">
                                        learn more
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full">
            <img src="{{asset('Nxtlevel/diverse-team-of-architects-working-with-smartphone-2023-11-27-05-13-45-utc.JPG')}}" alt="picture" class="h-[610px] object-cover object-center w-full">
        </section>
        <section class="max-w-7xl mx-auto py-28 px-20">
            <div class="flex justify-between">
                <div class="space-y-4">
                    <p class="font-bold text-xl tracking-wide">Why Choose Next-<br>Level Capital</p>
                    <div class="border-b-2 border-black "></div>
                </div>
                <div class="flex flex-col space-y-10">
                    <div class="flex space-x-10 text-sm">
                        <div>
                            <p><span class="font-bold">Proven Track Record:</span> Our history of<br> successful investments speaks <br>for itself.</p>
                        </div>
                        <div>
                            <p><span class="font-bold">Strong Partnerships:</span>  We collaborate<br> with industry leaders to deliver  <br>exceptional results</p>
                        </div>
                    </div>
                    <div class="flex space-x-10 text-sm">
                        <div>
                            <p><span class="font-bold">Proven Track Record:</span> Our history of<br> successful investments speaks <br>for itself.</p>
                        </div>
                        <div>
                            <p><span class="font-bold">Strong Partnerships:</span>  We collaborate<br> with industry leaders to deliver  <br>exceptional results</p>
                        </div>
                    </div>
                    <p class="text-sm max-w-lg">
                    By leveraging our expertise and strategic approach, we deliver superior returns while creating sustainable value for our investors and the communities we serve.
                    </p>
                    <button type="button" class="rounded-full px-10 py-2.5 text-sm font-semibold uppercase   border-black border w-52  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200">
                            learn more
                    </button>
                </div>
            </div>
        </section>
        <section class="bg-cover bg-center h-[1150px] bg-blend-overlay bg-black/60" style="background-image: url('/images/edited\ copy.jpg');">
            <div class="max-w-7xl px-20 mx-auto py-24">
                <div class="flex flex-col text-white max-w-xl space-y-16">
                    <div class="space-y-4">
                        <p class="font-bold text-xl">
                            Real Estate Financing:
                        </p>
                        <p class="text-sm leading-6">
                        We provide tailored financing solutions for
                         a wide range of real estate projects, including
                          residential, commercial, and mixed-use
                           developments. Our expertise in the real estate market allows us to structure deals that maximize returns
                            while ensuring the success of the project.

                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="font-bold text-xl">
                            Infrastructure Financing:
                        </p>
                        <p class="text-sm leading-6">
                            Infrastructure is the backbone of any thriving economy. We offer comprehensive
                            financing options for infrastructure projects, including
                            transportation, energy, water, and public facilities. Our focus is on supporting developments that enhance connectivity, improve quality of life, and promote sustainable growth.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="font-bold text-xl">
                            Equity Investment:
                        </p>
                        <p class="text-sm leading-6">
                            At Next Level Capital, we believe in the power of partnerships. Our equity investment solutions bring
                            together investors and developers to share in the success of
                            high-impact projects. We work closely with our partners to align
                            interests and ensure that each project achieves its full potential.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="font-bold text-xl">
                            Public-Private Partnerships (PPP):
                        </p>
                        <p class="text-sm leading-6">
                        We specialize in facilitating public-private
                        partnerships that leverage the strengths of both
                         sectors to deliver large-scale infrastructure and
                         community development projects. Our expertise in structuring PPPs ensures that all stakeholders benefit from the collaboration.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="font-bold text-xl">
                         Sustainable Financing:
                        </p>
                        <p class="text-sm leading-6">
                            Sustainability is at the core of our approach. We prioritize financing for projects that incorporate sustainable practices, from
                             green building techniques to renewable energy solutions. By supporting sustainable development, we contribute to a healthier planet and more resilient communities.
                        </p>
                    </div>
                </div>
            </div>
        </section>
       <x-section>
           <p>Fueling Visions <br>with Strategic<br> Capital</p>
           <x-button2>
           <div class="">
                <p>partner</p>
                <p>with us</p>
            </div>
           </x-button2>
       </x-section>
    </main>
</x-layout>

