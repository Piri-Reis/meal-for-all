<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;


class UserIndex extends Component
{
    public function render(){

        return view('livewire.user-index');
    }
}
