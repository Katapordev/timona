angular.module('Timona').controller('TimonaUser', function($scope, $http ,$window) {

	$scope.empty = "";
 

	var empty = angular.copy($scope.empty); 
	 
$scope.TimonaUserRead = function() {
   $http.post("/index.php?option=com_timona&task=User.TimonaUserRead&format=raw")  
    .then(function(data) { 
 	$scope.Users = data.data[0]; 
   // console.log(data);

    }); 
  }; 
});