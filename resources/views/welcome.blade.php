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
        <x-partials.navbar page="home"/>
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


    <section class="w-full bg-slate-100 h-auto px-6 py-10">
        <div class="w-full flex justify-around items-center py-10 border-b border-slate-300">
            <div class="flex flex-col space-y-5 justify-around w-2/3">
                <h1 class="text-5xl font-bold capitalize">
                    think about an idea
                </h1>
                <h6 class="text-3xl px-6">
                    you just need to think about an idea, if u have no idea already, if u have one, just scroll down !
                </h6>
            </div>

            <div class="w-72 h-72" style="clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);">
                <img class="w-full h-full object-cover" src="{{ asset('images/idea.jpg') }}" alt="">
            </div>
        </div>

        <div class="w-full flex flex-row-reverse justify-around items-center py-10 border-b border-slate-300">
            <div class="flex flex-col space-y-5 justify-around w-2/3">
                <h1 class="text-5xl font-bold capitalize">
                    plan for it
                </h1>
                <h6 class="text-3xl px-6">
                    plan for your idea, make the probability of fail more less, you must succeed
                </h6>
            </div>

            <div class="w-72 h-72" style="clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);">
                <img class="w-full h-full object-cover" src="{{ asset('images/plan.jpg') }}" alt="">
            </div>
        </div>

        <div class="w-full flex justify-around items-center py-10 border-b border-slate-300">
            <div class="flex flex-col space-y-5 justify-around w-2/3">
                <h1 class="text-5xl font-bold capitalize">
                    and the <span class="text-indigo-800">POLE PRO</span> will
                </h1>
                <h6 class="text-3xl px-6">
                    make Your idea is closer than ever to becoming a reality. help you reach your dream.
                </h6>
            </div>

            <div class="w-72 h-72" style="clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);">
                <img class="w-full h-full object-cover" src="{{ asset('images/pole-logo.png') }}" alt="">
            </div>
        </div>
    </section>
</x-layouts.master>
