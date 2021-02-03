var myApp = angular.module('myApp', []);

myApp.controller('CookieController', ['$scope', function ($scope) {
  $scope.isVisible = true;
  $scope.hideBanner = function () {
    $scope.isVisible = false;
  };
  $scope.acceptCookies = function () {
    Cookies.set('myCookieFromPlugin', true)
    this.hideBanner()
  };
  $scope.declineCookies = function () {
    Cookies.set('declineCookies', true)
    this.hideBanner()
  };
}]);
