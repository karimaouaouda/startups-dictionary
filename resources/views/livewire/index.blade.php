<div class="w-full py-10">
    <div class="w-full">
        <div class="w-2/3 h-14 mx-auto shadow border border-gray-300 flex">
            <div class="border-e border-slate-500 px-3 leading-14">
                <span>
                    search by
                </span>
                <select name="" id="" class="border-none outline-none h-full bg-transparent focus:ring-0">
                    <option value="name" selectd>name</option>
                    <option value="idea">idea</option>
                    <option value="country">country</option>
                </select>
            </div>
            <input wire:model.live.debounce.1000ms="query" @input="console.log($el.value)" type="text" class="flex-1 h-full border-none bg-transparent px-3 outline-none focus:ring-0" placeholder="your idea is words away...." />
        
            
            <div class="flex items-center justify-center h-full px-4">
            <i wire:loading.class="hidden" class="bi bi-search text-lg h-full flex items-center justify-center"></i>
                <div wire:loading class="w-4 h-4 animate-spin border-y border-y-4 rounded rounded-full border-y-indigo-800"></div>
            </div>
        </div>
    </div>
    <div class="w-full mt-6">
        <div class="w-2/3 mx-auto">
        <div class="full">
            <span class="font-semibold text-2xl">
                Results : 
            </span>
        </div>

        @foreach($companies as $company)
            <livewire:discover.company-card :key="$company->id" :company="$company"/>
        @endforeach
        </div>
    </div>
</div>
