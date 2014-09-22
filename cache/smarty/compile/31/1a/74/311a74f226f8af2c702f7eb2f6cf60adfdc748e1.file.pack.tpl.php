<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 10:35:13
         compiled from "/vagrant/admin7459/themes/default/template/controllers/products/pack.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19262293135419aa31899aa0-32354515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '311a74f226f8af2c702f7eb2f6cf60adfdc748e1' => 
    array (
      0 => '/vagrant/admin7459/themes/default/template/controllers/products/pack.tpl',
      1 => 1406835656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19262293135419aa31899aa0-32354515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pack_items' => 0,
    'curPackItemName' => 0,
    'pack_item' => 0,
    'input_pack_items' => 0,
    'input_namepack_items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5419aa319f9128_59077837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419aa319f9128_59077837')) {function content_5419aa319f9128_59077837($_smarty_tpl) {?>

<input type="hidden" name="submitted_tabs[]" value="Pack" />
<hr />
<div class="form-group listOfPack">
	<label class="control-label col-lg-3 product_description">
		<?php echo smartyTranslate(array('s'=>'List of products of this pack'),$_smarty_tpl);?>

	</label>
	<div class="col-lg-9">
		<p class="alert alert-warning pack-empty-warning" <?php if (count($_smarty_tpl->tpl_vars['pack_items']->value)!=0) {?>style="display:none"<?php }?>><?php echo smartyTranslate(array('s'=>'This pack is empty. You must add at least one product item.'),$_smarty_tpl);?>
</p>
		<ul id="divPackItems" class="list-unstyled">
			<?php  $_smarty_tpl->tpl_vars['pack_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pack_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pack_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pack_item']->key => $_smarty_tpl->tpl_vars['pack_item']->value) {
$_smarty_tpl->tpl_vars['pack_item']->_loop = true;
?>
				<li class="product-pack-item media-product-pack" data-product-name="<?php echo $_smarty_tpl->tpl_vars['curPackItemName']->value;?>
" data-product-qty="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['pack_quantity'];?>
" data-product-id="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id'];?>
">
					<img class="media-product-pack-img" src="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['image'];?>
"/>
					<span class="media-product-pack-title"><?php echo $_smarty_tpl->tpl_vars['pack_item']->value['name'];?>
</span>
					<span class="media-product-pack-ref">REF: <?php echo $_smarty_tpl->tpl_vars['pack_item']->value['reference'];?>
</span>
					<span class="media-product-pack-quantity"><span class="text-muted">x</span><?php echo $_smarty_tpl->tpl_vars['pack_item']->value['pack_quantity'];?>
</span>
					<button type="button" class="btn btn-default delPackItem media-product-pack-action" data-delete="<?php echo $_smarty_tpl->tpl_vars['pack_item']->value['id'];?>
" ><i class="icon-trash"></i></button>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="form-group addProductToPack">
	<label class="control-label col-lg-3" for="curPackItemName">
		<span class="label-tooltip" data-toggle="tooltip" title="<?php echo smartyTranslate(array('s'=>'Start by typing the first letters of the product name, then select the product from the drop-down list.'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Add product in your pack'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-9">
		<div class="row">
			<div class="col-lg-6">
				<input type="text" id="curPackItemName" name="curPackItemName" class="form-control" />
			</div>					
			<div class="col-lg-2">
				<div class="input-group">
					<span class="input-group-addon">&times;</span>
					<input type="number" name="curPackItemQty" id="curPackItemQty" class="form-control" min="1" value="1"/>
				</div>
			</div>
			<div class="col-lg-2">
				<button type="button" id="add_pack_item" class="btn btn-default">
					<i class="icon-plus-sign-alt"></i> <?php echo smartyTranslate(array('s'=>'Add this product'),$_smarty_tpl);?>

				</button>	
			</div>
		</div>
	</div>
</div>

<input type="hidden" name="inputPackItems" id="inputPackItems" value="<?php echo $_smarty_tpl->tpl_vars['input_pack_items']->value;?>
" placeholder="inputs"/>
<input type="hidden" name="namePackItems" id="namePackItems" value="<?php echo $_smarty_tpl->tpl_vars['input_namepack_items']->value;?>
" placeholder="name"/><?php }} ?>