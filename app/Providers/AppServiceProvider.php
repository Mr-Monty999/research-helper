<?php

namespace App\Providers;

use App\Http\Livewire\Steps\CollegeStep;
use App\Http\Livewire\Steps\EducationLevelStep;
use App\Http\Livewire\Steps\HelpTypeStep;
use App\Http\Livewire\Steps\MajorStep;
use App\Http\Livewire\Steps\SectionStep;
use App\Http\Livewire\WizardCheckoutComponent;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Livewire::component("wizard-checkout-component", WizardCheckoutComponent::class);
        Livewire::component("education-level-step", EducationLevelStep::class);
        Livewire::component("college-step", CollegeStep::class);
        Livewire::component("section-step", SectionStep::class);
        Livewire::component("major-step", MajorStep::class);
        Livewire::component("help-type-step", HelpTypeStep::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path("Helpers/Helper.php");


        Paginator::useBootstrapFive();
    }
}
