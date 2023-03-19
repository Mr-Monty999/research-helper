<?php

namespace App\Http\Livewire\Steps;

use App\Models\Level;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class EducationLevelStep extends StepComponent
{

    public function render()
    {
        $levels = Level::get();
        return view('livewire.steps.education-level-step', ["levels" => $levels]);
    }
}
