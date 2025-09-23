<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class FileUpload extends Component
{
    public $name;
    public $label;
    public $accept;
    public $required;
    public $errorName;

    public function __construct($name, $label = null, $accept = 'image/*', $required = false, $errorName=null)
    {
        $this->name = $name;
        $this->label = $label ?? ucfirst(str_replace('_', ' ', $name));
        $this->accept = $accept;
        $this->required = $required;
        $this->errorName=$errorName;
    }

    public function render()
    {
        return view('components.file-upload');
    }
}
