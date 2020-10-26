<?php


namespace Joomla\Component\Timona\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Helper\TazaHelper;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;

class FBloginController extends BaseController

{
	
	  public function Login()

			{
		$data = json_decode(file_get_contents("php://input"));
		$dulieu = $data->dulieu;
		$user = Factory::getUser();
		  
		$checkuser = FBloginController::CheckUser($email);
        $db = Factory::getDbo();
		//$profile = new \stdClass;
		//$profile->Cauhoi = $dulieu->Cauhoi;
		//$result = $db->insertObject('#__timona_thacmac', $profile);	
		print_r ($checkuser);

			}

		public function CheckUser($email)
		{
			$db = Factory::getDbo();
			$query = $db->getQuery(true)
				->select($db->quoteName('id'))
				->from($db->quoteName('#__users'))
				->where($db->quoteName('email') . ' = ' . $db->quote($email));
			$db->setQuery($query);
			return $check = $db->loadResult();
			
		}
	
}

