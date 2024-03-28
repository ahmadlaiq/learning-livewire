<div>
    @foreach ($posts as $post)
        <livewire:post.block :post="$post" :key="$post->id" />
    @endforeach
</div>
