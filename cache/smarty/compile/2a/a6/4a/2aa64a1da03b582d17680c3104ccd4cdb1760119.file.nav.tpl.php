<?php /* Smarty version Smarty-3.1.19, created on 2014-09-22 08:24:43
         compiled from "/vagrant/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4365154695418a4218dcb35-66679184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa64a1da03b582d17680c3104ccd4cdb1760119' => 
    array (
      0 => '/vagrant/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1410987658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4365154695418a4218dcb35-66679184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5418a4218ffa44_66495969',
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5418a4218ffa44_66495969')) {function content_5418a4218ffa44_66495969($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
	
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<!--	
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
        </span>
		 -->
	
<?php }?><?php }} ?>