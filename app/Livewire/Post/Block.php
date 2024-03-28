<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Block extends Component
{
    public Post $post;
    public function render()
    {
        return view('livewire.post.block');
    }
}
