@extends('app')
@section('content')


<header>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 ">
        <div class="row">
          <div class="col-6 text-center"><img src="/img/logo.png" class="img-fluid logo"></div>
          <div class="col-6 text-center"><img src="/img/rcp.png" class="img-fluid rcp"></div>
        </div> 
      </div> 
      <div class="col-12 col-md-6 text-center text-md-left">
        <h1>SAINT-JUST-CHALEYSSIN</h1>
        <p>Une nouvelle génération d’appartements <span class="text-orange">à partir de 125 000 €,</span></p>
        <p>pour un rêve livrable au troisième trimestre 2020.</p>
      </div>
    </div>
  </div>    
</header>

<section id="top">
  <div class="container">
    <div class="row contain">
      <div class="col-12 col-lg-6 col-xl-6 text-center">
        <h2>Rue Gaston Perrier<br />à SAINT-JUST-CHALEYSSIN</h2>
      </div>
      <div class="col-12 col-lg-6 col-xl-4 offset-xl-2">
        <div class="quote">
          <img src="/img/quote.png">
          <i>Je fais souvent ce rêve étrange, d’un lieu que je possèderais jusqu’à l’habiter. D’une liberté nouvelle qui serait accessible, dans ce quartier paisible et déjà familier...</i>
        </div>  
     </div>
    </div>         
  </div>       
</section>

