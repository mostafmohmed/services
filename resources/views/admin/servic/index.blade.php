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
    
            @livewire('admin.servic.create')
            <button
            type="button"
            class="btn btn-sm btn-primary mb-2 mx-2"
            data-bs-toggle="modal"
            data-bs-target="#createModal"
          >
           create-servie
          </button>
  
          <!-- Modal -->
        
        </div>
    
        <div class="card mb-4">
            <div class="card-body">
               @livewire('admin.servic.data-servic')
            </div>
        </div>
       
        @livewire('admin.servic.update')
        @livewire('admin.servic.delet')
        
    {{-- 
        @livewire('admin.skills.skills-update')
       
        @livewire('admin.skills.skills-show') --}}
    </div>
</div>




    

@endsection
