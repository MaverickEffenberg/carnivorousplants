<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Plant;

class PlantCard extends Component
{
    public $plant;

    /**
     * Create a new component instance.
     */
    public function __construct(Plant $plant)
    {
        $this->plant = $plant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.plant-card');
    }
}
