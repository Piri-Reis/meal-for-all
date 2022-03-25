<div>
    <nav class="border border-gray-300 rounded bg-white">
        <div class="flex justify-between items-baseline">
            <div class="m-5 space-x-4">
                <a href="{{route("dashboard")}}">Tableau de bord</a>
                <a href="{{route("user.index")}}">Utilisateurs</a>
                <a href="{{route("dashboard")}}">Historique</a>
                <a href="{{route("beneficiaries")}}">Les bénéficiaires</a>
                <a href="{{route("checking")}}">Pointage</a>
            </div>
            <div class="m-5 flex space-x-4">
                <p>{{ Auth()->user()->firstname }}</p>
                <p>/</p>
                <a href="{{route('logout')}}">Déconnexion</a>
            </div>
        </div>
    </nav>
</div>
