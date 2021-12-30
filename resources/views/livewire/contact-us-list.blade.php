<div>
    <div class="card shadow-none">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-light">
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>Name</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contactMessages as $contactMessage)
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>
                            <span>{{ $contactMessage->name }}</span>
                            @if(!$contactMessage->viewed())
                            <div class="badge badge-light font-weight-light">New</div>
                            @endif
                        </td>
                        <td>{{ $contactMessage->email }}</td>
                        <td class="text-right">
                            <div class="d-flex justify-content-end">
                                @if($deleteId != $contactMessage->id)
                                <button type="button" wire:click="markViewed('{{ $contactMessage->id }}')" class="btn btn-sm btn-primary mr-3" data-toggle="modal" data-target="#contactUsModal_{{ $contactMessage->id }}" title="View">
                                    <span><i class="fa fa-eye"></i></span>
                                </button>
                                <button  wire:key="delete{{ $contactMessage->id }}" class="btn btn-sm btn-danger mr-3" wire:loading.attr="disabled" wire:target="confirmDelete({{ $contactMessage->id }})" wire:click.prevent="confirmDelete('{{ $contactMessage->id }}')" title="Delete">
                                    <span>
                                        <i wire:loading.remove wire:target="confirmDelete({{ $contactMessage->id }})" class="fa fa-trash-alt"></i>
                                        <i wire:loading wire:target="confirmDelete({{ $contactMessage->id }})" class="fas fa-spin fa-spinner"></i>
                                    </span>
                                </button>
                                @endif
                                @if($deleteId == $contactMessage->id)
                                <button type="button" wire:key="confirm{{ $contactMessage->id }}" class="btn btn-sm btn-danger mr-3" wire:click.prevent="deleteMsg" wire:loading.attr="disabled" wire:target="deleteMsg">
                                    <span wire:loading.remove wire:target="deleteMsg">Confirm</span>
                                    <i wire:loading wire:target="deleteMsg" class="fas fa-spin fa-spinner"></i>
                                </button>
                                <button   wire:key="cancel{{ $contactMessage->id }}" class="btn btn-sm btn-success" wire:click.prevent="cancelDelete" wire:loading.attr="disabled" wire:target="cancelDelete"><span wire:loading.remove wire:target="cancelDelete">Cancel</span> <i wire:loading wire:target="cancelDelete" class="fas fa-spin fa-spinner"></i></button>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="42" class="text-center font-italic"> No items found !!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="my-3">
                {{ $contactMessages->links() }}
            </div>
        </div>
    </div>

    @foreach ($contactMessages as $contactMessage)
    <div class="modal fade" id="contactUsModal_{{ $contactMessage->id }}" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel_{{ $contactMessage->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactUsModalLabel">Contact Us Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <tr>
                            <td>From</td>
                            <td>{{ $contactMessage->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="text" id="email-of-{{ $contactMessage->id }}" value="{{ $contactMessage->email }}" style="position: fixed; top: -1000px; left: -10000px;">
                                <span>{{ $contactMessage->email }}</span>
                                <button class="btn btn-link" type="button" role="button" onclick="copyValueToClipboard('email-of-{{ $contactMessage->id }}')"><i class="far fa-clone"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{ $contactMessage->mobile }}</td>
                        </tr>
                        <tr>
                            <td colspan="42">
                                <label class="d-block">Message</label>
                                {{ $contactMessage->message }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <a class="mr-auto btn btn-primary" href="mailto:{{ $contactMessage->email }}">Reply</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="markViewed('{{ $contactMessage->id }}')">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @push('styles')
    <script>
        function copyValueToClipboard(id) {
            var copyText = document.getElementById(id);
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand("copy");

            Swal.fire({
                title: 'Copied to clipboard'
                , icon: null
                , position: "bottom"
                , timer: 3000
                , toast: true
                , showCancelButton: false
                , showConfirmButton: false
            })
        }

    </script>

    @endpush
</div>
