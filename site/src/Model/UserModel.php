<?php

namespace Joomla\Component\Timona\Site\Model;

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\MVC\Model\ListModel;
use Joomla\CMS\Table\Table;
use Joomla\Database\ParameterType;
use Joomla\CMS\Helper\TazaHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Session\Session;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\User\UserHelper;
use Joomla\CMS\User\User;
PluginHelper::importPlugin('user');



class UserModel extends ListModel

{
 
	public function Login()
		{
		$data = json_decode(file_get_contents("php://input"));
		$user = $data->user;  
		$options = array();
		$credentials = array();
		$credentials['username']  = (string) $user->username;
		$credentials['password']  = $user->password;
	   	$result = Factory::getApplication()->login($credentials, $options);	
		$ketqua = ($result==1) ? 1 : "Sai Tên Đăng Nhập Hoặc Mật Khẩu";
		echo $ketqua;
		}
	public static function test()
		{
 			echo "Sai Tên Đăng Nhập Hoặc Mật Khẩu";
		}
	
	
	public static function newuser($dulieu){	
				
        $usersConfig = ComponentHelper::getParams('com_users');
        $newUsertype 	= $usersConfig->get( 'new_usertype', 2);
        $user = new User;
        $userData= array();
        $userData['name'] 		= $dulieu->name;
        $userData['username'] 	= $dulieu->username;
        $userData['email'] 		= $dulieu->email;
        $userData['password'] 	= $dulieu->password;
        $userData['password2'] 	= $dulieu->password;

        if (!$user->bind($userData))
        {

            return false;
        }

        $newUsertype 	= $usersConfig->get( 'new_usertype', 2);			
        if (!$newUsertype) {
            $newUsertype = 'Registered';
        }
		
        $user->set('groups', array($newUsertype));	
        if (!$user->save())
        {
            return false;

        }

        return (int)$user->id;

	}
	
	
}

