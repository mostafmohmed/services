<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function Logout(){
        Auth::guard('Admin')->logout();
        return redirect('/admin/login');
    }
    public function render()
    {
        return view('admin.auth.logout');
    }
}
