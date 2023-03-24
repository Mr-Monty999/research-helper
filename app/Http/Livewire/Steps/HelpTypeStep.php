<?php

namespace App\Http\Livewire\Steps;

use App\Models\HelpType;
use App\Models\Setting;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class HelpTypeStep extends StepComponent
{
    public $link;
    public function addToSession($value)
    {
        session()->put("helpType", $value);
    }
    public function render()
    {
        $data[] = "السلام عليكم أنا أدرس في المرحلة : " . session()->get("level");
        $data[] = "الكلية : " . session()->get("college");
        $data[] = "القسم : " . session()->get("section");
        $data[] = "التخصص : " . session()->get("major");
        $data[] = "نوع المساعدة : " . session()->get("helpType");
        $data = implode("%0A", $data);
        $phone = Setting::where("key", "whatsapp_phone")->firstOrNew();
        $this->link = "https://wa.me/$phone->value?text=$data";

        $helpTypes = HelpType::get();
        if (!session()->has("helpType"))
            session()->put("helpType", $helpTypes[0]->name);

        return view('livewire.steps.help-type-step', ["helpTypes" => $helpTypes]);
    }
}
