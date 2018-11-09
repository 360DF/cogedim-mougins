@extends('app')
@section('content')

<section id="topSlider" class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        
        <div class="d-block d-lg-none infos-offre red">
          <span class="n1">les 8 & 9 novembre </span>
          <span class="n2">Lancement <b>exclusivement</b> réservé aux asniérois !</span>
        </div>
        
        <div id="sliderTop" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Content slider -->
          <div class="logo-slider d-none d-lg-block">
            <img src="/img/logo-top.png">
          </div>
          <div class="text-right-slider d-none d-lg-block">
            <img src="/img/text-slider.png">
          </div>
          <div class="tva-slider d-none d-lg-block">
            <img src="/img/tva.png" class="img-fluid">
          </div>
          <div class="text-bottom-slider d-lg-flex justify-content-end d-none d-lg-block">
            <div class="orange-icon">DU STUDIO AU <span>5 PIÈCES DUPLEX</span></div>
            <div class="orange-icon">À 250 m** DU <span>MÉTRO LIGNE 13</span></div>
            <div class="orange-icon">AU CŒUR D’UN ÉCRIN <span>DE VERDURE</span></div>
          </div>
          <!-- img slider -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/img/slider1a.jpg')"></div>
            <div class="carousel-item" style="background-image: url('/img/slider1b.jpg')"></div>
            <div class="carousel-item" style="background-image: url('/img/slider1c.jpg')"></div>
          </div> 
          <!-- ARROW -->
          <div class="d-block">
            <a class="carousel-control-prev" href="#sliderTop" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#sliderTop" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <div class="d-block d-lg-none infos-offre">
          <div class="tva-slider">
            <img src="/img/tva.png" class="img-fluid">
          </div>
          <h1>du studio au 5 pièces duplex
          <span>avec de généreuses terrasses aux vues dégagées*</span></h1>
          <div class="box-info-orange">
            <span class="n1">Jusqu’à <b>13 000 € offerts(2)</b></span> 
            <span class="n2">POUR aménager votre appartement</span>
            <span class="n3">Offre réservée aux 20 premiers réservataires</span> 
          </div>
        <!--
          <a href="#contact" class="contact transition position-sticky mx-auto">Contactez-nous <img src="/img/icon-timer.png"></a>
          -->
        </div>
        
      </div> 
    </div>  
  </div>
</section>

<div id="cta" class="container d-none d-lg-block">
  <div class="row">
    <div class="col-12">
      <a class="js-scrollTo" href="#presentation">
        <div class="cta ml-auto transition hvr-sweep-to-right">Je découvre <span class=""><img src="/img/arrow-bottom-whyte.png"></span></div>
      </a>
    </div>
  </div> 
</div>

<header class="sticky-top section inter">
  <div class="container">
    <div class="row">
      <div class="col-12 nopadding">
  
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/logo.png" class="img-fluid logo"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>  
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto mx-auto ">
                <li class="nav-item">
                  <a class="nav-link hvr-overline-from-center js-scrollTo" href="#appartements">Les appartements</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link hvr-overline-from-center js-scrollTo" href="#residence">La résidence</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link hvr-overline-from-center js-scrollTo" href="#quartier">Le quartier</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link hvr-overline-from-center js-scrollTo" href="#prix" target="_blank">Les prix</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scrollTo nav-contact transition d-none d-lg-block" href="#contact">Contactez-nous <img src="/img/icon-timer.png"> </a>
                </li>
              </ul>
            </div>
            
          </div>
        </nav>
      </div>
    </div>
  </div>    
</header>

<section id="presentation" class="section">
  <div class="bg-right">
    <div class="container">
      
      <div class="row">
        <div class="col-12">
          <h2 class="title text-center"><span>A</span>RT<span>C</span>HIPEL</h2>
          <h3 class="sub-title text-center">IMMERSION DANS UN QUARTIER D’EXCEPTION</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-10">    
          <div class="row justify-content-center">
            <div class="col-12 col-md-6">
              <p class="block">Renouez avec le bien-être et la sérénité, à quelques stations de métro de Paris. À proximité directe de la <b>ligne 13</b>, des établissements scolaires et des commerces, la résidence « <b>Artchipel</b> » s'installe avec allure à Asnières-sur-Seine. Véritable écrin de verdure, elle se structure en plusieurs immeubles isolés, séparés par des allées discrètes, et reproduisant à merveille l’univers pavillonnaire du quartier, calme et arboré.</p> 
            </div>
            <div class="col-12 col-md-6">
              <p class="block">« <b>Artchipel</b> » insuffle également une nouvelle dynamique à la rue du Ménil avec le développement en pied d’immeuble de <b>commerces</b> et de toute une déclinaison de <b>lieux d’échange</b> et de partage. Pour venir vous installer ou organiser au mieux votre projet d'investissement à proximité de la capitale, « <b>Artchipel</b> » est l'adresse idéale !</p>
            </div>
          </div>
        </div>
      </div>   
      
    </div> 
  </div>
