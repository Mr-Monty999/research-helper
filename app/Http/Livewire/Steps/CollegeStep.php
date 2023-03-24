<?php

namespace App\Http\Livewire\Steps;

use App\Models\College;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class CollegeStep extends StepComponent
{
    public function addToSession($value)
    {
        session()->put("college", $value);
    }
    public function next()
    {

        if (session()->has("college"))
            $this->nextStep();
        else
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => trans("dashboard.Please Choose Your College")]
            );
    }
    public function render()
    {
        $colleges = College::get();
        return view('livewire.steps.college-step', ["colleges" => $colleges]);
    }
}
