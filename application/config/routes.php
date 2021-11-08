<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = "home";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['deleteUser'] = "user/deleteUser";

$route['userListing1'] = 'user/userListing1';
$route['userListing1/(:num)'] = "user/userListing1/$1";
$route['addCon'] = "user/addCon";
$route['addConfig'] = "user/addConfig";
$route['editCon/(:num)'] = "user/editCon/$1";
$route['editConfig'] = "user/editConfig";
$route['delete/(:num)'] = "user/delete/$1";
// $route['newsdelete/(:num)'] = 'news/delete/$1';



$route['contact/(:num)'] = "user/contact/$1";
$route['editContactConfig'] = "user/editContactConfig";


$route['newsListing'] = 'news/newsListing';
$route['newsListing/(:num)'] = 'news/newsListing/$1';
$route['addNews'] = 'news/addNews';
$route['addNewsConfig'] = 'news/addNewsConfig';
$route['editNews'] = 'news/editNews';
$route['editNews/(:num)'] = 'news/editNews/$1';
$route['editNewsConfig'] = 'news/editNewsConfig';
$route['newsdelete/(:num)'] = 'news/delete/$1';

$route['blogListing'] = 'blog/blogListing';
$route['blogListing/(:num)'] = 'blog/blogListing/$1';
$route['addBlog'] = 'blog/addBlog';
$route['addBlogConfig'] = 'blog/addBlogConfig';
$route['editBlog'] = 'blog/editBlog';
$route['editBlog/(:num)'] = 'blog/editBlog/$1';
$route['editBlogConfig'] = 'blog/editBlogConfig';
$route['blogdelete/(:num)'] = 'blog/delete/$1';

$route['historicListing'] = 'historic/historicListing';
$route['addhistoric'] = 'historic/addhistoric';
$route['addhistoricConfig'] = 'historic/addhistoricConfig';
$route['edithistoric'] = 'historic/edithistoric';
$route['edithistoric/(:num)'] = 'historic/edithistoric/$1';
$route['edithistoricConfig'] = 'historic/edithistoricConfig';
$route['historicdelete/(:num)'] = 'historic/delete/$1';


$route['reportListing'] = 'report/reportListing';
$route['reportListing/(:num)'] = 'report/reportListing/$1';
$route['addReport'] = 'report/addReport';
$route['addReportConfig'] = 'report/addReportConfig';
$route['editReport'] = 'report/editReport';
$route['editReport/(:num)'] = 'report/editReport/$1';
$route['editReportConfig'] = 'report/editReportConfig';
$route['reportdelete/(:num)'] = 'report/delete/$1';


$route['teamListing'] = 'team/teamListing';
$route['teamListing/(:num)'] = 'team/teamListing/$1';
$route['addTeam'] = 'team/addTeam';
$route['addTeamConfig'] = 'team/addTeamConfig';
$route['editTeam'] = 'team/editTeam';
$route['editTeam/(:num)'] = 'team/editTeam/$1';
$route['editTeamConfig'] = 'team/editTeamConfig';
$route['teamdelete/(:num)'] = 'team/delete/$1';


$route['fundersListing'] = 'funders/fundersListing';
$route['fundersListing/(:num)'] = 'funders/fundersListing/$1';
$route['addFunders'] = 'funders/addFunders';
$route['addFundersConfig'] = 'funders/addFundersConfig';
$route['editFunders'] = 'funders/editFunders';
$route['editFunders/(:num)'] = 'funders/editFunders/$1';
$route['editFundersConfig'] = 'funders/editFundersConfig';
$route['fundersdelete/(:num)'] = 'funders/delete/$1';

$route['partnersListing'] = 'partners/partnersListing';
$route['partnersListing/(:num)'] = 'partners/partnersListing/$1';
$route['addPartners'] = 'partners/addPartners';
$route['addPartnersConfig'] = 'partners/addPartnersConfig';
$route['editPartners'] = 'partners/editPartners';
$route['editPartners/(:num)'] = 'partners/editPartners/$1';
$route['editPartnersConfig'] = 'partners/editPartnersConfig';
$route['partnersdelete/(:num)'] = 'partners/delete/$1';


$route['categoryListing'] = 'category/categoryListing';
$route['categoryListing/(:num)'] = 'category/categoryListing/$1';
$route['addCategory'] = 'category/addCategory';
$route['addCategoryConfig'] = 'category/addCategoryConfig';
$route['editCategory'] = 'category/editCategory';
$route['editCategory/(:num)'] = 'category/editCategory/$1';
$route['editCategoryConfig'] = 'category/editCategoryConfig';
$route['categorydelete/(:num)'] = 'category/delete/$1';

