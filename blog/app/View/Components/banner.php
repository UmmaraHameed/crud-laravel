<?php

namespace App\View\Components;

use Illuminate\View\Component;

class banner extends Component
{
    public $msg;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct($msg,$class)
    {
        //
        $this->msg= $msg;
        $this->class= $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.banner');
    }
}
