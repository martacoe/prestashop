<?php /* Smarty version Smarty-3.1.19, created on 2017-11-08 11:43:32
         compiled from "/var/www/html/prestashop/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15400194945a02dfd4c0d293-95806879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27065e8f1a22b9fe82202ef1077c72b821997a92' => 
    array (
      0 => '/var/www/html/prestashop/modules/welcome/views/templates/lost.tpl',
      1 => 1510137020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15400194945a02dfd4c0d293-95806879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a02dfd4c0ec79_62890119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02dfd4c0ec79_62890119')) {function content_5a02dfd4c0ec79_62890119($_smarty_tpl) {?>

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
