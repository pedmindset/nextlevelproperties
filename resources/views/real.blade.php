<x-layout>
    <x-header class="h-[80vh]">
        <x-nav class="text-white">
            <a class ="flex h-full w-28 items-center border-r-2 border-gray-300 pr-10" href="/">
                <img src="{{ asset('images/nxtlevel_logo_white.png') }}" alt="companylogo">
            </a>
            {{-- <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div> --}}
        </x-nav>
        {{-- <div  class="absolute inset-0 -z-10 w-full h-full object-cover">
            <img class="object-cover" src="" alt="">
        </div> --}}
        <div class="absolute inset-0 -z-10 h-screen w-full object-cover">
            <img class="h-full w-full object-cover"
                src="{{ asset('Nxtlevel/aerial-view-of-a-construction-site-2023-11-27-05-35-42-utc.jpg') }}"
                alt="">
            <div class="opacity-45 absolute inset-0 bg-black mix-blend-multiply"></div>
        </div>
        <div class="mx-auto max-w-7xl px-8">
            <div class="mt-12 flex max-w-4xl py-32">
                <div class="space-y-24">
                    <p class="text-2xl md:text-3xl font-bold text-white">We are dedicated to fueling growth and development
                        through strategic real estate investments and financing solutions.</p>
                    <x-button1 class="border-white text-white">
                        Work with us
                    </x-button1>
                </div>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-white">
            <section class="mx-auto max-w-7xl gap-36 px-8 py-36 pb-40">
                <div class="space-y-6">
                    <p class="text-2xl font-extrabold md:text-4xl">Real Estate Financing</p>
                    <div class="max-w-6xl space-y-10 text-lg">
                        <p>At Next Level Capital, we are dedicated to fueling growth and development through strategic
                            real estate investments and financing solutions. With a strong presence in both the USA and
                            Africa, we partner with developers, investors, and communities to bring transformative real
                            estate projects to life. </p>
                        <p>Our comprehensive financing services are tailored to meet the unique needs of each project,
                            ensuring successful outcomes and lasting impact.</p>
                    </div>
                    <x-dash />
                    <x-button1 class="my-5 border-black">
                        WORK WITH US
                    </x-button1>
                </div>
            </section>
        </div>
        <div class="bg-gray-100">
            <section class="mx-auto max-w-6xl px-8 py-36 pb-40">
                <div class="space-y-11">
                    <p class="text-base font-normal">STRATEGIES</p>
                    <div class="space-y-16 divide-y divide-gray-600">
                        <div class="flex flex-wrap justify-between gap-6 md:flex-nowrap">
                            <p class="text-2xl font-bold">
                                Real Estate Projects <br>
                                Financing
                            </p>
                            <p class="max-w-sm text-base font-bold">
                                Residential Homes - Multi-story Apartments - Office Buildings - Retail Centers,
                                Industrial Properties - Hospitality Projects - Hospital Projects
                            </p>
                        </div>
                        <div class="flex flex-wrap justify-between gap-6 pt-16 md:flex-nowrap">
                            <p class="text-2xl font-bold">
                                Real Estate Financing
                            </p>
                            <p class="max-w-sm text-base font-bold">
                                Bridge Loans - Mezzanine Financing - Equity Partnerships - Joint Venture Arrangements
                            </p>
                        </div>
                        <div class="space-y-14">
                            <p class="max-w-6xl pt-16 text-lg">With extensive experience in the USA and African real
                                estate markets, we offer valuable insights and analysis that inform smart investment
                                decisions. Our knowledge of local regulations, market trends, and economic factors
                                ensures that your project is well-positioned for success.</p>
                            <x-button1 class="border-black">
                                PARTNER WITH US
                            </x-button1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section>
            <section class="mx-auto max-w-7xl px-8 py-28 text-black">
                <div>
                    <div class="space-y-8 pb-14">
                        <p class="text-5xl font-thin tracking-tight">Our Approach</p>
                        <p class="text-lg font-light">At Next Level Capital, our approach to real estate financing is
                            defined by our commitment to excellence, innovation, and partnership.</p>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center justify-between gap-y-28 gap-x-20 md:gap-x-4 lg:gap-x-32">
                            <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Tailored Financial
                                    Solutions</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-GRAY-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-base">We understand that every project is unique. </p>
                                    <p class="max-w-md text-base">Our team works closely with you to understand your
                                        specific needs and develop customized financing strategies that align with your
                                        objectives and market conditions.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Deep Market Expertise</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-GRAY-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-base">With extensive experience in the USA and African real
                                        estate markets, we offer valuable insights and analysis that inform smart
                                        investment decisions. </p>
                                    <p class="max-w-md text-base">Our knowledge of local regulations, market trends, and
                                        economic factors ensures that your project is well-positioned for success.</p>

                                </div>
                            </div>
                              <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Comprehensive Due
                                    Diligence</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-GRAY-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-lg"> We conduct thorough due diligence to assess project
                                        viability, risks, and potential returns. </p>
                                    <p class="max-w-md text-lg">Our meticulous evaluation process ensures that all
                                        stakeholders have a clear understanding of the project's prospects and
                                        challenges.</p>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Collaborative
                                    Partnerships</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-GRAY-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-lg">We value strong, collaborative relationships with our
                                        partners. </p>
                                    <p class="max-w-md text-lg">By fostering open communication and aligning our goals,
                                        we work together to overcome challenges and achieve shared success.</p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </section>
        <section>
            <div class="mx-auto max-w-7xl space-y-14 py-10 pb-36">
                <div class="space-y-3 px-8 md:px-0">
                    <p class="text-end text-xl md:text-3xl font-extrabold italic">Let's build together</p>
                    <img class="h-auto w-full object-cover"
                        src="{{ asset('Nxtlevel/bird-s-eye-view-of-tall-buildings-under-constructi-2023-11-27-05-00-24-utc.jpg') }}"
                        alt="">
                </div>
                <div class="border-b border-gray-700 mx-8"></div>
                <div class="max-w-5xl space-y-6 text-lg px-8">
                    <p class="text-2xl font-bold">
                        Why Choose Next Level Capital?
                    </p>
                    <p>Choosing Next Level Capital as your financing partner means choosing a team dedicated to your
                        project's success.</p>
                    <p>Proven Track Record: We have a history of successfully financing and supporting diverse real
                        estate projects that deliver strong returns and positive community impact.</p>
                    <p>Flexible Financing Options: Our wide range of financing products allows us to structure deals
                        that best fit your project's needs and financial goals.</p>
                    <p>Expert Team: Our professionals bring extensive experience and expertise across finance, real
                        estate, and development sectors, providing you with comprehensive support and guidance.</p>
                    <p>Global Perspective: With operations spanning the USA and Africa, we bring a global perspective
                        and network that unlocks opportunities and resources for your project.</p>
                    <p>Responsive and Reliable: We are committed to providing timely, transparent, and reliable service,
                        ensuring that your financing process is smooth and efficient.</p>
                </div>
                <x-button1 class="border-black mx-8">
                    Book a meeting
                </x-button1>
            </div>
        </section>
        <x-section class="bg-teal-300">
            <p class="text-white">Fueling growth <br>and development</p>
            <x-button2 class="border-white">
                <div class="text-white">
                    <p>partner</p>
                    <p>with us</p>
                </div>
            </x-button2>
        </x-section>
    </main>
</x-layout>
