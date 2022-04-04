<x-layout>
    <x-slot name="title">Modification</x-slot>

    {{-- @dd($fait) --}}

	<div id="menu-container">
        <form class=" d-flex flex-column align-items-center" action="/faits/modifier" method="post">
            @csrf

            <div class="form-floating ps-5 py-5 my-5">
                <h5 class=" form-titre text-color center mt-3">Modifier un fait</h5>
                {{-- <label for="floatingTextarea2">Fait</label> --}}
                <textarea class="form-control formulaire" name="fait" style="height: 200px">{{ $fait->faits }}</textarea>
                <input type="hidden" name="id" value="{{ $fait->id }}">
                <div class="bouton-formulaire align-item-center">
                    <button type="submit">Modifier</button>
                </div>
            </div>

        </form>
	</div>
</x-layout>
