<!doctype html>
<html lang="fr">
<head>
	@include('inc-meta')
	@include('inc-matomo')
	<title>Cahiers Numériques</title>
</head>
 
<body>

	<div class="container mt-4">
		<div class="row justify-content-md-center">
			<div class="col-md-auto text-center">
				<h1><img src="{{ asset('img/cahiernumerique.png') }}" width="100" alt="CAHIER NUMERIQUE" /></h1>

			</div>
			<div class="col-md-5 pt-2" style="text-align:justify">
				Un cahier numérique permet d'avoir, côte à côte, un document de travail (cours, tutoriel, exercices...) et un environnement de création (Scratch, Geogebra, Basthon, BlocksCAD...). Formats possibles pour les documents de travail : vidéo, PDF, page web... Afin de faciliter la lecture et/ou l'utilisation des outils, les espaces peuvent être redimensionnés dynamiquement.<br />
				Il suffit de partager un lien avec les élèves pour qu'ils puissent accéder directement à un cahier préparé par l'enseignant.
			</div>
			<div class="col-md-auto text-center" style="padding-top:10px;">
				<a href="https://x.com/cahiernum" class="me-1" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="twitter / X">
					<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 448 512"><path fill="#bdc3c7" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg>
				</a>
			</div>
		</div>
	</div>

	<div class="container mt-4 mb-5">

		<div class="row">
			<div class="col-md-12 text-center" style="text-align:justify;">
				<a class="btn btn-danger font-monospace" href="/cahier-creer" role="button">créer un cahier</a>
			</div>
		</div>

		<div class="row mt-2 justify-content-center">
			<div class="col-md-10">
				<div class="ratio ratio-16x9">
					<video autoplay muted loop>
				  		<source src="{{ asset('demo.mp4') }}" type="video/mp4">
					</video>
				</div>
				<div class="font-monospace text-center" style="font-size:70%;color:silver">exemple avec une vidéo et scratch</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 offset-md-1">

				<h3 class="mt-5 mb-2">CAHIERS PRÊTS À L'EMPLOI</h3>

				<div class="row row-cols-1 row-cols-md-2 g-2">

					<div class="col">
						<div class="card h-100 p-2">
							<div class="text-danger fw-bolder">Coder un jeu avec Scratch</div>
							<ul>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/4WMPL6" target="_blank">Episode 1 : Déplacer un lutin avec les touches du clavier (méthode 1)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/4WMPL6</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/ED23TF" target="_blank">Episode 2 : Déplacer un lutin avec les touches du clavier (méthode 2)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/ED23TF</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/GF3YPT" target="_blank">Episode 3 : Bien commencer son programme : l'initialisation</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/GF3YPT</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/WVHS7Z" target="_blank">Episode 4 : Déplacer un lutin automatiquement vers un autre lutin</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/WVHS7Z</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/69ZWPJ" target="_blank">Episode 5 : Obtenir des déplacements plus fluides</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/69ZWPJ</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/32QZGE" target="_blank">Episode 6 : Ajouter des interactions entre lutins</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/32QZGE</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="col">
						<div class="card h-100 p-2">
							<div class="text-danger fw-bolder">Tutoriels GeoGebra</div>
							<ul>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/Z4BWPD" target="_blank">Construction d'un parallélogramme</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/Z4BWPD</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/P9LGBX" target="_blank">Construction d'un rectangle de mesures données</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/P9LGBX</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/REYZM4" target="_blank">Construction d'un rectangle</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/REYZM4</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/SBVFUE" target="_blank">Construction d'un triangle de mesures données</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/SBVFUE</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/5VY9PJ" target="_blank">Construction d'un triangle rectangle</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/5VY9PJ</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/Q2HXEV" target="_blank">Construction d'un triangle de mesures variables (1/3)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/Q2HXEV</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/ZMDQCX" target="_blank">Construction d'un triangle de mesures variables (2/3)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/ZMDQCX</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/BFL2TW" target="_blank">Construction d'un triangle de mesures variables (3/3)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/BFL2TW</div>
								</li>
							</ul>
						</div>
					</div>

				</div>

			</div>
		</div>

		<div class="row mt-5">
			<div class="col text-center font-monospace text-muted">
				<p class="mt-1">
					<a href="https://forge.apps.education.fr/cahiers-numeriques/www-cahiernum-net" class="font-monospace" target="_blank">
						<img src="{{ asset('img/logo_forge.svg') }}" height="40" alt="LA FORGE EDU" />Forge des Commmuns Numériques Éducatifs
					</a>
					| signalement de bogues:
					<a href="https://github.com/cahiers-numeriques/www.cahiernum.net/issues" class="font-monospace" target="_blank">ici</a> ou <a href="https://forge.apps.education.fr/cahiers-numeriques/www-cahiernum-net/-/issues" class="font-monospace" target="_blank">là</a>
					| bricodé par <a tabindex="0" class="" style="color:#c83737" role="button" data-bs-container="body" data-bs-trigger="click" data-bs-html="true" data-bs-sanitize="false" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="
					<ul class='fa-ul font-monospace small m-0 ms-4'>
						<li><span class='fa-li pe-3' style='color:#c83737'><i class='fa-brands fa-square-x-twitter'></i></span><a href='https://x.com/laurentabbal' target='_blank'>@laurentabbal</a></li>
						<li><span class='fa-li pe-3'style='color:#c83737'><i class='fa-brands fa-mastodon'></i></span><a href='https://mastodon.social/@laurentabbal' target='_blank'>@laurentabbal@mastodon.social</a></li>
						<li><span class='fa-li pe-3' style='color:#c83737'><i class='fa-brands fa-github-alt'></i></span><a href='https://github.com/laurentabbal' target='_blank'>www.github.com/laurentabbal</a></li>
						<li><span class='fa-li pe-3' style='color:#c83737'><i class='fa-brands fa-gitlab'></i></span><a href='https://forge.apps.education.fr/laurent.abbal' target='_blank'>forge.apps.education.fr/laurent.abbal</a></li>
						<li><span class='fa-li pe-3' style='color:#c83737'><i class='fa-brands fa-linkedin'></i></span><a href='https://www.linkedin.com/in/laurentabbal/' target='_blank'>www.linkedin.com/in/laurentabbal</a></li>
						<li><span class='fa-li pe-3' style='color:#c83737'><i class='fa-solid fa-clipboard-list'></i></span><a href='https://laurentabbal.forge.apps.education.fr/' target='_blank'>projets</a></li>
					</ul>
					"><i class="fas fa-user-astronaut"></i></a>
				</p>
			</div>
		</div>		

	</div>

	@include('inc-bottom-js')

</body>
</html>
