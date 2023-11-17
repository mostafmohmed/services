<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;

class Create extends Component
{

    public $icon, $name ,$count;

   






   







    public function submit()
    {
      
        $validated = $this->validate([ 
            'name' => 'required',
            'count' => 'required|numeric',
            'icon' => 'required',
        ]);
     
        // save data in db
        Counter::create([
            'name' => $this->name,
            'count' => $this->count,
            'icon' =>$this->icon,
        ]);
        $this->reset(['name', 'count', 'icon']);
        // hide modal
        $this->dispatch('createModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(Index::class);
    }








    // public function submit()
    // {
       
       
    //     $data = $this->validate();
      
    //     // save data in db
    //     Counter::create($data);
    //     $this->reset(['name', 'count','icon']);
    //     // hide modal
    //     $this->dispatch('createModalToggle');
    //     // // refresh skills data component
    //     $this->dispatch('refreshData')->to(Index::class);
    // }


    public function render()
    {
        return view('admin.counter.create');
    }
}
