<x-layout>
    <x-header style="background-image: url('{{ asset('Nxtlevel/curve_copy.jpg') }}')" class="bg-cover md:bg-contain bg-no-repeat bg-right-top h-full md:h-[80vh] py-16">
        <x-nav>
            <a class ="flex h-full w-28 items-center border-r-2 border-gray-300 pr-10" href="/">
                <img src="{{ asset('images/nxtlevel_logo.jpeg') }}" alt="companylogo">
            </a>
            {{-- <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div> --}}
        </x-nav>
        {{-- <div  class="absolute inset-0 -z-10 w-full h-full object-cover">
            <img class="object-cover" src="" alt="">
        </div> --}}
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto mt-12 flex max-w-7xl px-8 py-12">
                <div class="space-y-7">
                    <p class="text-4xl font-light md:text-5xl">NEXT LEVEL CAPITAL</p>
                    <div class="max-w-3xl space-y-8 font-bold text-gray-900 text-lg">
                        <p>Trusted partner in financing the future of real estate and infrastructure. With a deep
                            commitment to fostering growth and development, we provide innovative financial solutions
                            that
                            empower projects across the USA and Africa.
                        </p>
                        <p>Our mission is to fuel progress by bridging the gap between vision and reality, delivering
                            the
                            capital that drives impactful and sustainable development.
                        </p>
                        <x-dash />
                    </div>
                    <x-button1 class="border-black">
                        Work with us
                    </x-button1>
                </div>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-white">
            <section class="mx-auto max-w-7xl gap-36 pt-16 pb-24">
                <div class="flex items-center flex-wrap lg:flex-nowrap">
                    <img class="h-auto w-full lg:w-[780px] object-cover"
                        src="{{ asset('images/team-in-portrait-diversity-and-business-people-in-2023-11-27-05-35-15-utc 1.png') }}"
                        alt="">
                    <div class="lg:-ml-8 space-y-5 w-full lg:max-w-sm bg-teal-400 px-7 py-8 lg:py-4">
                        <p class="text-3xl font-light text-gray-700">
                            Empowering growth through strategic capital solutions
                        </p>
                        <div class="w-20 border-b border-black"></div>
                        <div class="pt-3">
                            <x-button1 class="border-black text-sm font-bold text-gray-700">
                                PARTNER WITH US
                            </x-button1>
                        </div>
                    </div>
                </div>
                <div class="mt-12 space-y-4">
                    <p class="text-2xl font-bold">Who We Are</p>
                    <div class="space-y-4 text-lg font-normal">
                        <p>Next Level Capital is a leading financial firm specializing in the development of real estate
                            and infrastructure projects. Our expertise spans across continents, with a focus on the USA
                            and Africa, where we collaborate with <span class="font-bold">developers,</span> <span
                                class="font-bold">investors,</span> and
                            <span class="font-bold">governments</span> to bring transformative projects to life.
                        </p>
                        <p>
                            Whether it's a residential community, commercial complex, or large-scale infrastructure, we
                            are dedicated to supporting initiatives that contribute to economic growth and social
                            advancement.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <div class="bg-gray-100">
            <section class="mx-auto max-w-7xl px-8 py-32 pb-36">
                <div>
                    <p class="text-4xl font-thin tracking-widest">Our Partners</p>
                    <div>
                        <div class="flex justify-between flex-wrap md:flex-nowrap gap-10 pt-14">
                            <div class="space-y-5">
                                <p class="px-6 text-base font-bold uppercase">INVESTORS</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-sm">We connect investors with carefully vetted real estate
                                        and infrastructure projects that align with their investment goals, whether
                                        they’re seeking stable income, capital appreciation, or strategic
                                        diversification.</p>
                                    <p class="max-w-md text-sm">We understand that each investor has unique objectives.
                                        Our team develops customized investment strategies that maximize returns while
                                        managing risks, ensuring that our investors achieve their financial goals.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-6 text-base font-bold uppercase">governments</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-sm">We specialize in structuring public-private partnerships
                                        that leverage the strengths of both sectors. Our PPP models are designed to
                                        deliver essential infrastructure that benefit the public while providing returns
                                        for private investors.</p>
                                    <p class="max-w-md text-sm">We provide financing for large-scale infrastructure
                                        projects, including transportation, energy, water, and public facilities. Our
                                        focus is on supporting projects that enhance connectivity, improve quality of
                                        life, and promote sustainable growth.</p>

                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between  flex-wrap md:flex-nowrap gap-10 pt-14">
                            <div class="space-y-5">
                                <p class="px-6 text-base font-bold uppercase">DEVELOPERS</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-sm"> From construction loans to equity investments, we offer
                                        a range of financing options tailored to the needs of developers. Our flexible
                                        solutions ensure that projects are fully funded from start to finish.</p>
                                    <p class="max-w-md text-sm">Our team brings deep expertise in real estate and
                                        infrastructure development. We work alongside developers to provide strategic
                                        insights, market analysis, and financial structuring that enhance project
                                        outcomes.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-6 text-base font-bold uppercase">COMMUNITIES</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-sm">We prioritize projects that address the needs and
                                        aspirations of local communities. From affordable housing to public amenities,
                                        our developments are designed to create inclusive, vibrant communities.</p>
                                    <p class="max-w-md text-sm">We are committed to sustainability in all our projects.
                                        We work with communities to implement green building practices, energy-efficient
                                        designs, and environmentally responsible solutions that contribute to long-term
                                        resilience.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <x-section>
            <p>Let’s Build the <br>Future Together</p>
            <x-button2>
                <div class="">
                    <p>partner</p>
                    <p>with us</p>
                </div>
            </x-button2>
        </x-section>
    </main>
</x-layout>
