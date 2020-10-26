<?php


namespace Joomla\Component\Timona\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Helper\TazaHelper;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;
class GiaidapController extends BaseController

{
  public function CauhoiCreate()

			{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
        $db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->Cauhoi = $dulieu->Cauhoi;
		$result = $db->insertObject('#__timona_thacmac', $profile);	
		echo $result;

			}
	
	
	public function CauhoiRead()
	{
		$db = Factory::getDbo();	
		
		$query = $db->getQuery(true)
		->select($db->quoteName(array('id','idUser','Cauhoi','Trangthai','Ngaytao')))
		->from($db->quoteName('#__timona_thacmac'))
		->order('id DESC');
		$db->setQuery($query);
		$row = $db->loadObjectList();
		$outp = "";	
			foreach ($row as $row)
			{  	
				$outp1 = "";
				$row1 = GiaidapController::TraLoiRead($row->id);
				foreach ($row1 as $row1)
					{
						if ($outp1 != "") {$outp1 .= ",";}  
						$outp1 .= '{"id":"'  . $row1->id. '",'; 
						$outp1 .= '"idUser":"'.$row1->idUser.'",'; 	
						$outp1 .= '"Traloi":"'.$row1->Traloi.'",'; 	
						$outp1 .= '"Ngaytao":"'. $row1->Ngaytao.'"}';
					}
				 if ($outp != "") {$outp .= ",";}  
						$outp .= '{"id":"'  . $row->id. '",'; 
						$outp .= '"idUser":"'.$row->idUser.'",'; 
						$outp .= '"Cauhoi":"'.$row->Cauhoi.'",'; 
						$outp .= '"TraloiS":['.$outp1.'],'; 
						$outp .= '"Trangthai":"'.$row->Trangthai.'",';  			
						$outp .= '"Ngaytao":"'. $row->Ngaytao.'"}'; 
				}
						$outp ='{"details":['.$outp.']}';
		  echo ($outp); 
		}
	
	
	public function TraLoiRead($id)
	{
		
		$db = Factory::getDbo();	
		$query = $db->getQuery(true)
		->select($db->quoteName(array('id','idUser','idCauhoi','Traloi','Ngaytao')))
		->from($db->quoteName('#__timona_giaidap'))
		->where($db->quoteName('idCauhoi').'='.$db->quote($id));
		$db->setQuery($query);
		return $row = $db->loadObjectList();
	}
	
    public function TraloiCreate()

			{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
        $db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->idCauhoi = $data->id;
		$profile->Traloi = $dulieu->Traloi;
		$result = $db->insertObject('#__timona_giaidap', $profile);	
		echo $result;
			}
	

}

