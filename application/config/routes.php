<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Landing_Page/system';
$route['404_override'] = 'page_not_found';
$route['translate_uri_dashes'] = FALSE;

$route['login']['get'] 													= 'Landing_Page/login';
$route['postlogin']['post'] 											= 'Login/postLogin';
$route['logout']['get']													= 'Logout/logout';

$route['company_profile/view']											= 'Company_Profile';

$route['home']		 													= 'Home/get_home';
$route['home/memo_slider']		 										= 'Home/get_memo_slider';
$route['home/geocompanies_slider']		 								= 'Home/get_geocompanies_slider';
$route['home/linechart_slider']		 									= 'Home/get_linechart_slider';
$route['home/barchart_slider']		 									= 'Home/get_barchart_slider';
$route['home/piechart_slider']		 									= 'Home/get_piechart_slider';

$route['financial_reports']												= 'Financial_Reports/get_financial_reports';
$route['financial_reports/trial_balance']								= 'Financial_Reports/get_trial_balance';
$route['financial_reports/balance_sheet']								= 'Financial_Reports/get_balance_sheet';
$route['financial_reports/cash_flow_statement']							= 'Financial_Reports/get_cash_flow_statement';
$route['financial_reports/equity_statement']							= 'Financial_Reports/get_equity_statement';
$route['financial_reports/income_statement']							= 'Financial_Reports/get_income_statement';

$route['company_reports']												= 'Company_Reports/get_company_reports';
$route['company_reports/statement_of_accounts']							= 'Company_Reports/get_statement_of_accounts';
$route['company_reports/company_documents']								= 'Company_Reports/get_company_documents';
$route['company_reports/bank_statements']								= 'Company_Reports/get_bank_statements';
$route['company_reports/fixed_assets']									= 'Company_Reports/get_fixed_assets';

$route['book_of_accounts']												= 'Book_Of_Accounts/get_book_of_accounts';
$route['book_of_accounts/general_ledger']								= 'Book_Of_Accounts_DIR/General_Ledger/get_general_ledger';
$route['book_of_accounts/subsidiary_ledger']							= 'Book_Of_Accounts_DIR/Subsidiary_Ledger/get_subsidiary_ledger';
$route['book_of_accounts/sales']										= 'Book_Of_Accounts_DIR/Sales/get_sales';
$route['book_of_accounts/receipts']										= 'Book_Of_Accounts_DIR/Receipts/get_receipts';
$route['book_of_accounts/collections']									= 'Book_Of_Accounts_DIR/Collections/get_collections';
$route['book_of_accounts/purchases']									= 'Book_Of_Accounts_DIR/Purchases/get_purchases';
$route['book_of_accounts/disbursements']								= 'Book_Of_Accounts_DIR/Disbursements/get_disbursements';
$route['book_of_accounts/adjustments']									= 'Book_Of_Accounts_DIR/Adjustments/get_adjustments';
$route['book_of_accounts/others']										= 'Book_Of_Accounts_DIR/Others/get_others';

// DOCPRO Settings
$route['docpro_settings']												= 'Docpro_Settings/get_docpro_settings';

$route['docpro_settings/users']											= 'Docpro_Settings/get_users';
$route['docpro_settings/users/get']										= 'Docpro_Settings_DIR/Users/get';
$route['docpro_settings/users/check_username']							= 'Docpro_Settings_DIR/Users/check_username';
$route['docpro_settings/users/add']										= 'Docpro_Settings_DIR/Users/add';
$route['docpro_settings/users/edit']									= 'Docpro_Settings_DIR/Users/edit';
$route['docpro_settings/users/get_all_users']							= 'Docpro_Settings_DIR/Users/get_all_users';

$route['docpro_settings/company']										= 'Docpro_Settings/get_company';
$route['docpro_settings/company/get']									= 'Docpro_Settings_DIR/Company/get';
$route['docpro_settings/company/add']									= 'Docpro_Settings_DIR/Company/add';
$route['docpro_settings/company/edit']									= 'Docpro_Settings_DIR/Company/edit';
$route['docpro_settings/company/update']								= 'Docpro_Settings_DIR/Company/update';
$route['docpro_settings/company/get_branch/(:any)']						= 'Docpro_Settings_DIR/Company/get_branch/$1';

$route['docpro_settings/transactions']									= 'Docpro_Settings/get_transactions';

$route['docpro_settings/documents']										= 'Docpro_Settings/get_documents';
$route['docpro_settings/documents/get']									= 'Docpro_Settings_DIR/Documents/get';
$route['docpro_settings/documents/add']									= 'Docpro_Settings_DIR/Documents/add';
$route['docpro_settings/documents/edit']								= 'Docpro_Settings_DIR/Documents/edit';
$route['docpro_settings/documents/update']								= 'Docpro_Settings_DIR/Documents/update';
$route['docpro_settings/documents/get_journals']						= 'Docpro_Settings_DIR/Documents/get_journals';

$route['docpro_settings/modes_of_payment']								= 'Docpro_Settings/get_modes_of_payment';
$route['docpro_settings/modes_of_payment/get']							= 'Docpro_Settings_DIR/Modes_Of_Payment/get';
$route['docpro_settings/modes_of_payment/add']							= 'Docpro_Settings_DIR/Modes_Of_Payment/add';
$route['docpro_settings/modes_of_payment/edit']							= 'Docpro_Settings_DIR/Modes_Of_Payment/edit';
$route['docpro_settings/modes_of_payment/update']						= 'Docpro_Settings_DIR/Modes_Of_Payment/update';
$route['docpro_settings/modes_of_payment/get_top']						= 'Docpro_Settings_DIR/Modes_Of_Payment/get_top';

$route['docpro_settings/taxes']											= 'Docpro_Settings/get_taxes';
$route['docpro_settings/taxes/get/(:any)']								= 'Docpro_Settings_DIR/Taxes/get/$1';
$route['docpro_settings/taxes/get_tax_types']							= 'Docpro_Settings_DIR/Taxes/get_tax_types';
$route['docpro_settings/taxes/add']										= 'Docpro_Settings_DIR/Taxes/add';
$route['docpro_settings/taxes/edit']									= 'Docpro_Settings_DIR/Taxes/edit';
$route['docpro_settings/taxes/update']									= 'Docpro_Settings_DIR/Taxes/update';

$route['docpro_settings/chart_of_accounts']								= 'Docpro_Settings/get_chart_of_accounts';

$route['docpro_settings/banks']											= 'Docpro_Settings/get_banks';
$route['docpro_settings/banks/get']										= 'Docpro_Settings_DIR/Banks/get';
$route['docpro_settings/banks/add']										= 'Docpro_Settings_DIR/Banks/add';
$route['docpro_settings/banks/edit']									= 'Docpro_Settings_DIR/Banks/edit';
$route['docpro_settings/banks/update']									= 'Docpro_Settings_DIR/Banks/update';

$route['docpro_settings/journals']										= 'Docpro_Settings/get_journals';
$route['docpro_settings/journals/get']									= 'Docpro_Settings_DIR/Journals/get';
$route['docpro_settings/journals/add']									= 'Docpro_Settings_DIR/Journals/add';
$route['docpro_settings/journals/edit']									= 'Docpro_Settings_DIR/Journals/edit';
$route['docpro_settings/journals/update']								= 'Docpro_Settings_DIR/Journals/update';

$route['docpro_settings/top']											= 'Docpro_Settings/get_types_of_payment';
$route['docpro_settings/top/get']										= 'Docpro_Settings_DIR/Types_Of_Payment/get';

$route['docpro_settings/taxtypes']										= 'Docpro_Settings/get_tax_types';
$route['docpro_settings/taxtypes/get']									= 'Docpro_Settings_DIR/Tax_Types/get';

