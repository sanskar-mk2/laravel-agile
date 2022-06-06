<?php

namespace App\Http\Livewire;

use App\Models\Story as ModelsStory;
use Livewire\Component;

class Story extends Component
{

    /** @var string */
    public $title = "";
    public $stories = [];
    public $success_message = "";
    public function add()
    {
        $this->success_message = "";

        $this->validate([
            "title" => ["required", "max:255"]
        ]);

        $story = ModelsStory::create([
            "title" => $this->title
        ]);

        $this->title = "";
        $this->success_message = "'$story->title' has been added to stories.";
        
        $this->stories = ModelsStory::all();
    }

    public function mount()
    {
        $this->stories = ModelsStory::all();
    }

    public function render()
    {
        // return view('livewire.story');
        return view('livewire.story')->extends('layouts.auth');
    }
}
