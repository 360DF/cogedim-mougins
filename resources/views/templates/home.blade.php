@extends('app')
@section('content')

<!--header-->
@include('partials._header')  

<!--content-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>SLIDER BOOTSTRAP .4</h1>
        <!--Slider-->
        <div class="slider">
          <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div style="background-image: url(/img/slide-01.jpg);" class="d-block h-slide"></div>
              </div>
              <div class="carousel-item">
                <div style="background-image: url(/img/slide-02.jpg);" class="d-block h-slide"></div>
              </div>
              <div class="carousel-item">
                <div style="background-image: url(/img/slide-03.jpg);" class="d-block h-slide"></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!--Fin Slider-->
      </div>
        </div>  
      </div>  
    </div>         
  </div>       
</section>

<!--form-->
<section id="form-contact">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-7">



      </div>
      <div class="col-12 col-lg-5">
        <div id="sticker" class="bg-grey p20">
          @include('partials._form')
        </div  
      </div>
    </div>
  </div>
</section>

<!--footer-->
@include('partials._footer')  

<!--cookies banner-->
@include('partials._cookies-banner')  

@endsection  
@section('scripts')
@endsection