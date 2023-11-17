<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;

class Update extends Component
{

    public $counter, $name, $count;
    protected $listeners=['countUpdate'];
    public function countUpdate($id){
      
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->resetValidation();
        // show edit modal
      
        $this->dispatch('editModalToggle');

    }


    public function rules()
    {
 return [
            'name' => 'required',
            'count' => 'required|numeric',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        // save data in db
      
        $this->counter->update([
            'name'=>$data['name'],
            'count'=>$data['count'],
        ]);
        // hide modal
        $this->dispatch('editModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(Index::class);
    }


    public function render()
    {
        return view('admin.counter.update');
    }
}
