<?php
/* Smarty version 4.3.1, created on 2023-06-03 15:07:00
  from 'C:\xampp\htdocs\prestashopDemo\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b10c4cc20c7_39760536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a8767732567962512c2f6e664199abc20d7e3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1685194034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647b10c4cc20c7_39760536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashopDemo\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\53\\a8\\76\\53a8767732567962512c2f6e664199abc20d7e3f_2.file.helpers.tpl.php',
    'uid' => '53a8767732567962512c2f6e664199abc20d7e3f',
    'call_name' => 'smarty_template_function_renderLogo_752672159647b10c4cac385_86032319',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_752672159647b10c4cac385_86032319 */
if (!function_exists('smarty_template_function_renderLogo_752672159647b10c4cac385_86032319')) {
function smarty_template_function_renderLogo_752672159647b10c4cac385_86032319(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_752672159647b10c4cac385_86032319 */
}
