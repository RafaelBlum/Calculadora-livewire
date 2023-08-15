<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use function Symfony\Component\HttpFoundation\Session\Storage\Handler\convertStringToInt;

class Calculator extends Component
{
    public $math = '';
    public $tot = 0;
    public $error = '';

    public function render()
    {
        return view('livewire.calculator', [
            "title" => "Calculadora",
            "user"=> User::factory()->create(),
            "component" => "Componente"
        ]);
    }

    public function addMath($num)
    {
        $this->math .= $num;
    }

    public function result()
    {
        $this->tot = eval('return ' . $this->math . ';');
    }

    public function clear()
    {
        $this->math = '';
        $this->tot = 0;
    }
}


