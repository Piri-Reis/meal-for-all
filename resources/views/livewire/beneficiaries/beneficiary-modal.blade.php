<div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
    <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
        <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
            <div class="w-full flex justify-start text-gray-600 mb-3 space-x-4">
                 <p class="uppercase">{{$beneficiary->lastname}}</p>
                 <p>{{$beneficiary->firstname}}</p>
                 <p>{{$beneficiary->phone}}</p>
            </div>
            <div class="flex items-baseline space-x-4 relative rounded-lg border border-gray-300 p-4 mb-5 mt-2">
                <p class="text-orange-600">Nombre de repas</p>
                <p class="text-2xl">{{$beneficiary->nbr_meal}}</p>
                @if($beneficiary->isChecked())
                    <p class="border rounded-full p-4"> Retiré  <i class="fas fa-check text-green-500"></i></p>
                @endif
            </div>
            <div class="grid grid-cols-3 items-baseline gap-2 rounded-lg border border-gray-300 p-4 mb-5 mt-2">
                @foreach($historyCheeking as $day)
                   <p class="border rounded-lg text-white p-2 {{ $day->checked ? 'bg-green-300' : 'bg-red-300' }}">{{  date('D d M', strtotime( $day->date )) }}</p>
                @endforeach
            </div>
            <div class="flex items-center justify-start w-full">
                @if(!$beneficiary->isChecked())
                    <button wire:click="checked( {{ $beneficiary }} )" class="btn-success">Valider</button>
                @endif
            </div>
            <button wire:click="close" class=" absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600  ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" aria-label="close modal" role="button">
                <i class="fas 3x fa-times"></i>
            </button>
        </div>
    </div>
</div>
