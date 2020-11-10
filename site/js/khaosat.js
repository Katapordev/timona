angular.module('Timona').controller('Khaosat', function($scope, $http ,$window) {

	$scope.empty = "";
  	$scope.result = 0;

	var empty = angular.copy($scope.empty); 
	 
$scope.KhaosatCreate = function(dulieu) {
	console.log(dulieu);
   $http.post("/index.php?option=com_timona&task=Khaosat.KhaosatCreate&format=raw",{'dulieu':dulieu})  
    .then(function(data) { 
    console.log(data);
	   $scope.result = 1;
    }); 
  };
	
$scope.NoidungKSCreate = function(dulieu) {
	console.log(dulieu);
   $http.post("/index.php?option=com_timona&task=Khaosat.NoidungKSCreate&format=raw",{'dulieu':dulieu})  
    .then(function(data) { 
    console.log(data);
	  $scope.result = 1;
    }); 
  }; 	
	
	$scope.TitleKhaoSatRead = function(idKS) {
   $http.post("/index.php?option=com_timona&task=Khaosat.TitleKhaoSatRead&format=raw",{'idKS':idKS})  
    .then(function(data) { 
	   $scope.Titles = data.data;
    console.log(data);
    }); 
  }; 
	
	$scope.KQKhaoSatRead = function(idKS) {
   $http.post("/index.php?option=com_timona&task=Khaosat.KQKhaoSatRead&format=raw",{'idKS':idKS})  
    .then(function(data) { 
	   $scope.KQKS = data.data;
    console.log(data);
    }); 
  }; 
	
	
});