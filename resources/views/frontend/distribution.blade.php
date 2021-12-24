<x-app-layout>
    <section class="distribution">
        <!-- ======= Breadcrumbs ======= -->
        {{-- <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
                <h2>Distribution</h2>
            </div>
        </section> --}}
        <!-- End Breadcrumbs -->

        <div class="container py-5 mt-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="title-right">
                        <h4 style="color: #dd6310; line-height: 1.9;">Enquiry Form</h4>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <div class="mb-2">Oops! Please correct the mistakes below.</div>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <small><em>Required fields are marked with<sup class="required">*</sup></em></small>
                    <form action="{{ route('distribution.apply') }}" method="POST" class="distribution-form">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text" name="name" placeholder=" " value="{{ old('name') }}"/>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Name<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="email" name="email" placeholder=" " value="{{ old('email') }}" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email Address<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text" name="company_name" placeholder=" " value="{{ old('company_name') }}" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Company<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="text" name="contact" placeholder=" " value="{{ old('contact') }}" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Phone<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text" name="street_address" placeholder=" " value="{{ old('street_address') }}" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Street Address<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="text" name="city" placeholder=" " value="{{ old('city') }}" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>City<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Postal Code<sup>*</sup></label>
                                </div>
                            </div> --}}
                            <div class="col">
                                <div class="group">
                                    <input type="text" name="state" placeholder=" " value="{{ old('state') }}"/>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>State</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea name="message" class="form-control p-3" rows="5" placeholder="Which products are you interested in representing?*">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn btn-block py-3 mb-3">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <style>
            .distribution button {
            background: #dd6310;
            border: none;
            border-radius: 3px;
            width: 30%;
            color: white;
        }

        .distribution button:hover {
            opacity: 0.9 !important;
            color: #fff;
        }
        </style>
    @endpush
</x-app-layout>
