<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cviewshop extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $shops;
    public function __construct($shops)
    {
        $this->shops=$shops;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cviewshop',["shops"=>$this->shops]);
    }
}
