//Creating our student Controller
var studentControllers = angular.module('studentControllers', []);
	//Creating a show controller
	//ShowStudentsController
	studentControllers.controller('ShowStudentsController', function($scope, $http){
		//loading icon
        $scope.loading = true;
		//To Show Students we are going to fetch data from our api $http provider
		$http.get('/api/admin/students').success(function(data){
			//Holding our data in the scope
			$scope.students = data;
			$scope.currentPage = 1;
        	$scope.loading = false;
		});
		
	});

	//ShowTeachersController
	studentControllers.controller('ShowTeachersController', function($scope, $http){
		//loading icon
        $scope.loading = true;
		//To Show Students we are going to fetch data from our api $http provider
		$http.get('/api/admin/teachers').success(function(data){
			//Holding our data in the scope
			$scope.teachers = data;
			$scope.currentPage = 1;
        	$scope.loading = false;
		});
	});
