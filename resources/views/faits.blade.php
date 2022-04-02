<x-layout>
    <x-slot name="title">Tous les faits</x-slot>


	<div id="menu-container">
        @if(session('success') != null)
            <div class="flash fs-6 rounded-3">
                {{ session('success') }}
            </div>
        @endif
		<div id="menu-1" class="homepage home-section container">
			<div class="home-intro text-left">
                @foreach ($facts as $fact)
				    <p><span class="fact-number">FAIT #{{ $fact->id }}</span>-<span class="fact-text">{!! substr($fact->faits, 0, 40). "..." !!}</span></p>
                @endforeach
				{{-- <h2 class="welcome-title animated fadeInLeft">Fait #{{ $facts->id }}</h2> --}}
			</div>
			<div class="home-projects">
				<div class="row">
					<div class="project-home-holder">
						<div class="row">
                            <x-images img-id="2"/>
                            <x-images img-id="4"/>
                            <x-images img-id="6"/>
                            <x-images img-id="8"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout>
