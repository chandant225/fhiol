<x-app-layout>


    <section class="country">
        <!-- ======= banner ======= -->
        <section id="banner" class="banner">

            <img src="https://i0.wp.com/startupbizglobal.com/wp-content/uploads/international-trade.jpg?resize=1148%2C640&ssl=1"
                alt="">
        </section><!-- End banner -->
        <div class="container">
            <div class="title-right">
                <h4>Export</h4>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="https://fhiol.com/sites/default/files/styles/large/public/field/image/30countries.png?itok=rUdLUqrG"
                        alt="">
                </div>
                <div class="col-md-9">
                    <p>
                        FH IOL Lab has exported its products world-wide to over 30 countries in Asia, Australia, South
                        Pacific, Africa, and South America.
                    </p>
                </div>
            </div>
        </div>

    </section>

    @push('scripts')
        <style>
            .country {
                margin: 0 0 80px 0;
            }

            .country p {
                text-align: justify;
            }

            .country .row img  {
                width: 100%;
                height: 100%;
            }

        </style>
    @endpush

</x-app-layout>
