(function() {
  var app = angular.module('page', ['ngAnimate', 'ui.router']);
  var baseURL = templateUrl; // from index.php

  app.controller('PageController', function() {

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

  app.controller('homeController', function($scope, $window, $http) {
    this.tab = 1;
    $http.get(baseURL + '/local.properties').then(function(response) {
      $scope.home_row_1_col_1 = response.data.home_row_1_col_1;
      $scope.home_row_1_col_2 = response.data.home_row_1_col_2;
      $scope.home_row_1_col_3 = response.data.home_row_1_col_3;
    });
    $scope.message = 'Home index.html';
    $scope.baseURL = baseURL;
    scrollToTop();
    toggleAltonClass();
    console.log("Clicked homeController");
  });

  app.controller('aboutController', function($scope, $window) {
    this.tab = 2;
    $scope.message = 'About about.html';
    $scope.baseURL = baseURL;
    scrollToTop();
    toggleAltonClass();
    console.log("Clicked aboutController");
  });

  app.controller('contactController', function($scope, $window) {
    this.tab = 3;
    $scope.message = 'Contact contact.html';
    $scope.baseURL = baseURL;
    scrollToTop();
    toggleAltonClass();
    console.log("Clicked contactController");
  });

  app.controller('experienceController', function($state, $scope, $window, $http) {
    this.tab = 4;
    $scope.baseURL = baseURL;
    scrollToTop();
    toggleAltonClass();

    $state.transitionTo('experience.entry');
    console.log("Clicked experienceController");
  });

  app.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

    // For unmatched URLs
    $urlRouterProvider.otherwise("/home");

    $stateProvider
      .state('home', {
        url: "/home",
        templateUrl: templateUrl + '/src/html/home.html',
        controller: 'homeController'
      })

    .state('about', {
      url: "/about",
      templateUrl: templateUrl + '/src/html/about.html',
      controller: 'aboutController'
    })

    .state('contact', {
      url: "/contact",
      templateUrl: templateUrl + '/src/html/contact.html',
      controller: 'contactController'
    })

    .state('experience', {
      url: "/experience",
      templateUrl: templateUrl + '/src/html/experience.html',
      controller: 'experienceController'
    })

    .state('experience.entry', {
      templateUrl: templateUrl + '/src/html/experience_entry.html',
      controller: function($scope, $http) {
        var entries = [];

        $http.get(baseURL + "/experience-entries.json")
          .success(function(data) {
            console.log("JSON get successful");
            entries.push(data);
            $scope.entries = data.entries;
          });
        console.log("scope: " + $scope.entries);
        console.log("entries: " + entries);
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
