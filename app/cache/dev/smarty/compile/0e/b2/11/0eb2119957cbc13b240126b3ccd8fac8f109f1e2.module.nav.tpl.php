<?php /* Smarty version Smarty-3.1.19, created on 2018-01-17 20:27:38
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2610474815a5fa3aa4c10f0-74014804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1513762273,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '2610474815a5fa3aa4c10f0-74014804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5fa3aa4cebc6_02753673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5fa3aa4cebc6_02753673')) {function content_5a5fa3aa4cebc6_02753673($_smarty_tpl) {?><!-- begin /Applications/MAMP/htdocs/prestashop/themes/classic/modules/ps_contactinfo/nav.tpl -->
  <li class="cms-page" id="cms-page-14">

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      
      <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    <?php } else { ?>
      <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" data-depth="0"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
      
    
    <?php }?>
  </li>
<!-- end /Applications/MAMP/htdocs/prestashop/themes/classic/modules/ps_contactinfo/nav.tpl --><?php }} ?>
