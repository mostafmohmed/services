<div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
       
             <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">massage</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">{{$name}}</label>
                  <input type="text" wire:model='name' id="nameBasic" class="form-control" placeholder="Enter Name" />
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                </div>
                <div class="col mb-3">
                    <label for="nameBasic" class="form-label">{{$email}}</label>
                    <input type="text" wire:model='email' id="nameBasic" class="form-control" placeholder="Enter Name" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                    {{-- <div class="col mb-3">
                    <label for="nameBasic" class="form-label">{{$massage}}</label>
                    <input type="text" wire:model='massage' id="nameBasic" class="form-control" placeholder="Enter Name" />
                    @error('massage')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div> --}}
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label"> subject </label>
                  <input type="text" id="emailBasic"  wire:model='subject' class="form-control"  />
                 
                </div>
                <div class="col mb-0">
                  <label for="dobBasic" class="form-label">status</label>
                  <input type="text" id="dobBasic"      wire:model='status'     class="form-control" placeholder="DD / MM / YY" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
             
            </div>
          </div>
        
     
    </div>
  </div>

