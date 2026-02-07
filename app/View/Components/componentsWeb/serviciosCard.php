<?php

namespace App\View\Components\componentsWeb;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Servicio;

class serviciosCard extends Component
{
    /**
     * Create a new component instance.
     */
    //Variables
    public Servicio $servicio;
    public function __construct(Servicio $servicio)
    {
        $this->servicio = $servicio;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.components-web.servicios-card');
    }
}
