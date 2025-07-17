<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareServicePartD extends Component
{
    public function render()
    {
        return view('livewire.medicare-service-part-d')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
