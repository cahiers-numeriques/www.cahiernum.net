<!doctype html>
<html lang="fr">
<head>
	@include('inc-meta')
    @include('markdown/inc-markdown-css')
	@include('inc-matomo')
	<title>Cahier Numérique | {{ $jeton_public }}</title>

    <style>
        html,body {
          height: 100%;
		  background-color:white;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 10px 1fr;
            height:100%;
        }
        .gutter-col {
            grid-row: 1/-1;
            cursor: col-resize;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAeCAYAAADkftS9AAAAIklEQVQoU2M4c+bMfxAGAgYYmwGrIIiDjrELjpo5aiZeMwF+yNnOs5KSvgAAAABJRU5ErkJggg==');
            background-color: rgb(229, 231, 235);
            background-repeat: no-repeat;
            background-position: 50%;
        }
        .gutter-col-1 {
            grid-column: 2;
        }
        .video {
          aspect-ratio: 16 / 9;
          width: 100%;
        }
    </style>

</head>

<body>


	<?php
	$cahier = App\Models\Cahier::where('jeton_public', $jeton_public)->first();

	$lien_retour = ($cahier['lien_retour']) ? trim($cahier['lien_retour']) : './..';

	// PAGE GAUCHE
	if ($cahier['gauche_type'] == 'video') {
		$gauche_iframe = preg_replace('/width\s*=\s*".*?"/', "", $cahier['gauche_input']);
		$gauche_iframe = preg_replace('/height\s*=\s*".*?"/', "", $gauche_iframe);
		$gauche_iframe = preg_replace('/class\s*=\s*".*?"/', "", $gauche_iframe);
		$gauche_iframe = preg_replace('/\s+/', " ", $gauche_iframe);
		$gauche_iframe = preg_replace('/<\s*iframe/', "<iframe class=\"video\"", $gauche_iframe);
	}

	if ($cahier['gauche_type'] == 'pdf'
		OR $cahier['gauche_type'] == 'web'
		OR $cahier['gauche_type'] == 'scratch'
		OR $cahier['gauche_type'] == 'pyxel'
		OR $cahier['gauche_type'] == 'geogebra'
		OR $cahier['gauche_type'] == 'basthon'
		OR $cahier['gauche_type'] == 'blockscad') {
			$gauche_iframe = '<iframe src="' . $cahier['gauche_input'] . '" width="100%" style="min-height:800px;height:calc(100% - 7px);border:none;" frameborder="0" class="rounded"></iframe>';
	}


	// PAGE DROITE
	if ($cahier['droite_type'] == 'video') {
		$droite_iframe = preg_replace('/width\s*=\s*".*?"/', "", $cahier['droite_input']);
		$droite_iframe = preg_replace('/height\s*=\s*".*?"/', "", $droite_iframe);
		$droite_iframe = preg_replace('/class\s*=\s*".*?"/', "", $droite_iframe);
		$droite_iframe = preg_replace('/\s+/', " ", $droite_iframe);
		$droite_iframe = preg_replace('/<\s*iframe/', "<iframe class=\"video\"", $droite_iframe);
	}

	if ($cahier['droite_type'] == 'pdf'
		OR $cahier['droite_type'] == 'web'
		OR $cahier['droite_type'] == 'scratch'
		OR $cahier['droite_type'] == 'pyxel'
		OR $cahier['droite_type'] == 'geogebra'
		OR $cahier['droite_type'] == 'basthon'
		OR $cahier['droite_type'] == 'blockscad') {
			$droite_iframe = '<iframe src="' . $cahier['droite_input'] . '" width="100%" style="min-height:800px;height:calc(100% - 7px);border:none;" frameborder="0" class="rounded"></iframe>';
	}
	?>

	<div class="grid">
        <div style="overflow-y:hidden;position:relative">
            <div id="gauche" style="width:100%;height:100%;overflow-y:scroll;direction: rtl;">
                <div class="p-3" style="direction: ltr;">

					<a class="btn btn-light btn-sm" href="{{ $lien_retour }}" role="button" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="{{ $lien_retour }}"><i class="fas fa-arrow-left"></i></a>
					
					<div class="mt-3 ps-2">

						@if(trim($cahier['consignes']) !== "")
							<div class="me-2" style="float:left;margin-top:-3px;">
								<a id="toggleButton" data-bs-toggle="collapse" href="#collapseConsignes" role="button" aria-expanded="false" aria-controls="collapseConsignes">
									<svg id="iconSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="10">
										<!-- Icône par défaut -->
										<path d="m 287.65755,77.277496 -255.831894,0.0997 c -12.89151,0 -24.5834698,7.79568 -29.5801998,19.78776 -4.99669,11.992124 -2.19812999,25.681614 6.89587,34.875544 l 127.9159638,127.91595 0.0997,-0.0997 c 12.49179,12.49178 32.77732,12.49178 45.26911,0 L 310.34203,131.94083 c 9.19393,-9.19393 11.89256,-22.88538 6.89587,-34.877464 -4.99673,-11.99212 -16.58875,-19.78583 -29.58016,-19.78583 z M 159.89187,333.08403 c -8.19456,0 -16.38962,3.12298 -22.63549,9.36885 h -0.0997 L 9.2406962,470.36881 c -9.19396999,9.19393 -11.8926,22.88538 -6.89587,34.87747 4.9967,11.99212 16.5887498,19.78582 29.5801598,19.78582 H 287.75688 c 12.89151,0 24.58347,-7.7937 29.5802,-19.78582 4.99669,-11.99209 2.20009,-25.68354 -6.8939,-34.87747 L 182.52722,342.45288 c -6.24588,-6.24587 -14.44093,-9.36885 -22.63554,-9.36885 z"/>
									</svg>
								</a>
							</div>
						@endif
						
						@if(trim($cahier['titre']) !== ""){{ strtoupper(trim($cahier['titre'])) }}@endif

					</div>
					
					@if(trim($cahier['consignes']) !== "")
						<div id="collapseConsignes" class="collapse mt-2 p-3 show markdown_content border rounded bg-light">{!! trim($cahier['consignes']) !!}</div>
					@endif

					<div class="mt-3" >{!! $gauche_iframe !!}</div>

				</div>

            </div>
        </div>

        <div id="poignee" class="gutter-col gutter-col-1"></div>

		<div style="overflow-y:hidden;position:relative;height:100%;">
			<div class="p-3" style="width:100%;height:100%;overflow-y:scroll;">{!! $droite_iframe !!}</div>
		</div>

    </div>

	@include('inc-bottom-js')
	@include('markdown/inc-markdown-afficher-js')

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const iconSvg = document.getElementById("iconSvg");

			// Écoute l'événement d'ouverture du collapse
			document.getElementById("collapseConsignes").addEventListener('shown.bs.collapse', function () {
				// Change l'icône pour une flèche vers le haut
				iconSvg.innerHTML = '<path d="m 287.65755,77.277496 -255.831894,0.0997 c -12.89151,0 -24.5834698,7.79568 -29.5801998,19.78776 -4.99669,11.992124 -2.19812999,25.681614 6.89587,34.875544 l 127.9159638,127.91595 0.0997,-0.0997 c 12.49179,12.49178 32.77732,12.49178 45.26911,0 L 310.34203,131.94083 c 9.19393,-9.19393 11.89256,-22.88538 6.89587,-34.877464 -4.99673,-11.99212 -16.58875,-19.78583 -29.58016,-19.78583 z M 159.89187,333.08403 c -8.19456,0 -16.38962,3.12298 -22.63549,9.36885 h -0.0997 L 9.2406962,470.36881 c -9.19396999,9.19393 -11.8926,22.88538 -6.89587,34.87747 4.9967,11.99212 16.5887498,19.78582 29.5801598,19.78582 H 287.75688 c 12.89151,0 24.58347,-7.7937 29.5802,-19.78582 4.99669,-11.99209 2.20009,-25.68354 -6.8939,-34.87747 L 182.52722,342.45288 c -6.24588,-6.24587 -14.44093,-9.36885 -22.63554,-9.36885 z"/>';
			});

			// Écoute l'événement de fermeture du collapse
			document.getElementById("collapseConsignes").addEventListener('hidden.bs.collapse', function () {
				// Change l'icône pour une flèche vers le bas
				iconSvg.innerHTML = '<path d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8L288 288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128zm0-429.3l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8L32 224c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128c12.5-12.5 32.8-12.5 45.3 0z"/>';
			});
		});
	</script>

    <script src="https://unpkg.com/split-grid/dist/split-grid.js"></script>
    <script>
	    Split({
	        minSize: 300,
	        columnGutters: [{
	            track: 1,
	            element: document.querySelector('.gutter-col-1'),
	        }],
	    })
    </script>

</body>
</html>
