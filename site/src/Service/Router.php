<?php
/**
 * @package     Timona.Site
 * @subpackage  com_Timona
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Site\Service;

defined('_JEXEC') or die;

use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Categories\CategoryFactoryInterface;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Component\Router\RouterView;
use Joomla\CMS\Component\Router\RouterViewConfiguration;
use Joomla\CMS\Component\Router\Rules\MenuRules;
use Joomla\CMS\Component\Router\Rules\StandardRules;
use Joomla\CMS\Menu\AbstractMenu;
use Joomla\Database\DatabaseInterface;

/**
 *
 * @since  3.3
 */
class Router extends RouterView
{
	protected $noIDs = false;

	/**
	 * The category factory
	 *
	 * @var CategoryFactoryInterface
	 *
	 * @since  4.0.0
	 */
	private $categoryFactory;

	/**
	 * The db
	 *
	 * @var DatabaseInterface
	 *
	 * @since  4.0.0
	 */
	private $db;

	/**
	 * Timona Component router constructor
	 *
	 * @param   SiteApplication           $app              The application object
	 * @param   AbstractMenu              $menu             The menu object to work with
	 * @param   CategoryFactoryInterface  $categoryFactory  The category object
	 * @param   DatabaseInterface         $db               The database object
	 */
	public function __construct(SiteApplication $app, AbstractMenu $menu,
			CategoryFactoryInterface $categoryFactory, DatabaseInterface $db)
	{
		$this->categoryFactory = $categoryFactory;
		$this->db              = $db;

		$params = ComponentHelper::getParams('com_timona');
		$this->noIDs = (bool) $params->get('sef_ids');

		$Giaidap = new RouterViewConfiguration('giaidap');
		$Giaidap->setKey('id');
		$this->registerView($Giaidap);
		$this->registerView(new RouterViewConfiguration('user'));
		$this->registerView(new RouterViewConfiguration('nhanvien'));
		$this->registerView(new RouterViewConfiguration('lichhen'));
		$this->registerView(new RouterViewConfiguration('hocvien'));
		$this->registerView(new RouterViewConfiguration('khaosat'));
		parent::__construct($app, $menu);

		$this->attachRule(new MenuRules($this));
		$this->attachRule(new StandardRules($this));
		//$this->attachRule(new NomenuRules($this));
	}
}