<x-app-layout>
    <x-slot name="siteTitle">
        Find a Store | {{ siteName() }}
    </x-slot>

    <style>
        html {
            --find-store-primary-color: #8000ff;
            --find-store-bar-negative-margin: 6rem;
        }

    </style>
    <div style="position: relative;">
        <div class="text-center py-5" style="background-color: var(--find-store-primary-color); color: #f6f5ff;">
            <h1 class="my-md-4">{{ __('Find a Store') }}</h1>
            <div style="height: var(--find-store-bar-negative-margin)"></div>
        </div>
        <div class="" style="position: absolute; top-100%; left: 0; right: 0;">
            <svg class="d-block" style="color: var(--find-store-primary-color);" preserveAspectRatio="none" fill="currentColor" viewBox="0 0 32 1" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 1C4 1 0 0 0 0H32C32 0 28 1 16 1Z"></path>
            </svg>
        </div>
    </div>

    <div class="bg-light pb-md-5" style="margin-top: calc(-1 * var(--find-store-bar-negative-margin))">
        <div class="container pb-5">
            <livewire:frontend.store.finder />
        </div>
    </div>
</x-app-layout>
