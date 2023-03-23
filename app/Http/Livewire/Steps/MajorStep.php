<?php

namespace App\Http\Livewire\Steps;

use App\Models\Major;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class MajorStep extends StepComponent
{

    public function addToSession($value)
    {
        session()->put("major", $value);
    }
    public function render()
    {
        $majors = Major::get();
        return view('livewire.steps.major-step', ["majors" => $majors]);
    }
}
