<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr8
 *
 *  License: MIT
 *
 *  Panel navigation page
 */

// Can the user view the panel?
if($user->isLoggedIn()){
	if(!$user->canViewACP()){
		// No
		Redirect::to(URL::build('/'));
		die();
	}
	if(!$user->isAdmLoggedIn()){
		// Needs to authenticate
		Redirect::to(URL::build('/panel/auth'));
		die();
	} else {
		if(!$user->hasPermission('admincp.core.navigation')){
			require_once(ROOT_PATH . '/403.php');
			die();
		}
	}
} else {
	// Not logged in
	Redirect::to(URL::build('/login'));
	die();
}

define('PAGE', 'panel');
define('PARENT_PAGE', 'core_configuration');
define('PANEL_PAGE', 'navigation');
$page_title = $language->get('admin', 'navigation');
require_once(ROOT_PATH . '/core/templates/backend_init.php');

// Deal with input
if(Input::exists()){
	$errors = array();

	if(Token::check(Input::get('token'))){
		// Valid token
		// Update cache
		$cache->setCache('navbar_order');
		if(isset($_POST['inputOrder']) && count($_POST['inputOrder'])){
			foreach($_POST['inputOrder'] as $key => $item){
				if(is_numeric($item) && $item > 0){
					$cache->store($key . '_order', $item);
				}
			}
		}

		// Icons
		$cache->setCache('navbar_icons');
		if(isset($_POST['inputIcon']) && count($_POST['inputIcon'])){
			foreach($_POST['inputIcon'] as $key => $item){
				if(is_numeric($key)){
					// Custom page?
					$custom_page = $queries->getWhere('custom_pages', array('id', '=', $key));
					if(count($custom_page)){
						$queries->update('custom_pages', $key, array(
							'icon' => $item
						));
					}
				}
				$cache->store($key . '_icon', $item);
			}
		}

		$language->set('general', 'more', Output::getClean(Input::get('dropdown_name')));

		// Reload to update info
		Session::flash('navigation_success', $language->get('admin', 'navigation_settings_updated_successfully'));
		Redirect::to(URL::build('/panel/core/navigation'));
		die();
	} else {
		// Invalid token
		$errors[] = $language->get('general', 'invalid_token');
	}
}

// Load modules + template
Module::loadPage($user, $pages, $cache, $smarty, array($navigation, $cc_nav, $mod_nav), $widgets);

if(Session::exists('navigation_success'))
	$smarty->assign(array(
		'SUCCESS' => Session::flash('navigation_success'),
		'SUCCESS_TITLE' => $language->get('general', 'success')
	));

if(isset($errors) && count($errors))
	$smarty->assign(array(
		'ERRORS' => $errors,
		'ERRORS_TITLE' => $language->get('general', 'error')
	));

$smarty->assign(array(
	'PARENT_PAGE' => PARENT_PAGE,
	'DASHBOARD' => $language->get('admin', 'dashboard'),
	'CONFIGURATION' => $language->get('admin', 'configuration'),
	'NAVIGATION' => $language->get('admin', 'navigation'),
	'PAGE' => PANEL_PAGE,
	'TOKEN' => Token::get(),
	'SUBMIT' => $language->get('general', 'submit'),
	'INFO' => $language->get('general', 'info'),
	'NAVBAR_ORDER_INSTRUCTIONS' => $language->get('admin', 'navbar_order_instructions'),
	'NAVBAR_ICON_INSTRUCTIONS' => $language->get('admin', 'navbar_icon_instructions'),
	'NAV_ITEMS' => $navigation->returnNav('top'),
	'NAVBAR_ORDER' => $language->get('admin', 'navbar_order'),
	'NAVBAR_ICON' => $language->get('admin', 'navbar_icon'),
	'DROPDOWN_ITEMS' => $language->get('admin', 'dropdown_items'),
	'DROPDOWN_NAME' => $language->get('admin', 'dropdown_name'),
	'DROPDOWN_NAME_VALUE' => $language->get('general', 'more')
));

$page_load = microtime(true) - $start;
define('PAGE_LOAD_TIME', str_replace('{x}', round($page_load, 3), $language->get('general', 'page_loaded_in')));

$template->onPageLoad();

require(ROOT_PATH . '/core/templates/panel_navbar.php');

// Display template
$template->displayTemplate('core/navigation.tpl', $smarty);