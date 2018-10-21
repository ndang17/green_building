<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'c_dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['save2pdf/certificate'] = 'c_save_to_pdf/sertifikat';

$route['__insertDataUser'] = 'c_dashboard/insertDataUser';

// === ADMIN MASTER ===
$route['admin/master/add-question'] = 'c_admin/addQuestion';
$route['admin/master/label'] = 'c_admin/label';
$route['admin/master/title'] = 'c_admin/title';
$route['admin/master/perpu'] = 'c_admin/perpu';

// === ADMIN QUESTION ===
$route['admin/question/list'] = 'c_admin';

$route['admin/title-label'] = 'c_admin/title_label';
$route['admin/users'] = 'c_admin/users';
$route['admin/statistik'] = 'c_admin/statistik';


// ==== API ===
$route['api/__getTitle'] = 'c_api/getTitle';
$route['api/crudQuestion'] = 'c_api/crudQuestion';
$route['api/crudTitle'] = 'c_api/crudTitle';
$route['api/crudLabel'] = 'c_api/crudLabel';
$route['api/crudPurpose'] = 'c_api/crudPurpose';
