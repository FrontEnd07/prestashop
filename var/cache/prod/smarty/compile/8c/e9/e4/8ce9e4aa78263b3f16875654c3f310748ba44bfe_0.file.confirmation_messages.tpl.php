<?php
/* Smarty version 4.3.1, created on 2023-06-03 14:50:40
  from 'C:\xampp\htdocs\prestashopDemo\admin033bto59aaagtarep4u\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b0cf0c508e5_34226589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce9e4aa78263b3f16875654c3f310748ba44bfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\admin033bto59aaagtarep4u\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1685194028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647b0cf0c508e5_34226589 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
