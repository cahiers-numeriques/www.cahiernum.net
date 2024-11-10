<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($cahier_id)) {
    $cahier = App\Models\Cahier::find(Crypt::decryptString($cahier_id));
	if (!isset($cahier)) {
		echo "<pre>Ce cahier n'existe pas.</pre>";
		exit();
	}
}
?>
<!doctype html>
<html lang="fr">
<head>
	@include('inc-meta')
    @include('markdown/inc-markdown-css')
	@include('inc-matomo')
    <!-- Autoriser l'indexation et le suivi des liens (par défaut) -->
    <meta name="robots" content="index, follow">
    <!-- Description -->
    <meta name="description" content="Création ou modification d'un Cahier Numérique. Options: vidéo, fichier PDF, page web, Scratch, Geogebra, Apigeom, Basthon, BlocksCAD, Framapad, Digidoc, Python, Pyxel. Catégories: mathématiques / technologie, programmation, documents." />
	<title>Cahiers Numériques | Création</title>
</head>

<body>

    <div class="container mt-4 mb-5">

        <div class="row">

            <div class="col-md-1">
                <div class="text-right mb-3">
                    @if(isset($cahier))
                        <a class="btn btn-light btn-sm" href="/console/{{ strtoupper($cahier->jeton_secret) }}" role="button"><i class="fas fa-arrow-left"></i></a>
                    @else
                        <a class="btn btn-light btn-sm" href="/" role="button"><i class="fas fa-home"></i></a>
                    @endif
                </div>
            </div>

            <div class="col-md-11">

                <h1>CAHIER NUMÉRIQUE</h1>

                <?php
                // traitement des données
                $page = [];
                $titre = ''; 
                $consignes = ''; 
                $lien_retour = ''; 

                if (isset($cahier)) {
                    $pages['gauche']['type'] = $cahier->gauche_type;
                    $pages['gauche']['input'] = $cahier->gauche_input;
                    $pages['droite']['type'] = $cahier->droite_type;
                    $pages['droite']['input'] = $cahier->droite_input;
                    $titre = $cahier->titre;
                    $consignes = $cahier->consignes;
                    $lien_retour = $cahier->lien_retour;
                }

                if (old()) {
                    $pages['gauche']['type'] =  old("pages.gauche.type");
                    $pages['gauche']['input'] = old("pages.gauche.input");
                    $pages['droite']['type'] = old("pages.droite.type");
                    $pages['droite']['input'] = old("pages.droite.input");
                    $titre = old("titre");
                    $consignes = old("consignes");
                    $lien_retour = old("lien_retour");
                } 
                ?>

                <form class="row mt-3" action="{{ route('cahier-creer-post') }}" method="POST">

                    @csrf

                    <div class="col-md-6">

                        <div style="border: dashed 2px silver; {{ $errors->has('pages.gauche.type') || $errors->has('pages.gauche.input') ? 'border-color:#DC3545;' : '' }}" class="p-3 h-100 rounded ">
                            <div class="mb-2 text-center text-secondary">PAGE GAUCHE</div>
                            @php
                            $page = 'gauche';
                            @endphp
                            @include('inc-page')
                        </div>
                        <div class="font-monospace small text-danger">
                            {!! $errors->has('pages.gauche.type') || $errors->has('pages.gauche.input') ? 'données incomplètes' : '&nbsp;' !!}
                        </div>


                    </div>

                    <div class="col-md-6">

                        <div style="border: dashed 2px silver; {{ $errors->has('pages.gauche.type') || $errors->has('pages.gauche.input') ? 'border-color:#DC3545;' : '' }}" class="p-3 h-100 rounded ">
                            <div class="mb-2 text-center text-secondary">PAGE DROITE</div>
                            @php
                            $page = 'droite';
                            @endphp
                            @include('inc-page')
                        </div>
                        <div class="font-monospace small text-danger">
                            {!! $errors->has('pages.droite.type') || $errors->has('pages.droite.input') ? 'données incomplètes' : '&nbsp;' !!}
                        </div>

                    </div>

                    <div class="col-md-8 offset-md-2">

                        <div class="text-success font-monospace small ps-2 pt-4 pb-3">
                            <i class="fa-solid fa-turn-down fa-flip-horizontal" style="vertical-align:-7px;"></i> optionnel
                        </div>

                        <div class="text-muted font-monospace small pb-3">
                            Les informations optionnelles ci-dessous seront placées en haut de la page gauche.
                        </div>

                        <div>TITRE DU CAHIER</div>
                        <input id="titre" name="titre" type="text" class="form-control" value="{{ $titre }}" />

                        <div class="mt-3">CONSIGNES</div>
                        <div class="text-muted font-monospace small pb-1">au format <a href="https://docs.forge.apps.education.fr/tutoriels/tutomd/" target="_blank">Markdown</a></div>
                        <textarea id="markdown_content" name="consignes" class="form-control" rows="3">{{ $consignes }}</textarea>

                        <div class="mt-3">LIEN RETOUR</div>
                        <div class="text-muted small font-monospace">lien vers un site de votre choix pour le bouton retour</div>
                        <input id="lien_retour" name="lien_retour" type="text" class="form-control" value="{{ $lien_retour }}" />
                
                    </div>

                    @if(isset($cahier))
                        <input id="cahier_id" type="hidden" name="cahier_id" value="{{Crypt::encryptString($cahier->id)}}" />
                    @endif

                    <div class="col-md-12 mt-4 text-center font-monospace">
                        <button type="submit" class="btn btn-danger btn-sm">VALIDER</button>
                    </div>

                </form>

            </div>

        </div><!-- row -->
    </div><!-- container -->

    @include('inc-bottom-js')
    @include('markdown/inc-markdown-editeur-js')

	<script>
	function input_status(id) {
        //console.log('=================================');
        //console.log(id);
        document.querySelectorAll(".radio_input").forEach(element => {
            //console.log(element);
            const inputElement = document.getElementById(element.id + '_input');
            const infoElement = document.getElementById(element.id + '_info');
            

            if (element.checked) {
                if (inputElement) inputElement.style.display = "block";
                if (infoElement) infoElement.style.display = "block";
                if (inputElement) inputElement.disabled = false;
            } else {
                if (inputElement) inputElement.style.display = "none";
                if (infoElement) infoElement.style.display = "none";
                if (inputElement) inputElement.disabled = true;
            }
            //console.log(inputElement);
        });
    }
	</script>

</body>
</html>
