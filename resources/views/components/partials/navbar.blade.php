<nav class="w-full h-20 border-b border-slate-200 shadow px-4 flex items-center justify-between">

    <div class="flex space-x-2 items-center">
        <img class="w-20 h-20" src="{{ asset('assets/logo.gif') }}" alt="">
        <h1 class="font-extrabold text-3xl">
            <span class="text-indigo-700">
            Star
            </span>
            <span class="-translate-x-1 inline-block text-sky-800">
            tups
            </span>
        </h1>
    </div>

    <div class="h-full flex space-x-8 items-center">

        <a href="#" class="font-semibold uppercase duration-300 hover:text-indigo-800 text-lg relative
            before:absolute before:w-0 before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:h-px before:bg-red-500
            hover:before:w-full before:duration-300 ">
            Home
        </a>

        <a href="{{ route('companies.index') }}" class="font-semibold uppercase duration-300 hover:text-indigo-800 text-lg relative
            before:absolute before:w-0 before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:h-px before:bg-red-500
            hover:before:w-full before:duration-300 ">
            companies
        </a>

        <a href="#" class="font-semibold uppercase duration-300 hover:text-indigo-800 text-lg relative
            before:absolute before:w-0 before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:h-px before:bg-red-500
            hover:before:w-full before:duration-300 ">
            community
        </a>

        <a href="#" class="font-semibold uppercase duration-300 hover:text-indigo-800 text-lg relative
            before:absolute before:w-0 before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:h-px before:bg-red-500
            hover:before:w-full before:duration-300 ">
            ideas
        </a>

        <a href="#" class="font-semibold uppercase duration-300 hover:text-indigo-800 text-lg relative
            before:absolute before:w-0 before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:h-px before:bg-red-500
            hover:before:w-full before:duration-300 ">
            who are we ?
        </a>
    </div>


    <div class="h-full flex items-center pr-8">
        <a href="#" class="uppercase text-lg  relative
            before:absolute before:w-0 before:bottom-0 before:left-1/2 before:-translate-x-1/2 before:h-px before:bg-red-500
            hover:before:w-full before:duration-300">
            sign in
        </a>
    </div>


</nav>