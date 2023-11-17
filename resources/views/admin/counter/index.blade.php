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
                        <th width="45%">icon</th>
                        <th width="45%">count</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $count)
                        <tr>
                            <td>
                                <strong>{{ $count->name }}</strong>
                            </td>
                            <td>{{ $count->icon }}</td>
                            <td>{{ $count->count }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"    
                                     
                                            wire:click.prevent="$dispatch('countUpdate', { id: {{ $count->id }} })">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillDelete', { id: {{ $count->id }} })">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillShow', { id: {{ $count->id }} })">
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
