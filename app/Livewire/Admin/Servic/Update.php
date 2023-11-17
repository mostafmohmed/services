<?php

namespace App\Livewire\Admin\Servic;

use App\Models\Servises;
use Livewire\Component;

class Update extends Component
{
    





    public $servic, $name, $descreption ,$icon;
    protected $listeners=['servicUpdate'];
    public function servicUpdate($id){
      
        $this->servic = Servises::find($id);
        $this->name = $this->servic->name;
        $this->descreption = $this->servic->descreption;

        $this->icon = $this->servic->icon;



        
        $this->resetValidation();
        // show edit modal
      
        $this->dispatch('editModalToggle');

    }


    public function rules()
    {
 return [
            'name' => 'required',
            'descreption' => 'required',
            'icon' => 'required',


        ];
    }

    public function submit()
    {
        $data = $this->validate();
        // save data in db
      
        $this->servic->update([
            'name'=>$data['name'],
            'descreption'=>$data['descreption'],
            'icon'=>$data['icon'],
        ]);
        // hide modal
        $this->dispatch('editModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(DataServic::class);
    }





    public function render()
    {
        return view('admin.servic.update');
    }
}