$route['docpro_settings/chart_of_accounts']								= 'Docpro_Settings/get_chart_of_accounts';
$route['docpro_settings/chart_of_accounts/acc_elements_get']			= 'Docpro_Settings_DIR/COA/acc_elements_get';
$route['docpro_settings/chart_of_accounts/acc_classification_get']		= 'Docpro_Settings_DIR/COA/acc_classification_get';
$route['docpro_settings/chart_of_accounts/line_items_get']				= 'Docpro_Settings_DIR/COA/line_items_get';
$route['docpro_settings/chart_of_accounts/acc_sub_get']					= 'Docpro_Settings_DIR/COA/acc_sub_get';
$route['docpro_settings/chart_of_accounts/coa_get']						= 'Docpro_Settings_DIR/COA/coa_get';
$route['docpro_settings/chart_of_accounts/filter_lvl1']					= 'Docpro_Settings_DIR/COA/filter_lvl1';
$route['docpro_settings/chart_of_accounts/filter_lvl2/(:any)']			= 'Docpro_Settings_DIR/COA/filter_lvl2/$1';
$route['docpro_settings/chart_of_accounts/filter_lvl3/(:any)']			= 'Docpro_Settings_DIR/COA/filter_lvl3/$1';
$route['docpro_settings/chart_of_accounts/filter_lvl4/(:any)']			= 'Docpro_Settings_DIR/COA/filter_lvl4/$1';
$route['docpro_settings/chart_of_accounts/filter_lvl5/(:any)']			= 'Docpro_Settings_DIR/COA/filter_lvl5/$1';
$route['docpro_settings/chart_of_accounts/filter_lvl6/(:any)']			= 'Docpro_Settings_DIR/COA/filter_lvl6/$1';
$route['docpro_settings/chart_of_accounts/coa_get_lvl5/(:any)']			= 'Docpro_Settings_DIR/COA/coa_get_lvl5/$1';
$route['docpro_settings/chart_of_accounts/coa_add']						= 'Docpro_Settings_DIR/COA/coa_add';
$route['docpro_settings/chart_of_accounts/coa_edit']					= 'Docpro_Settings_DIR/COA/coa_edit';
$route['docpro_settings/chart_of_accounts/coa_delete']					= 'Docpro_Settings_DIR/COA/coa_delete';
$route['docpro_settings/chart_of_accounts/redirect_coa_setup/(:any)']	= 'Docpro_Settings_DIR/COA/redirect_coa_setup/$1';


// DOCPRO Setup
$route['docpro_setup']													= 'Docpro_Setup/get_docpro_setup';

$route['docpro_setup/users']											= 'Docpro_Setup/get_users';
$route['docpro_setup/users/get']										= 'Docpro_Setup_DIR/Users/get';
$route['docpro_setup/users/add']										= 'Docpro_Setup_DIR/Users/add';
$route['docpro_setup/users/edit']										= 'Docpro_Setup_DIR/Users/edit';

$route['docpro_setup/company']											= 'Docpro_Setup/get_company';
$route['docpro_setup/company/get']										= 'Docpro_Setup_DIR/Company/get';
$route['docpro_setup/company/add']										= 'Docpro_Setup_DIR/Company/add';
$route['docpro_setup/company/edit']										= 'Docpro_Setup_DIR/Company/edit';
$route['docpro_setup/company/update']									= 'Docpro_Setup_DIR/Company/update';

$route['docpro_setup/transactions']										= 'Docpro_Setup/get_transactions';

$route['docpro_setup/documents']										= 'Docpro_Setup/get_documents';
$route['docpro_setup/documents/get']									= 'Docpro_Setup_DIR/Documents/get';
$route['docpro_setup/documents/add']									= 'Docpro_Setup_DIR/Documents/add';
$route['docpro_setup/documents/edit']									= 'Docpro_Setup_DIR/Documents/edit';
$route['docpro_setup/documents/update']									= 'Docpro_Setup_DIR/Documents/update';

$route['docpro_setup/payment']											= 'Docpro_Setup/get_modes_of_payment';
$route['docpro_setup/top/get']											= 'Docpro_Setup_DIR/Types_Of_Payment/get';
$route['docpro_setup/top/add']											= 'Docpro_Setup_DIR/Types_Of_Payment/add';
$route['docpro_setup/top/edit']											= 'Docpro_Setup_DIR/Types_Of_Payment/edit';
$route['docpro_setup/top/update']										= 'Docpro_Setup_DIR/Types_Of_Payment/update';
$route['docpro_setup/modes_of_payment/get']								= 'Docpro_Setup_DIR/Modes_Of_Payment/get';
$route['docpro_setup/modes_of_payment/add']								= 'Docpro_Setup_DIR/Modes_Of_Payment/add';
$route['docpro_setup/modes_of_payment/edit']							= 'Docpro_Setup_DIR/Modes_Of_Payment/edit';
$route['docpro_setup/modes_of_payment/update']							= 'Docpro_Setup_DIR/Modes_Of_Payment/update';

$route['docpro_setup/taxes']											= 'Docpro_Setup/get_taxes';
$route['docpro_setup/taxes/get']										= 'Docpro_Setup_DIR/Taxes/get';
$route['docpro_setup/taxes/add']										= 'Docpro_Setup_DIR/Taxes/add';
$route['docpro_setup/taxes/edit']										= 'Docpro_Setup_DIR/Taxes/edit';
$route['docpro_setup/taxes/update']										= 'Docpro_Setup_DIR/Taxes/update';
$route['docpro_setup/taxes/delete']										= 'Docpro_Setup_DIR/Taxes/delete';

$route['docpro_setup/taxtypes']											= 'Docpro_Setup/get_tax_types';
$route['docpro_setup/taxtypes/get']										= 'Docpro_Setup_DIR/Tax_Types/get';
$route['docpro_setup/taxtypes/add']										= 'Docpro_Setup_DIR/Tax_Types/add';
$route['docpro_setup/taxtypes/edit']									= 'Docpro_Setup_DIR/Tax_Types/edit';
$route['docpro_setup/taxtypes/update']									= 'Docpro_Setup_DIR/Tax_Types/update';
$route['docpro_setup/taxtypes/delete']									= 'Docpro_Setup_DIR/Tax_Types/delete';

$route['docpro_setup/chart_of_accounts']								= 'Docpro_Setup/get_chart_of_accounts';
$route['docpro_setup/chart_of_accounts/acc_elements_get']				= 'Docpro_Setup_DIR/COA/acc_elements_get';
$route['docpro_setup/chart_of_accounts/acc_elements_add']				= 'Docpro_Setup_DIR/COA/acc_elements_add';
$route['docpro_setup/chart_of_accounts/acc_elements_edit']				= 'Docpro_Setup_DIR/COA/acc_elements_edit';
$route['docpro_setup/chart_of_accounts/acc_elements_update']			= 'Docpro_Setup_DIR/COA/acc_elements_update';
$route['docpro_setup/chart_of_accounts/acc_elements_delete']			= 'Docpro_Setup_DIR/COA/acc_elements_delete';
$route['docpro_setup/chart_of_accounts/acc_classification_get']			= 'Docpro_Setup_DIR/COA/acc_classification_get';
$route['docpro_setup/chart_of_accounts/acc_classification_add']			= 'Docpro_Setup_DIR/COA/acc_classification_add';
$route['docpro_setup/chart_of_accounts/acc_classification_edit']		= 'Docpro_Setup_DIR/COA/acc_classification_edit';
$route['docpro_setup/chart_of_accounts/acc_classification_update']		= 'Docpro_Setup_DIR/COA/acc_classification_update';
$route['docpro_setup/chart_of_accounts/acc_classification_delete']		= 'Docpro_Setup_DIR/COA/acc_classification_delete';
$route['docpro_setup/chart_of_accounts/line_items_get']					= 'Docpro_Setup_DIR/COA/line_items_get';
$route['docpro_setup/chart_of_accounts/line_items_add']					= 'Docpro_Setup_DIR/COA/line_items_add';
$route['docpro_setup/chart_of_accounts/line_items_edit']				= 'Docpro_Setup_DIR/COA/line_items_edit';
$route['docpro_setup/chart_of_accounts/line_items_update']				= 'Docpro_Setup_DIR/COA/line_items_update';
$route['docpro_setup/chart_of_accounts/line_items_delete']				= 'Docpro_Setup_DIR/COA/line_items_delete';
$route['docpro_setup/chart_of_accounts/acc_sub_get']					= 'Docpro_Setup_DIR/COA/acc_sub_get';
$route['docpro_setup/chart_of_accounts/acc_sub_add']					= 'Docpro_Setup_DIR/COA/acc_sub_add';
$route['docpro_setup/chart_of_accounts/acc_sub_edit']					= 'Docpro_Setup_DIR/COA/acc_sub_edit';
$route['docpro_setup/chart_of_accounts/acc_sub_update']					= 'Docpro_Setup_DIR/COA/acc_sub_update';
$route['docpro_setup/chart_of_accounts/acc_sub_delete']					= 'Docpro_Setup_DIR/COA/acc_sub_delete';
$route['docpro_setup/chart_of_accounts/bir_get']						= 'Docpro_Setup_DIR/COA/bir_get';
$route['docpro_setup/chart_of_accounts/bir_add']						= 'Docpro_Setup_DIR/COA/bir_add';
$route['docpro_setup/chart_of_accounts/bir_edit']						= 'Docpro_Setup_DIR/COA/bir_edit';
$route['docpro_setup/chart_of_accounts/bir_update']						= 'Docpro_Setup_DIR/COA/bir_update';
$route['docpro_setup/chart_of_accounts/bir_delete']						= 'Docpro_Setup_DIR/COA/bir_delete';
$route['docpro_setup/chart_of_accounts/coa_get']						= 'Docpro_Setup_DIR/COA/coa_get';
$route['docpro_setup/chart_of_accounts/coa_add']						= 'Docpro_Setup_DIR/COA/coa_add';
$route['docpro_setup/chart_of_accounts/coa_edit']						= 'Docpro_Setup_DIR/COA/coa_edit';
$route['docpro_setup/chart_of_accounts/coa_update']						= 'Docpro_Setup_DIR/COA/coa_update';
$route['docpro_setup/chart_of_accounts/coa_delete']						= 'Docpro_Setup_DIR/COA/coa_delete';
$route['docpro_setup/chart_of_accounts/reload_lvl_2/(:any)']			= 'Docpro_Setup_DIR/COA/reload_lvl_2/$1';
$route['docpro_setup/chart_of_accounts/reload_lvl_3/(:any)']			= 'Docpro_Setup_DIR/COA/reload_lvl_3/$1';
$route['docpro_setup/chart_of_accounts/reload_lvl_4/(:any)']			= 'Docpro_Setup_DIR/COA/reload_lvl_4/$1';

