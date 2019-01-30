@extends('app')
@section('content')

<section id="form-contact">
  <!--Content-->
  <h2 class="title text-center mb-rem-light">Découvrez nos deux résidences</h2>
  
  <div class="row d-flex align-items-stretch">
    @each('partials._program-overview', $data, 'program')
  </div>
  
  <div class="box-title bg-primary text-light text-center mt-rem mb-rem text-uppercase">
    <span class="t1">Jusqu’au <span class="f-heavy">20 mars</span>, vos <span class="f-heavy">M² OFFERTS</span><sup>(8)</sup></span>
  </div>
  
  <div class="box-title bg-light-grey">
    <h2 class="title text-center mb20">CŒUR MOUGINS</h2>
    <p>La mise en place d’un véritable coeur de vie à Mougins avenue de Tournamy offre une opportunité exceptionnelle de vivre dans un nouveau quartier ouvert à tous. Chacun y trouvera en un seul lieu l’ensemble des commodités, au coeur même de la ville-jardin. Ainsi, Coeur Mougins proposera, au gré des envies, espaces de détente et de promenade en famille, commerces, services de proximité, lieux de détente et cinéma.</p>
  </div>
  <img src="/img/home-img.jpg" class="img-fuid w-100 border-primary-green mb-rem">
  
  <div class="box-title bg-primary text-light">
    <h2 class="title text-light text-center mb20"><span>DES RÉSIDENCES D’EXCEPTION</span> DANS CŒUR MOUGINS</h2>
    <div class="row">
      <div class="col-12 col-md-4">
         <ul>
          <li>Les appartements présentent de généreuses surfaces baignées de lumière, prolongées de terrasses, balcons et loggias.</li>
        </ul>
      </div>
      <div class="col-12 col-md-4">
         <ul>
          <li>Le quartier propose un cadre de vie idéal, une piscine extérieure est présente dans chacune des résidences.</li>
        </ul>
      </div>
      <div class="col-12 col-md-4">
         <ul>
          <li>Cette place sera un véritable lieu de vie pour se retrouver et profiter des terrasses ensoleillées, aires de jeux, terrains de pétanque, cinéma et espaces de détente.</li>
        </ul>
      </div>
    </div>  
   
  </div>
  
  <div class="embed-responsive embed-responsive-16by9">
<iframe  src="https://www.youtube.com/embed/zep-EmDumAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
</div>
  
  <div class="box-title bg-light-grey mb-rem">
    <h2 class="box-title text-secondary text-uppercase mb20 text-center ">POURQUOI ACHETER ICI ET MAINTENANT ?</h2>
    <div class="row picto-legal">
      <div class="col-12 col-md-4">
        <img src="/img/picto-ptz.png" class="img-fluid">
        <span class="fs-24 f-heavy d-block text-center text-md-left text-light-secondary">Prêt à Taux Zéro</span>
        <span class="fs-18 f-heavy d-block text-center text-md-left text-secondary">ous achetez pour la première fois ?</span>
        <div class="clearfix"></div>
        <p>Bénéficiez d’un financement à taux zéro sur une partie de votre emprunt, de mensualités réduites et de différés de remboursement plus longs.</p>
      </div>
      <div class="col-12 col-md-4">
        <img src="/img/picto-pinel.png" class="img-fluid">
        <span class="fs-24 f-heavy d-block text-center text-md-left text-light-secondary">Dispositif Pinel</span>
        <span class="fs-18 f-heavy d-block text-center text-md-left text-secondary">Vous souhaitez investir ?</span>
        <div class="clearfix"></div>
        <!--<p>Comme tout investissement, investir en Pinel peut présenter des risques. Le non-respect des engagements de location entraîne la perte du bénéfice des incitations fiscales. Détails sur cogedim.com </p>-->
        <p>Réduisez vos impôts et optimisez votre investissement locatif avec COGEDIM en vous constituant un patrimoine immobilier. Bénéficiez des garanties locatives sélectionnées par Cogedim Gestion et Services(11).</p>
        <p>Comme tout investissement, investir en Pinel peut présenter des risques. Le non-respect des engagements de location entraîne la perte du bénéfice des incitations fiscales. Détails sur cogedim.com</p>
      </div>
      <div class="col-12 col-md-4">
        <img src="/img/picto-taux-bas.png" class="img-fluid">
        <span class="fs-24 f-heavy d-block text-center text-md-left text-light-secondary">Taux Bas</span>
        <div class="clearfix"></div>
        <p class="spe">Des taux bancaires historiquement bas, ce sont <span class="f-heavy text-light-secondary">des mensualités plus douces ou un logement plus grand.</span></p>
      </div>
    </div>
  </div>
  
  @include('partials._map')
  

</section>

@include('partials._form-modal')
@endsection 

@section('scripts')
@endsection