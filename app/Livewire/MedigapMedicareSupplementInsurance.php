<?php

namespace App\Livewire;

use Livewire\Component;

class MedigapMedicareSupplementInsurance extends Component
{
    public function render()
    {
        return view('livewire.medigap-medicare-supplement-insurance')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
