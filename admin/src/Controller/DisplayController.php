<?php



/**

 * @package     Joomla.Administrator

 * @subpackage  com_timona

 *

 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.

 * @license     GNU General Public License version 2 or later; see LICENSE.txt

 */



namespace Joomla\Component\Timona\Administrator\Controller;



defined('_JEXEC') or die;



use Joomla\CMS\Language\Text;



use Joomla\CMS\MVC\Controller\BaseController;



use Joomla\CMS\Router\Route;



use Joomla\Component\timona\Administrator\Helper\TimonaHelper;



/**

 *timona master display controller.

 *

 * @since  1.6

 */



class DisplayController extends BaseController



{



    /**

     * The default view.

     *

     * @var    string

     * @since  1.6

     */



    protected $default_view = 'timona';



    /**

     * Method to display a view.

     *

     * @param   boolean  $cachable   If true, the view output will be cached

     * @param   array    $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link \JFilterInput::clean()}.

     *

     * @return  BaseController|bool  This object to support chaining.

     *

     * @since   1.5

     */



    public function display($cachable = false, $urlparams = array())



    {



        $view = $this

            ->input

            ->get('view', 'timona');



        $layout = $this

            ->input

            ->get('layout', 'default');



        $id = $this

            ->input

            ->getInt('id');



        return parent::display();



    }



}



