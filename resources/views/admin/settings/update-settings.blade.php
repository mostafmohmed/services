<div>
    <form class="row" wire:submit.prevent='submit'>
        @if (session()->has('message'))
            <div class="alert alert-primary my-success-alert">
                {{ session('message') }}
            </div>
        @endif
    
        <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Name" wire:model='name' />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" placeholder="Email" wire:model='email' />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="Address" wire:model='address' />
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" placeholder="Phone" wire:model='phone' />
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Facebook</label>
            <input type="text" class="form-control" placeholder="Facebook" wire:model='facebook' />
            @error('facebook')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Twitter</label>
            <input type="text" class="form-control" placeholder="Twitter" wire:model='twitter' />
            @error('twitter')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Linkedin</label>
            <input type="text" class="form-control" placeholder="Linkedin" wire:model='linkedin' />
            @error('linkedin')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">Instagram</label>
            <input type="text" class="form-control" placeholder="Instagram" wire:model='instagram' />
            @error('instagram')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12 mt-4">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
