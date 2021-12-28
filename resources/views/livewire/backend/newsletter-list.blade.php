<div class="row">
    <div class="col-md-12">
        <x-box class="mb-4 border-0 rounded shadow-sm rounded">
            <form wire:submit.prevent="search" class="form">
                <div class="form-row align-items-center">
                    <div class="col-auto form-group">
                        <label for="">Subject</label>
                        <input wire:model.defer="filter.subject" type="text" class="form-control" placeholder="Newsletter Subject">
                    </div>

                    <div class="col-auto form-group ">
                        <label for="">Status</label>
                        <select wire:model.defer="filter.status" class="custom-select">
                            <option value="all">All</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="col-auto form-group ">
                        <label>Trashed</label>
                        <select wire:model.defer="filter.trashed" class="custom-select">
                            <option value="">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
        </x-box>
    </div>
    <div class="col-md-12">
        <x-box class="border-0 rounded shadow-sm rounded">
            <div class="mb-3">
                <select wire:model="paginate" class="custom-select w-auto">
                    <option value="15">15</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> records per page
            </div>
            <table class="table">
                <tr class="bg-light">
                    <td>Subject</td>
                    <td>Status</td>
                    <td>Send Count</td>
                    <td>Send Email</td>
                    <td></td>
                </tr>
                <tbody>
                    @forelse($newsletters as $newsletter)
                    <tr>
                        <td class="text-left">
                            {{ $newsletter->subject }}
                            <div>
                                @if($newsletter->trashed())
                                    <div class="badge badge-danger">Trashed</div>
                                @endif
                            </div></td>
                        <td>
                            <div class="custom-control custom-switch custom-switch-md">
                                <input type="checkbox" @if($newsletter->status) checked @endif class="custom-control-input" id="switch{{ $newsletter->id }}">
                                <label wire:key="swth{{ $newsletter->id }}" wire:click="toggleStatus({{ $newsletter->id }})" wire:loading.attr="disabled" class="custom-control-label" for="switch{{ $newsletter->id }}"><span class="text-info" wire:loading wire:target="toggleStatus{{ $newsletter->id }}"><i class="fas fa-spin fa-spinner"></i></span></label>
                            </div>
                        </td>
                        <td>{{ $newsletter->send_count }}</td>
                        <td>
                            @if($newsletter->status)
                            <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#selectReceipientsModal{{ $newsletter->id }}">
                                <i class="fas fa-paper-plane"></i> Select Receipients
                              </button>
                            @endif
                        </td>
                        <td class="text-right">
                            <div>
                                <a type="button" class="text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-baseline">
                                        @include('svg.verticle-dots')
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" target="blanc" href="{{ route('backend.newsletter.show', $newsletter) }}" target="_blank">View</a>
                                    <a class="dropdown-item" href="{{ route('backend.newsletter.edit', $newsletter) }}">Edit</a>
                                    @if($newsletter->trashed())
                                    <form action="{{ route('backend.newsletter.restore', $newsletter) }}" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('patch')
                                        <button class="dropdown-item" type="submit">Restore</button>
                                    </form>
                                    <form action="{{ route('backend.newsletter.forceDelete', $newsletter) }}" onsubmit="return confirm('This will permanantly delete newsletter. Are you sure to delete?')" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                    @else
                                    <form action="{{ route('backend.newsletter.destroy', $newsletter) }}" onsubmit="return confirm('Are you sure to delete?')" method="POST" class="form-inline d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item" type="submit">Trash</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Select Receipients modal starts -->
                        <div class="modal fade" id="selectReceipientsModal{{ $newsletter->id }}" tabindex="-1" aria-labelledby="selectReceipientsModal{{ $newsletter->id }}Label" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="selectReceipientsModal{{ $newsletter->id }}Label">{{ $newsletter->subject }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                       <div class="d-flex justify-content-between">
                                        <div class="font-weight-bold text-center text-info">Select one or more receipients OR</div>
                                        <div>
                                            <button type="button" onclick="document.querySelectorAll('.checkbox-input').forEach(item=>item.checked?'':item.click());" class="btn btn-outline-info btn-sm"> <i class="fas fa-check"></i> Check All</button>
                                            <button type="button" onclick="document.querySelectorAll('.checkbox-input').forEach(item=>item.checked?item.click():'');" class="btn btn-outline-danger btn-sm"> <i class="fas fa-times"></i> UnCheck All</button>
                                        </div>
                                       </div>
                                        <label for="receipients_list">Receipients List</label>
                                        @error('receipient')<span class="text-danger">Select at least one receipient</span> @enderror
                                        @forelse($receipient_list as $receipient)
                                        <div class="form-check">
                                            <input class="form-check-input checkbox-input" type="checkbox" wire:model.defer="receipients"  @if(in_array($receipient->email,$receipients)) checked @endif value="{{ $receipient->email }}" id="receipients_list{{ $receipient->id }}">
                                            <label class="form-check-label checkbox-form" for="receipients_list{{ $receipient->id }}">
                                                {{ $receipient->email }}
                                            </label>
                                          </div>
                                        @empty
                                            <div class="text-danger">No any receipients</div>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" wire:click.prevent="sendEmail({{ $newsletter->id }})" class="btn btn-primary">Send Email</button>
                                </div>
                            </div>
                            </div>
                        </div>
                     <!-- Select Receipients modal ends here -->
                    @empty
                    <tr>
                        <td colspan="42" class="text-center font-italic text-danger">No Record Exists</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-between py-3">
                <div class="mb-3 text-muted">
                    Showing records {{ $newsletters->firstItem() }} - {{ $newsletters->lastItem() }} of {{ $newsletters->total() }}
                </div>
                {{ $newsletters->links() }}
            </div>
        </x-box>
    </div>
    @push('styles')
        <style>
            .custom-switch.custom-switch-md .custom-control-label {
                padding-left: 2rem;
                padding-bottom: 1.5rem;
                cursor: pointer;
            }

            .custom-switch.custom-switch-md .custom-control-label::before {
                height: 1.5rem;
                width: calc(2rem + 0.75rem);
                border-radius: 3rem;
            }

            .custom-switch.custom-switch-md .custom-control-label::after {
                width: calc(1.5rem - 4px);
                height: calc(1.5rem - 4px);
                border-radius: calc(2rem - (1.5rem / 2));
            }

            .custom-switch.custom-switch-md .custom-control-input:checked ~ .custom-control-label::after {
                transform: translateX(calc(1.5rem - 0.25rem));
            }

            .checkbox-input
                {
                /* Double-sized Checkboxes */
                -ms-transform: scale(2); /* IE */
                -moz-transform: scale(2); /* FF */
                -webkit-transform: scale(2); /* Safari and Chrome */
                -o-transform: scale(2); /* Opera */
                padding: 10px;
                margin-right:3rem;
                }
            .checkbox-form{
                margin-left:5px;
                margin-bottom:10px;

            }
        </style>
    @endpush
    @push('scripts')
    <script>
        Livewire.on('newsletterSent', function(){
            $('.modal').modal('hide');
        })
    </script>
    @endpush
</div>
