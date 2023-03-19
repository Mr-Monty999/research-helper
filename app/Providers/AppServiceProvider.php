<?php

namespace App\Providers;

use App\Http\Livewire\Steps\CollegeStep;
use App\Http\Livewire\Steps\EducationLevelStep;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path("Helpers/Helper.php");
        Livewire::component("wizard-checkout-component", WizardCheckoutComponent::class);
        Livewire::component("education-level-step", EducationLevelStep::class);
        Livewire::component("college-step", CollegeStep::class);

        Paginator::useBootstrapFive();
    }
}
