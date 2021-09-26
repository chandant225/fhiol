<x-app-layout>
    <section class="distribution">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
                <h2>distribution</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <div class="container">
            {{--
            <div class="title-right">
                <h4>Distributor Enquiry Form</h4>
            </div>
            --}}
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="title-right">
                        <h4>Distributor Enquiry Form</h4>
                    </div>
                    <small
                        ><em
                            >Required fields are marked with<sup
                                class="required"
                                >*</sup
                            ></em
                        ></small
                    >
                    <form class="distribution-form">
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text"/>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Name<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email Address<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Company<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Phone<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Street Address<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>City<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Postal Code<sup>*</sup></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="group">
                                    <input type="text" required />
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>State<sup>*</sup></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea
                                    class="form-control"
                                    rows="4"
                                    placeholder="Which products are you interested in representing?*"
                                ></textarea>
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <button type="submit" class="btn btn-block mb-3">
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
        .distribution {
            margin: 0px 0px 80px 0px;
        }

        .distribution label {
            color: rgba(0, 0, 0, 0.5);
        }

        .distribution input:focus {
            box-shadow: none !important;
        }

        .distribution textarea:focus,
        .distribution textarea:active {
            box-shadow: none !important;
            border: 1px solid #ced4da;
        }

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
