(function() {
  var app = angular.module('page', ['ngAnimate', 'ui.router']);
  var baseURL = templateUrl; // from index.php

  app.controller('PageController', function($scope) {
    // Set base URL for file loading
    $scope.baseURL = baseURL;

    this.selectTab = function(setTab) {
      this.tab = setTab;
    };

    this.isSelected = function(checkTab) {
      return this.tab === checkTab;
    }
  });

  app.directive('pageFooter', function() {
    return {
      restrict: 'E',
      templateUrl: baseURL + '/src/html/page-footer.html'
    };
  });

  app.directive('pageHeader', function() {
    return {
      restrict: 'E',
      templateUrl: baseURL + '/src/html/page-header.html'
    }
  });

  app.directive('experienceEntry', function() {
    return {
      restrict: 'E',
      templateUrl: baseURL + '/src/html/experience_entry.html'
    }
  });

  app.controller('homeController', function($scope) {
    this.tab = 1;

    console.log("Loaded homeController");
  });

  app.controller('aboutController', function($scope, $window, $http) {
    this.tab = 2;

    $http.get(baseURL + '/local.properties').then(function(response) {
      $scope.home_row_1_col_1 = response.data.home_row_1_col_1;
      $scope.home_row_1_col_2 = response.data.home_row_1_col_2;
      $scope.home_row_1_col_3 = response.data.home_row_1_col_3;
    });

    console.log("Loaded aboutController");
  });

  app.controller('contactController', function($scope, $window) {
    this.tab = 3;

    console.log("Loaded contactController");
  });

  app.controller('experienceController', function($state, $scope, $window, $http) {
    this.tab = 4;

    $http.get(baseURL + "/experience-entries.json")
      .success(function(data) {
        console.log("JSON get successful");
        $scope.entries = data.entries;
      });

    //$state.transitionTo('experience.entry');
    console.log("Loaded experienceController");
  });

  app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

    // For unmatched URLs
    $urlRouterProvider.otherwise("/");

    $stateProvider
      .state('root', {
        url: '/',
        views: {
          'home': {
            templateUrl: templateUrl + '/src/html/home.html',
            controller: 'homeController'
          },
          'about': {
            templateUrl: templateUrl + '/src/html/about.html',
            controller: 'aboutController'
          },
          'contact': {
            templateUrl: templateUrl + '/src/html/contact.html',
            controller: 'contactController'
          },
          'experience': {
            templateUrl: templateUrl + '/src/html/experience.html',
            controller: 'experienceController'
          }
        }
      });

    $locationProvider.html5Mode(true);
  });

  function toggleAltonClass() {
    $(".header").addClass("active");
  }

  function scrollToTop() {
    var page = $("html, body");

    page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function() {
      page.stop();
    });

    page.animate({
      scrollTop: $("body").position().top
    }, 'slow', function() {
      page.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove");
    });

  }

})();
