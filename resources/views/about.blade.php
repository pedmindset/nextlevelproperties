<x-layout>
    <x-header> 
        <x-nav>
            <a href="/" class ="w-14 h-14">
                <img src="{{ asset('images/nxtlevel_logo.jpeg') }}" alt="companylogo">
            </a>
        </x-nav> 
        <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div>
        <div class="absolute inset-0 w-full h-screen object-cover -z-10">
            <img src="{{asset('Nxtlevel/curve copy.jpg')}}" alt="" class="object-cover">
        </div>
        <div class="max-w-7xl mx-auto">
            <div class="flex max-w-5xl mx-auto py-12 mt-12">
              <div class="space-y-7">
                <p class="text-4xl  font-light">NEXT LEVEL CAPITAL</p>
                <div class="text-sm text-gray-500 max-w-lg space-y-8">
                    <p>Trusted partner in financing the future of real estate and infrastructure. With a deep commitment to fostering growth and development, we provide innovative financial solutions that
                         empower projects across the USA and Africa.
                     </p>
                    <p>Our mission is to fuel progress by bridging the gap between vision and reality, delivering the 
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
            <section class="max-w-7xl mx-auto px-20 gap-36  py-24">
                <div class="flex items-center">
                    <img src="{{asset('images/team-in-portrait-diversity-and-business-people-in-2023-11-27-05-35-15-utc 1.png')}}" alt="" class="object-cover w-[780px] h-auto">
                    <div class="bg-teal-400  -ml-8 px-7 py-4 space-y-5">
                        <p class="font-thin text-gray-500 text-3xl">
                           Empowering growth through strategic capital solutions
                        </p>
                        <div class="border-b border-black w-20"></div>
                        <div class="pt-3">
                            <x-button1 class="border-black text-sm text-gray-700 font-bold">
                                PARTNER WITH US
                            </x-button1>
                        </div>
                    </div>
                </div>
                <div class="mt-12 space-y-4">
                    <p class="text-lg font-bold">Who We Are</p>
                    <div class="text-sm space-y-4 font-thin">
                        <p>Next Level Capital is a leading financial firm specializing in the development of real estate and infrastructure projects. Our expertise spans across continents, with a focus on the USA and Africa, where we collaborate with <span class="font-bold">developers,</span> <span class="font-bold">investors,</span> and
                            <span class="font-bold">governments</span>   to bring transformative projects to life.
                         </p>
                         <p>
                            Whether it's a residential community, commercial complex, or large-scale infrastructure, we are dedicated to supporting initiatives that contribute to economic growth and social advancement.
                         </p>
                    </div>
                </div>
            </section>
        </div>
        <div class="bg-gray-100">
            <section class="max-w-7xl mx-auto py-28 px-20">
                <div>
                    <p class="font-thin  text-4xl tracking-widest">Our Partners</p>
                    <div>
                        <div class="flex justify-between pt-14">
                            <div class="space-y-5">
                                <p class="uppercase font-bold text-base px-6">INVESTORS</p>
                                <div class="border-l-2 border-b-2 border-dashed border-black px-6 py-6 space-y-7">
                                    <p class="max-w-md text-sm">We connect investors with carefully vetted real estate and infrastructure projects that align with their investment goals, whether they’re seeking stable income, capital appreciation, or strategic diversification.</p>
                                    <p class="max-w-md text-sm">We understand that each investor has unique objectives. Our team develops customized investment strategies that maximize returns while managing risks, ensuring that our investors achieve their financial goals.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="uppercase font-bold text-base px-6">governments</p>
                                <div class="border-l-2 border-b-2 border-dashed border-black px-6 py-6 space-y-7">
                                    <p class="max-w-md text-sm">We specialize in structuring public-private partnerships that leverage the strengths of both sectors. Our PPP models are designed to deliver essential infrastructure that benefit the public while providing returns for private investors.</p>
                                    <p class="max-w-md text-sm">We provide financing for large-scale infrastructure projects, including transportation, energy, water, and public facilities. Our focus is on supporting projects that enhance connectivity, improve quality of life, and promote sustainable growth.</p>
                    
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between pt-14">
                            <div class="space-y-5">
                                <p class="uppercase font-bold text-base px-6">DEVELOPERS</p>
                                <div class="border-l-2 border-b-2 border-dashed border-black px-6 py-6 space-y-7">
                                    <p class="max-w-md text-sm"> From construction loans to equity investments, we offer a range of financing options tailored to the needs of developers. Our flexible solutions ensure that projects are fully funded from start to finish.</p>
                                    <p class="max-w-md text-sm">Our team brings deep expertise in real estate and infrastructure development. We work alongside developers to provide strategic insights, market analysis, and financial structuring that enhance project outcomes.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="uppercase font-bold text-base px-6">COMMUNITIES</p>
                                <div class="border-l-2 border-b-2 border-dashed border-black px-6 py-6 space-y-7">
                                    <p class="max-w-md text-sm">We prioritize projects that address the needs and aspirations of local communities. From affordable housing to public amenities, our developments are designed to create inclusive, vibrant communities.</p>
                                    <p class="max-w-md text-sm">We are committed to sustainability in all our projects. We work with communities to implement green building practices, energy-efficient designs, and environmentally responsible solutions that contribute to long-term resilience.</p>
                    
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