<!doctype html>
<html lang="fr">
<head>
	@include('inc-meta')
	@include('inc-matomo')
	<!-- Autoriser l'indexation et le suivi des liens (par défaut) -->
	<meta name="robots" content="index, follow">
	<!-- Description -->
	<meta name="description" content="Un cahier numérique permet d'avoir, côte à côte, un document de travail (cours, tutoriel, vidéo, exercices, fichier PDF, page web...) et un environnement de création (Scratch, Geogebra, Basthon, BlocksCAD, Apigeom, Framapad, Digidoc, Python, Pyxel...). Catégories: mathématiques / technologie, programmation, documents." />
	<title>Cahiers Numériques</title>
</head>
 
<body>

	<div class="container mt-4">
		<div class="row justify-content-md-center">
			<div class="col-md-auto text-center">
				<h1><img src="{{ asset('img/cahiernumerique.png') }}" width="100" alt="CAHIER NUMERIQUE" /></h1>

			</div>
			<div class="col-md-6 pt-2" style="text-align:justify">
				Un cahier numérique permet d'avoir, côte à côte, un document de travail (cours, tutoriel, exercices...) et un environnement de création (Scratch, Geogebra, Apigeom, Basthon, BlocksCAD...). Formats possibles pour les documents de travail : vidéo, PDF, page web, framapad, digidoc... Afin de faciliter la lecture et/ou l'utilisation des outils, les espaces peuvent être redimensionnés dynamiquement. Catégories: mathématiques / technologie, programmation, documents...<br />
				Il suffit de partager un lien avec les élèves pour qu'ils puissent accéder directement à un cahier préparé par l'enseignant.
			</div>
			<div class="col-md-auto text-center" style="padding-top:10px;">
				<div>
					<a href="https://x.com/cahiernum" target="_blank" data-bs-toggle="tooltip" data-bs-placement="auto" data-bs-title="twitter / X">
						<i class="fa-brands fa-square-x-twitter fa-lg" style="color:#bdc3c7"></i>
					</a>
				</div>
				<div class="mt-2">
					<a href="https://forge.apps.education.fr/cahiers-numeriques/documentation/-/blob/main/README.md" target="_blank" data-bs-toggle="tooltip" data-bs-placement="auto" data-bs-title="documentation">
						<i class="fa-solid fa-book fa-lg" style="color:#bdc3c7"></i>
					</a>	
				<div>			
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
								<li class="mt-2">
									<a href="https://www.cahiernum.net/EG8XCJ" target="_blank">Episode 7 : Ajouter des interactions entre un luton et l'arrière plan</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/EG8XCJ</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/9RZQ83" target="_blank">Episode 8 : Faire communiquer des lutins</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/9RZQ83</div>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/W7YXD8" target="_blank">Episode 9 : Utiliser le chronomètre</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/W7YXD8</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/ENZUSD" target="_blank">Episode 10 : Créer un tir (utilisation des clones)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/ENZUSD</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/3Z7A9S" target="_blank">Episode 11 : Faire sauter un lutin</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/3Z7A9S</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/CW3S6T" target="_blank">Episode 12 : Faire sauter un lutin: version améliorée</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/CW3S6T</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/ZWKQPX" target="_blank">Episode 13 : Déplacements plus réalistes (pas d'arrêts brusques)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/ZWKQPX</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/XU6ZGF" target="_blank">Episode 14 : Créer une trajectoire parabolique (lancer de ballon, tir...)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/XU6ZGF</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/M6JG7H" target="_blank">Episode 15 : Faire défiler l'arrière plan (scrolling)</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/M6JG7H</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/ANVH93" target="_blank">Episode 16 : Faire défiler l'arrière plan pour donner un effet de profondeur</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/ANVH93</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/EZD9PA" target="_blank">Episode 17 : Réaliser un scrolling fini sur plusieurs arrière-plans</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/EZD9PA</div>
								</li>
								<li class="mt-2">
									<a href="https://www.cahiernum.net/J7KFMX" target="_blank">Episode 18 : Réaliser un scrolling infini sur plusieurs arrière-plans</a>
									<div class="font-monospace text-muted small"><i class="fas fa-caret-right"></i> cahiernum.net/J7KFMX</div>
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
