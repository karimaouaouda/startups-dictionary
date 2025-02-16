<?php

namespace App\Livewire;

use App\Models\Company;
use Livewire\Component;

class Companies extends Component
{
    public string $query = "";

    public function render()
    {
        if(empty(trim($this->query))){
            $companies = Company::all();
        }else{
            $companies = Company::query()->where('name', 'like', "%{$this->query}%")->get();
        }

        return view('livewire.index', compact('companies'));
    }
}
