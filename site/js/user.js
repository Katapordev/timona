var app = angular.module('TimonaUser', []);
app.controller('TimonaUser', function($scope, $http ,$window) {

	$scope.empty = "";

	$scope.abc = "sdasdsasad";	 

	var empty = angular.copy($scope.empty); 
	 
$scope.TimonaUserRead = function() {
   $http.post("/index.php?option=com_timona&task=User.TimonaUserRead&format=raw")  
    .then(function(data) { 
 	//$scope.Users = data.Hinhanh; 
  	//	console.log(data[0].Hinhanh);

    }); 
  }; 
});