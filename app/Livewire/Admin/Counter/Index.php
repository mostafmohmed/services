<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{



    use WithPagination;
    protected $listeners = ['refreshData' => '$refresh'];


    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }





    public function render()
    {

        return view('admin.counter.index',['data' => Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
