<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cforlfields extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $fieldsList;
     public $shopName;
     public $allFields;
     public $shopId;
    public function __construct($fieldsList,$shopName,$allFields,$shopId)
    {
        $this->fieldsList = $fieldsList;
        $this->shopName = $shopName;
        $this->allFields = $allFields;
        $this->shopId=$shopId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cforlfields',["fields"=>$this->fieldsList ,"shopName"=>$this->shopName,"allFields"=>$this->allFields,"shopId"=>$this->shopId]);
    }
}
