<?php /* Smarty version Smarty-3.1.19, created on 2017-11-17 11:26:39
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10478890995a0eb95fea77f3-51431233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c0f85031151b46d5f8e23e173133070ff45b264' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/welcome/views/templates/tooltip.tpl',
      1 => 1510252209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10478890995a0eb95fea77f3-51431233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0eb95fead985_44964639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0eb95fead985_44964639')) {function content_5a0eb95fead985_44964639($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