</section>

<section id="appartements" class="section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-4">
     
        <h2 class="title text-left text-uppercase">résider en ville, <span>vivre dans un jardin</span></h2>
        <ul class="custom-list">
          <li>Appartements neufs du <span>studio au 5 pièces duplex.</span></li>
          <li><span>Généreuses terrasses avec vues dégagées</span> pour la plupart des logements.</li>
          <li><span>Appartements « Esprit maison »</span> avec <span>entrée individuelle</span> par le <span>jardin privatif.</span></li> 
        </ul>
        <div class="d-flex justify-content-center">
          <a class="js-scrollTo" href="#contact">
            <div class="btn btn-primary text-center text-uppercase">Soyez les premiers</div>
          </a>  
        </div>
      
      </div>
      <div class="col-12 col-md-8">
        
        <img src="/img/img-circle-1.jpg" class="img-round shadow">
        <div class="infos-offre orange shadow right">
          <span class="n1">votre 3 pièces</span>
          <span class="n2">à partir de</span>
          <span class="n3"><b>298 916 €</b> <supp>(1)</supp></span>
          <span class="n4">en TVA 5,5%</span>
        </div>
        
        <div id="slider-appartements" class="carousel slide carousel-fade" data-ride="carousel">
          
          <ol class="carousel-indicators d-none d-lg-block">
            <li data-target="#slider-appartements" data-slide-to="0" class="active"></li>
            <!--<li data-target="#slider-appartements" data-slide-to="1"></li>-->
          </ol>
          
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/img/slider2a.jpg')"></div>
            <!--<div class="carousel-item" style="background-image: url('/img/slider2b.jpg')"></div>-->
          </div> 
          
          <!-- ARROW -->
          <div class="d-block d-lg-none">
            <a class="carousel-control-prev" href="#slider-appartements" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slider-appartements" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
        </div>
        
      </div>
    </div> 
  </div>
</section>
<section id="residence" class="section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-8 order-2 order-lg-1">
        
        <div class="infos-offre red shadow left d-none d-lg-block">
          <span class="n1">votre studio</span>
          <span class="n2">à partir de</span>
          <span class="n3"><b>185 000 €</b> <supp>(3)</supp></span>
          <span class="n4">en TVA 20%</span>
        </div>
        
        <div id="slider-residence" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators d-none d-lg-block">
            <li data-target="#slider-residence" data-slide-to="0" class="active"></li>
            <!--<li data-target="#slider-residence" data-slide-to="1"></li>-->
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/img/slider3a.jpg')"></div>
            <!--<div class="carousel-item" style="background-image: url('/img/slider3b.jpg')"></div>-->
          </div> 
          <!-- ARROW -->
          <div class="d-block d-lg-none">
            <a class="carousel-control-prev" href="#slider-residence" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slider-residence" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        
      </div>
      <div class="col-12 col-md-4 order-1 order-lg-2">
        
        <h2 class="title text-left text-uppercase">vivre au cœur <span>d’une signature architecturale</span></h2>
        <ul class="custom-list">
          <li><span>Des lignes  élégantes et rares</span> dessinées par des architectes de renom.</li> 
          <li><span>Des matériaux nobles</span> pour une allure contemporaine : aluminium, verre, bois et pierre.</li> 
          <li><span>Des intérieurs lumineux</span> ouverts vers l’extérieur par <span>de larges baies vitrées.</span></li> 
        </ul>
        <div class="d-flex justify-content-center">
          <a class="js-scrollTo" href="#contact">
            <div class="btn btn-primary text-center text-uppercase">En savoir plus</div>
          </a>  
        </div>
      
      </div>
    </div> 
  </div>
</section>
<section id="quartier" class="section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-4">
        
        <h2 class="title text-left text-uppercase">se ressourcer <span>entre art et promenade boisée</span></h2>
        <ul class="custom-list">
          <li><span>Des jardins paysagers</span> avec une <span>serre partagée</span> réservée aux résidents.<li>
          <li>Une place <span>commerçante</span> et <span>conviviale.</span><li>
          <li><span>Des œuvres d’artistes</span> à contempler au détour des halls.<li>
        </ul>
        <div class="d-flex justify-content-center">
          <a class="js-scrollTo" href="#contact">
            <div class="btn btn-primary text-center text-uppercase">Inscrivez-vous</div>
          </a>  
        </div>
        
      </div>
      
      <div class="col-12 col-md-8 nopadding">
        
        <img src="/img/img-circle-2.jpg" class="img-round shadow">
        
        <div class="infos-offre shadow dark-orange right">
          <span class="n1">votre 5 pièces</span>
          <span class="n2">à partir de</span>
          <span class="n3"><b>445 737 €</b> <supp>(1)</supp></span>
          <span class="n4">en TVA 5,5%</span>
        </div>
        
        <div id="slider-quartier" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators d-none d-lg-block">
            <li data-target="#slider-quartier" data-slide-to="0" class="active"></li>
            <!--<li data-target="#slider-quartier" data-slide-to="1"></li>-->
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/img/slider4a.jpg')"></div>
            <!--<div class="carousel-item" style="background-image: url('/img/slider4b.jpg')"></div>-->
          </div> 
          <!-- ARROW -->
          <div class="d-block d-lg-none">
            <a class="carousel-control-prev" href="#slider-quartier" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slider-quartier" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
 
      </div>
    </div> 
  </div>
