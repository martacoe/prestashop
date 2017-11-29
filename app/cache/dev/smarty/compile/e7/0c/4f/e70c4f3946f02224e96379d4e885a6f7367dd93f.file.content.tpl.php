<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 11:26:39
         compiled from "/Applications/MAMP/htdocs/prestashop/console/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18106223305a0eb95fb58d25-32699193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70c4f3946f02224e96379d4e885a6f7367dd93f' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/console/themes/default/template/content.tpl',
      1 => 1510252205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18106223305a0eb95fb58d25-32699193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0eb95fb6fb33_96316542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0eb95fb6fb33_96316542')) {function content_5a0eb95fb6fb33_96316542($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
