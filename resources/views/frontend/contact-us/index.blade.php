<x-app-layout>
    <x-slot name="siteTitle">
        Contact Us | {{ config('app.name') }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Contact Us
        </x-slot>
        <x-slot name="breadcrumbs">
            {{-- Home / Contact Us --}}
            {{ Breadcrumbs::render('contact-us') }}
        </x-slot>
    </x-frontend.partials.page-title>

    <style>
        .block-title {
            color: #46525f;
        }

        .block-description {
            font-size: .9rem;
            color: #6e7279;
        }

        .contact-form {
            background-color: #fff;
        }

        @media only screen AND (min-width: 700px) {
            .contact-form {
                margin-top: -100px;
            }
        }



        .contact-form label {
            font-weight: 500;
            color: #323e52;
            margin-bottom: 5px;
        }

        .contact-form label.required::after {
            content: '*';
            color: #f74b4b;
            margin-left: 5px;
        }

    </style>
    <div class="bg-">

        <div class="container py-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-white h-100 p-4">
                        <h3 class="block-title text-uppercase">Get In Touch</h3>
                        <p class="block-description">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic officiis doloribus soluta? Animi incidunt laboriosam iusto, blanditiis aut ipsa voluptatem?
                        </p>
                        <div class="my-3"></div>
                        <div class="py-2">
                            <span class="text-theme-accent-color mr-3"><i class="fa fa-envelope"></i></span>
                            <span>support@better.com.np</span>
                        </div>
                        <div class="py-2">
                            <span class="text-theme-accent-color mr-3"><i class="fa fa-phone"></i></span>
                            <span>(+977) 0123-4256</span>
                        </div>
                        <div class="py-2">
                            <span class="text-theme-accent-color mr-3"><i class="fa fa-map-marker"></i></span>
                            <span>Koteshwor-12, Kathmandu, Nepal</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                <livewire:frontend.contact-form />
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
