<div class="w-full mt-10 px-10">
    <div class="w-full flex space-x-6 items-center ">
        <div class="w-80 overflow-hidden h-80 rounded-full border-4 border-sky-500 relative">
            <img class="object-cover w-full h-full" src="{{asset('assets/media/wall.jpg')}}" alt="">
            <div 
                class="w-36 overflow-hidden h-36 border-4 border-green-500 rounded-full absolute bottom-6 right-6">
                <img class="object-cover w-full h-full" src="{{asset('images/idea.jpg')}}" alt="">
            </div>
        </div>

        <div class="flex flex-col py-2 space-y-6 justify-start">
            <h1 class="font-bold text-4xl">
                {{ $company->name }}
            </h1>

            <h6 class="font-semibold text-2xl">
                {{ $company->description }}
            </h6>

            <div class="gap-2 flex">
                @foreach($company->tags as $tag)
                <div class="px-2 py-1 text-sm rounded-full shadow bg-blue-700/30 text-white">
                    {{ $tag->name }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
