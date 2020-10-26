<?php


namespace Joomla\Component\Timona\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Helper\TazaHelper;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;
class DangkyhocController extends BaseController

{
	
	public function CheckMGT()
	{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
		$db = Factory::getDbo();
		$query = $db
				->getQuery(true)
				->select($db->quoteName(array('activecodeGT','idUser')))
				->from($db->quoteName('#__timona_user'))
				->where($db->quoteName('codeGT') . " = " . $db->quote($dulieu->magt));
			$db->setQuery($query);
			$result = $db->loadRow();	
		  echo json_encode($result); 
		}	
	

	  public function DKHocMGT()

		{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
        $db = Factory::getDbo();
	  	$user = Factory::getUser();
		$profile = new \stdClass;
		$profile->TenHV = $dulieu->hoten;
	  	$profile->idUser = $user->id;
	  	$profile->SDT = $dulieu->sdt;
	  	$profile->LinkBaiViet = $dulieu->dichvu;
		$profile->idGT = $data->idGT; 
	  	$profile->LoaiKH = "Học Thử";
		$result= $db->insertObject('#__timona_hocvien', $profile);	
		  
	  	$kq = new \stdClass;
	  	$kq->status = $result;
		$kq->content =$dulieu->hoten; 	
		echo json_encode($kq);
			}
	
	
	
  public function DKHocthu()

		{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
        $db = Factory::getDbo();
	  	$user = Factory::getUser();
		$profile = new \stdClass;
		$profile->TenHV = $dulieu->hoten;
	  	$profile->idUser = $user->id;
	  	$profile->SDT = $dulieu->sdt;
	  	$profile->LinkBaiViet = $dulieu->dichvu;
	  	$profile->LoaiKH = "Học Thử";
		$result = $db->insertObject('#__timona_hocvien', $profile);	
	  	$kq = new \stdClass;
	  	$kq->status = $result;
		$kq->content =$dulieu->hoten; 	
		echo json_encode($kq);
			}
  public function DangkyGiam50()

			{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
	  	$user = Factory::getUser();
        $db = Factory::getDbo();
		$profile = new \stdClass;
	  	$profile->idUser = $user->id;
		$profile->TenHV = $dulieu->hoten;
	  	$profile->SDT = $dulieu->sdt;
	  	$profile->LinkBaiViet = $dulieu->dichvu;
	  	$profile->LoaiKH = "Giảm 50%";
		$result = $db->insertObject('#__timona_hocvien', $profile);	
	  	$kq = new \stdClass;
	  	$kq->status = $result;
		$kq->content =$dulieu->hoten; 	
		echo json_encode($kq);
			}	
	
	
}

