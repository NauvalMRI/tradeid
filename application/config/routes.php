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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//Front 
$route['profil'] = 'Front/User';
$route['product'] = 'Front/Product';
$route['supplier'] = 'Front/Supplier';

//Front product
$route['product/(:num)'] = 'Front/Product/productShopCategory/$1';
$route['product/(:num)/(:num)'] = 'Front/Product/productShopSubCategoryA/$1/$2';
$route['product/(:num)/(:num)/(:num)'] = 'Front/Product/productShopSubCategoryB/$1/$2/$3';
$route['product/productDetail/(:num)'] = 'Front/Product/productDetail/$1';
$route['inquireProduct/(:num)'] = 'Front/Product/inquireProduct/$1';

$route['premium'] = 'Front/Premium';
$route['checkout'] = 'Front/Premium/checkout';


//registrasi
$route['register'] = 'Front/User/regis';
$route['login'] = 'Front/User/login';
$route['logout'] = 'Front/User/logout';
$route['regisSupplier'] = 'Front/Supplier/regis';
$route['regSup'] = 'Front/Supplier/cekSup';


//Supplier 
$route['dashboard/supplier'] = 'Supplier/Supplier';
$route['dashboard/supplier/inquireDetail/(:num)'] = 'Supplier/Supplier/buyerDetail/$1';



//Supllier Company
$route['dashboard/supplier/company'] = 'Supplier/Company';
$route['tambahcompany'] = 'Supplier/Company/store';
$route['updatecompany'] = 'Supplier/Company/update';
$route['tambahdeskripsi'] = 'Supplier/Company/store_desk';
$route['updatedeskripsi'] = 'Supplier/Company/update_desk';
$route['tambahsosmed'] = 'Supplier/Company/store_sosmed';
$route['updatesosmed'] = 'Supplier/Company/update_sosmed';

//Supplier Product 
$route['dashboard/supplier/product'] = 'Supplier/Product';
$route['dashboard/supplier/product/productForm'] = 'Supplier/Product/productForm';
$route['tambahproduct'] = 'Supplier/Product/store';
$route['dashboard/supplier/product/productDetail/(:any)'] = 'Supplier/Product/detail/$1';
$route['dashboard/supplier/product/editProduct/(:any)'] = 'Supplier/Product/edit/$1';

//Supplier Facility
$route['dashboard/supplier/facility'] = 'Supplier/Facility';
$route['dashboard/supplier/facilityForm'] = 'Supplier/Facility/add';
$route['tambahFacility'] = 'Supplier/Facility/store';


//Profil
$route['editprofil'] = '/Front/user/editProfile';

//Admin
$route['admin'] = 'Admin/Admin';
$route['admin/signup'] = 'Admin/Admin/akunbaru';
$route['admin/login'] = 'Admin/Admin/loginadmin';


//identitas
$route['admin/identitas'] ='Admin/Identitas';

//perusahaan
$route['admin/perusahaan'] ='Admin/Perusahaan';
$route['admin/detailPerusahaan/(:any)'] ='Admin/Perusahaan/detail/$1';

//product admin
$route['admin/product'] ='Admin/Product';
$route['admin/detailProduct/(:any)'] ='Admin/Product/detail/$1';

//pembelian
$route['admin/pembelian'] ='Admin/Pembelian';

//cek Supplier
$route['admin/supplier'] = 'Admin/Admin/registrasiSupplier';
$route['admin/supplier/(:any)'] = 'Admin/Admin/regisdetail/$1';
$route['admin/supplier/update/(:any)/(:any)'] = 'Admin/Admin/verify/$1/$2';
$route['admin/supplier/update_d/(:any)/(:any)'] = 'Admin/Admin/verify_d/$1/$2';


//kategori
$route['admin/kategori'] = 'Admin/Kategori';
$route['admin/kategori/tambahkategori'] = 'Admin/Kategori/store';
$route['admin/kategori/deleteKategori/(:any)'] = 'Admin/Kategori/delete/$1';
$route['admin/kategori/updateKategori/(:any)'] = 'Admin/Kategori/edit/$1';
$route['admin/kategori/update'] = 'Admin/Kategori/update';

//subkategori A
$route['admin/subkategoriA'] = 'Admin/SubKategoriA';
$route['admin/subkategoriA/tambahsubkategoriA'] = 'Admin/SubKategoriA/store';
$route['admin/subkategoriA/deletesubkategoriA/(:any)'] = 'Admin/SubKategoriA/delete/$1';
$route['admin/subkategoriA/updatesubkategoriA/(:any)'] = 'Admin/SubKategoriA/edit/$1';
$route['admin/subkategoriA/updatesubkategoriA'] = 'Admin/SubKategoriA/update';

//subkategori B
$route['admin/subkategoriB'] = 'Admin/SubKategoriB';
$route['admin/subkategoriB/tambahsubkategoriB'] = 'Admin/SubKategoriB/store';
$route['admin/subkategoriB/deletesubkategoriB/(:any)'] = 'Admin/SubKategoriB/delete/$1';
$route['admin/subkategoriB/updatesubkategoriB/(:any)'] = 'Admin/SubKategoriB/edit/$1';
$route['admin/subkategoriB/updatesubkategoriB'] = 'Admin/SubKategoriB/update';

//data buyer
$route['admin/databuyer'] = 'Admin/Databuyer';
$route['admin/databuyer/tambahdatabuyer'] = 'Admin/Databuyer/store';
$route['admin/databuyer/deletedatabuyer/(:any)'] = 'Admin/Databuyer/delete/$1';
$route['admin/databuyer/updatedatabuyer/(:any)'] = 'Admin/Databuyer/edit/$1';
$route['admin/databuyer/update'] = 'Admin/Databuyer/update';