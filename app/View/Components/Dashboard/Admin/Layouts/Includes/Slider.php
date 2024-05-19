<?php

namespace App\View\Components\Dashboard\Admin\Layouts\Includes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    public function __construct(){}

    public function render(): View | Closure | string
    {
        return view('components.dashboard.admin.layouts.includes.slider');
    
    }//end of render

}//end of class