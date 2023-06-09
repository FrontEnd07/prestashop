<?php
/* Smarty version 4.3.1, created on 2023-06-03 15:04:58
  from 'C:\xampp\htdocs\prestashopDemo\admin033bto59aaagtarep4u\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b104ada10a2_36553252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4bd22bd0669821fdc72e252931a5cdc45d27a1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\admin033bto59aaagtarep4u\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1685194030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647b104ada10a2_36553252 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
