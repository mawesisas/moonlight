<?php /* Smarty version Smarty-3.1.19, created on 2014-09-22 17:15:38
         compiled from "/vagrant/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33391459254209f8a9be115-97808066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a0f2930acf392c8d15f0e01660e2a7a82783a88' => 
    array (
      0 => '/vagrant/modules/blocksharefb/blocksharefb.tpl',
      1 => 1411417794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33391459254209f8a9be115-97808066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54209f8aa23f04_66485744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54209f8aa23f04_66485744')) {function content_54209f8aa23f04_66485744($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