$route['docpro_setup/banks']											= 'Docpro_Setup/get_banks';
$route['docpro_setup/banks/get']										= 'Docpro_Setup_DIR/Banks/get';
$route['docpro_setup/banks/add']										= 'Docpro_Setup_DIR/Banks/add';
$route['docpro_setup/banks/edit']										= 'Docpro_Setup_DIR/Banks/edit';
$route['docpro_setup/banks/update']										= 'Docpro_Setup_DIR/Banks/update';

$route['docpro_setup/journals']											= 'Docpro_Setup/get_journals';
$route['docpro_setup/journals/get']										= 'Docpro_Setup_DIR/Journals/get';
$route['docpro_setup/journals/add']										= 'Docpro_Setup_DIR/Journals/add';
$route['docpro_setup/journals/edit']									= 'Docpro_Setup_DIR/Journals/edit';
$route['docpro_setup/journals/update']									= 'Docpro_Setup_DIR/Journals/update';

// COMPANY Settings
$route['company_settings']												= 'Company_Settings/get_company_settings';

$route['company_settings/branches']										= 'Company_Settings/get_branches';
$route['company_settings/branches/get']									= 'Company_Settings_DIR/Branches/get';
$route['company_settings/branches/add']									= 'Company_Settings_DIR/Branches/add';
$route['company_settings/branches/edit']								= 'Company_Settings_DIR/Branches/edit';
$route['company_settings/branches/update']								= 'Company_Settings_DIR/Branches/update';

$route['company_settings/users']										= 'Company_Settings/get_users';
$route['company_settings/users/get']									= 'Company_Settings_DIR/Users/get';
$route['company_settings/users/add']									= 'Company_Settings_DIR/Users/add';
$route['company_settings/users/edit']									= 'Company_Settings_DIR/Users/edit';
$route['company_settings/users/get_branches']							= 'Company_Settings_DIR/Users/get_branches';
$route['company_settings/users/add_branch']								= 'Company_Settings_DIR/Users/add_branch';

$route['company_settings/journals']										= 'Company_Settings/get_journals';
$route['company_settings/journals/get']									= 'Company_Settings_DIR/Journals/get';
$route['company_settings/journals/add']									= 'Company_Settings_DIR/Journals/add';
$route['company_settings/journals/edit']								= 'Company_Settings_DIR/Journals/edit';
$route['company_settings/journals/update']								= 'Company_Settings_DIR/Journals/update';

$route['company_settings/transactions']									= 'Company_Settings/get_transactions';

$route['company_settings/documents']									= 'Company_Settings/get_documents';
$route['company_settings/documents/get']								= 'Company_Settings_DIR/Documents/get';
$route['company_settings/documents/add']								= 'Company_Settings_DIR/Documents/add';
$route['company_settings/documents/edit']								= 'Company_Settings_DIR/Documents/edit';
$route['company_settings/documents/update']								= 'Company_Settings_DIR/Documents/update';
$route['company_settings/documents/get_journals']						= 'Company_Settings_DIR/Documents/get_journals';

$route['company_settings/modes_of_payment']								= 'Company_Settings/get_modes_of_payment';
$route['company_settings/modes_of_payment/get']							= 'Company_Settings_DIR/Modes_Of_Payment/get';
$route['company_settings/modes_of_payment/add']							= 'Company_Settings_DIR/Modes_Of_Payment/add';
$route['company_settings/modes_of_payment/edit']						= 'Company_Settings_DIR/Modes_Of_Payment/edit';
$route['company_settings/modes_of_payment/update']						= 'Company_Settings_DIR/Modes_Of_Payment/update';
$route['company_settings/modes_of_payment/get_types_of_payment']		= 'Company_Settings_DIR/Modes_Of_Payment/get_types_of_payment';

$route['company_settings/taxes']										= 'Company_Settings/get_taxes';
$route['company_settings/taxes/get/(:any)']								= 'Company_Settings_DIR/Taxes/get_list/$1';
$route['company_settings/taxes/get_tax_types']							= 'Company_Settings_DIR/Taxes/get_tax_types';
$route['company_settings/taxes/add']									= 'Company_Settings_DIR/Taxes/add';
$route['company_settings/taxes/edit']									= 'Company_Settings_DIR/Taxes/edit';
$route['company_settings/taxes/update']									= 'Company_Settings_DIR/Taxes/update';
$route['company_settings/taxes/delete']									= 'Company_Settings_DIR/Taxes/delete';

$route['company_settings/taxes/enable_tax']								= 'Company_Settings_DIR/Taxes/enable_tax';
$route['company_settings/taxes/disable_tax']							= 'Company_Settings_DIR/Taxes/disable_tax';

$route['company_settings/taxtypes/get']									= 'Company_Settings_DIR/Tax_Types/get';
$route['company_settings/taxtypes/add']									= 'Company_Settings_DIR/Tax_Types/add';
$route['company_settings/taxtypes/edit']								= 'Company_Settings_DIR/Tax_Types/edit';
$route['company_settings/taxtypes/update']								= 'Company_Settings_DIR/Tax_Types/update';
$route['company_settings/taxtypes/delete']								= 'Company_Settings_DIR/Tax_Types/delete';

$route['company_settings/taxtypes/enable_tax_type']						= 'Company_Settings_DIR/Tax_Types/enable_tax_type';
$route['company_settings/taxtypes/disable_tax_type']					= 'Company_Settings_DIR/Tax_Types/disable_tax_type';


$route['company_settings/business_partners']							= 'Company_Settings/get_business_partners';

$route['company_settings/business_partners/get']						= 'Company_Settings_DIR/Business_Partners/get';
$route['company_settings/business_partners/add']						= 'Company_Settings_DIR/Business_Partners/add';
$route['company_settings/business_partners/edit']						= 'Company_Settings_DIR/Business_Partners/edit';
$route['company_settings/business_partners/update']						= 'Company_Settings_DIR/Business_Partners/update';
$route['company_settings/business_partners/get_bp_class']				= 'Company_Settings_DIR/Business_Partners/get_bp_class';
$route['company_settings/business_partners/get_bp_type']				= 'Company_Settings_DIR/Business_Partners/get_bp_type';
$route['company_settings/business_partners/get_tax_1']					= 'Company_Settings_DIR/Business_Partners/get_tax_1';
$route['company_settings/business_partners/get_tax_2']					= 'Company_Settings_DIR/Business_Partners/get_tax_2';
$route['company_settings/business_partners/get_tax_3']					= 'Company_Settings_DIR/Business_Partners/get_tax_3';

