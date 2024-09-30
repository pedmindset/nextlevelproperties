<x-layout>
    <x-header class="h-screen">
        <x-nav>
            <a class ="flex h-full w-28 items-center border-r-2 border-gray-300 pr-10" href="/">
                <img src="{{ asset('images/nxtlevel_logo.jpeg') }}" alt="companylogo">
            </a>
            {{-- <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div> --}}
        </x-nav>

        <video class="absolute inset-0 -z-10 h-screen w-full object-cover" autoplay muted loop>
            <source src="{{ asset('Nxtlevel/abstract-loop-flowing-curve-white.mp4') }}" type="video/mp4">
        </video>
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto mt-12 flex max-w-7xl justify-between flex-wrap md:flex-nowrap px-10 py-14 md:px-10 lg:px-6">
                <div
                    class="w-full p-1 md:max-w-3xl text-4xl md:text-6xl lg:text-7xl font-light md:font-extralight uppercase leading-normal md:leading-tight lg:leading-tight tracking-wide text-blue1 ">
                    Unlocking Value Through Strategic Investments
                </div>
                <div class="flex justify-center mt-5 md:mt-0">
                    <button
                        class="flex items-center mt-3 py-3 max-h-24 px-8 md:px-10 rounded-full border-2 border-dashed border-black">
                        <div>
                            <p class="text-sm font-bold uppercase text-black md:text-base">partner<br/>
                            with us</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-blue2">
            <section class="mx-auto flex flex-col md:flex-row justify-center max-w-7xl gap-14 md:gap-36 px-8 py-32 pb-36">
                <div class="flex-shrink-0">
                    <img class="h-[218px] w-[183px]" src="{{ asset('images/nxtlevel_logo_white.png') }}" alt="">
                </div>
                <div class="space-y-10 text-white px-2">
                    <div class="text-2xl font-bold">
                        <p>WHO WE ARE</p>
                    </div>
                    <div class="max-w-2xl text-sm font-normal leading-6 tracking-wide">
                        <p>Next-Level Capital is a leading investment firm specializing in high-return opportunities
                            within the real estate and infrastructure sectors. Our deep market expertise, coupled with a
                            proven track record, makes us the ideal partner for investors seeking to maximize
                            returns while contributing to the growth of thriving communities.</p>
                    </div>
                    <x-button1 class="border-white">
                        Work with us
                    </x-button1>
                </div>
            </section>
        </div>
        <section class="mx-auto max-w-6xl px-8 flex flex-col justify-center py-48 pb-52">
            <div>
                <p class="text-6xl font-thin tracking-widest uppercase md:pl-5">Our Focus</p>
                <div>
                    <div class="flex justify-between flex-wrap md:flex-nowrap gap-y-20 gap-x-14 pt-14 text-black">
                        <div class="space-y-5">
                            <p class="px-6 text-3xl font-extrabold uppercase">real estate</p>
                            <div class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-700 p-10 ">
                                <p class="text-xl">We identify and invest in prime real estate assets with
                                    strong growth potential, including residential,
                                    commercial, and mixed-use properties.</p>
                                <button
                                    class="rounded-full border border-black px-10 py-2.5 text-sm font-semibold uppercase focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200"
                                    type="button">
                                    learn more
                                </button>
                            </div>
                        </div>
                        <div class="space-y-5">
                            <p class="px-6 text-3xl font-extrabold uppercase">infrastructure</p>
                            <div class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-700 p-10">
                                <p class="text-xl">We identify and invest in prime real estate assets with
                                    strong growth potential, including residential,
                                    commercial, and mixed-use properties.</p>
                                <button
                                    class="rounded-full border border-black px-10 py-2.5 text-sm font-semibold uppercase focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200"
                                    type="button">
                                    learn more
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full">
            <img class="h-[610px] w-full object-cover object-center"
                src="{{ asset('Nxtlevel/diverse-team-of-architects-working-with-smartphone-2023-11-27-05-13-45-utc.JPG') }}"
                alt="picture">
        </section>
        <section class="mx-auto max-w-6xl px-8 py-32">
            <div class="flex justify-between gap-x-4 gap-y-10 flex-wrap md:flex-nowrap">
                <div class="space-y-4">
                    <p class="text-xl font-bold tracking-wide">Why Choose Next-<br>Level Capital</p>
                    <div class="border-b-2 border-black"></div>
                </div>
                <div class="flex flex-col space-y-10">
                    <div class="flex space-x-10 text-sm">
                        <div>
                            <p><span class="font-bold">Proven Track Record:</span> Our history of<br> successful
                                investments speaks <br>for itself.</p>
                        </div>
                        <div>
                            <p><span class="font-bold">Strong Partnerships:</span> We collaborate<br> with industry
                                leaders to deliver <br>exceptional results</p>
                        </div>
                    </div>
                    <div class="flex space-x-10 text-sm">
                        <div>
                            <p><span class="font-bold">Proven Track Record:</span> Our history of<br> successful
                                investments speaks <br>for itself.</p>
                        </div>
                        <div>
                            <p><span class="font-bold">Strong Partnerships:</span> We collaborate<br> with industry
                                leaders to deliver <br>exceptional results</p>
                        </div>
                    </div>
                    <p class="max-w-lg text-sm">
                        By leveraging our expertise and strategic approach, we deliver superior returns while creating
                        sustainable value for our investors and the communities we serve.
                    </p>
                    <button
                        class="w-52 rounded-full border border-black px-10 py-2.5 text-sm font-semibold uppercase focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200"
                        type="button">
                        learn more
                    </button>
                </div>
            </div>
        </section>
        <section class="h-auto bg-black/60 bg-cover bg-center bg-blend-overlay"
            style="background-image: url('/images/edited\ copy.jpg');">
            <div class="mx-auto max-w-7xl px-8 py-32">
                <div class="flex max-w-xl flex-col space-y-16 text-white">
                    <div class="space-y-4">
                        <p class="text-xl font-bold">
                            Real Estate Financing:
                        </p>
                        <p class="text-sm leading-6">
                            We provide tailored financing solutions for
                            a wide range of real estate projects, including
                            residential, commercial, and mixed-use
                            developments. Our expertise in the real estate market allows us to structure deals that
                            maximize returns
                            while ensuring the success of the project.

                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xl font-bold">
                            Infrastructure Financing:
                        </p>
                        <p class="text-sm leading-6">
                            Infrastructure is the backbone of any thriving economy. We offer comprehensive
                            financing options for infrastructure projects, including
                            transportation, energy, water, and public facilities. Our focus is on supporting
                            developments that enhance connectivity, improve quality of life, and promote sustainable
                            growth.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xl font-bold">
                            Equity Investment:
                        </p>
                        <p class="text-sm leading-6">
                            At Next Level Capital, we believe in the power of partnerships. Our equity investment
                            solutions bring
                            together investors and developers to share in the success of
                            high-impact projects. We work closely with our partners to align
                            interests and ensure that each project achieves its full potential.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xl font-bold">
                            Public-Private Partnerships (PPP):
                        </p>
                        <p class="text-sm leading-6">
                            We specialize in facilitating public-private
                            partnerships that leverage the strengths of both
                            sectors to deliver large-scale infrastructure and
                            community development projects. Our expertise in structuring PPPs ensures that all
                            stakeholders benefit from the collaboration.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xl font-bold">
                            Sustainable Financing:
                        </p>
                        <p class="text-sm leading-6">
                            Sustainability is at the core of our approach. We prioritize financing for projects that
                            incorporate sustainable practices, from
                            green building techniques to renewable energy solutions. By supporting sustainable
                            development, we contribute to a healthier planet and more resilient communities.
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
