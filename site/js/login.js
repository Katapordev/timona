angular.module('Timona').controller('Timonalogin', function($scope, $http ,$window,$filter) {

$scope.newuser ={};
$scope.FOTP = 0;
$scope.FReg = 0;	
$scope.disable = '';
$scope.empty = "";
var empty = angular.copy($scope.empty);  
$scope.logintitle = "Đăng Nhập";
$scope.Reset =function()
{
	$scope.user={};
	$scope.FOTP = 0;
	$scope.disable = '';
	$scope.mess='';
	$('.dangnhap').addClass('d-block');
	$('.dangky').addClass('d-none');
	$scope.logintitle = "Đăng Nhập";
}
	
	
$scope.Login = function(user,link){
	var result = $scope.CheckSDT(user.username);
	console.log(result);
	console.log(user.username);

	if(result==1)
		{
			$http.post("/index.php?option=com_timona&task=User.Login&format=raw",{'user':user})  
			.then(function(data) { 
			if(data.data!=1)	
				{
				$scope.mess= data.data;		
				 console.log(data);	
				}
			else
				{
			setTimeout(location.reload(), 120);
			 console.log(data);		
				}
		 

    });
		}
}



$scope.Register = function(sdt,pass){
	var result = $scope.CheckSDT(sdt);
	if(result==1)
		{
		$http.post("/index.php?option=com_timona&task=User.CheckUser&format=raw",{'dulieu':sdt})  
    		.then(function(data) { 
				 if(data.data==1)
					 {
						 $scope.mess = "SĐT Đã Tồn Tại";
					 }
				else{
				$http.post("/index.php?option=com_timona&task=User.Register&format=raw",{'SDT':sdt,'Pass':pass}) 
				.then(function(data) { 
				 console.log(data);			 
				setTimeout(location.reload(), 120);
				
			});
			}
			 });	
			
		}
//	if(result!=1)
//		{
////			$scope.FOTP=1;
////			$scope.disable = 'disabled';	
//			$http.post("/index.php?option=com_timona&task=User.Register&format=raw",{'SDT':sdt,'Pass':pass})  
//			.then(function(data) { 
//			 console.log(data);			 
//			setTimeout(location.reload(), 120);
//				});
//		}
}



$scope.Dangky = function() {
	$('.dangnhap').addClass('d-none');
	$('.dangnhap').removeClass('d-block');
	$('.dangky').removeClass('d-none');
	$scope.logintitle = "Đăng Ký";
  }; 
$scope.Dangnhap = function() {
	$('.dangnhap').addClass('d-block');
	$('.dangky').addClass('d-none');
	$scope.logintitle = "Đăng Nhập";
  }; 

$scope.CheckSDT = function(dulieu) {
	//console.log(dulieu);
     var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if(dulieu !==''){
		if (vnf_regex.test(dulieu) == false) 
        {
			$scope.mess = "Chưa Nhập SĐT Hoặc SĐT Chưa Đúng";
			return 0;
        }else{
			return 1;
        }
	}
	else
	{
		$scope.mess = "Chưa Nhập SĐT";
		return 0;
	}
	
//   $http.post("/index.php?option=com_timona&task=Dangkyhoc.CheckPass&format=raw",{'dulieu':dulieu})  
//    .then(function(data) { 
//  		console.log(data);
//	  // $scope.notify = data.data.status;
//	  // $scope.content = data.data.content;
//    }); 
  }; 

$scope.NewUser = function(dulieu){
			$http.post("/index.php?option=com_timona&task=User.NewUser&format=raw",{'dulieu':dulieu}) 
			.then(function(data) { 
			if(data.data!=1)	
				{
			$scope.mes= data.data;		
					
				}
			else
				{
			setTimeout(location.reload(), 120);
				}
		  console.log(data);

    });
}

 

});