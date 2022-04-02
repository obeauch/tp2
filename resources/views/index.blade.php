<x-layout>
    <x-slot name="title">Accueil</x-slot>

	<div id="menu-container">
		<div id="menu-1" class="homepage home-section container">
			<div class="home-intro text-center">
				<h2 class="welcome-title animated fadeInLeft">Fait #{{ $fact[0]->id }}</h2>
				<p>{{ $fact[0]->faits }}</p>
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
