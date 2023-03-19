<?php

namespace App\Http\Livewire\Steps;

use App\Models\College;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class CollegeStep extends StepComponent
{
    public function render()
    {
        $colleges = College::get();
        return view('livewire.steps.college-step', ["colleges" => $colleges]);
    }
}
