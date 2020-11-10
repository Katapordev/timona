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
		$model = $this->getModel('User', 'Site');
		return $model->Login(); 
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
        Factory::getApplication()->triggerEvent('onUserLogin', array((array)$response, $options));
        $db = Factory::getDbo();
        $profile = new \stdClass;
        $profile->idUser = $user->id;	
        $result = $db->insertObject('#__timona_user', $profile);	
		echo $result;

	}
	

	public function ProfileRead($User,$idFB='',$idGG='',$HinhAnh='')	
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
	
	
		public function InfoRead()

		{
		$data = json_decode(file_get_contents("php://input"));	
		$user = Factory::getUser();
		$db = Factory::getDbo();			
		$query = $db->getQuery(true);
		$query->select(array('a.id','a.idUser','a.idFB','a.idGG','a.idGT','a.Hinhanh','a.Ngaysinh','a.Gioitinh','a.Dienthoai','a.CMND','a.Diachi','a.codeGT','a.Ngaytao','b.name'))->from($db->quoteName('#__timona_user', 'a'))->join('INNER', $db->quoteName('#__users', 'b') . ' ON ' . $db->quoteName('a.idUser') . ' = ' . $db->quoteName('b.id'))
		->where($db->quoteName('a.idUser') .'='. $db->quote($user->id))		
		->order('id DESC');				
		$db->setQuery($query);
		$row = $db->loadObjectList();
		echo json_encode((array)$row);
		}
	
		public function KhoahocRead()
		{
		$user = Factory::getUser();
		$db = Factory::getDbo();			
		$query = $db->getQuery(true);
		$query->select(array('id','TenKH','GiaKH','Trangthai','Del','Ngaytao'))->from($db->quoteName('#__timona_khoahoc'))->order('id DESC');				
		$db->setQuery($query);
		$row = $db->loadObjectList();
		echo json_encode((array)$row);
		}	
	
		public function DangkyKH()	
		{
		$data = json_decode(file_get_contents("php://input"));	
		$db = Factory::getDbo();
		$user = Factory::getUser();	
		$profile = new \stdClass;
		$profile->idKH = $data->idKH;
		$profile->idUser = $user->id;
		$result = $db->insertObject('#__timona_usertokhoahoc', $profile);		
		print_r($result);
	
		}	
	
	  public function UserKHRead()
		{
		$data = json_decode(file_get_contents("php://input"));  
		$user = Factory::getUser();
		$db = Factory::getDbo();			
		$query = $db->getQuery(true);
		$query->select(array('a.id','a.idUser','a.idFB','a.idGG','a.idGT','a.Hinhanh','a.Ngaysinh','a.Gioitinh','a.Dienthoai','a.CMND','a.Diachi','a.codeGT','a.Ngaytao','b.name','c.Giatien','c.Giamgia','c.Thanhtien','c.Trangthai','c.Ngaytao','d.TenKH'))->from($db->quoteName('#__timona_user', 'a'))
		->join('INNER', $db->quoteName('#__users', 'b') . ' ON ' . $db->quoteName('a.idUser') . ' = ' . $db->quoteName('b.id'))
		->join('LEFT', $db->quoteName('#__timona_usertokhoahoc', 'c') . ' ON ' . $db->quoteName('a.idUser') . ' = ' . $db->quoteName('c.idUser'))	
		->join('LEFT', $db->quoteName('#__timona_khoahoc', 'd') . ' ON ' . $db->quoteName('d.id') . ' = ' . $db->quoteName('c.idKH'))	
		->where($db->quoteName('a.idUser') .'='. $db->quote($user->id))	
		->order('id DESC');
		$db->setQuery($query);
		$row = $db->loadObjectList();
		echo json_encode((array)$row);
		}
	
}

