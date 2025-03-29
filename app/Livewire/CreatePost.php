<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{

    public $title;
    public $content;

    public function save()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/showposts');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
