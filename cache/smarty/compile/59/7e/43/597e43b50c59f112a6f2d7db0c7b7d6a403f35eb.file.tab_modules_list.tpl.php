<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 20:57:07
         compiled from "/vagrant/admin/themes/default/template/controllers/modules/tab_modules_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14061746015418a42332d0a8-39835320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '597e43b50c59f112a6f2d7db0c7b7d6a403f35eb' => 
    array (
      0 => '/vagrant/admin/themes/default/template/controllers/modules/tab_modules_list.tpl',
      1 => 1406835656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14061746015418a42332d0a8-39835320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418a42342d2d4_43783629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418a42342d2d4_43783629')) {function content_5418a42342d2d4_43783629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/vagrant/tools/smarty/plugins/function.cycle.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)&&!empty($_smarty_tpl->tpl_vars['tab_modules_list']->value)) {?>
	<div class="row row-margin-bottom">
		<div class="col-lg-12">
			<ul class="nav nav-pills">
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
					<li class="active">
						<a href="#tab_modules_list_not_installed" data-toggle="tab">
							<?php echo smartyTranslate(array('s'=>'Not Installed'),$_smarty_tpl);?>

						</a>
					</li>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
					<li <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])==0) {?>class="active"<?php }?>>
						<a href="#tab_modules_list_installed" data-toggle="tab">
							<?php echo smartyTranslate(array('s'=>'Installed'),$_smarty_tpl);?>

						</a>
					</li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div id="modules_list_container_content" class="tab-content">
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
		<div class="tab-pane active" id="tab_modules_list_not_installed">
			<table id="tab_modules_list_not_installed" class="table">
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp4), 0);?>

				<?php } ?>
			</table>
		</div>
		<?php }?>
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
		<div class="tab-pane <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])==0) {?>active<?php }?>" id="tab_modules_list_installed">
			<table id="tab_modules_list_installed" class="table">
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp5), 0);?>

				<?php } ?>
			</table>
		</div>
		<?php }?>
	</div>
<?php }?>
<div class="alert alert-addons row-margin-top">
	<a href="http://addons.prestashop.com/?utm_source=backoffice_dispatch" target="_blank"><?php echo smartyTranslate(array('s'=>'More modules on addons.prestashop.com'),$_smarty_tpl);?>
</a>
</div><?php }} ?>
