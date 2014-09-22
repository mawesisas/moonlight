<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 20:56:59
         compiled from "/vagrant/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16565002655418a41b794bd0-94466888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6ba190ba1dc17536b4bd9e2611c03946de79f50' => 
    array (
      0 => '/vagrant/admin/themes/default/template/content.tpl',
      1 => 1406835656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16565002655418a41b794bd0-94466888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418a41ba8a597_07674876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418a41ba8a597_07674876')) {function content_5418a41ba8a597_07674876($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
