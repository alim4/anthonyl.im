(function() {
    var app = angular.module('exp', ['ui.router']);

    app.controller('ExperienceController', function() {
      console.log("Went here");

      app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

        // For unmatched URLs
        $urlRouterProvider.otherwise("/home");

        $stateProvider
          .state('experience.entry', {
            templateUrl: templateUrl + '/src/html/experience_entry.html'
          });
      });

    })();
