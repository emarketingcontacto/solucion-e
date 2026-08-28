<?php

namespace App\View\Components\componentsWeb\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Proyecto;

class ProjectCard extends Component
{
    //Variables
    public Proyecto $proyecto;

    public function __construct(Proyecto $proyecto)
    {
        $this->proyecto = $proyecto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.components-web.cards.project-card');
    }
}
