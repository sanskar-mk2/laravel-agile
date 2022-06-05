<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Story extends Component
{
    public function render()
    {
        // return view('livewire.story');
        return view('livewire.story')->extends('layouts.auth');
    }
}
