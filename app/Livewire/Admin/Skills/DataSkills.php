<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class DataSkills extends Component
{
    use WithPagination;



    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        return view('admin.skills.data-skills', ['data' => Skill::where('name', 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
