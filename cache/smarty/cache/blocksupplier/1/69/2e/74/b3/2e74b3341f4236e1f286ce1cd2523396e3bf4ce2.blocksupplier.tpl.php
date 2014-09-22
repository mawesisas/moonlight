<?php /*%%SmartyHeaderCode:12854923495419f525b198c5-62189571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e74b3341f4236e1f286ce1cd2523396e3bf4ce2' => 
    array (
      0 => '/vagrant/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1406835656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12854923495419f525b198c5-62189571',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542076c3667a35_06486154',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542076c3667a35_06486154')) {function content_542076c3667a35_06486154($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost:8081/proveedores" title="Proveedores">
					Proveedores
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost:8081/1__fashion-supplier" 
					title="Más sobre Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Todos los proveedores</option>
													<option value="http://localhost:8081/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
