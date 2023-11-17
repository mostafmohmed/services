<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLogin extends Component
{
    public $email;
    public $password;
    public $remmber;


    protected $rules = [

        'email' => 'required|email',

        'password' => 'required',

    ];

 

    public function submit()

    {

        $this->validate();
        if (!Auth::guard('Admin')->attempt(['email' => $this->email, 'password' => $this->password])) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
       return  redirect ('/admin/e');

        // Execution doesn't reach here if validation fails.
    }



    public function render()
    {
        return view('admin.auth.admin-login');
    }
}

