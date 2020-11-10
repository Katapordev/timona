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
class LichhenController extends BaseController {
    public function FieldsCreate() {
        $data = json_decode(file_get_contents("php://input"));
        //$dulieu = $data->form;
//        $user = Factory::getUser();
		date_default_timezone_set('Asia/Ho_Chi_Minh');  
        $db = Factory::getDbo();
        $profile = new \stdClass;
        $profile->field1 = $data->field1;
        $profile->field2 = $data->field2;
        $profile->field3 = $data->field3;	
        $profile->field4 = $data->field4;
        $profile->field5 = $data->field5;
		$profile->field6 = $data->field6;
		$profile->field7 = date("Y-m-d",strtotime($data->field6));
        $result = $db->insertObject('#__timona_lichhen', $profile);
		print_r($result);
    }
    public function EditorUpdate() {
        $data = json_decode(file_get_contents("php://input"));
        $dulieu = $data->dulieu;
        $user = Factory::getUser();
        $db = Factory::getDbo();
        $profile = new \stdClass;
        $profile->id = $dulieu->id;
        $profile->Ten = $dulieu->Ten;
        $profile->Noidung = $dulieu->Noidung;
        $result = $db->updateObject('#__kata', $profile, 'id');
        echo '{"loai":"info","noidung":"Đã Cập Nhật Dữ Liệu"}';
    }
	
	  public function Updatetime() {
		date_default_timezone_set('Asia/Ho_Chi_Minh');    
        $data = json_decode(file_get_contents("php://input"));
        $dulieu = $data->dulieu;
        $db = Factory::getDbo();
        $profile = new \stdClass;
        $profile->id = $dulieu->id;
        $profile->field7 =  date("Y-m-d",strtotime($dulieu->field6));
        $result = $db->updateObject('#__timona_lichhen', $profile, 'id');
        echo '{"loai":"info","noidung":"Đã Cập Nhật Dữ Liệu"}';
    }
	
	
    public function FieldsRead() {
		date_default_timezone_set('Asia/Ho_Chi_Minh'); 
		$data = json_decode(file_get_contents("php://input"));
        $boloc = $data->boloc;
		$tungay = date("Y-m-d",strtotime($boloc->tungay));
		$denngay = date("Y-m-d",strtotime($boloc->denngay));
        $db = Factory::getDbo();
        $query = $db->getQuery(true);
        $query->select(array('id', 'field1', 'field2', 'field3', 'field4', 'field5','field6','field7'))->from($db->quoteName('#__timona_lichhen'))
		->where($db->quoteName('field7') . ">=" . $db->quote($tungay))
		->where($db->quoteName('field7') . "<=" . $db->quote($denngay))
		->order('id DESC')
		->setLimit($boloc->soluong);
		if($boloc->checknv ==1)
		{
		$query->where($db->quoteName('field5') . "Like" . $db->quote($boloc->nhanvien));	
		}
        $db->setQuery($query);
        $row = $db->loadObjectList();
        $row = json_encode((array)$row);
        print_r($row);
    }
}
