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
        <form class=" d-flex flex-column align-items-center" action="/faits" method="post">
            @csrf

            <div class="form-floating ps-5 py-5 my-5">
                <h5 class=" form-titre text-color center mt-3">Ajoutez un fait</h5>
                {{-- <label for="floatingTextarea2">Fait</label> --}}
                <textarea class="form-control formulaire" name="fait" placeholder="Écrivez votre fait ici..." style="height: 200px"></textarea>
                <div class="bouton-formulaire align-item-center">
                    <button type="submit">Ajouter!</button>
                </div>
            </div>
{{--

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Fait</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>

            <textarea class="ps-5 py-5 my-5" name="fait"></textarea>
            <input type="number" name="longueur"> --}}

        </form>
	</div>
</x-layout>
