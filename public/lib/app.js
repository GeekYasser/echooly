var AdminDashboard = angular.module('AdminDashboard', ['studentControllers','ngRoute','angularUtils.directives.dirPagination'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('//');
        $interpolateProvider.endSymbol('//');
	});

	AdminDashboard.config(['$routeProvider',function($routeProvider){
		//Our Route Hirearchy
		//Students Routes
		$routeProvider
			.when('/Students', {
								templateUrl : '/dashboard/administration/students/students.html', 
								controller: 'ShowStudentsController'}
				 )
		//Teachers Route
			.when('/Teachers',{
								templateUrl : '/dashboard/administration/teachers/teachers.html',
								controller : 'ShowTeachersController'
							  });
	}]);