$route['company_settings/departments']									= 'Company_Settings/get_departments';
$route['company_settings/departments/get']								= 'Company_Settings_DIR/Departments/get';
$route['company_settings/departments/add']								= 'Company_Settings_DIR/Departments/add';
$route['company_settings/departments/edit']								= 'Company_Settings_DIR/Departments/edit';
$route['company_settings/departments/update']							= 'Company_Settings_DIR/Departments/update';

$route['company_settings/profit_cost_centers']							= 'Company_Settings/get_profit_cost_centers';
$route['company_settings/profit_cost_centers/get']						= 'Company_Settings_DIR/Profit_Cost_Centers/get';
$route['company_settings/profit_cost_centers/add']						= 'Company_Settings_DIR/Profit_Cost_Centers/add';
$route['company_settings/profit_cost_centers/edit']						= 'Company_Settings_DIR/Profit_Cost_Centers/edit';
$route['company_settings/profit_cost_centers/update']					= 'Company_Settings_DIR/Profit_Cost_Centers/update';
$route['company_settings/profit_cost_centers/get_departments']			= 'Company_Settings_DIR/Profit_Cost_Centers/get_departments';
$route['company_settings/profit_cost_centers/add_department']			= 'Company_Settings_DIR/Profit_Cost_Centers/add_department';

$route['company_settings/products']										= 'Company_Settings/get_products';
$route['company_settings/products/get']									= 'Company_Settings_DIR/Products/get';
$route['company_settings/products/add']									= 'Company_Settings_DIR/Products/add';
$route['company_settings/products/edit']								= 'Company_Settings_DIR/Products/edit';
$route['company_settings/products/update']								= 'Company_Settings_DIR/Products/update';
$route['company_settings/products/get_departments']						= 'Company_Settings_DIR/Products/get_departments';
$route['company_settings/products/get_profit_cost_center']				= 'Company_Settings_DIR/Products/get_profit_cost_center';
$route['company_settings/products/add_department']						= 'Company_Settings_DIR/Products/add_department';
$route['company_settings/products/add_pcc']								= 'Company_Settings_DIR/Products/add_pcc';

$route['company_settings/services']										= 'Company_Settings/get_services';
$route['company_settings/services/get']									= 'Company_Settings_DIR/Services/get';
$route['company_settings/services/add']									= 'Company_Settings_DIR/Services/add';
$route['company_settings/services/edit']								= 'Company_Settings_DIR/Services/edit';
$route['company_settings/services/update']								= 'Company_Settings_DIR/Services/update';
$route['company_settings/services/get_departments']						= 'Company_Settings_DIR/Services/get_departments';
$route['company_settings/services/get_profit_cost_center']				= 'Company_Settings_DIR/Services/get_profit_cost_center';
$route['company_settings/services/add_department']						= 'Company_Settings_DIR/Services/add_department';
$route['company_settings/services/add_pcc']								= 'Company_Settings_DIR/Services/add_pcc';

$route['company_settings/discounts']									= 'Company_Settings/get_discounts';
$route['company_settings/discounts/get']								= 'Company_Settings_DIR/Discounts/get';
$route['company_settings/discounts/add']								= 'Company_Settings_DIR/Discounts/add';
$route['company_settings/discounts/edit']								= 'Company_Settings_DIR/Discounts/edit';
$route['company_settings/discounts/update']								= 'Company_Settings_DIR/Discounts/update';

$route['company_settings/chart_of_accounts']							= 'Company_Settings/get_chart_of_accounts';
// $route['company_settings/chart_of_accounts/setup']						= 'Company_Settings_DIR/Chart_of_Accounts/setup';
// $route['company_settings/chart_of_accounts/coa_lvl_1']					= 'Company_Settings_DIR/Chart_of_Accounts/get_lvl_1'; 
// $route['company_settings/chart_of_accounts/coa_lvl_2/get/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/get_lvl_2/$1'; 
// $route['company_settings/chart_of_accounts/coa_lvl_3/get/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/get_lvl_3/$1'; 
// $route['company_settings/chart_of_accounts/coa_lvl_4/get/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/get_lvl_4/$1'; 

// $route['company_settings/chart_of_accounts/coa_lvl_1/add']				= 'Company_Settings_DIR/Chart_of_Accounts/add_lvl_1';
// $route['company_settings/chart_of_accounts/coa_lvl_1/edit']				= 'Company_Settings_DIR/Chart_of_Accounts/edit_lvl_1';
// $route['company_settings/chart_of_accounts/coa_lvl_1/delete']			= 'Company_Settings_DIR/Chart_of_Accounts/delete_lvl_1';

// $route['company_settings/chart_of_accounts/coa_lvl_2/add']				= 'Company_Settings_DIR/Chart_of_Accounts/add_lvl_2';
// $route['company_settings/chart_of_accounts/coa_lvl_2/edit']				= 'Company_Settings_DIR/Chart_of_Accounts/edit_lvl_2';
// $route['company_settings/chart_of_accounts/coa_lvl_2/delete']			= 'Company_Settings_DIR/Chart_of_Accounts/delete_lvl_2';

// $route['company_settings/chart_of_accounts/coa_lvl_3/add']				= 'Company_Settings_DIR/Chart_of_Accounts/add_lvl_3';
// $route['company_settings/chart_of_accounts/coa_lvl_3/edit']				= 'Company_Settings_DIR/Chart_of_Accounts/edit_lvl_3';
// $route['company_settings/chart_of_accounts/coa_lvl_3/delete']			= 'Company_Settings_DIR/Chart_of_Accounts/delete_lvl_3';

// $route['company_settings/chart_of_accounts/coa_lvl_4/add']				= 'Company_Settings_DIR/Chart_of_Accounts/add_lvl_4';
// $route['company_settings/chart_of_accounts/coa_lvl_4/edit']				= 'Company_Settings_DIR/Chart_of_Accounts/edit_lvl_4';
// $route['company_settings/chart_of_accounts/coa_lvl_4/delete']			= 'Company_Settings_DIR/Chart_of_Accounts/delete_lvl_4';

