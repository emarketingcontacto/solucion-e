<?php

namespace App\View\Components\componentsWeb\Shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactForm extends Component
{
    /** Variables*/
    public bool $isPage;
    public function __construct(bool $isPage = false)
    {
        $this->isPage = $isPage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.components-web.shared.contact-form');
    }
}
