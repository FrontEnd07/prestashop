<?php
/* Smarty version 4.3.1, created on 2023-06-02 18:45:45
  from 'C:\xampp\htdocs\prestashopDemo\admin033bto59aaagtarep4u\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6479f289e49a18_84994943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196de6b3d07a2bff03201e79c831f7ed017b4e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\admin033bto59aaagtarep4u\\themes\\default\\template\\content.tpl',
      1 => 1685194029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6479f289e49a18_84994943 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
