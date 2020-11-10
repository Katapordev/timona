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
use Joomla\Component\Timona\Site\Model\UserModel;
class NhanvienController extends BaseController

{
	
	  public function NhanvienCreate()

		{
		date_default_timezone_set('Asia/Ho_Chi_Minh'); 
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
		$idUser = UserModel::newuser($dulieu);
		$db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->idUser = $idUser;		  
		$profile->Ngaysinh = date("Y-m-d",strtotime($dulieu->Ngaysinh));
		$profile->Gioitinh = $dulieu->Gioitinh;
		$profile->Dienthoai = $dulieu->Dienthoai;
		$profile->CMND = $dulieu->CMND;
		$profile->Diachi =$dulieu->Diachi;	
		$result = $db->insertObject('#__timona_nhanvien', $profile);	
		print_r($result);
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
	
	
		public function NhanvienRead()

		{
		$user = Factory::getUser();
		$admin = $user->authorise('core.admin');
		$db = Factory::getDbo();			
		$query = $db->getQuery(true);
		$query->select(array('a.id','a.idUser','a.idFB','a.idGG','a.Hinhanh','a.Ngaysinh','a.Gioitinh','a.Dienthoai','a.CMND','a.Diachi','a.Ngaytao','b.name','b.email'))->from($db->quoteName('#__timona_nhanvien', 'a'))->join('INNER', $db->quoteName('#__users', 'b') . ' ON ' . $db->quoteName('a.idUser') . ' = ' . $db->quoteName('b.id'))->order('id DESC');				
		//if($admin!=1){$query->where($db->quoteName('idUser') . ' = ' . $db->quote($user->id));}
		$db->setQuery($query);
		$row = $db->loadObjectList();
		echo json_encode((array)$row);
		}
	
	
}

