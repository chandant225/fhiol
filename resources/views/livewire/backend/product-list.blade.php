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
                        <label for="">Marked New</label>
                        <select wire:model.defer="filter.is_new" class="custom-select">
                            <option value="">All</option>
                            <option value="1">Marked New</option>
                            <option value="0">Not Marked New</option>
                        </select>
                    </div>
                    <div class="col-auto form-group ">
                        <label for="">Featured</label>
                        <select wire:model.defer="filter.featured" class="custom-select">
                            <option value="">All</option>
                            <option value="1">Featured</option>
                            <option value="0">Unfeatured</option>
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
            </div>
            <table class="table">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td>
                            <img src="{{ $product->featuredImage->imageUrl() }}" alt="{{ $product->name }}" style="height: 40px; width: auto;">
                        </td>
                        <td>
                            <a class="font-weight-bolder" href="{{ route('products.show', $product) }}" target="_blank">{{ $product->name }}</a>
                        </td>
                        <td>
                            <div>
                                {{ priceUnit() }} {{ number_format($product->currentPrice()) }}
                            </div>
                            <div style="text-decoration: line-through; font-size: .9rem;">
                                @if ($product->hasDiscount())
                                {{ priceUnit() }} {{ number_format($product->price) }}
                                @endif
                            </div>
                        </td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            {{-- <livewire:product-status-switch :product="$product" :key="$product->id" /> --}}
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
                                    <form action="{{ route('backend.products.destroy', $product) }}" onsubmit="return confirm('Are you sure to delete?')" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
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
