<!doctype html>
<html lang="fr">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/cbfbfc2c41.js" crossorigin="anonymous"></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<!-- custom.css -->
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

	<!-- Open Graph -->
	<meta property="og:title" content="Cahier Numérique" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Cahiers Numériques pour les élèves et les enseignants" />
	<meta property="og:url" content="https://www.cahiernum.net/" />
	<meta property="og:image" content="https://www.cahiernum.net/img/opengraph_1200x630.png" />
	<meta property="og:image:alt" content="cahiernum.net" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@cahiernumerique">
	<meta name="twitter:creator" content="@cahiernumerique">
	<meta name="twitter:title" content="Cahier Numérique">
	<meta name="twitter:description" content="Cahiers Numériques pour les élèves et les enseignants">
	<meta name="twitter:image" content="https://www.cahiernum.net/img/opengraph_1200x630.png">

	<title>Cahiers Numériques</title>

	<!-- Matomo -->
	<script>
	var _paq = window._paq = window._paq || [];
	/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u="//www.awame.net/matomo/";
		_paq.push(['setTrackerUrl', u+'matomo.php']);
		_paq.push(['setSiteId', '13']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	})();
	</script>
	<!-- End Matomo Code -->

</head>

<body>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-1 offset-md-2 text-center">
				<h1><img src="{{ asset('img/cahiernumerique.png') }}" width="100%" alt="CAHIER NUMERIQUE" /></h1>
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

    <?php

    // SUMMARY
    if (isset($_GET['j'])) {
        $cahier = App\Models\Cahier::where('jeton', $_GET['j'])->first();
        ?>
        <div class="container mb-5">

    		<div class="row mt-5">
    			<div class="col-md-6 offset-md-3">
                    <div class="font-monospace small text-muted">copier-coller les données ci-dessous afin de les conserver</div>
                    <div class="p-3 mb-3" style="background-color:white;border:solid 1px silver;border-radius:4px">

                        @if (isset($cahier['titre']))
                        <div class="mb-3">
                            <div class="text-danger font-monospace small lh-1">Titre</div>
                            <p>{{$cahier['titre']}}</p>
                        </div>
                        @endif

                        @if (isset($cahier['consignes']))
                        <div class="mb-3">
                            <div class="text-danger font-monospace small lh-1">Consignes</div>
                            <div class="p-3 text-break" style="border-radius:4px;background-color:#fbfbfb">{!! nl2br($cahier['consignes']) !!}</div>
                        </div>
                        @endif

                        @if (isset($cahier['lien_retour']))
                        <div class="mb-3">
                            <div class="text-danger font-monospace small lh-1">Lien retour</div>
                            <p><a href=">{{ $cahier['lien_retour'] }}" target="_blank" class="font-monospace">{{ $cahier['lien_retour'] }}</a></p>
                        </div>
                        @endif

                        <div class="text-danger font-monospace small lh-1">Partie gauche</div>
                        <ul>
                            <li>Type: {{ strtoupper($cahier['gauche_type']) }}</li>
                            <li>
								Données
								<div class="p-3 font-monospace small text-muted text-break" style="border-radius:4px;background-color:#fbfbfb">{{ $cahier['gauche_input'] }}</div>
							</li>
                        </ul>
                        <div class="text-danger font-monospace small lh-1">Partie droite</div>
                        <ul>
                            <li>Type: {{ strtoupper($cahier['droite_type']) }}</li>
                            @if (!in_array($cahier['droite_type'], ['scratch','basthon', 'geogebra', 'blockscad']))
                            <li>
								Données
								<div class="p-3 font-monospace small text-muted text-break" style="border-radius:4px;background-color:#fbfbfb">{{ $cahier['droite_input'] }}</div>
							</li>
                            @endif
                        </ul>
                        <div>
                            <span class="text-danger font-monospace small">Lien à partager :</span> <kbd><a href="https://www.cahiernum.net/{{ strtoupper($cahier['jeton']) }}" target="_blank" class="font-monospace text-white">cahiernum.net/{{ strtoupper($cahier['jeton']) }}</a></kbd>
                        </div>

    			    </div>

                    <div class="text-center">
						<a class="btn btn-secondary btn-sm font-monospace" href="/" role="button">QUITTER</a>
						<a class="btn btn-light btn-sm font-monospace" href="/modifier?m={{ $cahier['jeton'] }}" role="button">MODIFIER</a>
					</div>

    			</div>
    		</div>
        </div>
        </body>
        </html>
        <?php
        exit;
    }
    ?>

	<div class="container mt-4 mb-5">

		<div class="row">
			<div class="col-md-2 offset-md-5 text-center" style="text-align:justify;">
				<div class="d-grid gap-2">
				  	<button class="btn btn-danger btn-sm font-monospace" type="button" data-bs-toggle="collapse" href="#collapse_lien" role="button" aria-expanded="false" aria-controls="collapse_lien">créer un cahier</button>
					<?php
					/*
				  	<button class="btn btn-link font-monospace" style="font-size:75%;" type="button" data-bs-toggle="modal" data-bs-target="#modifierModal">modifier un cahier</button>


					<!-- MODAL -->
					<div class="modal fade" id="modifierModal" tabindex="-1" aria-labelledby="modifierModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="form-floating mb-3">
										<input id="code_input" type="text" class="form-control" />
										<label for="code_input">code du cahier</label>
									</div>
									<a id="modifier_lien" href="" class="btn btn-secondary btn-sm font-monospace" role="button">modifier</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /MODAL -->
					*/
					?>
					
				</div>

			</div>
		</div>

		<div class="row mb-3">
			<div class="col-md-8 offset-md-2 mb-4">


				<?php
				$collapse = "";
				if (session('message')) {
					$collapse = "show";
				    echo '<div class="mt-3 mb-2 text-center text-danger font-monospace"><i class="fas fa-exclamation-triangle"></i> '.session('message').'</div>';
				}

				$infos_video = "
				<div><b>PeerTube</b></div>
				<ul>
				<li>ouvrir la vidéo</li>
				<li>cliquer sur <i class='fas fa-share-alt'></i></li>
				<li>facultatif : paramétrer la vidéo (début, fin, options...)</i></li>
				<li>copier le code <span class='font-monospace'>iframe</span></i></li>
				<li>coller le code sans le modifier ci-dessous</i></li>
				</ul>
				<div><b>Digiplay</b></div>
				<ul>
				<li>ouvrir la vidéo</li>
				<li>cliquer sur <i class='fas fa-share-alt'></i></li>
				<li>copier le code <span class='font-monospace'>iframe</span></i></li>
				<li>coller le code sans le modifier ci-dessous</i></li>
				</ul>
				<div><b>YouTube</b></div>
				<ul>
				<li>ouvrir la vidéo</li>
				<li>cliquer sur <i class='fas fa-share'></i></li>
				<li>cliquer sur <i class='fas fa-chevron-left'></i><i class='fas fa-chevron-right'></i></li>
				<li>facultatif : paramétrer la vidéo (début, fin, options...)</li>
				<li>copier le code <span class='font-monospace'>iframe</span></li>
				<li>coller le code sans le modifier ci-dessous</i></li>
				</ul>
				Suivre une démarche similaire pour les autres services de vidéos.
				";
				?>

				<form id="collapse_lien" class="row collapse {{ $collapse }} mt-3" action="{{ route('creer-cahier-post') }}" method="POST">

                    @csrf

					<div class="col-md-6">

						<div class="p-3 h-100" style="border:solid 1px silver;border-radius:4px">

                            <div class="mb-2 text-center text-danger">PARTIE GAUCHE</div>

                            <div class="mb-2">
                                <input id="g_video" name="gauche['type']" class="radio_input form-check-input" type="radio" onclick="input_status(this.id)" value="video" />
    						    <label for="g_video" class="form-check-label">Vidéo</label> <sup data-bs-container="body" data-bs-html="true" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="{!! $infos_video !!}"><i class="fas fa-question-circle"></i></sup>
    							<div class="ms-3">
									<textarea id="g_video_input" name="gauche['data']" class="form-control font-monospace" rows="7" style="font-size:0.875rem;display:none"></textarea>
								</div>
                            </div>

                            <div class="mb-2">
    							<input id="g_pdf" name="gauche['type']" class="radio_input form-check-input" type="radio" onclick="input_status(this.id)" value="pdf" />
    						    <label for="g_pdf" class="form-check-label">PDF</label>
                                <div id="g_pdf_info" class="ms-3 mb-1 text-warning font-monospace" style="font-size:70%;display:none">l'adresse doit être en https</div>
    							<div class="ms-3">
									<input id="g_pdf_input" name="gauche['data']" class="form-control form-control-sm font-monospace" style="display:none" type="text" placeholder="adresse du document pdf" disabled />
								</div>
                            </div>

                            <div>
    							<input id="g_web" name="gauche['type']" class="radio_input form-check-input" type="radio" onclick="input_status(this.id)" value="web" />
    						    <label for="g_web" class="form-check-label">Page web</label>
                                <div id="g_web_info" class="ms-3 mb-1 text-warning font-monospace" style="font-size:70%;display:none">l'adresse doit être en https</div>
    							<div class="ms-3">
									<input id="g_web_input" name="gauche['data']" class="form-control form-control-sm font-monospace" style="display:none" type="text" placeholder="adresse de la page" disabled />
								</div>
                            </div>

						</div>

					</div>

					<div class="col-md-6">
						<div class="p-3 h-100" style="border:solid 1px silver;border-radius:4px">

                            <div class="mb-2 text-center text-danger">PARTIE DROITE</div>

                            <div class="mb-2">
                                <input id="d_scratch" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_scratch" />
    						    <label for="d_scratch" class="form-check-label">Scratch</label>
                            </div>

                            <div class="mb-2">
                                <input id="d_pyxel" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_pyxel" />
    						    <label for="d_pyxel" class="form-check-label">Pyxel</label>
                            </div>

                            <div class="mb-2">
    							<input id="d_geogebra" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_geogebra" />
    						    <label for="d_geogebra" class="form-check-label">GeoGebra</label>
                            </div>

                            <div class="mb-2">
    							<input id="d_basthon" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_basthon" />
    						    <label for="d_basthon" class="form-check-label">Basthon</label>
                            </div>

                            <div class="mb-2">
    							<input id="d_blockscad" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_blockscad" />
    						    <label for="d_blockscad" class="form-check-label">BlocksCAD</label>
                            </div>

                            <div class="mb-2">
    							<input id="d_video" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_video" />
    						    <label for="d_video" class="form-check-label">Vidéo</label> <sup data-bs-container="body" data-bs-html="true" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="{!! $infos_video !!}"><i class="fas fa-question-circle"></i></sup>
								<div class="ms-3">
									<textarea id="d_video_input" name="droite" class="form-control" rows="7" style="display:none"></textarea>
								</div>
                            </div>

                            <div class="mb-2">
    							<input id="d_pdf" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_pdf" />
    						    <label for="d_pdf" class="form-check-label">PDF</label>
                                <div id="d_pdf_info" class="ms-3 mb-1 text-warning font-monospace" style="font-size:70%;display:none">l'adresse doit être en https</div>
    							<div class="ms-3">
									<input id="d_pdf_input" name="droite" class="form-control form-control-sm font-monospace" style="display:none" type="text" placeholder="adresse du document pdf" disabled />
								</div>
                            </div>

                            <div>
    							<input id="d_web" name="d_" class="radio_input form-check-input" type="radio" onclick="input_status(this.name)" value="d_web" />
    						    <label for="d_web" class="form-check-label">Page web</label>
                                <div id="d_web_info" class="ms-3 mb-1 text-warning font-monospace" style="font-size:70%;display:none">l'adresse doit être en https</div>
    							<div class="ms-3">
									<input id="d_web_input" name="droite" class="form-control form-control-sm font-monospace" style="display:none" type="text" placeholder="adresse de la page" disabled />
								</div>
                            </div>

						</div>
					</div>

                    <div class="col-md-12">

						<div class="mt-3 p-3" style="border:solid 1px silver;border-radius:4px">
                            <p class="text-success font-monospace small">optionnel</p>
                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre</label>
                                <input id="titre" name="titre" type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="consignes" class="form-label">Consignes</label>
                                <textarea id="consignes" name="consignes" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="lien_retour" class="form-label m-0">Lien retour</label>
                                <div class="text-muted small font-monospace">lien vers un site de votre choix pour le bouton retour</div>
                                <input id="lien_retour" name="lien_retour" type="text" class="form-control" />
                            </div>

						</div>

					</div>

					<div class="col-md-12 mt-3 text-center font-monospace">
						<button type="submit" class="btn btn-danger btn-sm">CRÉER</button>
					</div>

				</form>

			</div>
		</div>


		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="ratio ratio-16x9">
					<video autoplay muted loop>
				  		<source src="{{ asset('demo.mp4') }}" type="video/mp4">
					</video>
				</div>
				<div class="font-monospace text-center" style="font-size:70%;color:silver">exemple avec une vidéo et scratch</a>
			</div>
		</div>


		<div class="row mt-2">
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

	<script>
	document.getElementById("code_input").onchange = function(){
		document.getElementById("modifier_lien").href="/modifier?m="+document.getElementById("code_input").value;
	};
	</script>

	<script>
	function input_status(id){
		for (const element of document.getElementsByClassName("radio_input")){
			if (element.checked == true){
				if(document.getElementById(element.id+'_input')) document.getElementById(element.id+'_input').style.display = "block";
				if(document.getElementById(element.id+'_info')) document.getElementById(element.id+'_info').style.display = "block";
				if(document.getElementById(element.id+'_input')) document.getElementById(element.id+'_input').disabled = false;
			} else {
				if(document.getElementById(element.id+'_input')) document.getElementById(element.id+'_input').style.display = "none";
				if(document.getElementById(element.id+'_info')) document.getElementById(element.id+'_info').style.display = "none";
				if(document.getElementById(element.id+'_input')) document.getElementById(element.id+'_input').disabled = true;
			}
		}
	}
	</script>

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

	<script>
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		  return new bootstrap.Tooltip(tooltipTriggerEl)
		})
		var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		  return new bootstrap.Popover(popoverTriggerEl)
		})
	</script>

</body>
</html>
