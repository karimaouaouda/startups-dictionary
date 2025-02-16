<?php

namespace App\Livewire\Discover;

use Livewire\Component;

class Company extends Component
{

    public \App\Models\Company $company;
    public function render()
    {
        return view('livewire.discover.company');
    }
}
