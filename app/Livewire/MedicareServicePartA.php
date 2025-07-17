<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareServicePartA extends Component
{
    public function render()
    {
        return view('livewire.medicare-service-part-a')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);;
    }
}
