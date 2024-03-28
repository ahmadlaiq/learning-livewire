<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">        <div class="card-body">
            <h5 class="card-title">
                Create Post
            </h5>
            <form wire:submit='save'>
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input wire:model='form.title' type="text" class="form-control" id="title">
                    @error('form.title')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">Body</label>
                    <textarea wire:model='form.body' class="form-control" id="body" cols="30" rows="10"></textarea>
                    @error('form.body')
                        <div class="text-danger d-block mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>
