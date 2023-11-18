<?php

namespace App\Livewire\Admin\Progect;

use App\Models\Catagory;
use Livewire\Component;

class Create extends Component
{
    public $catagory;
    public function mount(){
        $this->catagory=Catagory::all();
      
    }
    public function render()
    {
        return view('admin.progect.create');
    }
}
