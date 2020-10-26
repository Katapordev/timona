<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_Timona
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Administrator\Extension;

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Categories\CategoryServiceInterface;

use Joomla\CMS\Categories\CategoryServiceTrait;

use Joomla\CMS\Component\Router\RouterServiceInterface;

use Joomla\CMS\Component\Router\RouterServiceTrait;

use Joomla\CMS\Extension\BootableExtensionInterface;

use Joomla\CMS\Extension\MVCComponent;

use Joomla\CMS\HTML\HTMLRegistryAwareTrait;

use Joomla\Component\Timona\Administrator\Service\Html\Timona;

use Psr\Container\ContainerInterface;

/**
 * Component class for com_Timona
 *
 * @since  4.0.0
 */

class TimonaComponent extends MVCComponent implements BootableExtensionInterface, CategoryServiceInterface, RouterServiceInterface

{

    use CategoryServiceTrait;

    use HTMLRegistryAwareTrait;

    use RouterServiceTrait;

    /**
     * Booting the extension. This is the function to set up the environment of the extension like
     * registering new class loaders, etc.
     *
     * If required, some initial set up can be done from services of the container, eg.
     * registering HTML services.
     *
     * @param   ContainerInterface  $container  The container
     *
     * @return  void
     *
     * @since   4.0.0
     */

    public function boot(ContainerInterface $container)

    {

        $this->getRegistry()
            ->register('timona', new Timona);

    }

    /**
     * Returns the table for the count items functions for the given section.
     *
     * @param   string  $section  The section
     *
     * @return  string|null
     *
     * @since   4.0.0
     */

    protected function getTableNameForSection(string $section = null)

    {

        return 'timona';

    }

}

