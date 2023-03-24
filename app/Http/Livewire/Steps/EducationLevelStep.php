<?php

namespace App\Http\Livewire\Steps;

use App\Models\Level;
use App\Models\User;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class EducationLevelStep extends StepComponent
{

    public function addToSession($value)
    {
        session()->put("level", $value);
    }
    public function next()
    {

        if (session()->has("level"))
            $this->nextStep();
        else
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => trans("dashboard.Please Choose Your Level")]
            );
    }
    public function render()
    {
        $levels = Level::get();
        return view('livewire.steps.education-level-step', ["levels" => $levels]);
    }
}
