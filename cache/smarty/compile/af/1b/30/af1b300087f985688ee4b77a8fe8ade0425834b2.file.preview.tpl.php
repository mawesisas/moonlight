<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 13:17:51
         compiled from "/vagrant/modules/blockfacebook/views/admin/_configure/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4049086275419d04f668945-19934643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1b300087f985688ee4b77a8fe8ade0425834b2' => 
    array (
      0 => '/vagrant/modules/blockfacebook/views/admin/_configure/preview.tpl',
      1 => 1410970645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4049086275419d04f668945-19934643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_js_url' => 0,
    'facebook_css_url' => 0,
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5419d04f700cb2_72720067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419d04f700cb2_72720067')) {function content_5419d04f700cb2_72720067($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['facebook_js_url']->value;?>
"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['facebook_css_url']->value;?>
" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> <?php echo smartyTranslate(array('s'=>"Preview"),$_smarty_tpl);?>

	</div>
	<div id="fb-root"></div>
	<div id="facebook_block">
		<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
		<div class="facebook-fanbox">
			<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
