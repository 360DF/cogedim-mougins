@extends('app')
@section('content')

<section id="form-contact">
  <div class="return text-center">
    <a href="/" class="cta bg-primary mx-auto transition"><img src="img/return.png"> Accueil </a>
  </div>
  
  <div id="carousel-program" class="carousel carousel-fade slide mb-rem" data-ride="carousel">
    <div class="patch"><img src="/img/patch.png" class="img-fluid"></div>
    
    <ol class="carousel-indicators">
       @foreach($data['slides'] as $k => $v)
        <li data-target="#carousel-program" data-slide-to="{{ $loop->index }}" class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
      @endforeach
    </ol>
    
    <div class="carousel-inner">
      @foreach($data['slides'] as $k => $v)
        <div class="carousel-item h-slide {{$loop->iteration == 1 ? 'active' : '' }}" style="background-image: url(/img/{{ $v }});" ></div>
      @endforeach
    </div>
    
    <a class="carousel-control-prev" href="#carousel-program" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-program" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <h2 class="text-primary text-uppercase fs-24 f-heavy text-center mb-rem-light">{{ $data['title'] }}</h2>
  
  <div class="box-title bg-primary text-light ">
    <ul id="{{ $data['slug'] }}">
      @foreach($data['pros'] as $k => $v)
        <li>{{ $v }}</li>
      @endforeach
    </ul>
  </div>
  
  <div class="box-title bg-light-grey">
    <table class="table table-striped">
      <tbody>
        @foreach($data['stock'] as $lot)
        <tr>
            <td class="text-center text-md-left"><span class="f-bold fs-24 text-primary">{{ $lot[0] }}</span></td>
            <td class="text-center text-md-right">à partir de <span class="f-bold fs-20">{{ $lot[1] }} €</span><sup>({{ $data['slug'] == 'jardins-des-sens' ? 4 + $loop->iteration : $loop->iteration }})</sup></td>
        </tr>
         @endforeach
      </tbody>
    </table>
    <div class="subtable">
      <div class="row">
        <div class="col-4 col-md-2 text-center">
          <a href="#">
            <img src="/img/picto-brochure.png" class="img-fluid">
            <p class="text-primary fs-18 ">Brochure</p>
          </a>
        </div>
        <div class="col-4 col-md-2 text-center">
          <a href="#map" class="js-scrollTo">
            <img src="/img/picto-map.png" class="img-fluid">
            <p class="text-primary fs-18">Voir la carte</p>
          </a>
        </div>
        <div class="col-4 col-md-2 text-center">
          <a href="{{ $data['orbital'] }}" target="_blank">
            <img src="/img/picto-maquette.png" class="img-fluid">
            <p class="text-primary fs-18">Maquette orbitale</p>
          </a>
        </div>
        <div class="col-12 col-md-2 offset-md-4 text-center text-md-right">
          <img src="/img/picto-pinel-A.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  
  <div class="mt-rem">
    @include('partials._map')
  </div>
</section>

@endsection 

@section('scripts')
@endsection