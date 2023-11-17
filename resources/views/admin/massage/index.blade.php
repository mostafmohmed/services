@extends('admin.master')
@section('Content')


<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">counter</h4>
    
            {{-- <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                data-bs-target="#createModal">
                Add New
            </button> --}}
    
            @livewire('admin.counter.create')
            <button
            type="button"
            class="btn btn-sm btn-primary mb-2 mx-2"
            data-bs-toggle="modal"
            data-bs-target="#createModal"
          >
           creatw-counter
          </button>
  
          <!-- Modal -->
        
        </div>
    
        <div class="card mb-4">
            <div class="card-body">
               @livewire('admin.counter.index')
            </div>
        </div>
       
        @livewire('admin.counter.update')
        
       
    {{-- 
        @livewire('admin.skills.skills-update')
        @livewire('admin.skills.skills-delete')
        @livewire('admin.skills.skills-show') --}}
    </div>
</div>




    

@endsection
