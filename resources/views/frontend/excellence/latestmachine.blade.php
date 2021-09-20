<x-app-layout>


    <section class="latestMachine">
        <!-- ======= banner ======= -->
        <section id="banner" class="banner">
            
                <img src="https://images.unsplash.com/photo-1602052577122-f73b9710adba?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGxhYm9yYXRvcnl8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" 
                    alt="">
        </section><!-- End banner -->
        <div class="container">
            <div class="title-left">
                <h4>Latest Machine</h4>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="https://fhiol.com/sites/default/files/styles/large/public/field/image/latest-machines.jpg?itok=w79GSFOp"
                        alt="">
                </div>
                <div class="col-md-9">
                    <p>

                        Equipped with the latest innovation in computer controlled lens production equipment with
                        automatic loading, lathing, turning and milling in one machine for high precision output. This
                        equipment is the industry’s latest version of automatic equipment having the most comprehensive
                        software which is the first of its kind in the world.

                        <br>
                        <br>

                        Equipped with the latest innovation in computer controlled lens production equipment with
                        automatic loading, lathing, turning and milling in one machine for high precision output. This
                        equipment is the industry’s latest version of automatic equipment having the most comprehensive
                        software which is the first of its kind in the world.
                    </p>
                </div>
            </div>
        </div>

    </section>

    @push('scripts')
        <style>
            .latestMachine {
                margin: 0 0 80px 0;
            }

            .latestMachine p {
                text-align: justify;
            }

            .latestMachine .row  img {
                width: 100%;
                height: 100%;
            }

        </style>
    @endpush

</x-app-layout>
