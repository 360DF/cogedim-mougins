<header id="top" class="h-header">
  <div class="container">
    <div class="row d-flex align-items-center h-header">
      <div class="col-12 col-md-5 text-center text-md-left">
        <a href="{{ route('index') }}">
          <img src="/img/logo-coreal.jpg" class="img-fluid logo">
        </a>
      </div>
      <div class="col-12 col-md-7 text-center text-md-left ml-auto">
        @if( $route == 'home' )
        <h1>
          <span>À MOUGINS</span>VIVRE DANS UN DOMAINE AVEC PISCINE PRIVÉE
        </h1>
        @else
        <h1>Coeur Mougins <span class="fs-18 f-light">{{ $data['name'] }}</span></h1>
        @endif
      </div>
    </div>
  </div>
</header>
