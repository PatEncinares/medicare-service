<?php

namespace App\Livewire;

use Livewire\Component;

class MedicareServiceBlogsContents extends Component
{
    public function render()
    {
        return view('livewire.medicare-service-blogs-contents')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
