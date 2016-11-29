<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['ady'] = 'hallo_ady';

//-----------------------------------------------------------latiahan 6
$route['biodata'] = 'biodata_ady';
$route['ukmku'] = 'ukm_bultang';
$route['pengalaman'] = 'pengalaman_tugas';

//-----------------------------------------------------------Optional
$route['cerita1'] = 'cerita_kancildanbuaya';
$route['cerita2'] = 'cerita_rajayangbodoh';
$route['cerita3'] = 'cerita_monyetdankurakura';
$route['cerita4'] = 'cerita_kancildansiput';
$route['cerita5'] = 'cerita_anjingyangrakus';
$route['cerita6'] = 'cerita_raksasayangegois';
$route['cerita7'] = 'cerita_rumahsiput';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
