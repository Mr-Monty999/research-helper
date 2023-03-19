<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Steps\CollegeStep;
use App\Http\Livewire\Steps\EducationLevelStep;
use App\Http\Livewire\Steps\HelpTypeStep;
use App\Http\Livewire\Steps\MajorStep;
use App\Http\Livewire\Steps\SectionStep;
use Livewire\Component;
use Spatie\LivewireWizard\Components\WizardComponent;

class WizardCheckoutComponent extends WizardComponent
{

    public function steps(): array
    {
        return [
            EducationLevelStep::class,
            CollegeStep::class,
            SectionStep::class,
            MajorStep::class,
            HelpTypeStep::class
        ];
    }
    // public function render()
    // {
    //     return view('livewire.wizard-checkout-component');
    // }
}
