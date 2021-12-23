<div>
    <div class="text-info mt-1 font-weight-bold text-center">
        <span wire:loading wire:target="sortCategories"><i class="fas fa-spin fa-spinner"></i> Sorting Categories</span>
        <span wire:loading.remove wire:target="sortCategories">Drag and Drop rows up/down to show the categories on displayed order</span>
    </div>
    <x-box class="border-0 rounded">
        <table class="table">
            <thead>
                <tr class="bg-light text-uppercase" style="font-size: .8rem; font-weight: 700;">
                    <td>Name</td>
                    <td>Slug</td>
                    <td class="text-center">Status</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody wire:sortable="sortCategories">
                @foreach ($categories as $category)
                <tr wire:sortable.item="{{ $category->id }}" wire:key={{ $category->id }}>
                    @include('category.listing-row', ['category' => $category ,'level' => 1])
                </tr>
                @foreach($category->subCategories as $secondLvlCat)
                @include('category.listing-row', ['category' => $secondLvlCat ,'level' => 2])
                @endforeach
                @endforeach
            </tbody>
        </table>
    </x-box>
</div>
