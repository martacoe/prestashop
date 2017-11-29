<?php /* Smarty version Smarty-3.1.19, created on 2017-11-23 13:12:58
         compiled from "/Applications/MAMP/htdocs/prestashop/console/themes/new-theme/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9232425955a16bb4a9645b7-35724699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573fed4a73153e5f8bd75353723ab5001de99eb3' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/console/themes/new-theme/template/controllers/addons_catalog/content.tpl',
      1 => 1510252206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9232425955a16bb4a9645b7-35724699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a16bb4a9e6ce3_45624439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a16bb4a9e6ce3_45624439')) {function content_5a16bb4a9e6ce3_45624439($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
