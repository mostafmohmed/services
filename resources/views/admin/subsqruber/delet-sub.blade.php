<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form wire:submit.prevent='submit'>
             <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">delet sub</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
               Do you wont delet the item
              {{-- <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Name</label>
                  <input type="text" wire:model='name' id="nameBasic" class="form-control" placeholder="Enter Name" />
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                </div>
              </div> --}}
              {{-- <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">process</label>
                  <input type="number" id="emailBasic"  wire:model='progress' class="form-control" placeholder="xxxx@xxx.xx" />
                    @error('progress')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                </div>
                <div class="col mb-0">
                  <label for="dobBasic" class="form-label">DOB</label>
                  <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
                </div>
              </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
              </button>
              <button type="submit"  class="btn btn-primary">submit</button>
            </div>
          </div>
        </form>
     
    </div>
  </div>

