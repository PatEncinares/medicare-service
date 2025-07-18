<?php

namespace App\Livewire;

use Livewire\Component;

class MedicalInsuranceProviderCoveragePageContent extends Component
{
    public function render()
    {
        return view('livewire.medical-insurance-provider-coverage-page-content')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
