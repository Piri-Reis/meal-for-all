<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateUser extends Component
{
    public $firstname;
    public $password;
    public $password_confirmation;

    protected $rules =[
        'firstname' => 'required|min:3',
        'password' => 'required|confirmed|regex:"^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"',
        'password_confirmation' => 'required'
    ];

    public function submit(){
        $datas = $this->validate();
        $datas['password'] = Hash::make($this->password);
        unset($datas['password_confirmation']);
        User::create($datas);
        $this->reset();
    }



    public function render()
    {
        return view('livewire.create-user');
    }
}