// $route['company_settings/chart_of_accounts/co_coa']						= 'Company_Settings_DIR/Chart_of_Accounts/co_coa';
$route['company_settings/chart_of_accounts/acc_elements_get']				= 'Company_Settings_DIR/Chart_of_Accounts/acc_elements_get';
$route['company_settings/chart_of_accounts/acc_elements_add']				= 'Company_Settings_DIR/Chart_of_Accounts/acc_elements_add';
$route['company_settings/chart_of_accounts/acc_elements_edit']				= 'Company_Settings_DIR/Chart_of_Accounts/acc_elements_edit';
$route['company_settings/chart_of_accounts/acc_elements_delete']			= 'Company_Settings_DIR/Chart_of_Accounts/acc_elements_delete';
$route['company_settings/chart_of_accounts/acc_classification_get']			= 'Company_Settings_DIR/Chart_of_Accounts/acc_classification_get';
$route['company_settings/chart_of_accounts/acc_classification_add']			= 'Company_Settings_DIR/Chart_of_Accounts/acc_classification_add';
$route['company_settings/chart_of_accounts/acc_classification_edit']		= 'Company_Settings_DIR/Chart_of_Accounts/acc_classification_edit';
$route['company_settings/chart_of_accounts/acc_classification_update']		= 'Company_Settings_DIR/Chart_of_Accounts/acc_classification_update';
$route['company_settings/chart_of_accounts/acc_classification_delete']		= 'Company_Settings_DIR/Chart_of_Accounts/acc_classification_delete';
$route['company_settings/chart_of_accounts/line_items_get']					= 'Company_Settings_DIR/Chart_of_Accounts/line_items_get';
$route['company_settings/chart_of_accounts/line_items_add']					= 'Company_Settings_DIR/Chart_of_Accounts/line_items_add';
$route['company_settings/chart_of_accounts/line_items_edit']				= 'Company_Settings_DIR/Chart_of_Accounts/line_items_edit';
$route['company_settings/chart_of_accounts/line_items_update']				= 'Company_Settings_DIR/Chart_of_Accounts/line_items_update';
$route['company_settings/chart_of_accounts/line_items_delete']				= 'Company_Settings_DIR/Chart_of_Accounts/line_items_delete';
$route['company_settings/chart_of_accounts/acc_sub_get']					= 'Company_Settings_DIR/Chart_of_Accounts/acc_sub_get';
$route['company_settings/chart_of_accounts/acc_sub_add']					= 'Company_Settings_DIR/Chart_of_Accounts/acc_sub_add';
$route['company_settings/chart_of_accounts/acc_sub_edit']					= 'Company_Settings_DIR/Chart_of_Accounts/acc_sub_edit';
$route['company_settings/chart_of_accounts/acc_sub_update']					= 'Company_Settings_DIR/Chart_of_Accounts/acc_sub_update';
$route['company_settings/chart_of_accounts/acc_sub_delete']					= 'Company_Settings_DIR/Chart_of_Accounts/acc_sub_delete';
$route['company_settings/chart_of_accounts/lvl_5_add']						= 'Company_Settings_DIR/Chart_of_Accounts/lvl_5_add';
$route['company_settings/chart_of_accounts/lvl_5_edit']						= 'Company_Settings_DIR/Chart_of_Accounts/lvl_5_edit';
$route['company_settings/chart_of_accounts/lvl_5_delete']					= 'Company_Settings_DIR/Chart_of_Accounts/lvl_5_delete';
$route['company_settings/chart_of_accounts/coa_get_elements']				= 'Company_Settings_DIR/Chart_of_Accounts/coa_get_elements';
$route['company_settings/chart_of_accounts/coa_get_classification/(:any)']	= 'Company_Settings_DIR/Chart_of_Accounts/coa_get_classification/$1';
$route['company_settings/chart_of_accounts/coa_get_line_item/(:any)']		= 'Company_Settings_DIR/Chart_of_Accounts/coa_get_line_item/$1';
$route['company_settings/chart_of_accounts/coa_get_subclassification/(:any)']	= 'Company_Settings_DIR/Chart_of_Accounts/coa_get_subclassification/$1';
$route['company_settings/chart_of_accounts/coa_get_lvl5/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/coa_get_lvl5/$1';
$route['company_settings/chart_of_accounts/coa_get_lvl6/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/coa_get_lvl6/$1';
$route['company_settings/chart_of_accounts/coa_get']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_get';
$route['company_settings/chart_of_accounts/coa_add']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_add';
$route['company_settings/chart_of_accounts/coa_edit']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_edit';
$route['company_settings/chart_of_accounts/coa_delete']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_delete';
$route['company_settings/chart_of_accounts/coa_category_summary'] 			= 'Company_Settings_DIR/COA_Summary/get_coa_category_summary';
$route['company_settings/chart_of_accounts/coa_summary'] 					= 'Company_Settings_DIR/COA_Summary/get_coa_summary';
$route['company_settings/chart_of_accounts/coa_category_summary_list'] 		= 'Company_Settings_DIR/COA_Summary/get_coa_category_summary_list';
$route['company_settings/chart_of_accounts/coa_summary_list'] 				= 'Company_Settings_DIR/COA_Summary/get_coa_summary_list';

$route['company_settings/chart_of_accounts/enable_lvl_1']					= 'Company_Settings_DIR/Chart_of_Accounts/enable_lvl_1';
$route['company_settings/chart_of_accounts/disable_lvl_1']					= 'Company_Settings_DIR/Chart_of_Accounts/disable_lvl_1';
$route['company_settings/chart_of_accounts/enable_lvl_2']					= 'Company_Settings_DIR/Chart_of_Accounts/enable_lvl_2';
$route['company_settings/chart_of_accounts/disable_lvl_2']					= 'Company_Settings_DIR/Chart_of_Accounts/disable_lvl_2';
$route['company_settings/chart_of_accounts/enable_lvl_3']					= 'Company_Settings_DIR/Chart_of_Accounts/enable_lvl_3';
$route['company_settings/chart_of_accounts/disable_lvl_3']					= 'Company_Settings_DIR/Chart_of_Accounts/disable_lvl_3';
$route['company_settings/chart_of_accounts/enable_lvl_4']					= 'Company_Settings_DIR/Chart_of_Accounts/enable_lvl_4';
$route['company_settings/chart_of_accounts/disable_lvl_4']					= 'Company_Settings_DIR/Chart_of_Accounts/disable_lvl_4';
$route['company_settings/chart_of_accounts/enable_lvl_5']					= 'Company_Settings_DIR/Chart_of_Accounts/enable_lvl_5';
$route['company_settings/chart_of_accounts/disable_lvl_5']					= 'Company_Settings_DIR/Chart_of_Accounts/disable_lvl_5';
// $route['company_settings/chart_of_accounts/bir_get']						= 'Company_Settings_DIR/Chart_of_Accounts/bir_get';
// $route['company_settings/chart_of_accounts/bir_add']						= 'Company_Settings_DIR/Chart_of_Accounts/bir_add';
// $route['company_settings/chart_of_accounts/bir_edit']						= 'Company_Settings_DIR/Chart_of_Accounts/bir_edit';
// $route['company_settings/chart_of_accounts/bir_update']						= 'Company_Settings_DIR/Chart_of_Accounts/bir_update';
// $route['company_settings/chart_of_accounts/bir_delete']						= 'Company_Settings_DIR/Chart_of_Accounts/bir_delete';
// $route['company_settings/chart_of_accounts/coa_get']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_get';
// $route['company_settings/chart_of_accounts/coa_add']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_add';
// $route['company_settings/chart_of_accounts/coa_edit']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_edit';
// $route['company_settings/chart_of_accounts/coa_update']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_update';
// $route['company_settings/chart_of_accounts/coa_delete']						= 'Company_Settings_DIR/Chart_of_Accounts/coa_delete';
$route['company_settings/chart_of_accounts/reload_lvl_2/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/reload_lvl_2/$1';
$route['company_settings/chart_of_accounts/reload_lvl_3/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/reload_lvl_3/$1';
$route['company_settings/chart_of_accounts/reload_lvl_4/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/reload_lvl_4/$1';
$route['company_settings/chart_of_accounts/reload_lvl_5/(:any)']			= 'Company_Settings_DIR/Chart_of_Accounts/reload_lvl_5/$1';




$route['company_settings/banks']										= 'Company_Settings/get_banks';
$route['company_settings/banks/get']									= 'Company_Settings_DIR/Banks/get';
$route['company_settings/banks/add']									= 'Company_Settings_DIR/Banks/add';
$route['company_settings/banks/edit']									= 'Company_Settings_DIR/Banks/edit';
$route['company_settings/banks/update']									= 'Company_Settings_DIR/Banks/update';

$route['company_settings/others']										= 'Company_Settings/get_others';
$route['company_settings/others/get']									= 'Company_Settings_DIR/Others/get';
$route['company_settings/others/add']									= 'Company_Settings_DIR/Others/add';
$route['company_settings/others/edit']									= 'Company_Settings_DIR/Others/edit';
$route['company_settings/others/update']								= 'Company_Settings_DIR/Others/update';

$route['company_settings/top']											= 'Company_Settings/get_types_of_payment';
$route['company_settings/top/get']										= 'Company_Settings_DIR/Types_Of_Payment/get';

$route['company_settings/taxtypes']										= 'Company_Settings/get_tax_types';
$route['company_settings/taxtypes/get']									= 'Company_Settings_DIR/Tax_Types/get';

$route['tables']														= 'Tables/get_tables';
$route['tables/value_added_tax']										= 'Tables/get_value_added_tax';
$route['tables/withholding_tax']										= 'Tables/get_withholding_tax';
$route['tables/accumulator']											= 'Tables/get_accumulator';
$route['tables/financial_statements']									= 'Tables/get_financial_statements';
$route['tables/trial_balance']											= 'Tables/get_trial_balance';
$route['tables/general_ledger']											= 'Tables/get_general_ledger';
$route['tables/subsidiary_ledger']										= 'Tables/get_subsidiary_ledger';


/****************************************************************************************************************************/

$route['transactions']		 											= 'Transactions/get_transactions';
$route['transactions/journals_summary/get']								= 'Transactions/get_journals_summary';
$route['transactions/bp/get']											= 'Transactions/get_bp';
$route['transactions/bp_transaction/get']								= 'Transactions/get_bp_transaction';

$route['journals/sales'] 												= 'Journals_DIR/Sales/get_sales_journal';
$route['journals/sales/journals_summary/get']							= 'Journals_DIR/Sales/get_journals_summary';
$route['journals/sales/bp/get']											= 'Journals_DIR/Sales/get_bp';
$route['journals/sales/bp_transaction/get']								= 'Journals_DIR/Sales/get_bp_transaction';

$route['journals/receipts'] 											= 'Journals_DIR/Receipts/get_receipts_journal';
$route['journals/receipts/journals_summary/get']						= 'Journals_DIR/Receipts/get_journals_summary';
$route['journals/receipts/bp/get']										= 'Journals_DIR/Receipts/get_bp';
$route['journals/receipts/bp_transaction/get']							= 'Journals_DIR/Receipts/get_bp_transaction';

$route['journals/collections'] 											= 'Journals_DIR/Collections/get_collections_journal';
$route['journals/collections/journals_summary/get']						= 'Journals_DIR/Collections/get_journals_summary';
$route['journals/collections/bp/get']									= 'Journals_DIR/Collections/get_bp';
$route['journals/collections/bp_transaction/get']						= 'Journals_DIR/Collections/get_bp_transaction';

$route['journals/purchases'] 											= 'Journals_DIR/Purchases/get_purchases_journal';
$route['journals/purchases/journals_summary/get']						= 'Journals_DIR/Purchases/get_journals_summary';
$route['journals/purchases/bp/get']										= 'Journals_DIR/Purchases/get_bp';
$route['journals/purchases/bp_transaction/get']							= 'Journals_DIR/Purchases/get_bp_transaction';

$route['journals/disbursements'] 										= 'Journals_DIR/Disbursements/get_disbursements_journal';
$route['journals/disbursements/journals_summary/get']					= 'Journals_DIR/Disbursements/get_journals_summary';
$route['journals/disbursements/bp/get']									= 'Journals_DIR/Disbursements/get_bp';
$route['journals/disbursements/bp_transaction/get']						= 'Journals_DIR/Disbursements/get_bp_transaction';

$route['journals/general'] 												= 'Journals_DIR/General/get_general_journal';
$route['journals/general/journals_summary/get']							= 'Journals_DIR/General/get_journals_summary';
$route['journals/general/bp/get']										= 'Journals_DIR/General/get_bp';
$route['journals/general/bp_transaction/get']							= 'Journals_DIR/General/get_bp_transaction';

$route['journals/specials']												= 'Journals_DIR/Specials/get_specials_journal';
$route['journals/specials/journals_summary/get']						= 'Journals_DIR/Specials/get_journals_summary';
$route['journals/specials/bp/get']										= 'Journals_DIR/Specials/get_bp';
$route['journals/specials/bp_transaction/get']							= 'Journals_DIR/Specials/get_bp_transaction';


$route['setup']															= 'Setup';
$route['setup/account']													= 'Setup/setup_account';
$route['setup/account/logout']											= 'Setup/logout';
$route['setup/reset_coa_tax']											= 'Setup/reset_coa_tax';
$route['setup/setup1/get_profile']										= 'Setup/get_profile';
$route['setup/setup1/edit_profile']										= 'Setup/edit_profile';
$route['setup/setup1/add_tin_no']										= 'Setup/add_tin_no';
$route['setup/setup1/add_tax_type']										= 'Setup/add_tax_type';
$route['setup/setup1/add_employee']										= 'Setup/add_employee';
$route['setup/setup1/edit_employee']									= 'Setup/edit_employee';
$route['setup/setup1/delete_employee']									= 'Setup/delete_employee';
$route['setup/setup1/add_branch']										= 'Setup/add_branch';
$route['setup/setup1/edit_branch']										= 'Setup/edit_branch';
$route['setup/setup1/delete_branch']									= 'Setup/delete_branch';
$route['setup/setup1/get_tin_tax_type']									= 'Setup/get_tin_tax_type';
$route['setup/setup1/get_users']										= 'Setup/get_users';
$route['setup/setup2/get_branch_list']									= 'Setup/get_branch_list';
$route['setup/setup2/add_user']											= 'Setup/add_user';
$route['setup/setup2/check_username']									= 'Setup/check_username';
$route['setup/setup2/edit_user']										= 'Setup/edit_user';
$route['setup/setup2/delete_user']										= 'Setup/delete_user';
$route['setup/setup1/get_branches']										= 'Setup/get_branches';
$route['setup/setup2/table_get_employees']								= 'Setup/table_get_employees';
$route['setup/setup2/table_get_branches/(:any)']						= 'Setup/table_get_branches/$1';
$route['setup/setup2/get_user_available_branch']						= 'Setup/get_user_available_branch';
$route['setup/setup2/get_user_available_branch_edit']					= 'Setup/get_user_available_branch_edit';
$route['setup/setup2/add_user_branch']									= 'Setup/add_user_branch';
$route['setup/setup2/edit_user_branch']									= 'Setup/edit_user_branch';
$route['setup/setup2/delete_user_branch']								= 'Setup/delete_user_branch';
$route['setup/setup3/get_coa_lvl1']										= 'Setup/get_coa_lvl1';
$route['setup/setup3/add_coa_lvl1']										= 'Setup/add_coa_lvl1';
$route['setup/setup3/edit_coa_lvl1']									= 'Setup/edit_coa_lvl1';
$route['setup/setup3/delete_coa_lvl1']									= 'Setup/delete_coa_lvl1';
$route['setup/setup3/get_coa_lvl2/(:any)']								= 'Setup/get_coa_lvl2/$1';
$route['setup/setup3/add_coa_lvl2']										= 'Setup/add_coa_lvl2';
$route['setup/setup3/get_level_1']										= 'Setup/get_level_1';
$route['setup/setup3/edit_coa_lvl2']									= 'Setup/edit_coa_lvl2';
$route['setup/setup3/delete_coa_lvl2']									= 'Setup/delete_coa_lvl2';
$route['setup/setup3/get_coa_lvl3/(:any)']								= 'Setup/get_coa_lvl3/$1';
$route['setup/setup3/add_coa_lvl3']										= 'Setup/add_coa_lvl3';
$route['setup/setup3/edit_coa_lvl3']									= 'Setup/edit_coa_lvl3';
$route['setup/setup3/delete_coa_lvl3']									= 'Setup/delete_coa_lvl3';
$route['setup/setup3/get_level_2']										= 'Setup/get_level_2';
$route['setup/setup3/get_coa_lvl4/(:any)']								= 'Setup/get_coa_lvl4/$1';
$route['setup/setup3/get_level_3']										= 'Setup/get_level_3';
$route['setup/setup3/add_level_4']										= 'Setup/add_level_4';
$route['setup/setup3/edit_level_4']										= 'Setup/edit_level_4';
$route['setup/setup3/delete_level_4']									= 'Setup/delete_level_4';
$route['setup/setup3/get_coa_lvl5/(:any)']								= 'Setup/get_coa_lvl5/$1';
$route['setup/setup3/get_level_4']										= 'Setup/get_level_4';
$route['setup/setup3/add_level_5']										= 'Setup/add_level_5';
$route['setup/setup3/edit_level_5']										= 'Setup/edit_level_5';
$route['setup/setup3/delete_level_5']									= 'Setup/delete_level_5';
$route['setup/setup3/get_coa_lvl6']										= 'Setup/get_coa_lvl6';
// $route['setup/setup3/get_level_4']										= 'Setup/get_level_4';
$route['setup/setup3/get_level_5']										= 'Setup/get_level_5';
$route['setup/setup3/add_coa_lvl5']										= 'Setup/add_coa_lvl5';
$route['setup/setup3/edit_coa_lvl5']									= 'Setup/edit_coa_lvl5';
$route['setup/setup3/delete_coa_lvl5']									= 'Setup/delete_coa_lvl5';
$route['setup/setup3/add_coa_lvl6']										= 'Setup/add_coa_lvl6';
$route['setup/setup3/edit_coa_lvl6']									= 'Setup/edit_coa_lvl6';
$route['setup/setup3/delete_coa_lvl6']									= 'Setup/delete_coa_lvl6';
$route['setup/setup4/get_tax/(:any)']									= 'Setup/get_tax/$1';
$route['setup/setup4/add_tax']											= 'Setup/add_tax';
$route['setup/setup4/edit_tax']											= 'Setup/edit_tax';
$route['setup/setup4/delete_tax']										= 'Setup/delete_tax';
$route['setup/setup4/get_tax_types_list']								= 'Setup/get_tax_types_list';
$route['setup/setup4/get_tax_types']									= 'Setup/get_tax_types';
$route['setup/setup4/add_tax_types']									= 'Setup/add_tax_types';
$route['setup/setup4/edit_tax_types']									= 'Setup/edit_tax_types';
$route['setup/setup4/delete_tax_types']									= 'Setup/delete_tax_types';
$route['setup/setup4/verify_setup']										= 'Setup/verify_setup';
$route['setup/setup4/finish_setup']										= 'Setup/finish_setup';

$route['setup/setup3/enable_coa_lvl1']									= 'Setup/enable_coa_lvl1';
$route['setup/setup3/disable_coa_lvl1']									= 'Setup/disable_coa_lvl1';
$route['setup/setup3/enable_coa_lvl2']									= 'Setup/enable_coa_lvl2';
$route['setup/setup3/disable_coa_lvl2']									= 'Setup/disable_coa_lvl2';
$route['setup/setup3/enable_coa_lvl3']									= 'Setup/enable_coa_lvl3';
$route['setup/setup3/disable_coa_lvl3']									= 'Setup/disable_coa_lvl3';
$route['setup/setup3/enable_coa_lvl4']									= 'Setup/enable_coa_lvl4';
$route['setup/setup3/disable_coa_lvl4']									= 'Setup/disable_coa_lvl4';
$route['setup/setup3/enable_coa_lvl5']									= 'Setup/enable_coa_lvl5';
$route['setup/setup3/disable_coa_lvl5']									= 'Setup/disable_coa_lvl5';
$route['setup/setup4/enable_tax_type']									= 'Setup/enable_tax_type';
$route['setup/setup4/disable_tax_type']									= 'Setup/disable_tax_type';
$route['setup/setup4/enable_tax']										= 'Setup/enable_tax';
$route['setup/setup4/disable_tax']										= 'Setup/disable_tax';

// OLD SETUP
$route['setup/class_list']												= 'Setup/class_list';
$route['setup/tax_list']												= 'Setup/tax_list';
$route['setup/bp_type_list']											= 'Setup/bp_type_list';
$route['setup/bank_list']												= 'Setup/bank_list';

$route['transactions/save_trans']										= 'Transactions/save_trans';
$route['transactions/transaction/bp/get']								= 'Transactions/transaction_bp';
$route['transactions/transaction/bank/get']								= 'Transactions/transaction_bank';
$route['transactions/transaction/product_service/get']					= 'Transactions/transaction_product_service';
$route['transactions/transaction/vat/get']								= 'Transactions/transaction_vat';
$route['transactions/transaction/discount/get']							= 'Transactions/transaction_discount';
$route['transactions/transaction/ewt/get']								= 'Transactions/transaction_ewt';
$route['transactions/transaction/fwt/get']								= 'Transactions/transaction_fwt';
$route['transactions/transaction/doc_ref/get']							= 'Transactions/transaction_doc_ref';
$route['transactions/transaction/mop/get']								= 'Transactions/transaction_mop';


$route['journals/save_sale_trans_upload']								= 'Journals_DIR/Sales/save_sale_trans_upload';
$route['journals/save_sale_trans']										= 'Journals_DIR/Sales/save_sale_trans';
$route['journals/sales/transaction/bp/get']								= 'Journals_DIR/Sales/transaction_bp';
$route['journals/sales/transaction/bank/get']							= 'Journals_DIR/Sales/transaction_bank';
$route['journals/sales/transaction/product_service/get']				= 'Journals_DIR/Sales/transaction_product_service';
$route['journals/sales/transaction/vat/get']							= 'Journals_DIR/Sales/transaction_vat';
$route['journals/sales/transaction/discount/get']						= 'Journals_DIR/Sales/transaction_discount';
$route['journals/sales/transaction/ewt/get']							= 'Journals_DIR/Sales/transaction_ewt';
$route['journals/sales/transaction/fwt/get']							= 'Journals_DIR/Sales/transaction_fwt';
$route['journals/sales/transaction/doc_ref/get']						= 'Journals_DIR/Sales/transaction_doc_ref';
$route['journals/sales/transaction/mop/get']							= 'Journals_DIR/Sales/transaction_mop';
$route['journals/sales/transaction/last_trans_id']						= 'Journals_DIR/Sales/last_trans_id';
$route['journals/sales/transaction/last_journ_trans_id']				= 'Journals_DIR/Sales/last_journ_trans_id';
$route['journals/sales/transaction/je_account/get']						= 'Journals_DIR/Sales/je_account';
$route['journals/sales/transaction/je_pcc/get']							= 'Journals_DIR/Sales/je_pcc';
$route['journals/sales/transaction/je_dept/get']						= 'Journals_DIR/Sales/je_dept';

$route['journals/save_receipt_trans_upload']							= 'Journals_DIR/Receipts/save_receipt_trans_upload';
$route['journals/save_receipt_trans']									= 'Journals_DIR/Receipts/save_receipt_trans';
$route['journals/receipts/transaction/bp/get']							= 'Journals_DIR/Receipts/transaction_bp';
$route['journals/receipts/transaction/bank/get']						= 'Journals_DIR/Receipts/transaction_bank';
$route['journals/receipts/transaction/product_service/get']				= 'Journals_DIR/Receipts/transaction_product_service';
$route['journals/receipts/transaction/vat/get']							= 'Journals_DIR/Receipts/transaction_vat';
$route['journals/receipts/transaction/discount/get']					= 'Journals_DIR/Receipts/transaction_discount';
$route['journals/receipts/transaction/ewt/get']							= 'Journals_DIR/Receipts/transaction_ewt';
$route['journals/receipts/transaction/fwt/get']							= 'Journals_DIR/Receipts/transaction_fwt';
$route['journals/receipts/transaction/doc_ref/get']						= 'Journals_DIR/Receipts/transaction_doc_ref';
$route['journals/receipts/transaction/mop/get']							= 'Journals_DIR/Receipts/transaction_mop';
$route['journals/receipts/transaction/last_trans_id']					= 'Journals_DIR/Receipts/last_trans_id';
$route['journals/receipts/transaction/last_journ_trans_id']				= 'Journals_DIR/Receipts/last_journ_trans_id';
$route['journals/receipts/transaction/je_account/get']					= 'Journals_DIR/Receipts/je_account';
$route['journals/receipts/transaction/je_pcc/get']						= 'Journals_DIR/Receipts/je_pcc';
$route['journals/receipts/transaction/je_dept/get']						= 'Journals_DIR/Receipts/je_dept';

$route['journals/save_collection_trans_upload']							= 'Journals_DIR/Collections/save_collection_trans_upload';
$route['journals/save_collection_trans']								= 'Journals_DIR/Collections/save_collection_trans';
$route['journals/collections/transaction/bp/get']						= 'Journals_DIR/Collections/transaction_bp';
$route['journals/collections/transaction/bank/get']						= 'Journals_DIR/Collections/transaction_bank';
$route['journals/collections/transaction/product_service/get']			= 'Journals_DIR/Collections/transaction_product_service';
$route['journals/collections/transaction/vat/get']						= 'Journals_DIR/Collections/transaction_vat';
$route['journals/collections/transaction/discount/get']					= 'Journals_DIR/Collections/transaction_discount';
$route['journals/collections/transaction/ewt/get']						= 'Journals_DIR/Collections/transaction_ewt';
$route['journals/collections/transaction/fwt/get']						= 'Journals_DIR/Collections/transaction_fwt';
$route['journals/collections/transaction/doc_ref/get']					= 'Journals_DIR/Collections/transaction_doc_ref';
$route['journals/collections/transaction/mop/get']						= 'Journals_DIR/Collections/transaction_mop';
$route['journals/collections/transaction/last_trans_id']				= 'Journals_DIR/Collections/last_trans_id';
$route['journals/collections/transaction/last_journ_trans_id']			= 'Journals_DIR/Collections/last_journ_trans_id';
$route['journals/collections/transaction/je_account/get']				= 'Journals_DIR/Collections/je_account';
$route['journals/collections/transaction/je_pcc/get']					= 'Journals_DIR/Collections/je_pcc';
$route['journals/collections/transaction/je_dept/get']					= 'Journals_DIR/Collections/je_dept';

$route['journals/save_purchase_trans_upload']							= 'Journals_DIR/Purchases/save_purchase_trans_upload';
$route['journals/save_purchase_trans']									= 'Journals_DIR/Purchases/save_purchase_trans';
$route['journals/purchases/transaction/bp/get']							= 'Journals_DIR/Purchases/transaction_bp';
$route['journals/purchases/transaction/bank/get']						= 'Journals_DIR/Purchases/transaction_bank';
$route['journals/purchases/transaction/product_service/get']			= 'Journals_DIR/Purchases/transaction_product_service';
$route['journals/purchases/transaction/vat/get']						= 'Journals_DIR/Purchases/transaction_vat';
$route['journals/purchases/transaction/discount/get']					= 'Journals_DIR/Purchases/transaction_discount';
$route['journals/purchases/transaction/ewt/get']						= 'Journals_DIR/Purchases/transaction_ewt';
$route['journals/purchases/transaction/fwt/get']						= 'Journals_DIR/Purchases/transaction_fwt';
$route['journals/purchases/transaction/doc_ref/get']					= 'Journals_DIR/Purchases/transaction_doc_ref';
$route['journals/purchases/transaction/mop/get']						= 'Journals_DIR/Purchases/transaction_mop';
$route['journals/purchases/transaction/last_trans_id']					= 'Journals_DIR/Purchases/last_trans_id';
$route['journals/purchases/transaction/last_journ_trans_id']			= 'Journals_DIR/Purchases/last_journ_trans_id';
$route['journals/purchases/transaction/je_account/get']					= 'Journals_DIR/Purchases/je_account';
$route['journals/purchases/transaction/je_pcc/get']						= 'Journals_DIR/Purchases/je_pcc';
$route['journals/purchases/transaction/je_dept/get']					= 'Journals_DIR/Purchases/je_dept';

$route['journals/save_disbursement_trans_upload']						= 'Journals_DIR/Disbursements/save_disbursement_trans_upload';
$route['journals/save_disbursement_trans']								= 'Journals_DIR/Disbursements/save_disbursement_trans';
$route['journals/disbursements/transaction/bp/get']						= 'Journals_DIR/Disbursements/transaction_bp';
$route['journals/disbursements/transaction/bank/get']					= 'Journals_DIR/Disbursements/transaction_bank';
$route['journals/disbursements/transaction/product_service/get']		= 'Journals_DIR/Disbursements/transaction_product_service';
$route['journals/disbursements/transaction/vat/get']					= 'Journals_DIR/Disbursements/transaction_vat';
$route['journals/disbursements/transaction/discount/get']				= 'Journals_DIR/Disbursements/transaction_discount';
$route['journals/disbursements/transaction/ewt/get']					= 'Journals_DIR/Disbursements/transaction_ewt';
$route['journals/disbursements/transaction/fwt/get']					= 'Journals_DIR/Disbursements/transaction_fwt';
$route['journals/disbursements/transaction/doc_ref/get']				= 'Journals_DIR/Disbursements/transaction_doc_ref';
$route['journals/disbursements/transaction/mop/get']					= 'Journals_DIR/Disbursements/transaction_mop';
$route['journals/disbursements/transaction/last_trans_id']				= 'Journals_DIR/Disbursements/last_trans_id';
$route['journals/disbursements/transaction/last_journ_trans_id']		= 'Journals_DIR/Disbursements/last_journ_trans_id';
$route['journals/disbursements/transaction/je_account/get']				= 'Journals_DIR/Disbursements/je_account';
$route['journals/disbursements/transaction/je_pcc/get']					= 'Journals_DIR/Disbursements/je_pcc';
$route['journals/disbursements/transaction/je_dept/get']				= 'Journals_DIR/Disbursements/je_dept';

$route['journals/save_general_trans_upload']							= 'Journals_DIR/General/save_general_trans_upload';
$route['journals/save_general_trans']									= 'Journals_DIR/General/save_general_trans';
$route['journals/general/transaction/bp/get']							= 'Journals_DIR/General/transaction_bp';
$route['journals/general/transaction/bank/get']							= 'Journals_DIR/General/transaction_bank';
$route['journals/general/transaction/product_service/get']				= 'Journals_DIR/General/transaction_product_service';
$route['journals/general/transaction/vat/get']							= 'Journals_DIR/General/transaction_vat';
$route['journals/general/transaction/discount/get']						= 'Journals_DIR/General/transaction_discount';
$route['journals/general/transaction/ewt/get']							= 'Journals_DIR/General/transaction_ewt';
$route['journals/general/transaction/fwt/get']							= 'Journals_DIR/General/transaction_fwt';
$route['journals/general/transaction/doc_ref/get']						= 'Journals_DIR/General/transaction_doc_ref';
$route['journals/general/transaction/mop/get']							= 'Journals_DIR/General/transaction_mop';
$route['journals/general/transaction/last_trans_id']					= 'Journals_DIR/General/last_trans_id';
$route['journals/general/transaction/last_journ_trans_id']				= 'Journals_DIR/General/last_journ_trans_id';
$route['journals/general/transaction/je_account/get']					= 'Journals_DIR/General/je_account';
$route['journals/general/transaction/je_pcc/get']						= 'Journals_DIR/General/je_pcc';
$route['journals/general/transaction/je_dept/get']						= 'Journals_DIR/General/je_dept';


$route['journals/save_special_trans_upload']							= 'Journals_DIR/Specials/save_special_trans_upload';
$route['journals/save_special_trans']									= 'Journals_DIR/Specials/save_special_trans';
$route['journals/specials/transaction/bp/get']							= 'Journals_DIR/Specials/transaction_bp';
$route['journals/specials/transaction/bank/get']						= 'Journals_DIR/Specials/transaction_bank';
$route['journals/specials/transaction/product_service/get']				= 'Journals_DIR/Specials/transaction_product_service';
$route['journals/specials/transaction/vat/get']							= 'Journals_DIR/Specials/transaction_vat';
$route['journals/specials/transaction/discount/get']					= 'Journals_DIR/Specials/transaction_discount';
$route['journals/specials/transaction/ewt/get']							= 'Journals_DIR/Specials/transaction_ewt';
$route['journals/specials/transaction/fwt/get']							= 'Journals_DIR/Specials/transaction_fwt';
$route['journals/specials/transaction/doc_ref/get']						= 'Journals_DIR/Specials/transaction_doc_ref';
$route['journals/specials/transaction/mop/get']							= 'Journals_DIR/Specials/transaction_mop';
$route['journals/specials/transaction/last_trans_id']					= 'Journals_DIR/Specials/last_trans_id';
$route['journals/specials/transaction/last_journ_trans_id']				= 'Journals_DIR/Specials/last_journ_trans_id';
$route['journals/specials/transaction/je_account/get']					= 'Journals_DIR/Specials/je_account';
$route['journals/specials/transaction/je_pcc/get']						= 'Journals_DIR/Specials/je_pcc';
$route['journals/specials/transaction/je_dept/get']						= 'Journals_DIR/Specials/je_dept';

$route['journals/add_product']											= 'Journals_DIR/Modals/add_product';
$route['journals/add_service']											= 'Journals_DIR/Modals/add_service';
$route['journals/add_product_service']									= 'Journals_DIR/Modals/add_product_service';
$route['journals/add_discount']											= 'Journals_DIR/Modals/add_discount';
$route['journals/add_bank']												= 'Journals_DIR/Modals/add_bank';
$route['journals/add_bp_vat']											= 'Journals_DIR/Modals/add_bp_vat';
$route['journals/add_bp_ewt']											= 'Journals_DIR/Modals/add_bp_ewt';
$route['journals/add_bp_fwt']											= 'Journals_DIR/Modals/add_bp_fwt';
$route['journals/add_mop']												= 'Journals_DIR/Modals/add_mop';
$route['journals/add_bp']												= 'Journals_DIR/Modals/add_bp';


// Public Page
$route['subscribe'] 													= "Landing_Page/subscribe";
$route['contact'] 														= "Public_Page/Contact_controller/index";
$route['about'] 														= "Public_Page/About_controller/index";
$route['free'] 															= "Public_Page/Free_controller/index";
$route['premium'] 														= "Public_Page/Premium_controller/index";
$route['save/free'] 													= "Public_Page/Free_controller/subscribe";
$route['success']														= "Public_Page/Success_controller/index";
$route['setup_complete']												= "Setup/success_complete";