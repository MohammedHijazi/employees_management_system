<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class LangSwitcher extends Component
{
    public $langs =[
        'en' => 'English',
        'ar' => 'Arabic',
    ];

    public $locale;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->locale = App::getLocale();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lang-switcher');
    }
}
