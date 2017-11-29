<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 19:26:53
         compiled from "/Applications/MAMP/htdocs/prestashop/console/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16187600445a0f29edd16892-16806641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb916311248c2527c8827f936dbcc21c2cc4b53' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/console/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1510252205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16187600445a0f29edd16892-16806641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0f29edd4fd26_62965799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0f29edd4fd26_62965799')) {function content_5a0f29edd4fd26_62965799($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
