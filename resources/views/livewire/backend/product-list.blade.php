<div class="row">
    <div class="col-md-12">
        <x-box class="mb-4 border-0 rounded shadow-sm rounded">
            <form wire:submit.prevent="search" class="form">
                <div class="form-row align-items-center">
                    <div class="col-auto form-group">
                        <label for="">Name</label>
                        <input wire:model.defer="filter.name" type="text" class="form-control" placeholder="Product name">
                    </div>
                    <div class="col-auto form-group ">
                        <label for="">Category</label>
                        <select wire:model.defer="filter.category_id" class="custom-select">
                            <option value="all">All Categories</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto form-group ">
                        <label for="">Status</label>
                        <select wire:model.defer="filter.status" class="custom-select">
                            <option value="all">All</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="col-auto form-group ">
                        <label>Trashed</label>
                        <select wire:model.defer="filter.trashed" class="custom-select">
                            <option value="">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
        </x-box>
    </div>
    <div class="col-md-12">
        <x-box class="border-0 rounded shadow-sm rounded">
            <div class="mb-3">
                <select wire:model="paginate" class="custom-select w-auto">
                    <option value="15">15</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> records per page
                <div class="text-info mt-1 font-weight-bold text-center">
                    <span wire:loading wire:target="sortProducts"><i class="fas fa-spin fa-spinner"></i> Sorting Products</span>
                    <span wire:loading.remove wire:target="sortProducts">Drag and drop rows up/down to show the products on displayed order</span>
                </div>
            </div>
            <table class="table">
                <tr class="bg-light">
                    <td>Image</td>
                    <td>Name</td>
                    <td class="text-center">Subtitle</td>
                    <td>Category</td>
                    <td class="text-center">Views</td>
                    <td>Status</td>
                    <td></td>
                </tr>
                <tbody wire:sortable="sortProducts">
                    @forelse($products as $product)
                    <tr wire:sortable.item="{{ $product->id }}" wire:key={{ $product->id }}>
                        <td>
                            @if($product->featuredImage)
                            <img src="{{ $product->featuredImage->imageUrl() }}" alt="{{ $product->name }}" style="height: 40px; width: auto;">
                            @else
                            <img src="/assets/images/image-placeholder.png" alt="{{ $product->name }}" style="height: 40px; width: auto;">
                            @endif
                        </td>
                        <td>
                            <a class="" href="{{ route('products.show', $product) }}" target="_blank">{{ $product->name }}</a>
                            <div>
                                @if ($product->trashed())
                                <div class="badge badge-danger">Trashed</div>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">{{ $product->sub_title }}</td>
                        <td><span class="badge badge-light font-weight-light">{{ $product->category->name }}</span></td>
                        <td class="text-center">{{ $product->views }}</td>
                        <td>
                            <livewire:product-status-switch :product="$product" :key="$product->id" />
                        </td>
                        <td class="text-right">
                            <div>
                                <a type="button" class="text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-baseline">
                                        @include('svg.verticle-dots')
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('products.show', $product) }}" target="_blank">View</a>
                                    <a class="dropdown-item" href="{{ route('backend.products.edit', $product) }}">Edit</a>
                                    @if($product->trashed())
                                    <form action="{{ route('backend.products.restore', $product) }}" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('patch')
                                        <button class="dropdown-item" type="submit">Restore</button>
                                    </form>
                                    <form action="{{ route('backend.products.forceDelete', $product) }}" onsubmit="return confirm('This will permanantly delete product. Are you sure to delete?')" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                    @else
                                    <form action="{{ route('backend.products.destroy', $product) }}" onsubmit="return confirm('Are you sure to delete?')" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">Trash</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="42" class="text-center font-italic text-danger">No Record Exists</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-between py-3">
                <div class="mb-3 text-muted">
                    Showing records {{ $products->firstItem() }} - {{ $products->lastItem() }} of {{ $products->total() }}
                </div>
                {{ $products->links() }}
            </div>
        </x-box>
    </div>
</div>
