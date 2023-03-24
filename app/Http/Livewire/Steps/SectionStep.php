<?php

namespace App\Http\Livewire\Steps;

use App\Models\Section;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class SectionStep extends StepComponent
{

    public function addToSession($value)
    {
        session()->put("section", $value);
    }
    public function next()
    {

        if (session()->has("section"))
            $this->nextStep();
        else
            $this->dispatchBrowserEvent(
                'alert',
                ['type' => 'error',  'message' => trans("dashboard.Please Choose Your Section")]
            );
    }
    public function render()
    {

        $sections = Section::get();
        return view('livewire.steps.section-step', ["sections" => $sections]);
    }
}
