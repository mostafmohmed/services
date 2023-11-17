<?php

namespace App\Livewire\Admin\Servic;

use App\Models\Servises;
use Livewire\Component;
use Livewire\WithPagination;

class DataServic extends Component
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
        return view('admin.servic.data-servic',['data' => Servises::where('name', 'like', '%' . $this->search . '%')->paginate(1)]);
    }
}
