<?php

namespace App\Http\Livewire\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class CollegeStep extends StepComponent
{
    public function render()
    {
        return view('livewire.steps.college-step');
    }
}
