<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardLayout extends Component
{
    /**
     * The page title.
     */
    public $title;
    
    /**
     * The business unit identifier.
     */
    public $businessUnit;
    
    /**
     * The display name of the business unit.
     */
    public $businessUnitName;

    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $businessUnit = 'enterprise', $businessUnitName = null)
    {
        $this->title = $title;
        $this->businessUnit = $businessUnit;
        $this->businessUnitName = $businessUnitName ?? ucfirst($businessUnit);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-layout');
    }
}