@unless ($breadcrumbs->isEmpty())

    <ol class="breadcrumb bg-transparent pl-0 mb-0 mb-sm-2">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}" style="color: #dd6310; text-decoration: none;">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item text-white active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endunless
