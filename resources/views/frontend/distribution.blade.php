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
        </section><!-- End Breadcrumbs -->

        <div class="container">
            {{-- <div class="title-right">
                <h4>Distributor Enquiry Form</h4>
            </div> --}}
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="title-right">
                        <h4>Distributor Enquiry Form</h4>
                    </div>
                    <form class="distribution-form">
                    <div class="row">
                        <div class="col">
                            <div class="group">
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Email address*</label>
                            <input type="text" class="form-control" placeholder="Enter your email"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Company*</label>
                            <input type="text" class="form-control" placeholder="Enter your company name"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Phone*</label>
                            <input type="text" class="form-control" placeholder="Enter your phone number"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Stress Address*</label>
                            <input type="text" class="form-control" placeholder="Enter your address"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">City*</label>
                            <input type="text" class="form-control" placeholder="Enter your city"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Postal Code*</label>
                            <input type="text" class="form-control" placeholder="Enter your postal code"
                                aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">State*</label>
                            <input type="text" class="form-control" placeholder="Enter your state"
                                aria-label="Last name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Which products are you
                                intrested in
                                representing>*</label>
                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex justify-content-center">
                        <button type="submit" class="btn  btn-block mb-3">Send</button>
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
                color: rgba(0, 0, 0, 0.8)
            }

            .distribution input:focus {
                box-shadow: none !important
            }

            .distribution textarea:focus {
                box-shadow: none !important
            }

            .distribution button {
                background: #dd6310;
                border: none;
                border-radius: 3px;
                width: 30%;
                color: white
            }

            .distribution button:hover {
                opacity: 0.9 !important;
            }

        </style>
    @endpush

</x-app-layout>
