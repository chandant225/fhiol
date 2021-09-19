<x-app-layout>


    <section class="iol">
        <div class="title-right">
            <h4>Over 30 Countries</h4>
        </div>
        <div class="container">
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
            .iol {
                margin: 80px 0;
            }

            .iol p {
                text-align: justify;
            }
            .iol img {
               width: 100%;
               height: 100%;
            }

        </style>
    @endpush

</x-app-layout>
