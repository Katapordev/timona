angular.module('Timona').controller('GiaiDap', function($scope, $http ,$window,$filter) {
 
	$scope.empty = {};
	var empty = angular.copy($scope.empty); 

$scope.Reset = function()
{
	$scope.CauhoiRead();
	$scope.thacmac = angular.copy(empty);
	$scope.giaidap = angular.copy(empty);
}
	
$scope.CauhoiRead = function() {
   $http.post("/index.php?option=com_timona&task=Giaidap.CauhoiRead&format=raw")  
    .then(function(data) { 
 	$scope.CauhoiS = data.data.details; 
  console.log(data);
    }); 
  }; 
	 
$scope.CauhoiCreate = function(dulieu) {	
	 $http.post("/index.php?option=com_timona&task=Giaidap.CauhoiCreate&format=raw",{'dulieu':dulieu}) 
    .then(function(data) { 
   console.log(data);
		 $scope.Reset();
    }); 
  };

$scope.TraloiCreate = function(id,dulieu) {	
	 $http.post("/index.php?option=com_timona&task=Giaidap.TraloiCreate&format=raw",{'id':id,'dulieu':dulieu}) 
    .then(function(data) { 
   		$scope.Reset();
		 
    }); 
  };	 
	  

});