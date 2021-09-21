<x-app-layout>


    <section class="quality">

        <!-- ======= banner ======= -->
        <section id="banner" class="banner">

            <img src="https://images.unsplash.com/photo-1517948430535-1e2469d314fe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="">
        </section><!-- End banner -->

        <div class="container">
            <div class="title-right">
                <h4>Quality Certification</h4>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <img src="https://fhiol.com/sites/default/files/styles/large/public/field/image/certification.png?itok=U3a-pg2w"
                        alt="">
                </div>
                <div class="col-md-9">
                    <p>

                        Adherence to the Highest Quality Standards is a consistent feature - FH IOL Lab was the first
                        IOL manufacturer of Southeast Asia to have received the CE mark in. The focus has always been on
                        producing an extremely safe product.
                        Adherence to the Highest Quality Standards is a consistent feature - FH IOL Lab was the first
                        IOL manufacturer of Southeast Asia to have received the CE mark in. The focus has always been on
                        producing an extremely safe product.

                        <br>
                        <br>
                        <br>
                        <span>PDF:-</span>
                        <a href=""><i class="far fa-file-pdf me-2"> </i> Click here to download </a>
                    </p>
                </div>
            </div>
        </div>

    </section>

    @push('scripts')
        <style>
            .quality {
                margin: 0 0 80px 0;
            }

            .quality p {
                text-align: justify;
            }

            .quality p i {
                color: white;
            }

            .quality p a {
                text-decoration: none;
                padding: 15px 20px;
                background-color: #dd6310;
                color: white;
                border-radius: 3px;
            }

            .quality p span {
                color: rgba(0, 0, 0, 0.8);
                font-weight: 800;
            }

            .quality .row img {
                width: 100%;
                height: 100%;
            }

        </style>
    @endpush

</x-app-layout>
