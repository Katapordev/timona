var timonaapp = angular.module('timonaapp', []);
timonaapp.controller('timona', function($scope , $http ,$window, $filter) {
  $scope.HocVienShow = function() {
   $http.post("index.php?option=com_timona&task=Hocvien.Show&format=raw")  
    .then(function(data) { 
 	$scope.FDKs = data.data.details; 
   console.log(data);
    }); 
  }; 
});
