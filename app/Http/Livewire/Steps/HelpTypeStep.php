<?php

namespace App\Http\Livewire\Steps;

use App\Models\HelpType;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class HelpTypeStep extends StepComponent
{
    public function nextStep()
    {
        for ($i = 0; $i < 4; $i++) {
            $this->previousStep();
        }
    }
    public function render()
    {
        $helpTypes = HelpType::get();
        return view('livewire.steps.help-type-step', ["helpTypes" => $helpTypes]);
    }
}