</section>

<section id="transport" class="section">
  <div class="container">
    <div class="row mb40">
      <div class="col-12 text-center">
        <!--<h2 class="sub-title">les transports</h2>-->
        <h2 class="title">accès <span>& transports</span></h2>
      </div>
    </div>
    <div class="row mb40">
      <div class="col-12 col-md-4 text-center">
        <img src="/img/icon-transport.png" class="img-fluid">        
        À <b>250 m**</b> des lignes de <br />
<b>bus 178, 238, 366</b> et du <b>métro</b><br />
<b>ligne 13</b> qui rejoint <b>Paris</b><br />
<b>Saint-Lazare</b> en </b>16 min</b>**
      </div>
      <div class="col-12 col-md-4 text-center">
        <img src="/img/icon-metro.png" class="img-fluid margin-mob">        
        À <b>7 min**</b> en voiture de la gare<br /> 
        d’Asnières : <b>Lignes J et L</b> qui <br />
        rejoignent <b>La Défense</b> en <b>9 min**</b>
      </div> 
      <div class="col-12 col-md-4 text-center">
        <img src="/img/icon-train-station.png" class="img-fluid margin-mob">  
        Au pied de <b>la future gare de la<br />
        ligne 15 Grand Paris Express</b>
      </div>
    </div>
  </div>
</section>
<div id="slider-transport" class="section">
  <div class="container">
    <div class="row mb20">
      <div class="col-12">
        
        <div id="slider-map" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('/img/slider5a.jpg')"></div>
            <div class="carousel-item" style="background-image: url('/img/slider5b.jpg')"></div>
          </div> 
          <!-- ARROW -->
          
            <a class="carousel-control-prev" href="#slider-map" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slider-map" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          
        </div>

      </div>
    </div>
  </div>
</div>
<div id="adresse" class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
          <img src="/img/img-circle-3.jpg" class="img-round shadow">
          <div class="bg-dark-grey  box-text">
            <h2 class="title text-left text-uppercase text-light">Rendez-vous sur notre <span>espace de vente</span></h2>
            <p class="text-light"><img src="/img/icon-map.png" class="icon-map"> <b>121, rue des Bas à Asnières-sur-Seine</b> <span>-</span> Ouvert de 11h à 19h</p>
          </div>
        </div>
      </div>
  </div>
</div>

