angular.module('mainApp.controllers', []).controller('Controller1', function($scope, $location){
	
$scope.message = "Hello world!!!";
$scope.loadview2 = function(){
$location.path ('view2/'+$scope.firstname+'/'+$scope.lastname)
  

}

}).controller('Controller2', function($scope, $routeParams){
	$scope.now = new Date();
	$scope.firstname = $routeParams.firstname;
	$scope.lastname = $routeParams.lastname;
});