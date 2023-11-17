@extends('admin.master')
@section('Content')


<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>
    
            {{-- <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
                Add New
            </button> --}}
    
            {{-- @livewire('admin.skills.create-skills') --}}
            <button
            type="button"
            class="btn btn-sm btn-primary mb-2 mx-2"
            data-bs-toggle="modal"
            data-bs-target="#basicModal"
          >
            Launch modal
          </button>
    @livewire('admin.skills.create-skills')
          <!-- Modal -->
        
        </div>
    
        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.skills.date-sskill')
            </div>
        </div>
        @livewire('admin.skills.skill-update')
        @livewire('admin.skills.skills-delet')
        @livewire('admin.skills. skills-show')
       
    {{-- 
        @livewire('admin.skills.skills-update')
        @livewire('admin.skills.skills-delete')
        @livewire('admin.skills.skills-show') --}}
    </div>
</div>




    

@endsection
