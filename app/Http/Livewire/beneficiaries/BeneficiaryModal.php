<?php

namespace App\Http\Livewire\beneficiaries;

use App\Http\Livewire\Modal;
use App\Models\Checking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class BeneficiaryModal extends Modal
{
    public $beneficiary;
    public $historyCheeking;

    public function close(){
        $this->emit('show:update');
    }

    public function weekChecking(){
        $today = Carbon::now();
        $startOfWeek = $today->startOfWeek()->toDateString();
        $endOfWeek = $today->endOfWeek()->toDateString();

        $this->historyCheeking = Checking::whereBetween('date', [ $startOfWeek, $endOfWeek])
                            ->where('beneficiary_id',$this->beneficiary['id'] )
                            ->orderby('date', 'asc')
                            ->get();
    }

    public function checked($beneficiary){
        $checking =  new Checking();
        $checking->date = Carbon::today();
        $checking->comment = '';
        $checking->checked = true;
        $checking->beneficiary()->associate($beneficiary['id']);
        $checking->save();

    }

    public function render()
    {
        $this->weekChecking();
        return view('livewire.beneficiaries.beneficiary-modal');
    }
}
