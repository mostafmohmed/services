<?php

namespace App\Livewire\Admin\Subsqruber;

use App\Models\Subsqriber;
use Livewire\Component;
use Livewire\WithPagination;

class ShowSub extends Component
{
    // subDelete
    use WithPagination;
    protected $listeners = ['refreshData' => '$refresh'];


    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.subsqruber.show-sub', ['data' => Subsqriber::where('email', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
