@if($active)
<div class="modal fade" id="popup-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body @if($type == 'image') p-0 @endif">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               @if($type == 'image')
               <img class="img-fluid img-thumbnail" src="{{ $popup->imageUrl() }}">
               @else
               {!! $popup->content !!}
               @endif
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        let popupDelay = {{ $delay}};

        function ignitePopupModal() {
            setTimeout(function() {
                $("#popup-modal").modal('show');
            }, popupDelay);
        }
        @if($sessionEnabled)
        console.log('Session enabled for popup.');
        if (sessionStorage.getItem('popState') != 'shown') {
            ignitePopupModal();
            sessionStorage.setItem('popState', 'shown')
        }
        @else
        console.log('Session disabled for popup.');
            ignitePopupModal();
        @endif
    });

</script>

<style>
    #popup-modal .modal-content .btn-close {
        position: absolute;
        right: 10px;
        top: 10px;
        cursor: pointer;
        z-index: 101;
        padding: 10px;
    }
    #popup-modal .modal-content .btn-close:hover {
        background-color: #eaeaec;
    }
</style>
@endpush
@endif