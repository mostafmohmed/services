<?php

namespace App\Livewire\Admin\Progect;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
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
        return view('admin.progect.data',['data' => Project::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
