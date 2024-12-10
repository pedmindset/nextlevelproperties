<section class="relative" x-data="{ open: false }">
    <nav {{ $attributes->merge(['class' => 'max-w-7xl mx-auto px-6 py-0 flex justify-between']) }}>
        <div class="flex items-center space-x-10 text-gray-700">
            {{ $slot }}
            <ul
                {{ $attributes->merge(['class' => 'uppercase pb-8 pt-12 md:flex space-x-6 text-sm font-semibold hidden']) }}>
                <li class="hidden md:block">
                    <a href="/about">About Us</a>
                </li>
                <li>
                    <a href="/real-estate">Real Estate</a>
                </li>
                <li>
                    <a href="/Infrastructure">Infrastructure</a>
                </li>
                <li>
                    <a href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="pb-8 pt-10">
            <svg class="size-6 cursor-pointer" @click="open = !open" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </nav>
    <div style="display: none" class="fixed left-0 right-0 top-0 z-20 w-full bg-gray-100 px-2"
        x-transition:enter="transition-height ease-in duration-300" x-transition:enter-start="h-0"
        x-transition:enter-end="h-screen" x-transition:leave="transition-height ease-out duration-300"
        x-transition:leave-start="h-screen" x-transition:leave-end="h-0" x-show="open">
        <div class="mx-auto h-screen max-w-7xl px-2">
            <div class="flex h-24 w-full flex-nowrap justify-between px-5 py-5">
                <img class="w-[5.3rem] object-contain hover:rotate-2 hover:scale-125 motion-safe:transition-transform md:-m-2"
                    src="{{ asset('images/nxtlevel_logo.png') }}" alt="NextLevel Logo" />

                {{-- <svg color="black" class="size-6 z-20 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    strokeWidth="1.5" stroke="currentColor" @click="open = !open">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg> --}}
                <svg class="size-6 cursor-pointer mt-8 text-black transition hover:scale-150 hover:animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" @click="open = !open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>


            </div>
            <div class="grid grid-cols-3 gap-x-20" x-show="open" x-transition:enter.delay.300ms>
                <div class="col-span-1">
                    <nav class="py-4" aria-label="Mobile navigation">
                        <ul class="flex flex-col gap-y-4 md:gap-y-6">
                            <li class="py-1 text-5xl sm:text-4xl xl:text-5xl">
                                <a class="hover:text-primary ring-primary @if (request()->is('/')) 'text-primary'
                                        @else
                                             'text-gray-700' @endif -m-1 cursor-pointer p-1 font-light tracking-wide transition hover:scale-x-105 focus:outline-none focus-visible:ring-2"
                                    href="{{ url('/') }}">
                                    Home
                                </a>
                            </li>
                            <li class="py-1 text-5xl sm:text-4xl xl:text-5xl">
                                <a class="hover:text-primary ring-primary @if (request()->is('about')) 'text-primary'
                                        @else
                                             'text-gray-700' @endif -m-1 cursor-pointer p-1 font-light tracking-wide transition hover:scale-x-105 focus:outline-none focus-visible:ring-2"
                                    href="{{ url('/about') }}">
                                    About
                                </a>
                            </li>
                            <li class="py-1 text-5xl sm:text-4xl xl:text-5xl">
                                <a class="hover:text-primary ring-primary @if (request()->is('real-estate')) 'text-primary'
                                        @else
                                             'text-gray-700' @endif -m-1 cursor-pointer p-1 font-light tracking-wide transition hover:scale-x-105 focus:outline-none focus-visible:ring-2"
                                    href="{{ url('/real-estate') }}">
                                    Real Estate
                                </a>
                            </li>
                            <li class="py-1 text-5xl sm:text-4xl xl:text-5xl">
                                <a class="hover:text-primary ring-primary @if (request()->is('Infrastructure')) 'text-primary'
                                        @else
                                             'text-gray-700' @endif -m-1 cursor-pointer p-1 font-light tracking-wide transition hover:scale-x-105 focus:outline-none focus-visible:ring-2"
                                    href="{{ url('/Infrastructure') }}">
                                    Infrastructure
                                </a>
                            </li>
                            <li class="py-1 text-5xl sm:text-4xl xl:text-5xl">
                                <a class="hover:text-primary ring-primary @if (request()->is('contact')) 'text-primary'
                                        @else
                                             'text-gray-700' @endif -m-1 cursor-pointer p-1 font-light tracking-wide transition hover:scale-x-105 focus:outline-none focus-visible:ring-2"
                                    href="{{ url('/contact') }}">
                                    Contact us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- <div class="col-span-2 hidden flex-col sm:flex">
                    <div class="mt-4 w-full border-b border-gray-300">
                        <a href="#">
                            <h1 class="text-2xl font-light uppercase text-gray-600 md:text-3xl xl:text-4xl">Real Estate Capital</h1>
                        </a>
                        <p class="font-light text-gray-600">We are here to help you raise capital for your next project</p>
                    </div>
                    <div class="mt-4 w-full border-b border-gray-300">
                        <a href="#">
                            <h1 class="text-2xl font-light uppercase text-gray-600 md:text-3xl xl:text-4xl">WEBSITE &
                                DEVELOPMENT</h1>
                        </a>
                        <p class="font-light text-gray-600">We turn sensational ideas into breathtaking products.</p>
                    </div>
                    <div class="mt-4 w-full">
                        <a href="#">
                            <h1 class="text-2xl font-light uppercase text-gray-600 md:text-3xl xl:text-4xl">DIGITAL
                                MARKETING</h1>
                        </a>
                        <p class="font-light text-gray-600">Your customers see what they are looking for, not what
                            you're selling.</p>
                    </div>
                    <div class="mt-4 grid grid-cols-2 grid-rows-2 gap-0 divide-x divide-y border-gray-300">
                        <div class="flex flex-col items-start justify-center border-l border-t p-5">
                            <a href="https://meetings-eu1.hubspot.com/emmanuel-oduro" target="new">
                                <i class="lar la-calendar-check la-2x text-gray-600"></i>
                                <p class="px-1 text-sm font-normal text-gray-600">Book a free session</p>
                            </a>
                        </div>
                        <div class="flex flex-col items-start justify-center p-5">
                            <i class="las la-download la-2x text-gray-600"></i>
                            <p class="px-1 text-sm font-normal text-gray-600">Download brand checklist</p>
                        </div>

                        <div class="flex flex-col items-start justify-center p-5">
                            <a href="#hs-chat-open">
                                <i class="lar la-comment-alt la-2x text-gray-600"></i>
                                <p class="px-1 text-sm font-normal text-gray-600">Chat with us</p>
                            </a>
                        </div>

                        <div class="flex flex-col items-start justify-center p-5">
                            <a href="#">
                                <i class="las la-suitcase la-2x text-gray-600"></i>
                                <p class="px-1 text-sm font-normal text-gray-600">Start a project</p>
                            </a>
                        </div>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>
</section>
