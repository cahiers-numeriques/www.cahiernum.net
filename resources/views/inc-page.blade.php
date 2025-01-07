<?php

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

$infos_pdf = "Le fichier PDF doit être hébergé en ligne. Récupérez le lien du PDF et collez-le ci-dessous.";
$infos_img = ".png, .jpg, .jpeg, .gif, .svg";
$infos_document = "En choisissant cette option, les élèves pourront ouvrir un nouveau document de travail. Si vous souhaitez faire collaborer les élèves sur un même document, n'utilisez pas cette section. Créez vous-même un document et placez le lien du document dans la section 'Page web'.";



$categories = [
    'generic' => [
        ['video', 'Vidéo', 'textarea', '', $infos_video],
        ['pdf', 'PDF', 'text', '', $infos_pdf],
        ['web', 'Page web', 'text', '', ''],
        ['img', 'Image', 'text', '', $infos_img],
    ],
    'mathématiques / technologie' => [
        ['geogebra', 'Geogebra', 'hidden', 'https://www.geogebra.org/classic?lang=fr', ''],
        ['apigeom', 'Apigeom', 'hidden', 'https://coopmaths.fr/apigeom/', ''],
        ['blockscad', 'Blockscad', 'hidden', 'https://www.blockscad3d.com/editor/', ''],   
    ],
    'programmation' => [
        ['scratch', 'Scratch', 'hidden', 'https://nuitducode.github.io/scratch/master/', ''],
        ['basthon', 'Basthon', 'hidden', 'https://basthon.fr', ''],
        ['pyxel', 'Python / Pyxel', 'hidden', 'https://www.pyxelstudio.net/open-project/cahiernum', ''],
    ],
    'documents' => [
        ['framapad', 'Framapad', 'hidden', 'https://framapad.org/abc/fr/', $infos_document],
        ['digidoc', 'Digidoc', 'hidden', 'https://ladigitale.dev/digidoc/', $infos_document],  
    ]
];
?>
@foreach($categories AS $categorie => $formats)

    @if($categorie != 'generic')
        <div class="mt-3 small font-monospace" style="color:silver">{{$categorie}}</div>
    @endif


    @foreach($formats AS $format)
        <div class="mb-2">
            <input id="{{ $page }}_{{ $format[0] }}_{{ $loop->iteration }}"
                name="pages[{{ $page }}][type]"
                class="radio_input form-check-input"
                type="radio"
                onclick="input_status(this.id)"
                value="{{ $format[0] }}" 
                {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? 'checked' : '' }}
            />
            <label for="{{ $page }}_{{ $format[0] }}_{{ $loop->iteration }}" class="form-check-label">{{ $format[1] }}</label>
            @if($format[4] != '')
                <sup class="text-secondary" data-bs-container="body" data-bs-html="true" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="{!! $format[4] !!}"><i class="fas fa-question-circle"></i></sup>
            @endif
            <div class="ms-3">
                @if($format[2] == 'textarea')
                    <textarea id="{{ $page }}_{{ $format[0] }}_{{ $loop->iteration }}_input"
                        name="pages[{{ $page }}][input]"
                        class="form-control font-monospace"
                        rows="7"
                        style="font-size:0.875rem; {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? 'display:block;' : 'display:none;' }}"
                        {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? '' : ' disabled' }}>
                            {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? $pages[$page]['input'] : '' }}
                    </textarea>
                @endif
                @if($format[2] == 'text' OR $format[2] == 'hidden')
                    <input id="{{ $page }}_{{ $format[0] }}_{{ $loop->iteration }}_input"
                        name="pages[{{ $page }}][input]"
                        class="form-control form-control-sm font-monospace"
                        style="{{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? 'display:block;' : 'display:none;' }}"
                        type="{{ $format[2] }}" 
                        placeholder="url"
                        value="{{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? $pages[$page]['input'] : $format[3] }}"
                        {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? '' : ' disabled' }}
                    />
                @endif
            </div>
        </div>
    @endforeach

@endforeach