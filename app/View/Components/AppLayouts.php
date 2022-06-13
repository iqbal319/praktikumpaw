<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $content;
    public $title;
    public $page;
    public function __construct($content = "Content", $title="Title", $page="")
    {
        $this->$content = $content;
        $this->title = $title;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app-layouts');
    }
}
