<?php /* Smarty version Smarty-3.1.19, created on 2017-11-08 11:43:32
         compiled from "/var/www/html/prestashop/console/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9991103235a02dfd4b87519-25144491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bea3fa2cd33c53304762032ce95b3aaa7e5ba338' => 
    array (
      0 => '/var/www/html/prestashop/console/themes/default/template/content.tpl',
      1 => 1510137019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9991103235a02dfd4b87519-25144491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a02dfd4b888c1_69891718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02dfd4b888c1_69891718')) {function content_5a02dfd4b888c1_69891718($_smarty_tpl) {?>
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
