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
class KhaosatController extends BaseController

{
	


	  public function KhaosatCreate()

		{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
		$db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->idKS = $dulieu->idKS;		  
		$profile->Field1 = $dulieu->Field1->name;	
		$profile->Field2 = $dulieu->Field2->name;  
		$profile->Field3 = $dulieu->Field3->name;
		$profile->Field4 = $dulieu->Field4->name; 
	    $profile->Field5 = $dulieu->Field5->name;	
		$profile->Field6 = $dulieu->Field6->name;  
		$profile->Field7 = $dulieu->Field7->name;
		$profile->Field8 = $dulieu->Field8->name;
		$profile->Field9 = $dulieu->Field9->name;	
		$profile->Field10 = $dulieu->Field10->name;  
		$profile->Field11 = $dulieu->Field11->name;
		$profile->Field12 = $dulieu->Field12->name;
		$profile->Field13 = $dulieu->Field13->name;	
		$profile->Field14 = $dulieu->Field14->name;  
		$profile->Field15 = $dulieu->Field15->name;
		$profile->Field16 = $dulieu->Field16->name;
		$profile->Field17 = $dulieu->Field17->name;	
		$profile->Field18 = $dulieu->Field18->name;  
		$profile->Field19 = $dulieu->Field19->name;
		$profile->Field20 = $dulieu->Field20->name;  
		$result = $db->insertObject('#__timona_kqkhaosat', $profile);	
		print_r($result);
		}
	
	  public function NoidungKSCreate()

		{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
		$db = Factory::getDbo();
		$profile = new \stdClass;
		$profile->TenKS = $dulieu->TenKS;		  
		$profile->Field1 = $dulieu->Field1;	
		$profile->Field2 = $dulieu->Field2;  
		$profile->Field3 = $dulieu->Field3;
		$profile->Field4 = $dulieu->Field4;  
		$profile->Field5 = $dulieu->Field5;	
		$profile->Field6 = $dulieu->Field6;  
		$profile->Field7 = $dulieu->Field7;
		$profile->Field8 = $dulieu->Field8;
		$profile->Field9 = $dulieu->Field9;	
		$profile->Field10 = $dulieu->Field10;  
		$profile->Field11 = $dulieu->Field11;
		$profile->Field12 = $dulieu->Field12;
		$profile->Field13 = $dulieu->Field13;	
		$profile->Field14 = $dulieu->Field14;  
		$profile->Field15 = $dulieu->Field15;
		$profile->Field16 = $dulieu->Field16;
		$profile->Field17 = $dulieu->Field17;	
		$profile->Field18 = $dulieu->Field18;  
		$profile->Field19 = $dulieu->Field19;
		$profile->Field20 = $dulieu->Field20;		  
		$result = $db->insertObject('#__timona_khaosat', $profile);	
		print_r($result);
		}
	
    public function TitleKhaoSatRead() {
		date_default_timezone_set('Asia/Ho_Chi_Minh'); 
		$data = json_decode(file_get_contents("php://input"));
        $db = Factory::getDbo();
        $query = $db->getQuery(true);
        $query->select(array('id', 'Field1', 'Field2', 'Field3', 'Field4', 'Field5','Field6','Field7','Field8','Field9', 'Field10', 'Field11', 'Field12', 'Field13','Field14','Field15','Field16', 'Field17','Field18','Field19','Field20'))->from($db->quoteName('#__timona_khaosat'))
		->where($db->quoteName('id') . "=" . $db->quote($data->idKS))	
		->order('id DESC');
        $db->setQuery($query);
        $row = $db->loadObjectList();
        $row = json_encode((array)$row);
        print_r($row);
    }
    public function KQKhaoSatRead() {
		date_default_timezone_set('Asia/Ho_Chi_Minh'); 
		$data = json_decode(file_get_contents("php://input"));
        $db = Factory::getDbo();
        $query = $db->getQuery(true);
        $query->select(array('id','idKS', 'Field1', 'Field2', 'Field3', 'Field4', 'Field5','Field6','Field7','Field8','Field9', 'Field10', 'Field11', 'Field12', 'Field13','Field14','Field15','Field16', 'Field17','Field18','Field19','Field20'))->from($db->quoteName('#__timona_kqkhaosat'))
		->where($db->quoteName('idKS') . "=" . $db->quote($data->idKS))	
		->order('id DESC');
        $db->setQuery($query);
        $row = $db->loadObjectList();
        $row = json_encode((array)$row);
        print_r($row);
    }	
	
}

