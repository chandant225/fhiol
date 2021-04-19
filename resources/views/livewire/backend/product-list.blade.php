<div class="row">
    <div class="col-md-12">
        <x-box class="mb-4 rounded">
            <form wire:submit.prevent="search" class="form-inline">
                <div class="form-row align-items-center">
                    <div class="col-auto form-group">
                        <input wire:model.defer="filter.name" type="text" class="form-control" placeholder="Product name">
                    </div>
                    <div class="col-auto form-group ">
                        <select wire:model.defer="filter.category_id" class="custom-select">
                            <option value="all">All Categories</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto form-group ">
                        <select wire:model.defer="filter.status" class="custom-select">
                            <option value="all">All</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
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
        <div class="card z-depth-0">
            <div class="card-body">
                <div class="mb-3">
                    <select wire:model="paginate" class="custom-select w-auto">
                        <option value="15">15</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="10">100</option>
                    </select> records per page
                </div>
                <table class="table">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td>
                                <img src="{{ $product->featuredImage->imageUrl() }}" style="width: 70px; height: 40px;">
                            </td>
                            <td>
                                {{-- <a class="btn-link" href="{{ route('frontend.products.show', $product) }}" target="_blank">{{ $product->name }}</a> --}}
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ priceUnit() }} {{ number_format($product->price) }}
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td class="font-weight-bolder">
                                @if($product->manage_stock)
                                <span class="{{ $product->stock_quantity ? 'text-success' : 'text-danger' }}">
                                    {{ $product->stock_quantity ? 'In stock' : 'Out of stock' }}
                                </span>
                                @else
                                --
                                @endif
                            </td>
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
            </div>
        </div>
    </div>
</div>