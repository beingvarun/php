angular.module('mainApp', ['mainApp.controllers', 'ngRoute']);
angular.module('mainApp').config(function($routeProvider){
	$routeProvider.when('/view1',{
		controller: 'Controller1',
		templateUrl:'html/view1.html'
	}).when('/view2/:firstname/:lastname',{
		controller:'Controller2',
		templateUrl:'html/view2.html',
		resolve:{
		names:function(){
			return['sachin', 'sehwag', 'ganguly']
		}	
		}
	});
	$routeProvider.otherwise({redirectTo:'http://google.com'});
} );