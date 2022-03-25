<div>
    <div class="flex flex-col md:items-center">
        <p class="text-center text-xl mt-8">
            Créer un utilisateur
        </p>
        <form action="" class="space-y-4 border border-gray-200 rounded p-8 bg-white md:w-2/5"
                wire:submit.prevent="submit">
            <div class="flex flex-col w-auto">
                <label class="label-class" for="firstname">Utilisateur</label>
                <input class="form-input" type="text" name="firstname" id="firstname"
                wire:model.debounce.500ms ="firstname">
                @error('firstname') <span class="error-class">*{{ $message }}</span @enderror
            </div>
            <div class="flex flex-col">
                <label for="password">Mot de passe</label>
                <input class="form-input" type="password" name="password" id="password"
                wire:model.debounce.500ms="password">
                @error('password') <span class="error-class">*{{ $message }}</span> @enderror

            </div>
            <div class="flex flex-col">
                <label for="password_confirmation">Confirmez le mot de passe</label>
                <input class="form-input" type="password" name="password_confirmation" id="password_confirmation"
                wire:model.debounce.500ms="password_confirmation">
                @error('password_confirmation') <span class="error-class">*{{ $message }}</span> @enderror

            </div>
            <div class="text-center">
                <button class="btn-success" type="submit">Connexion</button>
            </div>
        </form>
    </div>
</div>
