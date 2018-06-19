<?php

session_start();

/**
 *
 */
define('DB_HOST', 'localhost');
/**
 *
 */
define('DB_NAME', 'shop');
/**
 *
 */
define('DB_USER', 'root');
/**
 *
 */
define('DB_PASS', '');

require_once __DIR__ . '/../vendor/autoload.php';



use Itb\MainController;
$mainController = new MainController;

$action = filter_input(INPUT_GET, 'action');

switch($action){
    case 'shop':
        $mainController->shopAction();
        break;

    case 'contactus':
        $mainController->contactusAction();
        break;

    case 'sitemap':
        $mainController->sitemapAction();
        break;

    case 'show':
        $mainController->show_one_product_action();
        break;

    case 'buy':
        $mainController->buy_one_product_action();
        break;

    case 'delete':
        $mainController->delete_product_action();
        break;
    case 'showNewProductForm':
        $mainController->show_new_product_form_action();
        break;

    case 'createNewProduct':
        $mainController->create_product_action();
        break;

    case 'showUpdateProductForm':
        $mainController->show_update_product_form_action();
        break;

    case 'updateProduct':
        $mainController->update_product_action();
        break;

    // LOGIN OPTIONS
    case 'logout':
        $mainController->logout_action();
        break;

    case 'processLogin':
        $mainController->process_login_action();
        break;

    case 'login':
        $mainController->login_action();
        break;

    default:
        $mainController->indexAction();
}
