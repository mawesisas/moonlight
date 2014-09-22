<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 10:06:30
         compiled from "/vagrant/admin7459/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18529230345419a376dc1644-81224604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ac798b096c8ed55cb8973b653bd860fdc1ab252' => 
    array (
      0 => '/vagrant/admin7459/themes/default/template/content.tpl',
      1 => 1406835656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18529230345419a376dc1644-81224604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5419a376e1a0b0_91749165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419a376e1a0b0_91749165')) {function content_5419a376e1a0b0_91749165($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
