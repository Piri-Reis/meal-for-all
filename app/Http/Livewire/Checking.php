<?php

namespace App\Http\Livewire;

use App\Models\Beneficiaries;
use Livewire\Component;

class Checking extends Component
{
    public $idBeneficiary;
    public $beneficiary;
    public $show = false;

    protected $listeners = [
        'show:update' => 'openModal',
    ];

    public function search(){

        $this->beneficiary = Beneficiaries::findOrfail($this->idBeneficiary);

        if($this->beneficiary){
            $this->openModal();
        }
    }

    public function openModal(){
        $this->show ?  $this->show = false  : $this->show = true;
    }

    public function render()
    {
        return view('livewire.checking.checking');
    }
}
