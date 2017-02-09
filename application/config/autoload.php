<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

/*
| -------------------------------------------------------------------
|  Auto-load Packages
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database', 'session', 'email');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
*/
$autoload['drivers'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array('Banks_Model',
                           'Business_Partners_Class_Model',
                           'Business_Partners_Type_Model',
                           'CB_Br_Model',
                           'Co_Banks_Model',
                           'Co_Business_Partners_Model',
                           'Co_Departments_Model',
                           'Co_Discounts_Model',
                           'Co_Documents_Model',
                           'Co_Journals_Model',
                           'Co_Modes_Of_Payment_Model',
                           'Co_Others_Model',
                           'Co_Products_Model',
                           'Co_Profit_Cost_Centers_Model',
                           'Co_Services_Model',
                           'Co_Tax_Types_Model',
                           'Co_Taxes_Model',
                           'Co_Types_Of_Payment_Model',
                           'Company_Branches_Model',
                           'Discounts_Model',
                           'Documents_Model',
                           'Modes_Of_Payment_Model',
                           'P_CB_Model',
                           'Profiles_Model',
                           'Tax_Types_Model',
                           'Taxes_Model',
                           'Types_Of_Payment_Model',
                           'Users_Model',
                           'Setup_Model',
                           'Subscribe_Model',
                           'Sales_Model',
                           'Receipts_Model',
                           'Collections_Model',
                           'Purchases_Model',
                           'Disbursements_Model',
                           'General_Model',
                           'Specials_Model',
                           'Transactions_Model',
						         'Journals_Model',
                           'Co_COA_Model',
                           'COA_Model',
                           'Co_Users_Model'
                           );
