<div class="card overflow-hidden border-0 shadow" style="border-radius: 25px;">
    <style>
        #store-search-form {
            padding: 20px 20px;
            display: flex;
            border-bottom: 1px solid #cccc;
        }

        #store-search-form>input {
            -webkit-box-flex: 1;
            flex-grow: 1;
            padding: .9em;
            border: none;
            font-size: 1.3rem;
        }

        #store-search-form>input::placeholder {
            color: #97a6ba;
        }

        #store-search-form>input:focus {
            outline: none;
        }

        #store-search-form>button {
            padding-left: 25px;
            padding-right: 25px;
            font-size: 1.5rem;
            background-color: transparent;
            outline: none;
            border: none;
            color: #97a6ba;
        }

        .search-match-count {
            color: #8b8c8f;
        }

        .store-card {
            border-bottom: 1px dashed #ccc;
            color: #484e5a;
        }

        .store-card:last-of-type {
            border-bottom: none;
        }

        .store-card .store-name {
            color: #333751;
            font-size: 1.3rem;
        }

        .store-card .icon {
            display: inline-block;
            color: #a26bff;
            margin-right: 10px;
            background-color: #f3f3f3;
            padding: 8px;
            border-radius: 50%;
        }


        .store-card .icon svg {
            display: inline-block;
            width: 1.4rem;
            height: 1.4rem;
        }

        .store-card a {
            color: inherit;
        }

        @media only screen and (max-width: 600px) {
            #store-search-form {
                padding: 20px 20px;
            }

            #store-search-form>input {
                padding: .5em;
                font-size: 1rem;
            }

            #store-search-form>button {
                padding-left: 10px;
                padding-right: 10px;
                font-size: 1rem;
            }
        }

    </style>
    <form id="store-search-form" class="bg-">
        <button type="button"><i class="fa fa-search"></i></button>
        <input type="text" wire:model.debounce.500ms="searchText" placeholder="Search by location">
        <button type="reset"><i class="fa fa-times"></i></button>
    </form>
    @if($searchText)
    <div class="search-match-count pt-4 px-4">
        {{ count($stores) }} stores found for "{{ $searchText }}"
    </div>
    @endif
    @foreach($stores as $store)
    <div class="store-card py-4 px-4">
        <div class="">
            <h4 class="store-name">{{ $store->name }}</h4>
            @hasanyrole('admin')
            <a class="btn bt-link pl-0" href="{{ route('backend.stores.edit', $store) }}">
                <svg class="mr-1" style="height: 1rem; width: 1rem; color: #874ee8;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <span>Edit</span>
            </a>
            @endhasanyrole
            <div class="row">
                @if($store->address)
                <div class="col-md-6 py-2">
                    <span class="icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </span>
                    <span>{{ $store->address }}</span>
                </div>
                @endif
                @if($store->phone)
                <div class="col-md-6 py-2">
                    <span class="icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </span>
                    <span><a href="tel:{{ $store->phone }}">{{ $store->phone }}</a></span>
                </div>
                @endif
                @if($store->email)
                <div class="col-md-6 py-2">
                    <span class="icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </span>
                    <span><a href="mailto:{{ $store->email }}">{{ $store->email }}</a></span>
                </div>
                @endif
                @if($store->website)
                <div class="col-md-6 py-2">
                    <span class="icon">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <span><a href="{{ $store->website }}" target="_blank">{{ $store->website }}</a></span>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    @if ($stores->hasPages())
    <div class="d-flex justify-content-center pt-4 pb-3">
        {{ $stores->links() }}
    </div>
    @endif
</div>
