<?php

namespace App\Livewire\Admin\Servic;

use App\Models\Servises;
use Livewire\Component;

class Create extends Component
{
    public $icon, $name ,$descreption;

    public function render()
    {
        return view('admin.servic.create');
    }


    public function submit()
    {
      
        $validated = $this->validate([ 
            'name' => 'required',
            'descreption' => 'required',
            'icon' => 'required',
        ]);
     
        // save data in db
        Servises::create([
            'name' => $this->name,
            'descreption' => $this->descreption,
            'icon' =>$this->icon,
        ]);
        $this->reset(['name', 'descreption', 'icon']);
        // hide modal
        $this->dispatch('createModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(DataServic::class);
    }

}
