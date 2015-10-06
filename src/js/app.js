(function() {
  var app = angular.module('app', ['page']);

  app.controller('AppController', function($scope, $state) {
    console.log("hello from app.js");
    $scope.message = "hello";
    $scope.state = $state.$current.url;
    console.log($state.$current.url);
  });

})();
