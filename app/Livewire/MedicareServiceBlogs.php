<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareServiceBlogs extends Component
{
    public function render()
    {
        return view('livewire.medicare-service-blogs')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
