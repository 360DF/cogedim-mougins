<div class="col-12 col-lg-6">
    <article class="programm-container">
        <a href="{{ route('getProgram', ['slug' => $program['slug']]) }}" class="nodeco">
            <div class="program-header">
                <span class="slogan fs-20 f-heavy">{{ $program['slogan'] }}</span>
            </div>
            <img src="img/{{ $program['slides'][0] }}" alt="" class="img-fluid w-100">
            <div class="infos f-book">
                <span class="location d-block fs-18">{{ $program['location'] }}</span>
                <span class="name d-block fs-24">{{ $program['name'] }}</span>
            </div>
        </a>
        <div class="stock">
            @foreach($program['stock'] as $lot)
                <div class="{{ $loop->iteration == 4 ? 'collapse' : '' }} {{ $loop->count == 4 && $loop->iteration == 3 ? 'opacity' : '' }}" id="{{ $loop->iteration == 4 ? 'collapse-last' : '' }}">
                    <div class="lot fs-20 d-flex justify-content-between align-items-center">
                        <span class="typo">{{ $lot[0] }}</span> 
                        <span class="price">
                            <span class="fs-16">à partir de</span>
                            <strong>{{ $lot[1] }} € </strong><sup>({{ $program['slug'] == 'domaine-jardins-en-vue' ? $loop->iteration : 4 + $loop->iteration }})</sup>
                        </span>
                    </div>
                </div>
                @if($loop->iteration == 4)
                
                @endif
            @endforeach
        </div>
        <button class="btn btn-link fs-20 f-book {{$program['slug'] == 'jardins-des-sens' ? 'invisible' : '' }}" id="toggle-btn" type="button" data-toggle="collapse" data-target="#collapse-last" aria-expanded="false" aria-controls="collapse-last">
                
        </button>
        <div class="actions d-flex justify-content-start">
            <a href="/pdf/{{ $program['brochure'] }}" target="_blank" class="brochure">
                <img src="/img/picto-brochure.png" />
                <span class="d-block fs-18">Brochure</span>
            </a>
            <a href="#" data-toggle="modal" data-target="#form-modal" data-program="{{ $program['name'] }}" class="be-called">
                <img src="/img/picto-phone.png" />
                <span class="d-block fs-18">Etre appelé</span>
            </a>
            <a href="{{ route('getProgram', ['slug' => $program['slug']]) }}" class="to-programm ml-auto">
                <img src="/img/picto-en-savoir.png" />
                <span class="d-block fs-18">En savoir +</span>
            </a>
        </div>
    </article>
</div>