<section id="prix" class="section inter">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mx-auto text-center">
        
        <p class="sub-title">les prix et offres de lancement</p>
        <p class="title"><span>les 10 & 11 novembre</span> Soyez les premiers à profiter de nos offres de lancement !</p>
       
        <div class="infos-offre orange mx-auto shadow">
          <span class="n1">Jusqu’à</span>
          <span class="n2">13 000 € offerts <supp>(2)</supp></span>
          <span class="n3">POUR aménager</span>
          <span class="n3">votre appartement</span>
          <span class="n4">Offre réservée aux 20 premiers réservataires</span>
        </div>
        
        <img src="/img/icon-more.png" class="mt40 mb40">
        
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">
        
        <div class="accordion" id="accordionExample">
          
          @foreach($lots as $typo)
            <div class="card">
              <div class="card-header" id="headingOne">
                <div class="toggler" data-toggle="collapse" data-target="#collapse-{{ $loop->iteration }}" aria-expanded="{{ $loop->iteration == 1 ? 'true' : 'false' }}" aria-controls="collapse-{{ $loop->iteration }}">
      					  @if($loop->iteration == 1)
          					  <div class="t1">Studios</div>
          					  <div class="t4"><small>à partir de</small> <strong>185 000 €</strong> <img src="/img/tva-table-20.png" class="tva"></div>
          					  <div class="t5"><strong>232 979 €</strong> <img src="/img/tva-table-55.png" class="tva"></div>
          					  <div class="more-less"></div>
        					@elseif($loop->iteration == 2)
          					  <div class="t1">2 pièces</div>
          					  <div class="t2"><small>à partir de</small> <strong>265 000 €</strong> <img src="/img/tva-table-20.png" class="tva"></div>
          					  <div class="t3"><strong>232 979 €</strong> <img src="/img/tva-table-55.png" class="tva"></div>
          					  <div class="more-less"></div>
          				@elseif($loop->iteration == 3)
          					  <div class="t1">3 pièces</div>
          					  <div class="t2"><small>à partir de</small> <strong>340 000 €</strong> <img src="/img/tva-table-20.png" class="tva"></div>
          					  <div class="t3"><strong>298 916 €</strong> <img src="/img/tva-table-55.png" class="tva"></div>
          					  <div class="more-less"></div>
      					  @elseif($loop->iteration == 4)
          					  <div class="t1">4 pièces</div>
          					  <div class="t2"><small>à partir de</small> <strong>429 000 €</strong> <img src="/img/tva-table-20.png" class="tva"></div>
          					  <div class="t3"><strong>377 162 €</strong> <img src="/img/tva-table-55.png" class="tva"></div>  
          					  <div class="more-less"></div>
      					 @elseif($loop->iteration == 5)
          					  <div class="t1">5 pièces</div>
          					  <div class="t2"><small>à partir de</small> <strong>507 000 €</strong> <img src="/img/tva-table-20.png" class="tva"></div>
          					  <div class="t3"><strong>445 737 €</strong> <img src="/img/tva-table-55.png" class="tva"></div>  
          					  <div class="more-less"></div>
                  @endif
                </div>
              </div>
              <div id="collapse-{{ $loop->iteration }}" class="collapse {{ $loop->iteration == 1 ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  
                  <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="text-left">Lot</th>
                      <th scope="col" class="text-center">Annexes</th>
                      <th scope="col" class="text-center">Surface</th>
                      <th scope="col" class="text-center">Plan</th>
                      <th scope="col" class="text-center">Contact</th>
                    </tr>
                  </thead>
                    <tbody>
                    @foreach($typo as $lot)
                      <tr>
                        <td scope="row" class="align-middle line text-left"><span></span> {{ $lot[0] }}</td>
                        <td class="align-middle line text-center">{{ $lot[1] }}</td>
                        <td class="align-middle line text-center">{{ $lot[2] }} m&sup2;</td>
                        <td class="align-middle text-center"><a href="/pdf/LOT-{{ $lot[0] }}.pdf" target="_blank" class="js-scrollTo transition"><div class="table-plan transition"></div></a></td>
                        <td class="align-middle text-center"><a href="#contact" class="js-scrollTo transition"><div class="table-mail transition"></div></a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>  
                
                </div>
              </div>
            </div>
          @endforeach
          
        </div> 

  </div>
</section>

<div id="conditions" class="section">
  <div class="container">
    <div class="row">
        <div class="col-12">
          
          <h2 class="title text-center">Des conditions idéales <span>pour habiter ou investir</span></h2>
          <div class="row justify-content-center">
            <div class="col-12 col-lg-4">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-3 text-center text-lg-left"><img src="/img/label-tva.png" class="img-fluid"></div>
                <div class="col-12 col-lg-8 text-center text-lg-left"><p class="border-spe">Bénéficiez de la <b>TVA à 5,5 % <supp>(1)</supp></b>
                pour l’achat de votre résidence principale.</p></div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-3 text-center text-lg-left"><img src="/img/label-taux.png" class="img-fluid"></div>
                <div class="col-12 col-lg-8 text-center text-lg-left"><p class="border-spe">Financez votre logement jusqu’à 40% à taux 0%, sans condition de ressources pour l’achat d’un logement neuf.</p></div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="row justify-content-center">
               <div class="col-12 col-lg-3 text-center text-lg-left"><img src="/img/label-pinel.png" class="img-fluid"></div>
               <div class="col-12 col-lg-8 text-center text-lg-left"><p class="border-spe">Profitez d'une adresse à fort potentiel locatif pour réduire vos impôts jusqu'à 63 000 €<supp>(8)</supp>.<br /><br />
                <span class="little">LE NON-RESPECT DES ENGAGEMENTS DE LOCATION ENTRAÎNE LA PERTE DES INCITATIONS FISCALES.</span></p></div> 
              </div>
            </div>
          </div>
          
        </div>
    </div>
  </div>
</div>

