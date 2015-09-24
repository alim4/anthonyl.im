(function() {
  var app = angular.module('app', ['page']);

  app.controller('AppController', function($scope) {
    console.log("hello from app.js");
    $scope.message = "hello";
  });

})();
