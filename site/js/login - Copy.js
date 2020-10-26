(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

angular.module('Timona').controller('Timonalogin', function($scope, $http ,$window,$filter) {
$window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '1201134283578320', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v8.0' // use graph api version 2.8
    });

	 FB.getLoginStatus(function(response) {
      console.log('FB.getLoginStatus', response);
      if (response.status === 'connected') {
		  
      } else if (response.status === 'not_authorized') {
		//  console.log(response);
      } else {
		  //console.log(response);
      }
    });
	
	
};

$scope.fbLogin = function() {
    FB.login(function (response) {
        if (response.authResponse) {
			console.log(response);
           $scope.getFbUserData();
        } else {
			console.log('User cancelled login or did not fully authorize.');
			FB.login();
        }
    }, {scope: 'public_profile,email'});
}

// Fetch the user profile data from facebook
$scope.getFbUserData = function(){
    FB.api('/me', {locale: 'en_US', fields: 'id,name,email,picture'},
    function (response) {
		console.log(response);
			$http.post("/index.php?option=com_timona&task=User.FBLogin&format=raw",{'dulieu':response})  
			.then(function(data) { 
				//console.log(data);
				console.log(data);
				FB.logout(function(response) { });
				setTimeout(location.reload(), 120);	
			//	}s
			//else {		
			//$scope.flag = data.data.flag;
		//	$scope.newuser['email'] = data.data.data;
			//	}	
	
		}); 
    });
}
	 
$scope.Login = function(user,link){
	var result = $scope.CheckSDT(user.username);
	console.log(result);
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
			//setTimeout(location.reload(), 120);
			 console.log(data);		
				}
		 

    });
		}
}
	
$scope.CheckSDT = function(dulieu) {
	//console.log(dulieu);
     var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if(dulieu !==''){
		if (vnf_regex.test(dulieu) == false) 
        {
			$scope.mess = "Số điện thoại của bạn không đúng định dạng!";
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

$scope.newuser ={};
$scope.flag = 1;
$scope.empty = "";
	var empty = angular.copy($scope.empty);  

});