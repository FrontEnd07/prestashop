<?php
/* Smarty version 4.3.1, created on 2023-06-03 15:05:53
  from 'C:\xampp\htdocs\prestashopDemo\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b10810449a4_39003949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327a15a211f21781083320fcfa21e1a621443d5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\pdf\\invoice.shipping-tab.tpl',
      1 => 1685194030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647b10810449a4_39003949 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
