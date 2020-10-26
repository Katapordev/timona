<?php


namespace Joomla\Component\Timona\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Helper\TazaHelper;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;
use Joomla\CMS\Session\Session;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\User\UserHelper;
PluginHelper::importPlugin('user');
class UserController extends BaseController

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
	
	public function Register(){	
				
		$data = json_decode(file_get_contents("php://input"));
		$SDT = $data->SDT;
		$usersConfig = ComponentHelper::getParams('com_users');
		$newUsertype 	= $usersConfig->get( 'new_usertype', 2);
		$user =  Factory::getUser();
		$randomepass	= UserHelper::genRandomPassword(5);
		$userData= array();
		$userData['name'] 		= $SDT;
		$userData['username'] 	= $SDT;
		$userData['email'] 		= $SDT.'@gmail.com';
		$userData['password'] 	= $data->Pass;
		$userData['password2'] 	= $data->Pass;
		$userData['sendEmail'] 	= 0; 
		
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
		$options = array();
		$options['action'] = 'core.login.site';	
		$response = new \stdClass();
		$response->username = $SDT;		
	    $result = Factory::getApplication()->triggerEvent('onUserLogin', array((array)$response, $options));
		$db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->idUser = $user->id;	
		$result = $db->insertObject('#__timona_user', $profile);	

	}
	

	public function Profile($User,$idFB='',$idGG='',$HinhAnh='')	
	{
		$db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->idUser = $user->id;
		$profile->Hoten = $dulieu->Hoten;
		$profile->IP = $dulieu->IP;
		$profile->Gmail = $dulieu->Gmail;
		$profile->Info =$dulieu->Info;
		$profile->SDT =$dulieu->SDT;		
		$profile->Payoneer =$dulieu->Payoneer;	
		$profile->Bank =$dulieu->Bank;
		$profile->Cauhoi =$dulieu->Cauhoi;	
		$profile->Ghichu =$dulieu->Ghichu;		
		$profile->Trangthai =$dulieu->Trangthai;	
		$result = $db->insertObject('#__anhson', $profile);		
		echo '{"loai":"success","noidung":"Đã Thêm Mới Dữ Liệu"}';
	
	}	
	
	
	
		public function CheckUser()
		{
			$data = json_decode(file_get_contents("php://input"));
			$SDT = $data->dulieu;
			$db = Factory::getDbo();
			$query = $db->getQuery(true)
				->select('COUNT(*)')
				->from($db->quoteName('#__users'))
				->where($db->quoteName('username') . ' = ' . $db->quote($SDT));
			$db->setQuery($query);
			echo $result = $db->loadResult();
		}
	
	
		public function TimonaUserRead()

		{
		$user = Factory::getUser();	
		$db = Factory::getDbo();			
		$query = $db->getQuery(true)
		->select($db->quoteName(array('id','idUser','idFB','idGG','idGT','Hinhanh','Ngaysinh','Gioitinh','Dienthoai','CMND','Diachi','codeGT','Ngaytao')))
		->from($db->quoteName('#__timona_user'))
		->where($db->quoteName('idUser') . ' = ' . $db->quote($user->id));
		$db->setQuery($query);
		$row = $db->loadObjectList();
		echo json_encode((array)$row);
		}
	
	
}

