<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Showposts extends Component
{

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.showposts', [
            'posts' => Post::all(),
        ]);
    }
}
