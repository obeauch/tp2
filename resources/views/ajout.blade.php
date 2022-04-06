<x-layout>
    <x-slot name="title">Ajout</x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<div id="menu-container">
        <form class="d-flex flex-column align-items-center" action="/faits" method="post">
            @csrf

            <div class="form-floating ps-1 py-1 my-1 mb-5">
                <h5 class=" form-titre text-color center mt-3">Ajoutez un fait</h5>
                <textarea class="form-control zone-textarea" name="fait" placeholder="Écrivez votre fait ici..." style="height: 200px"></textarea>
                <div class="bouton-formulaire align-item-center">
                    <button type="submit">Ajouter</button>
                </div>
            </div>

        </form>
	</div>
</x-layout>
