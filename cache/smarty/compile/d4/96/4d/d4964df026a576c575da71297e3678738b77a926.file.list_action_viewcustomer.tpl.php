<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 11:22:35
         compiled from "/vagrant/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21459418615419b54b2d1563-54142205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4964df026a576c575da71297e3678738b77a926' => 
    array (
      0 => '/vagrant/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1406835716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21459418615419b54b2d1563-54142205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5419b54b375d67_49108701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419b54b375d67_49108701')) {function content_5419b54b375d67_49108701($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
