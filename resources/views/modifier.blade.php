<x-layout>
    <x-slot name="title">Modification</x-slot>

	<div id="menu-container">
        <form class=" d-flex flex-column align-items-center" action="/faits/modifier" method="post">
            @csrf

            <x-formulaire :fait="$fait" />

            {{-- <div class="form-floating ps-1 py-1 my-1 mb-5">
                <h5 class=" form-titre text-color center mt-3">Modifier un fait</h5>
                <textarea class="form-control zone-textarea" name="fait" style="height: 150px">{{ $fait->faits }}</textarea>
                <input type="hidden" name="id" value="{{ $fait->id }}">
                <div class="bouton-formulaire align-item-center">
                    <button type="submit">Modifier</button>
                </div>
            </div> --}}

        </form>
	</div>
</x-layout>
