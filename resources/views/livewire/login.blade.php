<div class="flex flex-col md:items-center">
        <p class="text-center text-xl mt-8">
            Connexion
        </p>
        <form action="" wire:submit.prevent="login" class="space-y-4 border border-gray-200 rounded p-8 bg-white md:w-2/5">
            <div class="flex flex-col w-auto">
                <label class="label-class" for="firstname">Utilisateur</label>
                <input class="form-input" type="text" id="firstname"
                wire:model.debounce.500ms="firstname">
            </div>
            <div class="flex flex-col">
                <label for="password">Mot de passe</label>
                <input class="form-input" type="password" id="password"
                wire:model.debounce.500ms="password">
            </div>
            <div class="text-center">
                <button class="btn-success" type="submit">Connexion</button>
            </div>
        </form>
</div>
