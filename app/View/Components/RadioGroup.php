<?php 

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RadioGroup extends Component
{
    public string $name;
    public string $label;
    public array $options;
    public ?string $selected;

    public function __construct(string $name, string $label = '', array $options = [], string $selected = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->selected = $selected ?? ($options[0] ?? null);
    }

    public function render(): View|Closure|string
    {
        return view('components.radio-group');
    }
}


?>