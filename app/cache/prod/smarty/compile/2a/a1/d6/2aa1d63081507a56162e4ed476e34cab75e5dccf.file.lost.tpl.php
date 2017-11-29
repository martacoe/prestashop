<?php /* Smarty version Smarty-3.1.19, created on 2017-11-09 19:37:14
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16705152805a04a05a5f43a5-16572761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa1d63081507a56162e4ed476e34cab75e5dccf' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/welcome/views/templates/lost.tpl',
      1 => 1510252209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16705152805a04a05a5f43a5-16572761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a04a05a5fe715_41331084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a04a05a5fe715_41331084')) {function content_5a04a05a5fe715_41331084($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
