<x-app-layout>


    <section class="latestMachine">
        <div class="title-right">
            <h4>Latest Machines</h4>
        </div>
        <div class="container">
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
                margin: 80px 0;
            }
            .latestMachine p {
                text-align: justify;
            }
            .latestMachine img {
               width: 100%;
               height: 100%;
            }

        </style>
    @endpush

</x-app-layout>
