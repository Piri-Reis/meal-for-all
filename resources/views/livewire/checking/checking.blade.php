<div>
    <div class="flex flex-col items-center mt-8">
        <form action="" wire:submit.prevent="search">
            <div>
                <input wire:model.debounce.500ms="idBeneficiary" class="form-input" type="number">
            </div>
            <div class="text-center m-2">
                <button class="btn-success">Chercher</button>
            </div>
        </form>

        <div class="grid grid-cols-3 ">
                <button class="numbers">1</button>

                <button class="numbers">2</button>

                <button class="numbers">3</button>

                <button class="numbers">4</button>

                <button class="numbers">5</button>

                <button class="numbers">6</button>

                <button class="numbers">7</button>

                <button class="numbers">8</button>

                <button class="numbers">9</button>
        </div>
    </div>
    @if($show)
        <livewire:beneficiaries.beneficiary-modal :beneficiary="$beneficiary">
    @endif
</div>
