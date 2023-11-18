<?php

namespace App\Livewire\Admin\Massage;

use App\Models\Massage;
use Livewire\Component;

class Show extends Component
{

    public  $name, $status ,$subject ,$email ,$message ;
    protected $listeners=['massageShow'];
    public function massageShow($id){
      
        $massage = Massage::find($id);
        $this->name = $massage ->name;
        $this->email = $massage ->email;
        $this->subject = $massage ->subject;
        $this->status = $massage ->status;
        $this->message = $massage ->message;
      
        // show t modal
        $this->dispatch('showModalToggle');
//update status
        $massage->update(['status'=>'1']);
        //refreash massage
        $this->dispatch('refreshData')->to(MassageData::class);
      
       
    }

    public function render()
    {
        return view('admin.massage.show');
    }
}
