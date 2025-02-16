<a href="{{route('companies.show', ['company' => $company->id])}}">
    <div class="w-full hover:scale-[1.01] group duration-300 ease-in-out cursor-pointer rounded-xl overflow-hidden border shadow my-4 h-72 relative">
        <img src="{{ asset('assets/media/wall.jpg') }}" class="absolute top-0 left-0 w-full h-full object-cover" alt="">
        <div class="absolute w-full h-full bg-gradient-to-t from-slate-900 to-transparent top-0 left-0"></div>

        <div class="relative w-full h-full flex flex-col justify-between py-4 px-6">
            <div class="w-full flex justify-around items-center relative py-2 -top-full duration-300 ease-in-out group-hover:top-0 ">
                <div class="flex space-x-1 items-center p-1 rounded bg-white shadow">
                    <i class="bi bi-link-45deg text-md"></i>
                    <span href="{{ $company->website }}" class="text-sm hover:underline">
                        {{ $company->website }}
                    </span>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <div class="flex space-x-4">
                    <img class="w-32 h-32 shadow rounded-full border-4 border-sky-800 " src="{{ asset('assets/media/bg.jpg') }}" alt="">

                    <div class="flex justify-around flex-col">
                        <h1 class="font-bold text-white text-2xl tracking-wide capitalize">
                            {{$company->name}}
                        </h1>
                        <div class="flex items-center space-x-1">
                            <i class="bi bi-geo-alt text-sm text-white"></i>
                            <h4 class="text-white text-sm tracking-wide uppercase">
                                United states
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>