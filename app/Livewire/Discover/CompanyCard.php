<?php

namespace App\Livewire\Discover;

use App\Models\Company;
use Livewire\Component;

class CompanyCard extends Component
{
    public Company $company;

    public function render()
    {
        return view('livewire.discover.company-card', [
            'company' => $this->company
        ]);
    }
}
