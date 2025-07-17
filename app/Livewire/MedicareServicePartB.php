<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareServicePartB extends Component
{
    public function render()
    {
        return view('livewire.medicare-service-part-b') 
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
