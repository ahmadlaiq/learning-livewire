<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

use function Termwind\render;

#[Title('Post Index')]

class Index extends Component
{
    #[On('postCreated')]

    public function updateList($post)
    {
        
    }

    public function placeholder(){

        return view('livewire.post.placeholder');
    }

    public function render()
    {
        sleep(3);
        return view('livewire.post.index', [
            'posts' => Post::query()->with('user')->latest()->get(),
        ]);
    }
}
