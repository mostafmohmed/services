<?php

namespace App\Livewire\Admin\Subsqruber;

use App\Models\Subsqriber;
use Livewire\Component;

class DeletSub extends Component
{






    public $sub;
    protected $listeners=['subDelete'];
    public function subDelete($id){
    
        $this->sub = Subsqriber::find($id);
         // show delet modal
        $this->dispatch('deleteModalToggle');
      

    }
public function submit(){
    $this->sub->delete();
//hi model
$this->reset('sub');
    $this->dispatch('deleteModalToggle');

//refreash padge
$this->dispatch('refreshData')->to(ShowSub::class);


}






    public function render()
    {
        return view('admin.subsqruber.delet-sub');
    }
}
