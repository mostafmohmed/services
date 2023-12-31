<?php

namespace App\Livewire\Admin\Massage;

use App\Models\Massage;
use Livewire\Component;
use Livewire\WithPagination;

class MassageData extends Component
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
        return view('admin.massage.massage-data',['data' => Massage::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
