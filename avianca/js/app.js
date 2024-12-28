var app = angular.module("aviancaApp", ['ngRoute', 'ui.router']);

app.run(function($rootScope, $templateCache) {
    $rootScope.$on('$routeChangeStart', function(event, next, current) {
        if (typeof(current) !== 'undefined'){
            $templateCache.remove(current.templateUrl);
        }
    });
});

//Configuración de la app
    app.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', '$routeProvider',  function($stateProvider, $urlRouterProvider,$locationProvider,$routeProvider){
    

            $stateProvider.state("/", {
                url: "",
                cache: false,
                templateUrl: "views/home.html",
                controller: 'indexController'
            });

            $stateProvider.state("/Vuelopick", {
                url: "/booking/vueloOrigen=:date1&vueloRegreso=:date2&tipoVuelo=:type&pasajeros=:passagers&aeroOrigen=:origin&aeroDestino=:destiny",
                  cache: false,
                templateUrl: "views/vuelos.html",
                controller: 'fligthsController'
            });

            $stateProvider.state("/ReviewVuelo", {
                url: "/booking/cardId=:cart&pointOfSale=:pos&language=:lang",
                  cache: false,
                templateUrl: "views/review.html",
                controller: 'reviewPickController'
            });
        
            $stateProvider.state("/Travelers", {
                url: "/booking/travelers",
                  cache: false,
                templateUrl: "views/travelers.html",
                controller: 'travelersController'
            });   
        
            $stateProvider.state("/Payment", {
                url: "/booking/payment",
                  cache: false,
                templateUrl: "views/payment.html",
                controller: 'paymentController'
            });    
        
            $stateProvider.state("/Paid-Wait", {
              url: "/booking/payment-status",
                cache: false,
              templateUrl: "views/pending.html",
              controller: 'paidpendingController'
          });  

            $stateProvider.state("/Paid", {
                url: "/booking/error",
                  cache: false,
                templateUrl: "views/paid.html",
                controller: 'paidController'
            });      
	
	}]);

