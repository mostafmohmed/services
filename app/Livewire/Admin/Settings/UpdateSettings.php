<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Settings;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    


    
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            // 'facebook' => 'nullable|url',
            // 'twitter' => 'nullable|url',
            // 'linkedin' => 'nullable|url',
            // 'instagram' => 'nullable|url',
        ];
    }

    public function submit()
    {
       
        $this->validate();
        Settings::create([
            	'name'=>$this->name,

                 	'address'=>$this->address,
                     	'email'=>$this->email,
                         'phone'=>$this->phone,
                

        ]);
        session()->flash('message', 'Settings Updated Successfully');
    }
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
