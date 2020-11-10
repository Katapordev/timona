angular.module('Timona').controller('Formdangky',function($scope,$firebase,$firebaseAuth,$firebaseObject,$firebaseArray,$http ,$window) {
	
 // $scope.loadnoti = function()
	//{
 var ref = firebase.database().ref();
  $scope.notificaHVs= $firebaseArray(ref);
 $scope.countnoti  = 0;
  $scope.notificaHVs.$loaded().then(function(arr) {
	  arr.forEach(element => {
		  if(element.status==1)
			  {
				  $scope.countnoti ++; 
			  }
	  })
	});
	   console.log($scope.notificaHVs);
//	}
  
  
  
  
  $scope.checkoutnoti = function()
	{
	  var ref = firebase.database().ref(); 
	  $scope.notificaHVs= $firebaseArray(ref);   
  $scope.notificaHVs.$loaded().then(function(arr) {
	  arr.forEach(function(value, index) {
		  $scope.notificaHVs[index].status=0;
		    $scope.notificaHVs.$save(index).then(function(ref) {
			 ref.key === value.$id; // true
			});
		 console.log($scope.notificaHVs[index]);
		  //var data = {hoten:element.hoten, sdt: element.sdt,status:1};
		 // $scope.notificaHVs.$save($scope,data);	
	  })
	});

	}  
  
  
  
  
	$scope.empty = "";
	var empty = angular.copy($scope.empty); 
$scope.HocvienDKRead = function() {
   $http.post("/index.php?option=com_timona&task=Hocvien.Formdangky&format=raw")  
    .then(function(data) { 
 	$scope.HVDKS = data.data; 
	   console.log($scope.HVDKS);
    }); 
  }; 
	
	
});