<section id="contain">
  <div class="container">
    <div class="row ">
      <!--COL LEFT-->
        <div class="col-12 col-lg-3 bg-light-grey nopadding">
          <div id="col-left">
            
            <a class="js-scrollTo nodeco" href="#contact">
              <div class="cta-top ml-auto transition hvr-sweep-to-right">Découvrir la résidence <span class=""><img src="/img/arrow-bottom-whyte.png"></span></div>
            </a>
            
            <div class="block">
              <h3 class="text-center text-lg-left">rue gaston perrier <span>SAINT-JUST-CHALEYSSIN</span></h3>
              <div class="row">
                <div class="col-6 text-right text-lg-left"><span class="nmb-appartments">39</span></div>
                <div class="col-6 text-left text-lg-left"><img src="/img/logo-grenelle.png" class="logo-grenelle img-fluid"></div>
              </div>
              <p class="appartments text-center text-lg-left">Appartements</p>
              <p class="parts-appartments text-center text-lg-left">Du <span>2</span> au <span>5 pièces</span></p>
              <p class="detail-appartments text-center text-lg-left">Avec balcon, terrasse, loggia ou jardin, cave & garage</p> 
              <div class="price text-center">
                À partir de <b>125 000 €<supp>*</supp></b>
              </div>
              <p class="infos text-center text-lg-left">* Exemple de prix pour un appartement en 2 pièces (lot B01) dans la limite des stocks disponibles.</p> 
            </div>
            
          </div>
        </div>
      
      <!--COL RIGHT-->
      <div class="col-12 col-lg-9 nopadding overflow-hidden">
        
        <div id="section-right" class="bg-white">
          
          <h2 class="title">CETTE RÉSIDENCE ouverte au partage…</h2>
          
            <div class="row nomargin">
              <div class="col-6 col-md-6 col-lg-5 offset-lg-1 bg-img1"></div>
              <div class="col-6 col-md-6 col-lg-6 bg-img2"></div>
            </div>
          
          <h2 class="sub-title">Du T2 au T5 avec balcon, terrasse, loggia ou jardin</h2>
            <div class="row">
              <div class="col-12 col-md-6">
                <ul class="custom-list light">
                  <li><span>Jardin arboré et paysager</span> Plantation d’arbres, arbustes, vivaces et grimpantes.</li>
                </ul>
              </div>
              <div class="col-12 col-md-6">
                <ul class="custom-list light">
                  <li><span>Chauffage individuel gaz</span> Chaudière à condensation avec microaccumulation pour l’eau chaude sanitaire.</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <ul class="custom-list light">
                  <li><span>Occultation</span> Volets roulants motorisés sur toutes les menuiseries.</li>
                </ul>
              </div>
            </div>
   
            <a class="js-scrollTo nodeco" href="#contact">
              <div class="cta transition br mx-auto text-uppercase text-center">Soyez les premiers informés</div>
            </a>
            
        </div>
        
        <div id="section-left" class="bg-orange">
          <h2 class="title text-center text-lg-left">ON A TOUS UN PEU RÊVÉ...</h2>
            <div class="row mt40">
            <div class="col-12 col-md-4 text-light text-center text-md-left border-right plr40 ">
              <img src="/img/bbq.png" class="img-fluid img-mod">
                <p class="text-light">D'un espace pique-nique et barbecue</p>
            </div>
            <div class="col-12 col-md-4 text-light text-center text-md-left plr40">
              <img src="/img/bed.png" class="img-fluid img-mod">
                <p class="text-light">D’une chambre d’hôtes pour vos invités</p>
            </div>
            <div class="col-12 col-md-4 text-light text-center text-md-left border-left plr40">
              <img src="/img/atelier.png" class="img-fluid img-mod">
                <p class="text-light">D'un atelier bricolage et tous ses outils mis à disposition</p>
            </div>
          </div>
        </div>
        
        <div id="section-right" class="bg-white">
          <h2 class="title">...dans un quartier paisible et déjà familier.</h2>
            <p class="p1">Située dans le département de l’Isère en région Rhône-Alpes, elle fait partie de la Communauté de Communes des Collines du Nord Dauphiné :</p>
            <ul class="custom-list">
              <li>Véritable carrefour de l’Est lyonnais avec de nombreux accès <b>TGV, rocade Est, autoroutes A43, A7, aéroport international Saint-Exupéry</b></li>
              <li><b>École maternelle & primaire</b> Pierre Scize</li>
              <li><b>Nombreux commerces</b> : boulangerie, opticien, pharmacie, alimentation, presse, restaurants,…</li>
            </ul>
            <a class="js-scrollTo nodeco" href="#contact">
              <div class="cta transition br mx-auto text-uppercase text-center">Je souhaite en savoir plus</div>
            </a>
        </div>
        
        <div id="section-right" class="bg-white">
          <img src="/img/map.png" class="img-fluid">
        </div>

        <div id="contact" class="section">
          @include('partials._contact-section')
        </div>
        
        <div id="section-right" class="bg-white">
          <div class="about-group">
            <div class="">
              <div class="row d-flex justify-content-around">
              <div class="col-12 col-md-5">
                <h3>Groupe Cardinal <img src="/img/logo.png" class="img-fluid"></h3>
                  <p>Spécialistes de la promotion, de la gestion et de l’investissement immobilier, nous croyons que c’est l’imagination qui construit le monde de demain.</p>
                  <p>Nos réalisations sont centrées sur le bien-être de chacun et intègrent naturellement l’éthique, le cadre de vie et l’environnement. Nous vous proposons un lieu exclusif où chacun peut vivre selon ses désirs et son inspiration.</p>
              </div>
              <div class="col-12 col-md-5">
                <h3>rcp immobilier <img src="/img/rcp.png" class="img-fluid"></h3>
                  <p>Implantée depuis plus de 10 ans sur le Nord Isère, la société RCP IMMOBILIER a acquis sa réputation dans le domaine de la promotion immobilière et l'aménagement foncier.</p>
                  <p>La conception des plans, l'aménagement des volumes et la qualité des prestations contribuent à la réalisation de lieux de vie harmonieux et fonctionnels. À l'intérieur de chacun d'entre eux, tout a été pensé pour assurer sécurité, confort et qualité de vie.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="mentions-legales">
            <div class="phone">
              <img src="/img/phone.png" class="img-fluid">
              <h4>06 86 80 92 99</h4>
              <a href="mailto:ruegastonperrier@groupecardinal.com">ruegastonperrier@groupecardinal.com</a>
            </div>
            <p>GROUPE CARDINAL - 42 Quai Rambaud - 69286 LYON Cedex 02. RCP IMMOBILIER - Rue du Vellein - 38090 Villefontaine  Illustrateur : Asylum - Illustrations non contractuelles destinées à exprimer une intention architecturale d’ensemble et susceptibles d’adaptations – l’illustration présentée dans ce document n’est pas définitive et est susceptible d’être modifiée en fonction des contraintes techniques, financières, administratives ou réglementaires imposées au Groupe Cardinal, notamment lors de l’instruction des autorisations à construire. Conception : 360° Fahrenheit.</p>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>  
</section>

<footer>
  <div class="container">
    <div class="row ">
      <div class="col-12">
        @include('partials._cookies-banner')  
      </div>
    </div>
  </div>
</footer>

@endsection  
@section('scripts')
@endsection