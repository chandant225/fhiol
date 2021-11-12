<x-app-layout>
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Publication</li>
                    <li>Downloads</li>
                </ol>
                <h2>Download</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <section class="download">
            <div class="container">
                <div class="title-left">
                    <h4>Downloads</h4>
                </div>
                <div class="row">
                    @foreach ($downloads as $download)
                    <div class="col-md-12 d-flex justify-content-between">
                        <h6>{{ $download->title }}</h6>
                        <a href="{{ $download->downloadUrl() }}" target="_blank" download><i class="fas fa-cloud-download-alt"></i> Download</a>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $downloads->links() }}
                </div>
            </div>
        </section>
    </main><!-- End #main -->
</x-app-layout>
