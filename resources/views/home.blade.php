<x-layout>
    <x-header class="h-screen pb-24 relative overflow-hidden">
        <x-nav>
            <a class="flex h-full w-28 items-center border-r-2 border-gray-300 pr-10" href="{{ route('home') }}">
                <img src="{{ asset('images/nextLevel_logo.png') }}" alt="Next Level Capital">
            </a>
        </x-nav>

        <video class="absolute inset-0 -z-10 h-screen w-full object-cover" autoplay muted loop>
            <source src="{{ asset('Nxtlevel/abstract-loop-flowing-curve-white.mp4') }}" type="video/mp4">
        </video>

        <!-- Subtle gradient overlay for better text readability -->
        <div class="absolute inset-0 -z-5 bg-gradient-to-b from-white/30 via-transparent to-white/50"></div>

        <div class="mx-auto max-w-7xl relative">
            <div
                class="mx-auto mt-16 flex max-w-7xl justify-between flex-wrap md:flex-nowrap px-10 py-14 md:px-10 lg:px-6">
                <div class="w-full p-1 md:max-w-3xl">
                    <span
                        class="inline-block mb-4 text-sm font-semibold tracking-[0.3em] text-blue1/70 uppercase">Investment
                        Excellence</span>
                    <h1
                        class="text-4xl md:text-6xl lg:text-7xl font-light md:font-extralight uppercase leading-normal md:leading-tight lg:leading-tight tracking-wide text-blue1">
                        Unlocking Value Through Strategic Investments
                    </h1>
                    <div class="mt-8 h-1 w-24 bg-gradient-to-r from-blue1 to-blue1/30"></div>
                </div>
                <div class="flex flex-col items-center justify-center mt-8 md:mt-0">
                    <button onclick="window.location.href='{{ route('contact') }}'"
                        class="group flex items-center py-4 max-h-24 px-10 md:px-12 rounded-full border-2 border-dashed border-black hover:border-solid hover:bg-black hover:text-white transition-all duration-300">
                        <div class="text-center">
                            <p
                                class="text-sm font-bold uppercase text-black group-hover:text-white md:text-base tracking-wider">
                                partner<br />with us</p>
                        </div>
                    </button>
                    <p class="mt-4 text-xs text-gray-500 tracking-wide">Start your journey today</p>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center animate-bounce">
            <span class="text-xs text-gray-500 tracking-widest uppercase mb-2">Scroll</span>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </div>
    </x-header>

    <main class="w-full">
        <!-- Who We Are Section -->
        <div class="bg-blue2 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2">
            </div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2">
            </div>

            <section
                class="mx-auto flex flex-col md:flex-row justify-center max-w-7xl gap-14 md:gap-36 px-8 pt-44 pb-48 relative">
                <div class="flex-shrink-0 relative">
                    <div class="h-[258px] w-[270px] bg-white rounded-lg flex items-center justify-center">
                        <img class="h-[218px] w-[183px] relative" src="{{ asset('images/nextLevel_logo.png') }}" alt="">
                    </div>
                </div>
                <div class="space-y-10 text-white px-2">
                    <div>
                        <span class="text-sm font-medium tracking-[0.3em] text-white/60 uppercase">About Us</span>
                        <p class="text-3xl font-bold mt-2 tracking-wide">WHO WE ARE</p>
                        <div class="mt-4 h-1 w-16 bg-gradient-to-r from-white to-white/30"></div>
                    </div>
                    <div class="max-w-2xl text-lg font-normal leading-8 tracking-wide text-white/90">
                        <p>Next-Level Capital is a leading investment firm specializing in high-return opportunities
                            within the real estate and infrastructure sectors. Our deep market expertise, coupled with a
                            proven track record, makes us the ideal partner for investors seeking to maximize
                            returns while contributing to the growth of thriving communities.</p>
                    </div>
                    <x-button1 class="border-white hover:bg-white hover:text-blue2 transition-all duration-300"
                        href="{{ route('contact') }}">
                        Work with us
                    </x-button1>
                </div>
            </section>
        </div>

        <!-- Our Focus Section -->
        <section class="mx-auto max-w-6xl px-8 flex flex-col justify-center pt-48 pb-56 relative">
            <!-- Background decoration -->
            <div
                class="absolute top-20 right-0 text-[200px] font-bold text-gray-100/50 -z-10 select-none tracking-tighter">
                FOCUS</div>

            <div>
                <div class="md:pl-5">
                    <span class="text-sm font-semibold tracking-[0.3em] text-gray-400 uppercase">What We Do</span>
                    <p class="text-5xl md:text-6xl font-thin tracking-widest uppercase mt-2">Our Focus</p>
                    <div class="mt-6 h-1 w-20 bg-gradient-to-r from-black to-gray-300"></div>
                </div>
                <div>
                    <div class="flex justify-between flex-wrap md:flex-nowrap gap-y-20 gap-x-14 pt-16 text-black">
                        <div class="space-y-5 group flex-1">
                            <p class="px-6 text-3xl font-extrabold uppercase tracking-tight">real estate</p>
                            <div
                                class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-700 p-10 group-hover:border-solid group-hover:bg-gray-50 transition-all duration-300">
                                <div class="w-12 h-12 rounded-full bg-blue2/10 flex items-center justify-center mb-6">
                                    <svg class="w-6 h-6 text-blue2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-xl leading-relaxed">We identify and invest in prime real estate assets
                                    with
                                    strong growth potential, including residential,
                                    commercial, and mixed-use properties.</p>
                                <button onclick="window.location.href='{{ route('real-estate') }}'"
                                    class="rounded-full border-2 border-black px-10 py-3 text-sm font-semibold uppercase hover:bg-black hover:text-white transition-all duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200"
                                    type="button">
                                    learn more
                                </button>
                            </div>
                        </div>
                        <div class="space-y-5 group flex-1">
                            <p class="px-6 text-3xl font-extrabold uppercase tracking-tight">infrastructure</p>
                            <div
                                class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-700 p-10 group-hover:border-solid group-hover:bg-gray-50 transition-all duration-300">
                                <div class="w-12 h-12 rounded-full bg-blue2/10 flex items-center justify-center mb-6">
                                    <svg class="w-6 h-6 text-blue2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-xl leading-relaxed">We identify and invest in prime real estate assets
                                    with
                                    strong growth potential, including residential,
                                    commercial, and mixed-use properties.</p>
                                <button onclick="window.location.href='{{ route('infrastructure') }}'"
                                    class="rounded-full border-2 border-black px-10 py-3 text-sm font-semibold uppercase hover:bg-black hover:text-white transition-all duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-200"
                                    type="button">
                                    learn more
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Full-width Image Section -->
        <section class="w-full relative">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent z-10"></div>
            <img class="h-[80vh] w-full object-cover object-right"
                src="{{ asset('Nxtlevel/diverse-team-of-architects-working-with-smartphone-2023-11-27-05-13-45-utc.JPG') }}"
                alt="picture">
            <div class="absolute bottom-10 left-10 z-20 text-white">
                <p class="text-sm tracking-[0.3em] uppercase opacity-80">Building Tomorrow</p>
                <p class="text-3xl font-light mt-2">Excellence in Every Investment</p>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="bg-gradient-to-b from-white via-gray-50 to-white">
            <div class="mx-auto max-w-7xl px-8 py-36">
                <div class="flex justify-between gap-x-16 gap-y-14 flex-wrap lg:flex-nowrap">
                    <div class="space-y-8 lg:sticky lg:top-32 lg:self-start lg:max-w-sm">
                        <div>
                            <span
                                class="inline-block text-sm font-semibold tracking-[0.3em] text-teal-600 uppercase mb-4">Our
                                Advantage</span>
                            <h2 class="text-4xl md:text-5xl font-light tracking-wide leading-tight text-gray-900">
                                Why Choose <br><span class="font-bold">Next-Level Capital</span>
                            </h2>
                            <div class="mt-6 h-1 w-24 bg-gradient-to-r from-teal-500 to-teal-500/30"></div>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">Discover what sets us apart in the investment
                            landscape and why leading partners trust us with their capital.</p>
                        <button onclick="window.location.href='{{ route('about') }}'"
                            class="group inline-flex items-center gap-3 rounded-full border-2 border-gray-900 px-8 py-4 text-sm font-semibold uppercase hover:bg-gray-900 hover:text-white transition-all duration-300">
                            About Us
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-8 max-w-2xl flex-1">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div
                                class="group relative p-8 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-teal-200 transition-all duration-500 overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-teal-50 to-transparent rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-500">
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center mb-6 shadow-lg shadow-teal-500/20">
                                        <span class="text-white font-bold text-lg">01</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Proven Track Record</h3>
                                    <p class="text-gray-600 leading-relaxed">Our history of successful investments
                                        speaks for itself, delivering consistent returns.</p>
                                </div>
                            </div>
                            <div
                                class="group relative p-8 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-blue2/30 transition-all duration-500 overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue2/10 to-transparent rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-500">
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue2 to-blue2/80 flex items-center justify-center mb-6 shadow-lg shadow-blue2/20">
                                        <span class="text-white font-bold text-lg">02</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Strong Partnerships</h3>
                                    <p class="text-gray-600 leading-relaxed">We collaborate with industry leaders to
                                        deliver exceptional results for all stakeholders.</p>
                                </div>
                            </div>
                            <div
                                class="group relative p-8 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-amber-200 transition-all duration-500 overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-50 to-transparent rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-500">
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center mb-6 shadow-lg shadow-amber-500/20">
                                        <span class="text-white font-bold text-lg">03</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Team</h3>
                                    <p class="text-gray-600 leading-relaxed">Our seasoned professionals bring decades of
                                        combined experience to every project.</p>
                                </div>
                            </div>
                            <div
                                class="group relative p-8 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-500 overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-emerald-50 to-transparent rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 transition-transform duration-500">
                                </div>
                                <div class="relative">
                                    <div
                                        class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center mb-6 shadow-lg shadow-emerald-500/20">
                                        <span class="text-white font-bold text-lg">04</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainable Focus</h3>
                                    <p class="text-gray-600 leading-relaxed">We prioritize investments that create
                                        lasting positive impact for communities.</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-gray-800 p-10 rounded-2xl overflow-hidden">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-teal-500/10 rounded-full blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 w-48 h-48 bg-blue2/10 rounded-full blur-2xl"></div>
                            <div class="relative">
                                <svg class="w-10 h-10 text-teal-400 mb-6 opacity-50" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                                <p class="text-xl leading-relaxed text-white/90 font-light">
                                    By leveraging our expertise and strategic approach, we deliver superior returns
                                    while creating
                                    sustainable value for our investors and the communities we serve.
                                </p>
                                <div class="mt-8 flex items-center gap-4">
                                    <div class="h-px flex-1 bg-gradient-to-r from-white/20 to-transparent"></div>
                                    <span class="text-sm text-white/50 uppercase tracking-wider">Our Promise</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="h-auto bg-black/70 bg-cover bg-center bg-blend-overlay bg-fixed relative"
            style="background-image: url('/images/edited\ copy.jpg');">
            <!-- Decorative overlay pattern -->
            {{-- <div class="absolute inset-0 opacity-10"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div> --}}

            <div class="mx-auto max-w-7xl px-8 py-36 relative">
                <div class="mb-16">
                    <span class="text-sm font-semibold tracking-[0.3em] text-white/60 uppercase">Our Services</span>
                    <h2 class="text-4xl font-light text-white mt-2 tracking-wide">Comprehensive Financing Solutions</h2>
                    <div class="mt-6 h-1 w-20 bg-gradient-to-r from-white to-white/30"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-white">
                    <div
                        class="group p-8 border border-white/20 rounded-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all duration-300">
                                <span class="font-bold">01</span>
                            </div>
                            <p class="text-xl font-bold">Real Estate Financing</p>
                        </div>
                        <p class="text-base leading-7 text-white/80">
                            We provide tailored financing solutions for a wide range of real estate projects, including
                            residential, commercial, and mixed-use developments. Our expertise in the real estate market
                            allows us to structure deals that maximize returns while ensuring the success of the
                            project.
                        </p>
                    </div>

                    <div
                        class="group p-8 border border-white/20 rounded-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all duration-300">
                                <span class="font-bold">02</span>
                            </div>
                            <p class="text-xl font-bold">Infrastructure Financing</p>
                        </div>
                        <p class="text-base leading-7 text-white/80">
                            Infrastructure is the backbone of any thriving economy. We offer comprehensive financing
                            options
                            for infrastructure projects, including transportation, energy, water, and public facilities.
                            Our focus is on supporting developments that enhance connectivity and promote sustainable
                            growth.
                        </p>
                    </div>

                    <div
                        class="group p-8 border border-white/20 rounded-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all duration-300">
                                <span class="font-bold">03</span>
                            </div>
                            <p class="text-xl font-bold">Equity Investment</p>
                        </div>
                        <p class="text-base leading-7 text-white/80">
                            At Next Level Capital, we believe in the power of partnerships. Our equity investment
                            solutions
                            bring together investors and developers to share in the success of high-impact projects. We
                            work
                            closely with our partners to align interests and ensure each project achieves its full
                            potential.
                        </p>
                    </div>

                    <div
                        class="group p-8 border border-white/20 rounded-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all duration-300">
                                <span class="font-bold">04</span>
                            </div>
                            <p class="text-xl font-bold">Public-Private Partnerships</p>
                        </div>
                        <p class="text-base leading-7 text-white/80">
                            We specialize in facilitating public-private partnerships that leverage the strengths of
                            both
                            sectors to deliver large-scale infrastructure and community development projects. Our
                            expertise
                            in structuring PPPs ensures that all stakeholders benefit from the collaboration.
                        </p>
                    </div>

                    <div
                        class="group p-8 border border-white/20 rounded-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300 md:col-span-2 md:max-w-xl">
                        <div class="flex items-center gap-4 mb-4">
                            <div
                                class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-black transition-all duration-300">
                                <span class="font-bold">05</span>
                            </div>
                            <p class="text-xl font-bold">Sustainable Financing</p>
                        </div>
                        <p class="text-base leading-7 text-white/80">
                            Sustainability is at the core of our approach. We prioritize financing for projects that
                            incorporate sustainable practices, from green building techniques to renewable energy
                            solutions.
                            By supporting sustainable development, we contribute to a healthier planet and more
                            resilient communities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <x-section>
            <div class="space-y-4">
                <span class="text-sm font-semibold tracking-[0.3em] text-gray-400 uppercase">Get Started</span>
                <p class="text-5xl md:text-6xl font-light leading-tight">Fueling Visions <br>with Strategic<br> Capital
                </p>
                <div class="mt-6 h-1 w-20 bg-gradient-to-r from-black to-gray-300"></div>
            </div>
            <x-button2>
                <div class="">
                    <p>partner</p>
                    <p>with us</p>
                </div>
            </x-button2>
        </x-section>
    </main>
</x-layout>