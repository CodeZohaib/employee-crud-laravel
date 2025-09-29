<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectField extends Component
{
    public string $name;
    public string $label;
    public array $options;
    public string|null $selected;
    public $errorName;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $label = '', array $options = [], ?string $selected = null, $errorName=null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->selected = $selected;
        $this->errorName=$errorName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-field');
    }
}
