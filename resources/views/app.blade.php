<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dès le 10 novembre, profitez de la TVA 5,5% et de nos offres de lancement pour devenir propriétaire à Asnières-sur-Seine ! Découvrez des appartements du studio au 5 pièces duplex avec terrasse, à 250 m à pied du métro Ligne 13.">
    <title>Appartements neufs à Asnières-sur-Seine - Artchipel | Pitch Promotion</title>
    
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--<link rel='stylesheet' href='/css/jquery.pagepiling.min.css' type="text/css">-->
    
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '508280789608965');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=508280789608965&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Google Analytics -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-41192526-19', 'auto');
      ga('send', 'pageview', location.pathname);
      </script>
      <!-- End Google Analytics -->
      <!-- Global site tag (gtag.js) - Google Ads: 781875421 -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-781875421"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
       
        gtag('config', 'AW-781875421');
      </script>
     
  </head>
  @includeWhen($success == true, 'partials._tags')
  <body>
    
    <div id="confirmation">
      @if($success)
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="alert alert-confirmation alert-dismissible fade show" role="alert">
                <strong>Nous avons bien reçu votre demande et nous vous en remercions</strong>. Un conseiller prendra prochainement contact avec vous.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
    <div id="scroll" onscroll="myScript">
      @yield('content')
      
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollify.js"></script>
    <script src="https://addin-koban.com/libapi/koban.js"></script>
    @yield('scripts')
    <script>
    	(function (i, s, o, g, r, a, m) {
    		i['KobanObject'] = r; i[r] = i[r] || function () {
    			(i[r].q = i[r].q || []).push(arguments)
    		}, i[r].l = 1 * new Date(); a = s.createElement(o),
    		m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    	})
    	
      (window, document, 'script', 'https://addin-koban.com/libapi/kobantracker.js', 'kb');
      kb('reg', 'ohKfGIo0oCCGqEFoGRK0VXNh');
     
        // On initialise l'utilitaire Koban
      	var kbn = new kbnutils({ sandbox: false, apikey: "ohKfGIo0oCCGqEFoGRK0VXNh " });
      	// On récupère les informations du client
      	var infos = kbn.clientinfos();
      	var cookieKoban = infos.ckt;
      	document.getElementById('ckn').value = cookieKoban;
      	// On peut vérifier si les informations remontent bien sur la page
      </script>
    
     
   <!-- <script src="/js/jquery.pagepiling.min.js"></script>-->
  </body>
</html>