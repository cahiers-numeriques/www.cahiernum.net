<!doctype html>
<html lang="fr">
<head>
	@include('inc-meta')
	@include('inc-matomo')
	<title>Cahiers Numériques</title>
</head>

<body>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-1 offset-md-2 text-center">
				<h1><img src="{{ asset('img/cahiernumerique.png') }}" width="80" alt="CAHIER NUMERIQUE" /></h1>
				<div class="mt-3">
					<a href="https://twitter.com/cahiernum" class="me-1" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="twitter / X">
						<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 448 512"><path fill="#bdc3c7" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg>
					</a>
					<a href="https://forge.apps.education.fr/cahiers-numeriques/www-cahiernum-net/-/issues" target="_blank" class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="signalement de bogue" style="padding-bottom:4px;">
						<svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 512 512"><path fill="#bdc3c7" d="M256 0c53 0 96 43 96 96l0 3.6c0 15.7-12.7 28.4-28.4 28.4l-135.1 0c-15.7 0-28.4-12.7-28.4-28.4l0-3.6c0-53 43-96 96-96zM41.4 105.4c12.5-12.5 32.8-12.5 45.3 0l64 64c.7 .7 1.3 1.4 1.9 2.1c14.2-7.3 30.4-11.4 47.5-11.4l112 0c17.1 0 33.2 4.1 47.5 11.4c.6-.7 1.2-1.4 1.9-2.1l64-64c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3l-64 64c-.7 .7-1.4 1.3-2.1 1.9c6.2 12 10.1 25.3 11.1 39.5l64.3 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c0 24.6-5.5 47.8-15.4 68.6c2.2 1.3 4.2 2.9 6 4.8l64 64c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-63.1-63.1c-24.5 21.8-55.8 36.2-90.3 39.6L272 240c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 239.2c-34.5-3.4-65.8-17.8-90.3-39.6L86.6 502.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l64-64c1.9-1.9 3.9-3.4 6-4.8C101.5 367.8 96 344.6 96 320l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64.3 0c1.1-14.1 5-27.5 11.1-39.5c-.7-.6-1.4-1.2-2.1-1.9l-64-64c-12.5-12.5-12.5-32.8 0-45.3z"/></svg>
					</a>
				</div>
			</div>
			<div class="col-md-7 mt-2" style="text-align:justify">
				Un cahier numérique permet d'avoir, côte à côte, un document de travail (cours, tutoriel, exercices...) et un environnement de création (Scratch, Geogebra, Basthon, BlocksCAD...). Formats possibles pour les documents de travail : vidéo, PDF, page web... Afin de faciliter la lecture et/ou l'utilisation des outils, les espaces peuvent être redimensionnés dynamiquement.<br />
				Il suffit de partager un lien avec les élèves pour qu'ils puissent accéder directement à un cahier préparé par l'enseignant.
			</div>
		</div>
	</div>

	<div class="container mt-4 mb-5">

		<div class="row">
			<div class="col-md-12 text-center" style="text-align:justify;">
				<a class="btn btn-danger font-monospace" href="/cahier-creer" role="button">créer un cahier</a>
			</div>
		</div>

		<div class="row mt-3 justify-content-center">
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
				<!--<div class="small" style="color:silver;opacity:0.6">code sous <a href="https://www.gnu.org/licenses/gpl-3.0.fr.html" target="_blank">GPLv3</a> et contenu sous <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">CC BY-NC-SA</a></div>-->
				<p class="mt-1">
					
					<a href="https://forge.apps.education.fr/cahiers-numeriques/www-cahiernum-net" class="font-monospace" target="_blank">
						<img src="{{ asset('img/logo_forge.svg') }}" height="40" alt="LA FORGE EDU" />Forge des Commmuns Numériques Éducatifs
					</a>
				</p>
			</div>
		</div>		

	</div>

	@include('inc-bottom-js')

</body>
</html>
