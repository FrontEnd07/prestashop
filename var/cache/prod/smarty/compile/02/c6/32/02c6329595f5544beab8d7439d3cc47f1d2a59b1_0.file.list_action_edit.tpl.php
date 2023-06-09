<?php
/* Smarty version 4.3.1, created on 2023-06-02 17:27:28
  from 'C:\xampp\htdocs\prestashopDemo\admin033bto59aaagtarep4u\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6479e0301b6126_91629879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c6329595f5544beab8d7439d3cc47f1d2a59b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\admin033bto59aaagtarep4u\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1685194030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6479e0301b6126_91629879 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
