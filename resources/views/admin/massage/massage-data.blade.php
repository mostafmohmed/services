<div>
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live='search'>
    </div>

    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="45%">name</th>
                        <th width="45%">subject</th>
                        <th width="45%">massage</th>
                        <th width="45%">email</th>
                        <th width="45%">status</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $massage)
                        <tr>
                            <td>
                                <strong>{{ $massage->name }}</strong>
                            </td>
                            <td>{{ $massage->subject }}</td>
                            <td>{{ $massage->massage }}</td>
                            <td>{{ $massage->email   }}</td>
                            <td>{{ $massage->status== '0' ?'nosee':'see'  }}</td>
                            
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item" href="#"    
                                     
                                            wire:click.prevent="$dispatch('servicUpdate', { id: {{ $massage->id }} })">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceDelete', { id: {{ $massage->id }} })">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a> --}}
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('massageShow', { id: {{ $massage->id }} })">
                                            <i class="bx bx-trash me-1"></i>
                                            Show
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $data->links() }}
        @else
            <span class="text-danger">No results found</span>
        @endif
    </div>
</div>
