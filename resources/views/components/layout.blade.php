<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Nextlevel</title>
    <link rel="icon" href="{{ asset('images/nxtlevel_logo.png') }}" type="image/x-icon">
</head>
<body>
    <div class="relative overflow-hidden">
        <div class="border-r-2 border-r-gray1 h-20 absolute top-0 left-44"></div>
        <video autoplay muted loop class="absolute inset-0 w-full h-screen object-cover -z-10">
            <source src="{{asset('Nxtlevel/abstract-loop-flowing-curve-white.mp4')}}" type="video/mp4">
        </video>
        <nav class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
            <div class="flex items-center space-x-36">
                <div class ="w-14 h-14">
                    <img src="{{ asset('images/nxtlevel_logo.jpeg') }}" alt="companylogo">
                </div>
                <ul class="uppercase flex space-x-6 text-sm font-semibold text-gray1">
                    <li>
                        <a href="/about">About Us</a>
                    </li>
                    <li>
                        <a href="#">Real Estate</a>
                    </li>
                    <li>
                        <a href="#">Infrastructure</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </nav>
        <div class="flex max-w-4xl mx-auto my-40">
                <div class="text-7xl uppercase font-thin text-blue1 leading-snug tracking-wide">
                    <p>
                        Unlocking Value 
                    </p>
                    <p>
                        Through Strategic   
                    </p>
                    <p>
                        Investments  
                    </p>
                </div>  
                <button class="uppercase text-black font-bold text-base border-dashed border-2 border-black w-36 h-20 rounded-full">
                    <div class="">
                        <p>partner</p>
                        <p>with us</p>
                    </div>
                </button>
            </div>
    </div>
    {{$slot}}
    @include('partials.footer')
</body>
</html>