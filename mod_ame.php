<?php
 /**
 * @package ame
 * @author Alexandr Mamchur (mamchur.a@bk.ru)
 * @version 1.0.0
 * @copyright (C) 2021 by JoomLine (http://www.joomline.net)
 * @license GNU General Public License version 2 or later
 *
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_ame', $params->get('layout', 'default'));
