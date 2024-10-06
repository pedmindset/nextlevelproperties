<x-layout>
    <x-header class="bg-blue2 h-[80vh]">
        <x-nav class="text-white">
             <a class ="flex h-full w-28 items-center border-r-2 border-gray-300 pr-10" href="/">
                <img src="{{ asset('images/nxtlevel_logo_white.png') }}" alt="companylogo">
            </a>
            {{-- <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div> --}}
        </x-nav>
        {{-- <div  class="absolute inset-0 -z-10 w-full h-full object-cover">
            <img class="object-cover" src="" alt="">
        </div> --}}
        <div class="max-w-7xl mx-auto">
            <div class="flex max-w-4xl py-32 mt-12">
              <div class="space-y-24">
               <p class="text-white text-2xl font-bold">We are here to help you take your projects to the next level. Whether you're interested in our real estate financing, infrastructure investment, or want to explore partnership opportunities, our team is ready to assist you.</p>
                <x-button1 class="border-white text-white">
                    Work with us
                </x-button1>
              </div>
            </div>
        </div>
    </x-header>
    <main class="w-full">
        <div class="bg-white">
            <section class="max-w-7xl mx-auto px-8 gap-36 py-24 space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                    <p class="text-black italic font-bold text-lg col-span-1">GET IN TOUCH</p>
                    <div class="flex gap-x-6 col-span-1 md:col-span-2">
                        <div class="bg-gray-50 py-4 px-9 rounded-lg text-gray-400 w-full">
                            <div class="space-y-5 text-xs font-light">
                                <p class="text-sm font-bold">General Enquiries</p>
                                <p>info@nextlevelpropterties.com</p>
                                <p>+1 (283)-234-5356</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 py-4 px-9 rounded-lg text-gray-400 w-full">
                            <div class="space-y-5 text-xs font-light ">
                                <p class="text-sm font-bold">Business</p>
                                <p>business@nextlevelpropterties.com</p>
                                <p>+1 (283)-234-5356</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <p class="text-black italic font-bold text-lg col-span-1">Let’s Talk</p>
                    <form action="" class="space-y-12 col-span-1 md:col-span-2">
                        <div class="flex gap-x-6 w-full">
                            <div class="relative mt-2 w-full">
                                <input type="text" name="name" id="name" class="peer block w-full border-0 rounded-t-md bg-gray-50 py-1.5 text-gray-900 focus:ring-0 px-8 sm:text-sm sm:leading-6" placeholder="First Name">
                                <div class="absolute inset-x-0 bottom-0 border-t border-gray-300 peer-focus:border-t-2 peer-focus:border-indigo-600 " aria-hidden="true"></div>
                            </div>
                            <div class="relative mt-2 w-full">
                                <input type="text" name="name" id="name" class="peer block w-full border-0 rounded-t-md bg-gray-50 py-1.5 text-gray-900 focus:ring-0 px-8 sm:text-sm sm:leading-6" placeholder="Last Name">
                                <div class="absolute inset-x-0 bottom-0 border-t border-gray-300 peer-focus:border-t-2 peer-focus:border-indigo-600 " aria-hidden="true"></div>
                            </div>
                        </div>
                        <div class="relative mt-2">
                                <input type="text" name="name" id="name" class="peer block w-full border-0 rounded-t-md bg-gray-50 py-1.5 text-gray-900 focus:ring-0 px-8 sm:text-sm sm:leading-6" placeholder="Email">
                                <div class="absolute inset-x-0 bottom-0 border-t border-gray-300 peer-focus:border-t-2 peer-focus:border-indigo-600 " aria-hidden="true"></div>
                        </div>
                        <div class="relative mt-2">
                                <input type="text" name="name" id="name" class="peer block w-full border-0 rounded-t-md bg-gray-50 py-1.5 text-gray-900 focus:ring-0 px-8 sm:text-sm sm:leading-6" placeholder="+1 456 456 4789">
                                <div class="absolute inset-x-0 bottom-0 border-t border-gray-300 peer-focus:border-t-2 peer-focus:border-indigo-600 " aria-hidden="true"></div>
                        </div>
                        <div class="mt-2">
                            <textarea rows="6" name="comment" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 px-8 bg-gray-50 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="message"></textarea>
                        </div>
                        <div class="flex justify-end text-base">
                            <x-button1 class="border-black">
                                send message
                            </x-button1>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <x-section class="bg-teal-300">
            <p class="text-white">Fueling growth <br> and development</p>
            <x-button2 class="border-white">
                <div class="text-white ">
                    <p>partner</p>
                    <p>with us</p>
                </div>
            </x-button2>
        </x-section>
    </main>
</x-layout>