<section id="contact" class="section">
  @include('partials._contact-section')
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-12">
        @include('partials._cookies-banner')  
        
      </div>
      <div class="col-12 col-md-6 text-center text-md-left">
        <span class="t1">Une co-promotion</span><br />
        <img src="/img/logos-label-footer.png" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 text-center text-md-right">
        <a href="#mentionslegales" data-toggle="modal" data-target="#mentionslegales">Mentions légales</a><span class="space"></span><a href="#donnees-personnelles" data-toggle="modal" data-target="#donnees-personnelles">Données personnelles</a></span>
        <span class="tel">01 87 64 11 11</span>
        <span class="info">Service & appel gratuit</span>
      </div>
    </div>
  </div>
  
  <!-- Modal ML -->
  <div class="modal fade" id="mentionslegales" tabindex="-1" role="dialog" aria-labelledby="mentionslegalesLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mentions Légales</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body  text-left">
          
<p class="little">
* Disponibles selon les appartements.<br />
** Source Google Maps.<br />
<supp><b>(1)</b></supp> TVA à taux réduit à 5.5% selon l’article 278 sexies 11° du Code Général des Impôts, sous réserve d’une modification de la réglementation en vigueur. Sous conditions d’éligibilité. Se renseigner sur l’espace de vente.<br />

<supp><b>(2)</b></supp> Offre sous la forme d’une remise sur le prix de vente du bien immobilier payé par l’acheteur dont la valeur est calculée sur la base de 2% du prix de vente TTC du bien acquis ou sous forme de cartes cadeaux d’un montant équivalent. Offre non cumulable avec toute autre offre en cours ou à venir. Offre réservée exclusivement aux 20 premiers réservataires pour l’achat d’un appartement neuf dans la résidence Artchipel à Asnières-sur-Seine pour toute réservation signée entre les 10 et 11 novembre 2018, sous réserve d'une signature notariée régularisée dans un délai de 2 mois suivant la date réservation et sous réserve de disponibilité des stocks.<br />

<supp><b>(3)</b></supp> Prix en TVA à 20% sur la base de la grille de prix en vigueur au 22/10/18. <br />
<supp><b>(4)</b></supp> Valable pour tous les prêts à taux zéro émis à partir du 1er janvier 2016 pour l’acquisition par un primo-accédant de sa résidence principale neuve. Attribution du prêt soumise à conditions notamment de ressources, voir Décret n° 2015-1813 du 29 décembre 2015. <br />
<supp><b>(5)</b></supp> Réduction d’impôt, codifiée à l’article 199 novovicies du code général des impôts, pour l’acquisition d’un logement neuf situé dans certaines zones géographiques et en fonction de la performance énergétique du bâtiment, destiné à la location nue à titre de résidence principale pendant 6 ans minimum à un loyer plafonné et à des locataires sous plafonds de ressources. La réduction d’impôt est de 12% (pour 6 ans de location) 18% (pour 9 ans de location) ou de 21% (pour 12 ans de location) du prix d’acquisition du bien retenu, dans la limite d’un montant de 300 000 € et dans la limite d’un prix d’achat de 5 500 €/m². Cette réduction d’impôt s’applique aux contribuables fiscalement domiciliés en France et est prise en compte pour le calcul du plafonnement global de certains avantages fiscaux visés à l’article 200-0 A du CGI. Faire un investissement immobilier présente des risques (ex : non-respect des conditions d’octroi de l’incitation fiscale, y compris des conditions de mise en location, absence de locataire, loyers impayés) susceptibles d’entrainer la perte du bénéfice des incitations fiscales et/ou la remise en cause de l’équilibre financier de l’investissement.<br /> 
Pitch Promotion SNC au capital de 75 000 000€ RCS Paris 422 989 715 – 6 rue de Penthièvre, 75008 Paris - FAUBOURG IMMOBILIER, SAS au capital de 500 000€ - RCS Paris 489 171 702 – 37 avenue Pierre 1er de Serbie – 75008 Paris . Groupe Fiminco SAS au capital de 2 000 000€ RCS Paris 403 895 642, 14 bis rue de la faisanderie 75116 Paris. Illustrations non contractuelles dues à la libre interprétation de l’artiste : Giorgi Bocolishvili - IDA+ – Crédit Photos : Istock – Shutterstock . Document non contractuel – 360° Fahrenheit – Octobre 2018<br />
</p>          
          
        <p><b>Editeur du Site</b><br>
            Le présent site Internet http://www.artchipel-asnieres.fr est édité et exploité par la société PITCH PROMOTION SNC, Société en nom collectif au capital social de 75 000 000 euros, immatriculée au R.C.S de Paris sous le numéro 422 989 715, situé au 6 rue de Penthièvre – 75008 PARIS, ayant comme numéro de TVA intracommunautaire : FR 25 422 989 715. Vous pouvez nous joindre par téléphone au 01 42 68 33 33 ou par courrier électronique à l’adresse contact@pitchpromotion.fr
          <br>Directeur de la publication
          <br>Julien CHATTER
        </p>
