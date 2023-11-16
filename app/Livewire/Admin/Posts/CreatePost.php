<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class CreatePost extends Component
{

    use WithPagination;

    #[Rule(['required', 'min:3'])]
    #[Url(as: 'q')]
    public string $search_posts = '';

    public function updatedSearchPosts(): void
    {
        if ($this->search_posts) {
            $this->resetPage();
        }
    }

    public function render(): View
    {
        $query = Post::query();
        if (empty($this->search_posts)) {
            $posts = $query->paginate(20);
        } else {
            $posts = $query
                ->Where('title', 'like', "%$this->search_posts%")
                ->orWhere('slug', 'like', "%$this->search_posts%")
                ->paginate(20);
        }

        return view('livewire.admin.posts.create-post', [
            'posts' => $posts,
        ]);
    }
    
}
