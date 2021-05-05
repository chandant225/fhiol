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
                    <tr class="@if(!$contactMessage->viewed()) table-success @endif">
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>{{ $contactMessage->name }}</td>
                        <td>{{ $contactMessage->email }}</td>
                        <td class="text-right">
                            <div class="d-flex justify-content-end">
                                @if($deleteId != $contactMessage->id)
                                <button type="button" wire:click="markViewed('{{ $contactMessage->id }}')" class="btn btn-sm btn-primary mr-3" data-toggle="modal" data-target="#contactUsModal_{{ $contactMessage->id }}" title="View">
                                    <span><i class="fa fa-eye"></i></span>
                                </button>
                                <button class="btn btn-sm btn-danger mr-3" wire:click.prevent="confirmDelete('{{ $contactMessage->id }}')" title="Delete"><span><i class="fa fa-trash-alt"></i></span></button>
                                @endif
                                @if($deleteId == $contactMessage->id)
                                <button class="btn btn-sm btn-danger mr-3" wire:click.prevent="delete()">Confirm</button>
                                <button class="btn btn-sm btn-success" wire:click.prevent="cancelDelete()">Cancel</button>
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
                            <td>{{ $contactMessage->email }}</td>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="markViewed('{{ $contactMessage->id }}')">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