$route['serviceListing'] = 'service/serviceListing';
$route['serviceListing/(:num)'] = 'service/serviceListing/$1';
$route['addService'] = 'service/addService';
$route['addServiceConfig'] = 'service/addServiceConfig';
$route['editService'] = 'service/editService';
$route['editService/(:num)'] = 'service/editService/$1';
$route['editServiceConfig'] = 'service/editServiceConfig';
$route['servicedelete/(:num)'] = 'service/delete/$1';

$route['languageListing'] = 'language/languageListing';
$route['languageListing/(:num)'] = 'language/languageListing/$1';
$route['addLanguage'] = 'language/addLanguage';
$route['addLanguageConfig'] = 'language/addLanguageConfig';
$route['editLanguage'] = 'language/editLanguage';
$route['editLanguage/(:num)'] = 'language/editLanguage/$1';
$route['editLanguageConfig'] = 'language/editLanguageConfig';
$route['languagedelete/(:num)'] = 'language/delete/$1';


$route['cmspageListing'] = 'cmspage/cmspageListing';
$route['editCmspage'] = 'cmspage/editCmspage';
$route['editCmspage/(:num)'] = 'cmspage/editCmspage/$1';
$route['editCmspageConfig'] = 'cmspage/editCmspageConfig';

$route['providerListing'] = 'provider/providerListing';
$route['addProvider'] = 'provider/addProvider';
$route['addProviderConfig'] = 'provider/addProviderConfig';
$route['editProvider'] = 'provider/editProvider';
$route['editProvider/(:num)'] = 'provider/editProvider/$1';
$route['editProviderConfig'] = 'provider/editProviderConfig';
$route['providerdelete/(:num)'] = 'provider/delete/$1';

$route['customerListing'] = 'customer/customerListing';
$route['addCustomer'] = 'customer/addCustomer';
$route['addCustomerConfig'] = 'customer/addCustomerConfig';
$route['editCustomer'] = 'customer/editCustomer';
$route['editCustomer/(:num)'] = 'customer/editCustomer/$1';
$route['editCustomerConfig'] = 'customer/editCustomerConfig';
$route['customerdelete/(:num)'] = 'customer/delete/$1';


$route['faqListing'] = 'faq/faqListing';
$route['faqListing/(:num)'] = 'faq/faqListing/$1';
$route['addFaq'] = 'faq/addFaq';
$route['addFaqConfig'] = 'faq/addFaqConfig';
$route['editFaq'] = 'faq/editFaq';
$route['editFaq/(:num)'] = 'faq/editFaq/$1';
$route['editFaqConfig'] = 'faq/editFaqConfig';
$route['faqdelete/(:num)'] = 'faq/delete/$1';

$route['currencyListing'] = 'currency/currencyListing';
$route['currencyListing/(:num)'] = 'currency/currencyListing/$1';
$route['addCurrency'] = 'currency/addCurrency';
$route['addCurrencyConfig'] = 'currency/addCurrencyConfig';
$route['editCurrency'] = 'currency/editCurrency';
$route['editCurrency/(:num)'] = 'currency/editCurrency/$1';
$route['editCurrencyConfig'] = 'currency/editCurrencyConfig';
$route['currencydelete/(:num)'] = 'currency/delete/$1';

$route['packageListing'] = 'package/packageListing';
$route['editPackage'] = 'package/editPackage';
$route['editPackage/(:num)'] = 'package/editPackage/$1';
$route['editPackageConfig'] = 'package/editPackageConfig';


$route['bannerListing'] = 'banner/bannerListing';
$route['bannerListing/(:num)'] = 'banner/bannerListing/$1';
$route['addBanner'] = 'banner/addBanner';
$route['addBannerConfig'] = 'banner/addBannerConfig';
$route['editBanner'] = 'banner/editBanner';
$route['editBanner/(:num)'] = 'banner/editBanner/$1';
$route['editBannerConfig'] = 'banner/editBannerConfig';
$route['bannerdelete/(:num)'] = 'banner/delete/$1';

$route['contactQueryListing'] = 'ContactQuery/contactQueryListing';


$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";



$route['home'] = "home/index";
$route['contact'] = "home/contact";
$route['newsdetails/(:any)'] = "home/newsdetails/$1";
$route['allnews'] = "home/allnews";
$route['blog'] = "home/blog";
$route['blogdetails/(:num)'] = "home/blogdetails/$1";
$route['blog_category/(:any)'] = "home/blogCategory/$1";
$route['our_mission/(:any)'] = "home/omission/$1";
$route['teams'] = "home/teams";
$route['funders'] = "home/funders";
$route['partners'] = "home/partners";
$route['report'] = "home/report";
$route['projects'] = "home/projects";
$route['reportdetails/(:any)'] = "home/reportdetails/$1";
$route['historic_research_details/(:any)'] = "home/historicDetails/$1";
$route['historic_research'] = "home/historic";