<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelet extends Component
{
    public $skill;
    protected $listeners=['skillDelete'];
    public function skillDelete($id){
      
        $this->skill = Skill::find($id);
         // show delet modal
        $this->dispatch('deleteModalToggle');
      

    }
public function submit(){
    $this->skill->delete();
//hi model
$this->reset('skill');
    $this->dispatch('deleteModalToggle');

//refreash padge
$this->dispatch('refreshData')->to(DateSskill::class);


}
    public function render()
    {
        return view('admin.skills.skills-delet');
    }
}
