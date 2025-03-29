<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Todos')]

class Todos extends Component
{
    public $todo = "";
    public $todos = [
        'Take out the trash',
        'Buy groceries',
    ];

    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
