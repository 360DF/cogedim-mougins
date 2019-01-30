<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--META SEO-->
    <title>Cogedim – Habiter Cœur Mougins</title>
    <meta name="description" content="Habitez le nouveau cœur de ville de Mougins">
    <!--CSS-->
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <link rel="stylesheet" href="/css/classic.css" type="text/css" />
    <link rel="stylesheet" href="/css/classic.date.css" type="text/css" />
    <link rel="stylesheet" href="/css/classic.time.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118807417-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-118807417-1');
    </script>
    <!-- Global site tag (gtag.js) - Google AdWords: 803103206 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-803103206"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-803103206');
    </script>

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
      fbq('init', '1669677109758117');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1669677109758117&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->
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
    
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <!--header-->
          @include('partials._header')
          
          <div id="scroll" onscroll="myScript">
            @yield('content')
          </div>
        </div>
        
        <div class="col-12 col-lg-4">
          <div id="sticker" class="bg-light-primary p40">
            <!--form right-->
            <div id="go-to-form-bottom">
              @include('partials._form')
            </div>
          </div>
        </div>
      </div>
    </div> 
    
    
    <!--footer-->
    @include('partials._footer')  

    <!--cookies banner-->
    @include('partials._cookies-banner')  
    
    <!--JS-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/sticky-kit.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/picker.js"></script>
    <script src="/js/picker.date.js"></script>
    <script src="/js/picker.time.js"></script>
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
      kb('reg', 'tQJ2n7qf2tXI1kITx7YCJWME');
     
        // On initialise l'utilitaire Koban
      	var kbn = new kbnutils({ sandbox: false, apikey: "tQJ2n7qf2tXI1kITx7YCJWME" });
      	// On récupère les informations du client
      	var infos = kbn.clientinfos();
      	var cookieKoban = infos.ckt;
      	document.getElementById('ckn').value = cookieKoban;
      	// On peut vérifier si les informations remontent bien sur la page
      </script>
  </body>
</html>