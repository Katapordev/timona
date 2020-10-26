angular.module('Timona').controller('Dangkyhoc', function($scope, $http ,$window) {

	$scope.empty = {};
	$scope.notify = 0;
	$scope.content = '';
	$scope.validate = '';
	var empty = angular.copy($scope.empty); 

$scope.CheckPass = function(dulieu) {
	console.log(dulieu);
	
	
//   $http.post("/index.php?option=com_timona&task=Dangkyhoc.CheckPass&format=raw",{'dulieu':dulieu})  
//    .then(function(data) { 
//  		console.log(data);
//	  // $scope.notify = data.data.status;
//	  // $scope.content = data.data.content;
//    }); 
  }; 
$scope.noti = '';
$scope.Dangkyhoc = function(dulieu) { 
	if(typeof dulieu.magt == "undefined" ||dulieu.magt=='')
		{
   $http.post("/index.php?option=com_timona&task=Dangkyhoc.DKHocthu&format=raw",{'dulieu':dulieu})  
    .then(function(data) { 
  		console.log(data);
	   $scope.notify = data.data.status;
	   $scope.content = data.data.content;
    }); 
			
		}
	else
		{
    $http.post("/index.php?option=com_timona&task=Dangkyhoc.CheckMGT&format=raw",{'dulieu':dulieu})  
    .then(function(data) {
	  console.log(data.data);
		if(data.data[0] ==0)
			{
				$scope.noti = 'Mã Giới Thiệu Chưa Được Kích Hoạt';
			}
		else if(data.data[0] ==1)
			{
			$http.post("/index.php?option=com_timona&task=Dangkyhoc.DKHocMGT&format=raw",{'dulieu':dulieu,'idGT':data.data[1]})  
			.then(function(data) { 
				console.log(data);
			   $scope.notify = data.data.status;
			   $scope.content = data.data.content;
			}); 
				
			}
		else
			{
				$scope.noti = 'Mã Giới Thiệu Không Tồn Tại';
			}
		
		

    });
			
		}
	
  }; 
	
	$scope.DangkyGiam50 = function(dulieu) {
   $http.post("/index.php?option=com_timona&task=Dangkyhoc.DangkyGiam50&format=raw",{'dulieu':dulieu})  
    .then(function(data) { 
  		console.log(data);
	   $scope.notify = data.data.status;
	   $scope.content = data.data.content;
    }); 
  }; 
	
	
});