<div class="card">
    <div class="card-header">
        <h5>Add New Category</h5>
    </div>
    <div class="card-body">

        <form wire:submit.prevent="save">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" wire:model="category.name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" wire:model="category.slug" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" wire:model="category.description"></textarea>
            </div>
            
            <div class="form-group">
              <button class="btn btn-primary ml-0">Add Category</button>
            </div>
        </form>
    </div>
</div>