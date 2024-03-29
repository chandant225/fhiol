<x-app-layout>
    <x-slot name="siteTitle">
        Contact Us | {{ appSettings('site_name') }}
    </x-slot>

    <x-frontend.partials.page-title>
        <x-slot name="title">
            Contact Us
        </x-slot>
        <x-slot name="breadcrumbs">
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
                /* margin-top: -100px; */
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

        /* CONTACT LEFT */
        .contact-left a,
        .contact-right a {
            color: #323e52;
        }

    </style>


    <section class="inner-page py-5">
        <div class="container">
            <div class="contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-left">
                            <ul>
                                <li>
                                    <h6>The Fred Hollows Intraocular lens laboratory
                                        Tilganga Eye Center</h6>
                                    <span>GPO Box 561, Kathmandu, Nepal</span>
                                </li>
                                <hr>
                                <li class="mt-3">
                                    <h6 class="d-inline me-2">Telephone:</h6><span>+977 1 4493775</span>
                                    <br>
                                    <h6 class="d-inline me-2">Fax:</h6><span>+977 1 4474937</span>
                                </li>
                                <hr>
                                <li class="mt-3">
                                    <h6> Emails</h6>
                                    For general inquiries:
                                    <a href="">tilganga@tilganga.org</a>
                                </li>
                                <hr>


                                <li class="mt-3">
                                    <h6>Marketing:</h6>
                                    <a href="">manoj.thapa@tilganga.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-right">
                            <ul>
                                <li>
                                    <h6>Sales:</h6>
                                    <a href="">sales@tilganga.org
                                    </a>
                                </li>
                                <hr>
                                <li class="mt-3">
                                    <h6>Quality Assurance:</h6>
                                    <a href="">qa@tilganga.org
                                    </a>
                                </li>
                                <hr>
                                <li class="mt-3">
                                    <h6>Engineering queries:</h6>
                                    <a href="">upendra.chaudhary@tilganga.org
                                    </a>
                                </li>
                                <hr>
                                <li class="mt-3">
                                    <h6>Procurement:
                                    </h6>
                                    <a href="">tioprocurement@tilganga.org
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mb-4">
            <div class="contact-section">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pe-0 border text-center d-flex flex-column">
                        <div class="google-map">
                            <div class="responsive-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.3778712932117!2d85.3482650144344!3d27.70561703217626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1981f114d961%3A0xd4b4f33375050e34!2sTilganga%20Eye%20Hospital!5e0!3m2!1sen!2snp!4v1630807875949!5m2!1sen!2snp" width="100%" height="100%" allowfullscreen="allowfullscreen" loading="lazy" style="border: 0px;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 order-first order-md-last">
                        <livewire:frontend.contact-form />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
    <link rel="stylesheet" href="/assets/intl-tel-input/css/intlTelInput.css">
    <style>
        .iti__flag {
            background-image: url("/assets/intl-tel-input/img/flags.png");
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("/assets/intl-tel-input/img/flags@2x.png");
            }
        }

    </style>

    @endpush

</x-app-layout>
