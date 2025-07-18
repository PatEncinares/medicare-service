<?php

namespace App\Livewire;

use Livewire\Component;

class MedicalInsuranceProviderCoveragePageContentPart2 extends Component
{
    public function render()
    {
        return view('livewire.medical-insurance-provider-coverage-page-content-part2')
            ->layout('components.layouts.guest')
            ->layoutData([
                'title' => 'Home',
                'description' => 'Welcome to the home page.',
            ]);
    }
}
