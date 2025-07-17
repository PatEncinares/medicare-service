<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareAdvantangePlans extends Component
{
    public function render()
    {
        return view('livewire.medicare-advantange-plans')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);;
    }
}