<p><b>Hébergeur</b>
<br>OVH : Siège social : 2 rue Kellermann - 59100 Roubaix - France</p>
<p><b>Conception et réalisation</b>
<br>360°Fahrenheit – 13 rue vivienne – 75002 Paris</p>
<p><b>Propriété Intellectuelle</b>
<br>PITCH PROMOTION fera ses meilleurs efforts pour rendre le site accessible 24 heures sur 24 et 7 jours sur 7, mais ne saurait en aucun cas engager sa responsabilité pour des raisons d'inaccessibilité au site web.
<br>La structure générale, ainsi que les logiciels, textes, images animées ou fixes, sons, savoir-faire, dessins, graphismes et tout autre élément composant le site web sont la propriété exclusive de PITCH PROMOTION.
<br>Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l'autorisation expresse de PITCH PROMOTION, est interdite et constituerait une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle.
<br>Il en est de même des bases de données figurant sur le site web, qui sont protég��es par les dispositions de la loi du 1er juillet 1998 relative à la protection juridique des bases de données et dont PITCH PROMOTION est producteur.
<br>Les marques de PITCH PROMOTION et de ses partenaires, ainsi que les logos, figurant sur le site web sont des marques (semi-figuratives ou non) déposées.
<br>Toute reproduction totale ou partielle de ces marques ainsi que toute représentation totale ou partielle de ces marques et/ou logos, effectuées à partir des éléments du site web sans l'autorisation expresse de PITCH PROMOTION sont donc prohibées, au sens de l'article L.713-2 du Code de la propriété intellectuelle.
<br>Les liens hypertextes mis en place dans le cadre du site web en direction d'autres ressources présentes sur le réseau Internet, et notamment vers ses partenaires ont fait l'objet d'une autorisation préalable, expresse et écrite.
<br>PITCH PROMOTION met tout en œuvre pour offrir aux utilisateurs des informations et/ou outils disponibles et vérifiés, mais ne saurait être tenue pour responsable des erreurs, d'une absence de disponibilité des informations et/ou de la présence de virus sur son site web.
<br>PITCH PROMOTION invite les utilisateurs du site web à faire part d'éventuelles omissions, erreurs, ou corrections, en adressant un e-mail au webmaster du site web à l'adresse suivante : contact@pitchpromotion.fr.
<br>Conformément à l’article L 616-1 du code de la consommation, le consommateur est informé par le professionnel qu’il a la possibilité, en cas de contestation, de recourir à la procédure de médiation de la consommation en saisissant le médiateur MEDIMMOCONSO par voie postale à l’adresse suivante : Association MEDIMMOCONSO, 3 avenue Adrien Moisant - 78400 Chatou ou depuis son site internet http://medimmoconso.fr/ .
</p>
<p><b>Cookies</b>
<br>L'Utilisateur est informé que, lors de ses visites sur le site web, un cookie peut s'installer automatiquement sur son logiciel de navigation.
<br>Cette section explique «ce que sont les cookies» et les types de cookies qu'utilise PITCH PROMOTION sur ses sites Internet.
<br>Que sont les cookies ?
<br>Un "cookie" est un fichier de texte envoyé par les sites Internet à l'ordinateur ou à un autre périphérique connecté à Internet d'un visiteur afin d'identifier le navigateur du visiteur ou afin de stocker des informations ou des paramètres dans le navigateur. 
<br>Est-ce que PITCH PROMOTION utilise des cookies sur ses sites Internet ?
<br>PITCH PROMOTION utilise des cookies sur ses sites Internet afin d'améliorer le site Internet et de fournir des services et fonctionnalités à ses utilisateurs. Vous pouvez restreindre ou désactiver l'utilisation des cookies via votre navigateur Internet, mais sans cookies, vous pouvez ne pas être en mesure d'utiliser toutes les fonctionnalités des sites Internet.
<br>Quels types de cookies sont utilisés sur les sites Internet de PITCH PROMOTION ?
<br>Cookies strictement nécessaires
<br>Ces cookies sont indispensables pour mener à bien une transaction ou une demande que vous aurez effectuée. Les exemples incluent la mémorisation des informations relatives à un formulaire que vous avez rempli lorsque vous vous déplacez sur le site ou des produits ou services que vous avez choisis sur notre site.
<br>Cookies fonctionnels
<br>Ces cookies permettent au site Internet de se souvenir des choix que vous avez faits en vue de vous fournir des fonctionnalités avantageuses. Par exemple, les cookies fonctionnels permettent au site Internet de se souvenir de vos paramètres spécifiques, comme la sélection de votre région et votre état de connexion permanente en cas de sélection, et affiche les précédents biens consultés, et d'autres fonctions personnalisées.
<br>Cookies analytiques
<br>Ces cookies nous permettent de recueillir des données relatives à votre utilisation du site Internet, y compris le contenu sur lequel vous cliquez en naviguant sur le site Internet, afin d'améliorer la performance et la conception de celui-ci. Ces cookies peuvent être fournis par notre fournisseur d'outil analytique de tierce partie, mais ne sont utilisés qu'à des fins liées à nos sites Internet.
<br>Cookies de ciblage
<br>Ces cookies mémorisent des informations concernant votre utilisation du site Internet afin que nous puissions mettre à votre disposition des informations promotionnelles et ciblées sur notre site Internet.
<br>Comment puis-je désactiver ou supprimer les cookies ?
<br>Chaque type de navigateur Internet offre des moyens de limiter et supprimer les cookies. Pour plus d'informations sur la façon de gérer les cookies, visitez le lien approprié ci-dessous :
<br><a href="https://support.microsoft.com/fr-fr/products/windows?os=windows-10">Explorer Internet</a>
<br><a href="https://support.mozilla.org/fr/kb/activer-desactiver-cookies-preferences?redirectlocale=fr&amp;redirectslug=activer-desactiver-cookies">Firefox</a>
<br><a href="https://support.google.com/chrome/answer/95647">Google Chrome</a>
<br><a href="https://support.apple.com/kb/PH17191?locale=fr_FR&amp;viewlocale=fr_FR">Safari</a>
      </p></div>

      </div>
    </div>
  </div>
  
  <!-- Modal Données personnelles -->
  <div class="modal fade" id="donnees-personnelles" tabindex="-1" role="dialog" aria-labelledby="donnees-personnelles" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Données personnelles</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
     <p>Dans le cadre de leurs activités, les sociétés du Groupe Altarea Cogedim («&nbsp;SCA ALTAREA&nbsp;» - SNC COVALENS pour la marque COGEDIM – SNC PITCH PROMOTION pour la marque PITCH PROMOTION – HISTOIRE ET PATRIMOINE pour la marque Histoire &amp; Patrimoine –ci-après regroupées sous le vocable «&nbsp;Nous&nbsp;») sont amenées à procéder au traitement de données à caractère personnel vous concernant. </p>
     <p>Vos données à caractère personnel sont protégées par la réglementation relative à la protection des données personnelles comprenant les dispositions de la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, modifiée, ainsi que le règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 (RGPD) ci-après ensemble la «&nbsp;Règlementation&nbsp;».</p>
      <p>Nous sommes particulièrement vigilants quant à la collecte et au traitement de telles données conformément à la Règlementation. </p>
      <p><b>1. Qui sont les Responsables de Traitement</b>
