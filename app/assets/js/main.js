/**
 * Created by andrey on 04.06.17.
 */
var app = angular.module('app',['ngRoute']);
app.config(function ($routeProvider, $locationProvider) {
   $routeProvider
       .when('/',{
       templateUrl: 'about.html'
   })
       .when('/portfolio',{
           templateUrl: 'portfolio.html'
       })
       .when('/about',{
           templateUrl: 'about.html'
       })
       .when('/contact',{
           templateUrl: 'contact.html'
       });

    $locationProvider.html5Mode(true);


});