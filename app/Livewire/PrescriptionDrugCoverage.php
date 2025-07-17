<?php

namespace App\Livewire;

use Livewire\Component;

class PrescriptionDrugCoverage extends Component
{
    public function render()
    {
        return view('livewire.prescription-drug-coverage')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
        
    }
}
