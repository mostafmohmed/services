<?php

namespace App\Livewire\Admin\Servic;

use App\Models\Servises;
use Livewire\Component;

class Delet extends Component
{


    public $servic;
    protected $listeners=['serviceDelete'];
    public function serviceDelete($id){
     
        $this->servic = Servises::find($id);
         // show delet modal
        $this->dispatch('deleteModalToggle');
      

    }
public function submit(){
    $this->servic->delete();
//hi model
$this->reset('servic');
    $this->dispatch('deleteModalToggle');

//refreash padge
$this->dispatch('refreshData')->to(DataServic::class);
}
    public function render()
    {
        return view('admin.servic.delet');
    }
}
