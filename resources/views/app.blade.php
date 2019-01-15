<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--META SEO-->
    <title>Template : Lorem Ipsum</title>
    <meta name="description" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry">
    <!--FONT-->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129131276-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', 'UA-129131276-1');
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
    <!--JS-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/sticky-kit.js"></script>
    <script src="/js/app.js"></script>
    <!--koban-->
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
      kb('reg', 'bBmvlHE8Y9ymbUA7TCzmUeI7');
     
        // On initialise l'utilitaire Koban
      	var kbn = new kbnutils({ sandbox: false, apikey: "YriIhdy5OoD3z78y3NGfjpXn" });
      	// On récupère les informations du client
      	var infos = kbn.clientinfos();
      	var cookieKoban = infos.ckt;
      	document.getElementById('ckn').value = cookieKoban;
      	// On peut vérifier si les informations remontent bien sur la page
      </script>
  </body>
</html>