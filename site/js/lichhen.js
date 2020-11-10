var app = angular.module('Timona');

app.filter('MLL',function(){
     return function(input)
        {
		 if(input == 'Điều Trị')
				{
					result = 'bg-info text-white';
				}
		 else 
			 {
				 result = 'bg-warning text-white';
			 }
		 return result;
        }
});

app.filter('TTL',function(){
     return function(input)
        {
		 if(input == 'Ra Về')
				{
					result = 'bg-success text-white';
				}
		 else if(input == 'Đã Đến')
			 {
				 result = 'bg-danger text-white';
			 }
		else {result = 'bg-secondary text-white';}		 
		 return result;
        }
});

	
	
app.controller('Lichhen', function($scope, $http ,$window) {

	
$scope.Sfield = 'field2';
$scope.reverse = false;
	
 $scope.sortBy = function(Sfield) {
    $scope.reverse = ($scope.Sfield === Sfield) ? !$scope.reverse : false;
    $scope.Sfield = Sfield;	 
 };	
	
	
$scope.sortClass = function(col){
  if($scope.Sfield == col ){
   if($scope.reverse){
    return 'fas fa-arrow-down'; 
   }else{
    return 'fas fa-arrow-up';
   }
  }else{
   return '';
  }
 } 

	
	
	
$scope.empty = "";
var today = new Date();
$scope.boloc = {"tungay":today,"denngay":today,"soluong":"100","checknv":0,"nhanvien":"0"};
var empty = angular.copy($scope.empty); 
$scope.FieldsRead = function(boloc) {
   $http.post("/index.php?option=com_timona&task=Lichhen.FieldsRead&format=raw",{'boloc':boloc})  
    .then(function(data) { 
 	$scope.Fields = data.data; 
   console.log(data);

    }); 
  }; 
$scope.Updatetime = function() {

 $scope.Fields.forEach(function(value, index){
	 //console.log(value);
  $http.post("/index.php?option=com_timona&task=Lichhen.Updatetime&format=raw",{'dulieu':value})  
    .then(function(data) { 
   console.log(data);
  console.log(index);
    });
});	
 
  }; 	
	
	
});