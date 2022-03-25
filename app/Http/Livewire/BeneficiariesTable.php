<?php

namespace App\Http\Livewire;

use App\Models\Beneficiaries;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class BeneficiariesTable extends LivewireDatatable
{
   public $model = Beneficiaries::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),

            Column::name('firstname')
                ->label('Prénom')
                ->editable(),

            Column::name('lastname')
                ->label('Nom')
                ->editable(),

            Column::delete()->label('Suprimer')

        ];
    }

}
