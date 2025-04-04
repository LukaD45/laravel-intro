<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{

    #[Rule("required")]
    public $title;

    #[Rule("required")]
    public $content;

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/showposts', navigate: true);
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
