<?php

namespace App\Views\Backend\Components;

use Illuminate\View\Component;

class BreadCrumbs extends Component
{
    protected $breadcrumbs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $breadcrumbs = null
    )
    {
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('backend.components.breadcrumbs');
    }
}
