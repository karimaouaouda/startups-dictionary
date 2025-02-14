<x-layouts.master>

    <style>
        .a {
            scale: 14;
            opacity: 0;
        }

        .move {
            scale: 1 !important;
            opacity: 1 !important;
        }
    </style>

    <script defer>
        function animate() {
            let elements = document.querySelectorAll('.a')
            for (let i = 1; i <= elements.length; i++) {
                setTimeout(function() {
                    elements[i - 1].classList.add('move')
                }, i * 1000)
            }
        }

        window.addEventListener('load', animate)
    </script>
    <header class="w-full flex flex-col min-h-screen">
        <x-partials.navbar />
        <div class="flex-1 overflow-hidden  flex items-center justify-center bg-black relative">
            <img class="absolute img w-full h-full object-cover" src="{{ asset('assets/media/wall.jpg') }}" alt="">
            <div class="absolute w-full h-full left-0 top-0 bg-black/30"></div>
            <div class="flex-col flex space-y-4 relative">
                <h1 class="text-8xl duration-500 ease-in-out a tracking-wide text-center uppercase flex justify-center space-x-8 items-center">
                    <i class="bi !text-white bi-star-fill text-6xl"></i>
                    <span class="!text-white">
                        turn
                    </span>
                    <i class="bi !text-white bi-star-fill text-6xl"></i>
                </h1>
                <h1 class="text-8xl duration-500 ease-in-out a !text-white tracking-wide text-center uppercase ">
                    your ideas
                </h1>
                <h1 class="text-8xl duration-500 ease-in-out a !text-white tracking-wide text-center uppercase ">
                    into reality
                </h1>
            </div>
        </div>
    </header>


    <section class="w-full bg-slate-100 min-h-screen">

    </section>
</x-layouts.master>