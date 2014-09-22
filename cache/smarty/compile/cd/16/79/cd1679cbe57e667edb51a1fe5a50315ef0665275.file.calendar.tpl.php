<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 20:57:17
         compiled from "/vagrant/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14821976655418a42d1cde83-61597501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1679cbe57e667edb51a1fe5a50315ef0665275' => 
    array (
      0 => '/vagrant/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1406835656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14821976655418a42d1cde83-61597501',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418a42d1d7fc9_72601091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418a42d1d7fc9_72601091')) {function content_5418a42d1d7fc9_72601091($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
