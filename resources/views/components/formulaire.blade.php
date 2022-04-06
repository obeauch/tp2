@props(['fait'])

<div class="form-floating ps-1 py-1 my-1 mb-5">
    <h5 class=" form-titre text-color center mt-3">Modifier un fait</h5>
    <textarea class="form-control zone-textarea" name="fait" style="height: 150px">{{ $fait->faits }}</textarea>
    <input type="hidden" name="id" value="{{ $fait->id }}">
    <div class="bouton-formulaire align-item-center">
        <button type="submit">Modifier</button>
    </div>
</div>
