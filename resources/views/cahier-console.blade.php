<?php
$cahier = App\Models\Cahier::where('jeton_secret', $jeton_secret)->first();
if (!$cahier) {
    echo "<pre>Ce cahier n'existe pas</pre>";
    exit();
}
?>
<!doctype html>
<html lang="fr">
<head>
	@include('inc-meta')
	@include('inc-matomo')
    <meta name="robots" content="noindex">
	<title>Cahiers Numériques | Console</title>
</head>
<body>

    <div class="container mt-4 mb-5">

        <div class="row">

            <div class="col-md-1 text-end">
                <div class="mb-3">
                    <a class="btn btn-light btn-sm" href="/" role="button"><i class="fas fa-home"></i></a>
                </div>
                <div id="copie_confirmation" class="small text muted font-monospace me-1">&nbsp;</div>
            </div>

            <div class="col-md-11">

                @if(isset($_GET['i']) AND !Auth::check())
                    <div class="font-monospace text-danger text-center fw-bold m-2">SAUVEGARDEZ LES INFORMATIONS CI-DESSOUS AVANT DE QUITTER CETTE PAGE</div>
                @endif
                @if(!Auth::check())
                <div class="row justify-content-md-center mb-4">
                    <div class="col-md-auto" style="padding:5px 20px 5px 20px;border:dashed 2px #e3342f;border-radius:8px;">
                        <div class="text-center fw-bold font-monospace small">lien secret</div>
                        <div class="text-center rounded bg-danger text-white p-3">
                            <a id="lien_secret" href="/console/{{strtoupper($cahier->jeton_secret)}}" target="_blank" class="text-white ffw-bold font-monospace">www.cahiernum.net/console/{{strtoupper($cahier->jeton_secret)}}</a>
                            <span class="ps-1" onclick="copier('lien_secret')" style="cursor:pointer;vertical-align:1px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="copier"><i class="fa-regular fa-copy"></i></span>
                        </div>
                        <div class="small text-muted pt-1"><span class="text-danger"><i class="fas fa-exclamation-circle"></i> Ne pas partager ce lien</span><br />Il permet d'accéder de revenir sur cette page.</div>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-md-12 text-center">

                        <div class="text-left small text-muted font-monospace m-0 p-0">lien public</div>

                        <div class="text-left fw-bold font-monospace">
                            <a id="lien_public" href="/{{strtoupper($cahier->jeton_public)}}" target="_blank" class="text-dark" style="font-size:24px">www.cahiernum.net/{{strtoupper($cahier->jeton_public)}}</a>
                        </div>

                        <div>    		
                            <span class="pe-1" onclick="fullscreen('fullscreen_lien_public')" style="cursor:pointer;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="afficher"><i class="fas fa-expand"></i></span>
                            <div id="fullscreen_lien_public" class="bg-white text-center" style="display:none">
                                <br /><br /><br /><br /><br /><br />
                                <img src="{{ asset('img/cahiernumerique.png') }}" width="100" />
                                <br /><br /><br /><br /><br /><br /><br />
                                <div class="text-dark fw-bold font-monospace" style="font-size:5vw;">www.cahiernum.net/{{ strtoupper($cahier->jeton_public) }}</div>
                            </div>

                            <span class="ps-1" onclick="copier('lien_public')" style="cursor:pointer;vertical-align:1px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="copier"><i class="fa-regular fa-copy"></i></span>
                            
                        </div>
                        
					</div>
				</div>

                <div class="row mt-4 mb-4 g-1">
                    <div class="col-md-6 text-end">
                        <!-- modifier -->
                        <a class="btn btn-dark btn-sm font-monospace me-2" href="/cahier-creer/{{Crypt::encryptString($cahier->id)}}" role="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="modifier"><i class="fa-solid fa-pen"></i></a>
                        <!-- /modifier -->
                    </div>
                    <div class="col-md-6 text-start">
                        <!-- supprimer -->
                        <button id="supprimer_button" onclick="showConfirm('supprimer_button', 'rendre_confirm')" class="btn btn-secondary btn-sm" type="button"><i class="fa-solid fa-trash"></i></button>
                        <span id="rendre_confirm" style="display:none">
                            <button id="rendre_cancel" onclick="hideConfirm('supprimer_button', 'rendre_confirm')" class="btn btn-dark btn-sm" type="button"><i class="fa-solid fa-xmark"></i></button>
                            <a class="btn btn-danger btn-sm text-white" href="/cahier-supprimer/{{Crypt::encryptString($cahier->id)}}" role="button"><i class="fa-solid fa-trash me-1"></i> {{__('confirmer')}}</a>
                        </span>
                    <!-- /supprimer -->
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div style="border: dashed 2px silver;" class="p-3 h-100 rounded">
                            <div class="mb-2 text-center text-secondary">PAGE GAUCHE</div>
                            <div class="mb-2"><i class="fa-solid fa-tag me-2"></i>{{ strtoupper($cahier->gauche_type) }}</div>
                            @if($cahier->gauche_type == 'pdf' OR $cahier->gauche_type == 'web')
                                <div style="clear:both">
                                    <div class="mb-2" style="float:left;"><i class="fa-solid fa-arrow-right me-2"></i></div>
                                    <div class="mb-2 font-monospace text-break">{{ $cahier->gauche_input}}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="border: dashed 2px silver;" class="p-3 h-100 rounded">
                            <div class="mb-2 text-center text-secondary">PAGE DROITE</div>
                            <div class="mb-2"><i class="fa-solid fa-tag me-2"></i>{{ strtoupper($cahier->droite_type) }}</div>
                            @if($cahier->droite_type == 'pdf' OR $cahier->droite_type == 'web')
                                <div style="clear:both">
                                    <div class="mb-2" style="float:left;"><i class="fa-solid fa-arrow-right me-2"></i></div>
                                    <div class="mb-2 font-monospace text-break">{{ $cahier->droite_input}}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        @if($cahier->titre)
                        <div class="text-uppercase">{{ $cahier->titre}}</div>
                        @endif
                        @if($cahier->consignes)
                        <div class="markdown_content border rounded p-3" style="text-align:justify;">{{ $cahier->consignes }}</div>
                        @endif
                        @if($cahier->lien_retour)
                        <div class="font-monospace small ps-2"><i class="fa-solid fa-arrow-turn-down fa-rotate-90 me-2" style="vertical-align:-3px;"></i></i>{{ $cahier->lien_retour}}</div>
                        @endif
                    </div>
                </div>

            </div>

        </div><!-- row -->
    </div><!-- container -->

    @include('inc-bottom-js')
    @include('markdown/inc-markdown-afficher-js')

    {{-- == Copie lien ======================================================= --}}	
	<script>
	function copier(id) {
		var texte = document.getElementById(id).textContent;
		if (!navigator.clipboard) {
			// Alternative pour les navigateurs ne prenant pas en charge navigator.clipboard
			var zoneDeCopie = document.createElement("textarea");
			zoneDeCopie.value = texte;
			document.body.appendChild(zoneDeCopie);
			zoneDeCopie.select();
			document.execCommand("copy");
			document.body.removeChild(zoneDeCopie);
			return;
		}

		navigator.clipboard.writeText(texte).then(function() {
			//alert("Le texte a été copié dans le presse-papiers.");
		}, function() {
			// Gérer les erreurs éventuelles
			//alert("Impossible de copier le texte dans le presse-papiers. Veuillez le faire manuellement.");
		});
		
		var status = document.getElementById('copie_confirmation');
        status.innerText = "copié";
		
		status.style.opacity = '1';
		var fadeOutInterval = setInterval(function() {
			var opacity = parseFloat(status.style.opacity);
			if (opacity <= 0) {
				clearInterval(fadeOutInterval);
				status.innerHTML = "&nbsp;"; // Effacer le texte après l'animation
			} else {
				status.style.opacity = (opacity - 0.1).toString();
			}
		}, 150);
	}
	</script>
    {{-- == /Copie lien ====================================================== --}}	

    {{-- == Fullscreen lien ================================================== --}}
    <script>
        function fullscreen(id) {
            var el = document.getElementById(id);
            var isFullscreen = document.fullscreenElement || document.webkitFullscreenElement || document.msFullscreenElement || document.mozFullScreenElement;

            if (isFullscreen) {
                // Quitter le plein écran
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) { /* Safari */
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) { /* IE11 */
                    document.msExitFullscreen();
                } else if (document.mozCancelFullScreen) { /* Firefox */
                    document.mozCancelFullScreen();
                }
            } else {
                // Afficher l'élément et entrer en plein écran
                el.style.display = 'block';
                if (el.requestFullscreen) {
                    el.requestFullscreen();
                } else if (el.webkitRequestFullscreen) { /* Safari */
                    el.webkitRequestFullscreen();
                } else if (el.msRequestFullscreen) { /* IE11 */
                    el.msRequestFullscreen();
                } else if (el.mozRequestFullScreen) { /* Firefox */
                    el.mozRequestFullScreen();
                }
            }
        }

        function updateFsButton() {
            if (!document.fullscreenElement && !document.webkitFullscreenElement && 
                !document.msFullscreenElement && !document.mozFullScreenElement) {
                
                if (currentFullscreenElement) {
                    // L'élément n'est plus en plein écran, le cacher
                    currentFullscreenElement.style.display = "none";
                    currentFullscreenElement = null;  // Réinitialiser pour éviter toute ambiguïté
                }
            } else {
                // Enregistrer l'élément en plein écran si ce n'est pas déjà fait
                currentFullscreenElement = document.fullscreenElement || 
                                        document.webkitFullscreenElement || 
                                        document.msFullscreenElement || 
                                        document.mozFullScreenElement;
            }
            console.log("État du plein écran changé");
        }

        document.addEventListener("fullscreenchange", updateFsButton, false);
        document.addEventListener("webkitfullscreenchange", updateFsButton, false);
        document.addEventListener("mozfullscreenchange", updateFsButton, false);
        document.addEventListener("MSFullscreenChange", updateFsButton, false);
    </script>
    {{-- == /Fullscreen lien ================================================= --}}

	{{-- == Mécanisme confirmation suppression cellule ======================= --}}
	<script>
		function showConfirm(buttonId, confirmId) {
			// Cacher le bouton delete_button et afficher delete_confirm
			document.getElementById(buttonId).style.display = 'none';
			document.getElementById(confirmId).style.display = 'inline';
		}

		function hideConfirm(buttonId, confirmId) {
			// Cacher delete_confirm et réafficher delete_button
			document.getElementById(confirmId).style.display = 'none';
			document.getElementById(buttonId).style.display = 'inline';
		}
	</script>
	{{-- == /Mécanisme bouton confirmation =================================== --}}	

</body>
</html>