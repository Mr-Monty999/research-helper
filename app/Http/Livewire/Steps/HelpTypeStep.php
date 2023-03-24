<?php

namespace App\Http\Livewire\Steps;

use App\Models\HelpType;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class HelpTypeStep extends StepComponent
{
    public function addToSession($value)
    {
        session()->put("helpType", $value);
    }
    public function nextStep()
    {
        $data[] = "السلام عليكم أنا أدرس في المرحلة : " . session()->get("level");
        $data[] = "الكلية : " . session()->get("college");
        $data[] = "القسم : " . session()->get("section");
        $data[] = "التخصص : " . session()->get("major");
        $data[] = "نوع المساعدة : " . session()->get("helpType");
        $data = implode("%0A", $data);
        $link = "https://wa.me/+966530007074?text=$data";
        redirect()->to($link);
    }
    public function render()
    {
        $helpTypes = HelpType::get();
        return view('livewire.steps.help-type-step', ["helpTypes" => $helpTypes]);
    }
}
