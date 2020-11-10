$(document).ready(function(){
$('.form-control-chosen').chosen();
$('[data-toggle="popover"]').popover();	
});


angular.module('Timona').controller('TimonaUser', function($scope, $http ,$window) {

	$scope.empty = "";
 

	var empty = angular.copy($scope.empty); 
	 
$scope.InfoRead = function(idUser) {
   $http.post("/index.php?option=com_timona&task=User.InfoRead&format=raw",{'idUser':idUser})  
    .then(function(data) { 
 	$scope.Users = data.data[0]; 
   console.log($scope.Users);

    }); 
  }; 
	
$scope.KhoahocRead = function() {
   $http.post("/index.php?option=com_timona&task=User.KhoahocRead&format=raw")  
    .then(function(data) { 
 	$scope.KHS = data.data; 
 //  console.log(data);

    }); 
  }; 
$scope.DangkyKH = function(idKH,idUser) {
   $http.post("/index.php?option=com_timona&task=User.DangkyKH&format=raw",{'idKH':idKH}) 
    .then(function(data) { 
   console.log(data);
	   $scope.UserKHRead();
	   $scope.dkstatus = data.data;
    }); 
  };
	
$scope.UserKHRead = function() {
   $http.post("/index.php?option=com_timona&task=User.UserKHRead&format=raw")  
    .then(function(data) { 
	   console.log(data);
	   $scope.UserKH = data.data;
    }); 
  }; 
	
	
	
});