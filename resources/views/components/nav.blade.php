<nav {{$attributes ->merge(['class'=>'max-w-7xl mx-auto px-6 py-0 flex justify-between'])}}>
                <div class="flex items-center space-x-10">
                  {{$slot}}
                    <ul {{$attributes ->merge(['class'=>'uppercase pb-8 pt-12 flex space-x-6 text-sm font-semibold text-gray1'])}}>
                        <li>
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
                <div class="pt-10 pb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
 </nav>
