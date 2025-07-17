<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareServicePartC extends Component
{
    public function render()
    {
        return view('livewire.medicare-service-part-c')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
