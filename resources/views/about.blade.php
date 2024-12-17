<x-layout>
    <x-header class="h-full bg-cover bg-right-top bg-no-repeat md:h-[80vh] md:bg-contain"
        style="background-image: url('{{ asset('Nxtlevel/curve_copy.jpg') }}')">
        <x-nav>
            <a class ="flex h-full w-28 items-center border-r-2 border-gray-300 pr-10" href="{{ route('home') }}">
                <img src="{{ asset('images/nextLevel_logo.png') }}" alt="Next Level Capital">
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
                    <div class="max-w-3xl space-y-8 text-lg text-gray-900">
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
                    <x-button1 class="border-black" href="{{ route('contact') }}">
                        Work with us
                    </x-button1>
                </div>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-white">
            <section class="mx-auto max-w-7xl gap-36 pb-36 pt-24">
                <div class="flex flex-wrap items-center lg:flex-nowrap">
                    <img class="h-auto w-full object-cover lg:w-[780px]"
                        src="{{ asset('images/team-in-portrait-diversity-and-business-people-in-2023-11-27-05-35-15-utc 1.png') }}"
                        alt="">
                    <div class="w-full space-y-5 bg-teal-400 p-10 lg:-ml-8 lg:max-w-sm">
                        <p class="text-3xl font-light text-gray-700">
                            Empowering growth through strategic capital solutions
                        </p>
                        <div class="w-20 border-b border-black"></div>
                        <div class="pt-3">
                            <x-button1 class="border-black text-sm font-bold text-gray-700" href="{{ route('contact') }}">
                                PARTNER WITH US
                            </x-button1>
                        </div>
                    </div>
                </div>
                <div class="mt-12 space-y-4 px-8 lg:px-2">
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
            <section class="mx-auto max-w-7xl px-8 py-40 pb-48">
                <div>
                    <p class="text-5xl font-thin tracking-widest">Our Partners</p>
                    <div>
                        <div class="flex flex-wrap justify-between gap-10 pt-14 md:flex-nowrap">
                            <div class="space-y-5">
                                <p class="px-6 text-xl font-black uppercase">INVESTORS</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-base">We connect investors with carefully vetted real estate
                                        and infrastructure projects that align with their investment goals, whether
                                        they’re seeking stable income, capital appreciation, or strategic
                                        diversification.</p>
                                    <p class="max-w-md text-base">We understand that each investor has unique
                                        objectives.
                                        Our team develops customized investment strategies that maximize returns while
                                        managing risks, ensuring that our investors achieve their financial goals.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-6 text-xl font-black uppercase">governments</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-base">We specialize in structuring public-private
                                        partnerships
                                        that leverage the strengths of both sectors. Our PPP models are designed to
                                        deliver essential infrastructure that benefit the public while providing returns
                                        for private investors.</p>
                                    <p class="max-w-md text-base">We provide financing for large-scale infrastructure
                                        projects, including transportation, energy, water, and public facilities. Our
                                        focus is on supporting projects that enhance connectivity, improve quality of
                                        life, and promote sustainable growth.</p>

                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-between gap-10 pt-14 md:flex-nowrap">
                            <div class="space-y-5">
                                <p class="px-6 text-xl font-black uppercase">DEVELOPERS</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-base"> From construction loans to equity investments, we
                                        offer
                                        a range of financing options tailored to the needs of developers. Our flexible
                                        solutions ensure that projects are fully funded from start to finish.</p>
                                    <p class="max-w-md text-base">Our team brings deep expertise in real estate and
                                        infrastructure development. We work alongside developers to provide strategic
                                        insights, market analysis, and financial structuring that enhance project
                                        outcomes.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-6 text-xl font-black uppercase">COMMUNITIES</p>
                                <div class="space-y-7 border-b-2 border-l-2 border-dashed border-black px-6 py-6">
                                    <p class="max-w-md text-base">We prioritize projects that address the needs and
                                        aspirations of local communities. From affordable housing to public amenities,
                                        our developments are designed to create inclusive, vibrant communities.</p>
                                    <p class="max-w-md text-base">We are committed to sustainability in all our
                                        projects.
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
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our team</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">We’re a dynamic group of individuals who are
                        passionate about what we do and dedicated to delivering the best results for our clients.</p>
                </div>
                <ul class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3"
                    role="list">
                    <li>
                        <img class="aspect-[3/3] w-full rounded-2xl object-cover object-top"
                            src="{{ asset('images/musah_lotallah.jpeg') }}"
                            alt="Musah Lotallah">
                        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Musah Lotallah

                        </h3>
                        <p class="text-base leading-7 text-gray-600">Managing Partner</p>
                        <ul class="mt-6 flex gap-x-6" role="list">
                            <li>
                                <a class="text-gray-400 hover:text-gray-500" href="#">
                                    <span class="sr-only">X</span>
                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-400 hover:text-gray-500" href="#">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <img class="aspect-[3/3] w-full rounded-2xl object-cover object-top"
                            src="{{ asset('images/iffath_lotallah.jpeg') }}"
                            alt="Musah Lotallah">
                        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Iffath Lotallah

                        </h3>
                        <p class="text-base leading-7 text-gray-600">General Counsel</p>
                        <ul class="mt-6 flex gap-x-6" role="list">
                            <li>
                                <a class="text-gray-400 hover:text-gray-500" href="#">
                                    <span class="sr-only">X</span>
                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-400 hover:text-gray-500" href="#">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </li>

                      <li>
                        <img class="aspect-[3/3] w-full rounded-2xl object-cover object-top"
                            src="{{ asset('images/elijah_mukkarum.jpeg') }}"
                            alt="Musah Lotallah">
                        <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Elijah Mukkarum

                        </h3>
                        <p class="text-base leading-7 text-gray-600">Adivisor</p>
                        <ul class="mt-6 flex gap-x-6" role="list">
                            <li>
                                <a class="text-gray-400 hover:text-gray-500" href="#">
                                    <span class="sr-only">X</span>
                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-400 hover:text-gray-500" href="#">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- More people... -->
                </ul>
            </div>
        </div>

        <x-section class="bg-gray-50">
            <p>Let’s Build the <br>Future Together</p>
            <x-button2 href="{{ route('contact') }}">
                <div class="">
                    <p>partner</p>
                    <p>with us</p>
                </div>
            </x-button2>
        </x-section>
    </main>
</x-layout>
