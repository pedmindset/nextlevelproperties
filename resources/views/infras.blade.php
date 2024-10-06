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
                src="{{ asset('Nxtlevel/kai-tak-hong-kong-12-may-2019-top-view-of-hong-k-2023-11-27-05-34-46-utc.jpg') }}"
                alt="">
            <div class="opacity-55 absolute inset-0 bg-black mix-blend-multiply"></div>
        </div>
        <div class="mx-auto max-w-7xl px-8">
            <div class="mt-12 flex max-w-5xl py-32">
                <div class="space-y-24">
                    <p class="text-xl font-bold text-white md:text-2xl">We understand that robust infrastructure is the
                        backbone of thriving economies. With our deep expertise in financing, we provide the capital and
                        support necessary to bring essential infrastructure developments to life.</p>
                    <x-button1 class="border-white text-white">
                        Work with us
                    </x-button1>
                </div>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-white">
            <section class="mx-auto max-w-7xl gap-36 px-8 py-24">
                <div class="space-y-10">
                    <p class="text-2xl font-bold">Our Infrastructure Investment Services</p>
                    <div class="max-w-4xl space-y-14 text-base">
                        <p>We offer a comprehensive range of investment solutions tailored to the unique needs of
                            infrastructure projects. We understand that robust infrastructure is the backbone of
                            thriving economies and vibrant communities. With our deep expertise in financing
                            infrastructure projects across the USA and Africa, we provide the capital and support
                            necessary to bring essential infrastructure developments to life. </p>
                        <p><span class="font-bold">Our focus</span> is on creating value for our partners and the
                            communities they serve by financing projects that improve connectivity, enhance quality of
                            life, and promote long-term economic growth.</p>
                    </div>
                    <x-dash />
                    <x-button1 class="border-black">
                        WORK WITH US
                    </x-button1>
                </div>
            </section>
        </div>
        <div class="bg-gray-100">
            <section class="mx-auto max-w-7xl px-8 py-28">
                <div class="space-y-11">
                    <p class="text-base font-light">STRATEGIES</p>
                    <div class="space-y-16 divide-y divide-gray-600">
                        <div class="flex flex-wrap justify-between gap-8 md:flex-nowrap">
                            <p class="text-xl font-bold md:text-2xl lg:text-3xl">
                                Transportation <br>Infrastructure
                            </p>
                            <p class="max-w-lg text-base font-normal lg:text-lg">
                                Roads and Highways - Bridges and Tunnels - Public Transit Systems - Airports and
                                Seaports
                            </p>
                        </div>
                        <div class="flex flex-wrap justify-between gap-8 pt-16 md:flex-nowrap">
                            <p class="text-xl font-bold md:text-2xl lg:text-3xl">
                                Energy Infrastructure
                            </p>
                            <p class="max-w-lg text-base font-normal lg:text-lg">
                                Renewable Energy Projects - Power Generation and Distribution - Energy Storage Solutions
                                - Transmission and Pipelines </p>
                        </div>
                        <div class="flex flex-wrap justify-between gap-8 pt-16 md:flex-nowrap">
                            <p class="text-xl font-bold md:text-2xl lg:text-3xl">
                                Water and Waste <br> Management Infrastructure
                            </p>
                            <p class="max-w-lg text-base font-normal lg:text-lg">
                                Water Supply Systems - Wastewater Treatment - Irrigation Systems - Solid Waste
                                Management </p>
                        </div>
                        <div class="flex flex-wrap justify-between gap-8 pt-16 md:flex-nowrap">
                            <p class="text-xl font-bold md:text-2xl lg:text-3xl">
                                Telecommunications <br>Infrastructure
                            </p>
                            <p class="max-w-lg text-base font-normal lg:text-lg">
                                Fiber Optic Networks - Cellular Networks - Data Centers - Satellite Communications</p>
                        </div>
                        <div class="flex flex-wrap justify-between gap-8 pt-16 md:flex-nowrap">
                            <p class="text-xl font-bold md:text-2xl lg:text-3xl">
                                Social Infrastructure
                            </p>
                            <p class="max-w-lg text-base font-normal lg:text-lg">
                                Healthcare Facilities - Educational Institutions - Public Housing - Civic and Cultural
                                Buildings</p>
                        </div>
                        <div class="flex flex-wrap justify-between gap-8 pt-16 md:flex-nowrap">
                            <p class="text-xl font-bold md:text-2xl lg:text-3xl">
                                Public-Private <br> Partnerships (PPP)
                            </p>
                            <p class="max-w-lg text-base font-normal lg:text-lg">
                                Collaborative Financing Models - Joint Ventures - Equity Partnerships - Comprehensive
                                Risk Management
                        </div>
                        <div class="space-y-14">
                            <p class="max-w-6xl pt-16 text-xl md:text-2xl">At Next Level Capital, we are more than just
                                financiers; we are partners committed to building a better future through strategic and
                                impactful infrastructure investments.
                                Let's build a resilient, sustainable future together.</p>
                            <x-button1 class="border-black">
                                PARTNER WITH US
                            </x-button1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section>
            <section class="mx-auto max-w-7xl px-8 py-28">
                <div>
                    <div class="space-y-8 pb-10">
                        <p class="text-4xl font-thin tracking-tight">Our Approach</p>
                        <p class="text-base font-light">At Next Level Capital, we believe that successful infrastructure
                            investment requires a strategic, informed, and collaborative approach.</p>
                    </div>
                    <div>
                        <div
                            class="grid grid-cols-1 items-center justify-between gap-x-20 gap-y-28 md:grid-cols-2 md:gap-x-4 lg:gap-x-32">
                            <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Strategic Investment Planning</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-base">We work closely with our partners to develop strategic
                                        investment plans that align with their long-term goals. </p>
                                    <p class="max-w-md text-base">Our planning process includes rigorous market analysis,
                                        financial modeling, and risk assessment to ensure that each project is viable
                                        and sustainable.</p>

                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Expertise Across Sectors</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-base">Our team has extensive experience across various
                                        infrastructure sectors, from energy and transportation to water and
                                        telecommunications. </p>
                                    <p class="max-w-md text-base">This diverse expertise enables us to provide informed,
                                        sector-specific investment strategies that maximize impact.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Long-Term Value Creation</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-300 pl-10 mr-10 pb-10">
                                    <p class="max-w-md text-base"> We focus on creating long-term value for our partners
                                        and the communities we serve. </p>
                                    <p class="max-w-md text-base">By investing in projects that are designed for
                                        longevity, sustainability, and resilience, we help build infrastructure that
                                        stands the test of time.</p>
                                </div>
                            </div>
                            <div class="space-y-5">
                                <p class="px-10 text-xl font-extrabold uppercase md:text-2xl">Collaborative Partnerships</p>
                                <div class="space-y-7 border-b-4 border-l-4 border-dashed border-gray-300 px-6 py-8">
                                    <p class="max-w-md text-base">We believe in the power of collaboration. </p>
                                    <p class="max-w-md text-base">By working closely with governments, developers, and
                                        local communities, we ensure that our investments are aligned with the needs and
                                        aspirations of all stakeholders.</p>

                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </section>
        <section>
            <div class="mx-auto max-w-7xl space-y-14 px-8 pt-10 pb-24">
                <div class="space-y-6">
                    <p class="text-end text-lg font-semibold italic">Strategic and impactful infrastructure investments
                    </p>
                    <img class="h-auto w-full object-cover"
                        src="{{ asset('Nxtlevel/launching-gantry-for-installing-concrete-segment-j-2023-11-27-05-14-36-utc.jpg') }}"
                        alt="">
                </div>
                <div class="border-b border-gray-700"></div>
                <div class="max-w-4xl space-y-6 text-lg">
                    <p class="text-2xl font-bold">
                        Why Choose Next Level Capital for Infrastructure Investment?
                    </p>
                    <p>Global Reach, Local Impact: With a strong presence in both the USA and Africa, we bring a global
                        perspective to our infrastructure investments, while remaining deeply attuned to local needs and
                        opportunities.</p>
                    <p>Proven Expertise: Our track record of successful infrastructure investments speaks to our ability
                        to deliver results. We have financed projects that have transformed communities and driven
                        economic growth.</p>
                    <p>Innovative Solutions: We are at the forefront of innovative financing solutions, offering
                        flexible, customized options that meet the unique challenges of each infrastructure project.</p>
                    <p>Sustainability Focus: Our commitment to sustainability ensures that our investments contribute to
                        a better future for both people and the planet.</p>
                    <p>Comprehensive Support: From initial planning to project execution and beyond, we provide
                        comprehensive support to ensure the success of every infrastructure investment.</p>
                </div>
                <x-button1 class="border-black">
                    Book a meeting
                </x-button1>
            </div>
        </section>
        <x-section class="bg-teal-300">
            <p class="text-white">Are you ready to <br> invest in the future <br> of infrastructure?</p>
            <x-button2 class="border-white">
                <div class="text-white">
                    <p>partner</p>
                    <p>with us</p>
                </div>
            </x-button2>
        </x-section>
    </main>
</x-layout>