<br>Selon les pages internet sur lesquelles vous naviguez, le Responsable de Traitement de vos Données personnelles pourra être&nbsp;:
<br>Sur les pages ALTAREA&nbsp;: la SCA ALTAREA (société  en commandite par action dont le siège social est au 8 avenue Delcassé – 75008 PARIS immatriculée au RCS PARIS sous le numéro 335&nbsp;480 877 )

<br>Sur les pages COGEDIM: la SNC COVALENS (société  en nom collectif dont le siège social est au 8 avenue Delcassé – 75008 PARIS immatriculée au RCS PARIS sous le numéro 309&nbsp;021&nbsp;277)

<br>Sur les pages PITCH PROMOTION&nbsp;: la SNC PITCH PROMOTION (société en nom collectif dont le siège social est 6 rue de Penthièvre – 75008 PARIS, immatriculée au RCS PARIS sous le numéro 422&nbsp;989&nbsp;715 

<br>Sur les pages HISTOIRE &amp; PATRIMOINE&nbsp;: SAS HISTOIRE &amp; PATRIMOINE, dont le siège social est au 30 cours de l’Ile Seguin – 92100 Boulogne-Billancourt immatriculée au RCS Nanterre sous le numéro B 480 309&nbsp;731.

<br>Toutes ces entités ont un Délégué à la Protection des Données unique dont le contact figure au point 5 ci-dessous.</p>
<p><b>2. Quand et pourquoi recueillons-nous vos Données&nbsp;Personnelles ?</b>

<br>Lorsque vous utilisez nos sites internet, nous sommes amenés à collecter et traiter, de manière informatisée ou non, vos Données Personnelles sur la base de l’intérêt légitime ou sur la base de votre consentement, pour des finalités précises et clairement exprimées :
 - des données de connexion&nbsp;ou de navigation&nbsp;: lors de votre connexion au Site depuis un terminal fixe ou mobile ou via l’Application, les données (adresse IP, logs…) sont collectées ainsi que la version du navigateur de l’Utilisateur (Firefox, Chrome, Safari, Internet Explorer, etc.), le type de système d'exploitation utilisé (Windows, Mac Os, etc…) et ce, afin de vous assurer une navigation optimale et réaliser des analyses statistiques,

 <br>- des données d’identification lorsque vous remplissez un formulaire sur les différents sites pour demander&nbsp;:

<br>une brochure, 
<br>un devis, 
<br>un plan, 
<br>une simulation, 
<br>une demande de rappel ou de contact, 
<br>une demande de rendez-vous, 
<br>une demande d’un accès à notre médiathèque, 
<br>une demande de visite virtuelle 
<br>ou de manière générale toute demande d’informations sur notre Groupe et ses marques COGEDIM / PITCH PROMOTION et HISTOIRE ET PATRIMOINE. 

</p><p>Nous effectuons alors un traitement informatisé ou non de vos données personnelles afin de répondre à vos différentes demandes.</p>

<p>Des données d’identification lorsque vous vous montrez intéressés par nos offres de logements ou de services et avez accepté de recevoir nos offres commerciales personnalisées ou nos invitations à des évènements.</p>

<p>Nous effectuons alors un traitement, informatisé ou non, de vos données personnelles afin de vous adresser ces communications en votre qualité de prospect.</p>

<p>Des données d’identification pour remplir les formulaires de parrainages.</p>

<p>Nous effectuons alors un traitement informatisé ou non de vos données personnelles et celles de votre parrainé, uniquement pour vous faire profiter de nos offres de parrainage et établir un premier contact avec votre parrainé dans ce cadre.</p>

<p>Des données issues des sondages à des fins statistiques et d’amélioration de notre service client.</p>

 <p>L’Utilisateur est informé sur chaque formulaire de collecte de données de l’ensemble des informations exigées par l’article 13 ou 14 du Règlement Européen sur la Protection des Données.</p>

<p><b>3. Qui a accès à ces informations ?</b>

<br>Les données vous concernant sont traitées par chacun des Responsable de Traitement désignés au 1. ci-dessus en fonction du traitement considéré, à leurs services internes et à leurs prestataires «&nbsp;sous-traitants&nbsp;» techniques afin de répondre à vos demandes. 

<br>Nous prenons l’ensemble des mesures nécessaires à la sécurité et à l’intégrité des données.

<br>Nos sous-traitants sont eux même soumis à des obligations renforcées de sécurité, protection et confidentialité des Données Personnelles. Nous ne vendrons, louerons ou divulguerons vos données personnelles en aucune circonstance à d’autres entités sans votre accord.&nbsp;

<br>Les données ne sont pas transférées hors Union Européenne. Si tel était le cas, nous veillerions à prévoir des garanties appropriées telles que le recours aux clauses types de protection des données adoptées par la Commission Européenne afin d’assurer un niveau de protection des Données suffisant.

<br>Vos données personnelles pourront cependant être communiquées aux tiers autorisés (à savoir, à la police ou aux autorités judiciaires), conformément aux lois applicables, sur demande formelle de ces entités, dans le cas, par exemple, de prévention contre la fraude sur le Site (services anti-fraude).
&nbsp;</p>
<p><b>4. Durée de conservation des Données</b>

<br>Nous conservons les Données uniquement pendant le temps nécessaire pour les finalités désignées au 2.ci-dessus augmenté le cas échéant du délai de prescription légale, à savoir&nbsp;:

<br>S’agissant des données recueillies pour répondre à une de vos demandes&nbsp;: les données personnelles sont conservées pendant la durée de gestion administrative de cette demande augmentée des délais légaux éventuels,

<br>S’agissant des données recueillies pour vous informer de nos offres commerciales ou d’évènements&nbsp;: les Données Personnelles sont conservées pendant une durée de 3 ans à compter du dernier contact avec vous.

<br>S’agissant des données techniques de connexion, navigation, cookies : ces données sont conservées pendant un délai de 13 mois 

&nbsp;</p><p>
<b>5. Vos droits&nbsp;:</b>

<br>En application de la Règlementation applicable à la protection des Données Personnelles, vous disposez sur vos Données Personnelles de droits (i) d’accès, (ii) de rectification, (iii) d’effacement, (iv) de limitation et (v) de portabilité vers un prestataire tiers le cas échéant. Vous pouvez en outre vous opposer à tout moment au traitement de vos Données. 

<br>Vous disposez également du droit de définir les directives relatives à la conservation, à l’effacement et à la communication de vos données personnelles après votre décès.

<br>Vous pouvez faire valoir vos droits en écrivant au DPO à&nbsp;l’adresse&nbsp;: dpo@altareacogedim.com, accompagné d’une copie d’un titre d’identité.

<br> En cas de litige, vous disposez également du droit de saisir la CNIL.

<br>N’hésitez pas à nous contacter pour toute question que vous pourriez avoir sur vos Données Personnelles à l’attention du DPO.</p>
      </div>
      </div>
    </div>
  </div>
  
</footer>

@endsection  
@section('scripts')
@endsection