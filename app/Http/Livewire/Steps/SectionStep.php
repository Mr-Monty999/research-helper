<?php

namespace App\Http\Livewire\Steps;

use App\Models\Section;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class SectionStep extends StepComponent
{
    public function render()
    {

        $sections = Section::get();
        return view('livewire.steps.section-step', ["sections" => $sections]);
    }
}
