@extends('app') @section('content')

<section id="form-contact">
  <div class="banner">
    <img src="img/banner.jpg">
  </div>
  <div class="banner_offre">
    <div class="banner_date">DU 18 MARS AU 7 AVRIL</div>
    <div class="banner_prix">ÉCONOMISEZ
      <br><span class="light">JUSQU'À</span> -36 008 €<sup style="font-size:20px;">(1)</sup>
      <br><span class="light">POUR DEVENIR PROPRIÉTAIRE</span></div>
  </div>
  <div class="block_programmes">
    <h2>DÉCOUVREZ NOS DEUX RÉSIDENCES<br class="hideD"> ET CHOISISSEZ VOTRE STYLE DE VIE
    </h2>
    <div class="programme">
      <div class="prog_titre">
        <h3>Domaine Jardins en Vue<br>
          <span>Entrez dans la confidence d’un domaine très privé</span>
        </h3>
        <img src="img/pinel.png">
      </div>
      <div class="prog_pers">
        <img src="img/pers_prog1.jpg">
      </div>
      <div class="prog_prix">
        <img src="img/prix_prog1.gif" class="prix_des">
        <img src="img/prix_res1.gif" class="prix_res">
      </div>
      <div class="prog_blocArg">
        <div class="row">
          <div class="col-sm-6 arg">
            <p>Face au vieux village, une résidence privée au cœur d’un jardin méditerranéen</p>
            <ul>
              <li>Exposés plein sud, les appartements s’ouvrent sur de belles terrasses avec vues sur les jardins intérieurs.</li>
              <li>Villas sur le toit avec spacieuses terrasses en attique plein ciel, jusqu’à 148 m2 pour certaines.</li>
              <li>Une piscine privée nichée dans un écrin de verdure.</li>
            </ul>
          </div>
          <div class="col-sm-6 persArg">
            <img src="img/img_prog1.jpg">
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="programme">
      <div class="prog_titre">
        <h3>Jardins des Sens<br>
          <span>Vivez autour d’une piscine privée au calme des côteaux</span>
        </h3>
        <img src="img/pinel.png">
      </div>
      <div class="prog_pers">
        <img src="img/pers_prog2.jpg">
      </div>
      <div class="prog_prix">
        <img src="img/prix_prog2.gif" class="prix_des">
        <img src="img/prix_res2.gif" class="prix_res">
      </div>
      <div class="prog_blocArg">
        <div class="row">
          <div class="col-sm-6 arg">
            <p>Au cœur du nouveau quartier, des appartements adossés aux coteaux</p>
            <ul>
              <li>Une architecture contemporaine aux couleurs provençales avec façades ocre et jaune.</li>
              <li>Un cheminement intérieur en calade offrant plusieurs niveaux de placettes à l’entrée des bâtiments.</li>
              <li>Conçue comme un véritable petit village, la résidence offre des aires de détente, différents espaces naturels et une piscine privée.</li>
            </ul>
          </div>
          <div class="col-sm-6 persArg">
            <img src="img/img_prog2.jpg">
          </div>
        </div>
      </div>
    </div>
    <div class="offres">
      <h2>OFFRES EXCEPTIONNELLES<span><br>POUR DEVENIR PROPRIÉTAIRE</span></h2>
      <h3>LIMITÉES AUX 15 PREMIERS PRIVILÉGIÉS</h3>
      <div class="row">
        <div class="col-lg-5 bloc_offre"><img src="img/offre1.gif"></div>
        <div class="col-lg-2 bloc_offre"><img src="img/plus.gif"></div>
        <div class="col-lg-5 bloc_offre"><img src="img/offre2.gif"></div>
      </div>
    </div>
    <div class="map">
      <h3>CŒUR MOUGINS</h3>
      <p>La mise en place d’un véritable coeur de vie à Mougins avenue de Tournamy offre une opportunité exceptionnelle de vivre dans un nouveau quartier ouvert à tous. Chacun y trouvera en un seul lieu l’ensemble des commodités, au coeur même de la ville-jardin.
        Ainsi, Coeur Mougins proposera, au gré des envies, espaces de détente et de promenade en famille, commerces, services de proximité, lieux de détente et cinéma.</p>
      <img src="img/plan.jpg" style="margin-bottom: 50px;">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/zep-EmDumAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="invest">
      <h3>POURQUOI ACHETER ICI ET MAINTENANT</h3>
      <div class="row text-center">
        <div class="col-sm-5 bloc_invest">
          <img src="img/ptz.png">
          <h4>VOUS ACHETEZ POUR LA PREMIÈRE FOIS ?</h4>
          <h5>Empruntez jusqu’à <br><span>138 000 €</span> <br>sans intérêt</h5>
          <p>Profitez de conditions d’accessibilité facilitées, de différés de remboursements plus longs pour des mensualités réduites ou l’augmentation du montant de votre prêt.</p>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-5 bloc_invest">
          <img src="img/pinel_invest.png">
          <h4>VOUS SOUHAITEZ<br>INVESTIR ?</h4>
          <h5>Jusqu’à <br><span>63 000 €</span> <br>d'économies d'impôts</h5>
          <p>Constituez-vous un patrimoine immobilier et une source de revenus complémentaires.
            <br><span>
                  Comme tout investissement, investir avec le dispositif PINEL peut présenter des risques. Le non-respect des engagements de location entraîne la perte du bénéfice des incitations fiscales.
                  </span>
          </p>
        </div>
      </div>
    </div>
  </div>
  @include('partials._map')
</section>

@include('partials._form-modal') @endsection @section('scripts') @endsection
