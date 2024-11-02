<?php
// paramétrage vidéos
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

<div class="mb-2">
    <input id="{{ $page }}_video"
           name="pages[{{ $page }}][type]"
           class="radio_input form-check-input"
           type="radio" onclick="input_status(this.id)"
           value="video" 
           {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == 'video') ? 'checked' : '' }} />
    <label for="{{ $page }}_video" class="form-check-label">Vidéo</label>
    <sup data-bs-container="body" data-bs-html="true" data-bs-trigger="hover focus" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="{!! $infos_video !!}"><i class="fas fa-question-circle"></i></sup>
    <div class="ms-3">
        <textarea id="{{ $page }}_video_input"
                  name="pages[{{ $page }}][input]"
                  class="form-control font-monospace"
                  rows="7"
                  style="font-size:0.875rem; {{ (isset($pages[$page]['type'] ) AND $pages[$page]['type'] == 'video') ? 'display:block;' : 'display:none;' }}"
                  {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == 'video') ? '' : ' disabled' }}>{{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == 'video') ? $pages[$page]['input'] : '' }}</textarea>
    </div>
</div>


<?php
$formats = [
    ['pdf', 'PDF', 'text', ''],
    ['web', 'Page web', 'text', ''],
    ['scratch', 'Scratch', 'hidden', 'https://nuitducode.github.io/scratch/master/'],
    ['pyxel', 'Python / Pyxel', 'hidden', 'https://www.pyxelstudio.net/open-project/cahiernum'],
    ['geogebra', 'Geogebra', 'hidden', 'https://www.geogebra.org/classic?lang=fr'],
    ['basthon', 'Basthon', 'hidden', 'https://basthon.fr'],
    ['blockscad', 'Blockscad', 'hidden', 'https://www.blockscad3d.com/editor/'],
];
?>

@foreach($formats AS $format)
    <div class="mb-2">
        <input id="{{ $page }}_{{ $loop->iteration }}"
            name="pages[{{ $page }}][type]"
            class="radio_input form-check-input"
            type="radio"
            onclick="input_status(this.id)"
            value="{{ $format[0] }}" 
            {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? 'checked' : '' }}
        />
        <label for="{{ $page }}_{{ $loop->iteration }}" class="form-check-label">{{ $format[1] }}</label>
        <div class="ms-3">
            <input id="{{ $page }}_{{ $loop->iteration }}_input"
                name="pages[{{ $page }}][input]"
                class="form-control form-control-sm font-monospace"
                style="{{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? 'display:block;' : 'display:none;' }}"
                type="{{ $format[2] }}" 
                placeholder="adresse de la page"
                value="{{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? $pages[$page]['input'] : $format[3] }}"
                {{ (isset($pages[$page]['type']) AND $pages[$page]['type'] == $format[0]) ? '' : ' disabled' }}
            />
        </div>
    </div>
@endforeach