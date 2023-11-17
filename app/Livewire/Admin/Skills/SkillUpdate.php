<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SkillUpdate extends Component
{
    public $skill, $name, $progress;
    protected $listeners=['skillUpdate'];
    public function skillUpdate($id){
      
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->resetValidation();
        // show edit modal
      
        $this->dispatch('editModalToggle');

    }


    public function rules()
    {
 return [
            'name' => 'required',
            'progress' => 'required|numeric',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        // save data in db
        $this->skill->update($data);
        // hide modal
        $this->dispatch('editModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }

    public function render()
    {
        return view('admin.skills.skill-update');
    }
}
