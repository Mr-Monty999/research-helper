<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Steps\CollegeStep;
use App\Http\Livewire\Steps\EducationLevelStep;
use Livewire\Component;
use Spatie\LivewireWizard\Components\WizardComponent;

class WizardCheckoutComponent extends WizardComponent
{

    public function steps(): array
    {
        return [
            EducationLevelStep::class,
            CollegeStep::class
        ];
    }
    // public function render()
    // {
    //     return view('livewire.wizard-checkout-component');
    // }
}
