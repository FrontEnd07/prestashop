<?php
/* Smarty version 4.3.1, created on 2023-06-03 15:05:16
  from 'C:\xampp\htdocs\prestashopDemo\admin033bto59aaagtarep4u\themes\default\template\controllers\customer_threads\helpers\view\timeline_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647b105cca0c27_38191257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a63b774200901c178e31ae5d48800f2a7eb052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashopDemo\\admin033bto59aaagtarep4u\\themes\\default\\template\\controllers\\customer_threads\\helpers\\view\\timeline_item.tpl',
      1 => 1685194029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647b105cca0c27_38191257 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="timeline-item<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt']))) {?> alt<?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['timeline_item']->value['background_color'],'html','UTF-8' ));?>
;">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl ) );?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['timeline_item']->value['date'],11,5);?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']))) {?><a class="badge" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Order #",'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['timeline_item']->value['id_order'] ));?>
</a><br/><?php }?>
			<span><?php echo nl2br((string) $_smarty_tpl->tpl_vars['timeline_item']->value['content'], (bool) 1);?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link']))) {?>
				<br/><br/><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'],'html','UTF-8' ));?>
" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"See more",'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</a>
			<?php }?>
		</div>
	</div>
</article>
<?php }
}
