<?php /* Smarty version Smarty-3.1.19, created on 2017-12-20 10:44:05
         compiled from "module:ps_contactinfo/ps_contactinfo-rich.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5659595955a2534c015b458-37693797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo-rich.tpl',
      1 => 1513763041,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5659595955a2534c015b458-37693797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2534c016fa79_71645541',
  'variables' => 
  array (
    'contact_infos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2534c016fa79_71645541')) {function content_5a2534c016fa79_71645541($_smarty_tpl) {?><!-- begin /Applications/MAMP/htdocs/prestashop/themes/classic/modules/ps_contactinfo/ps_contactinfo-rich.tpl -->

<div class="contact-rich">

  <h4><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
  <div class="block">
    <div class="icon"><i class="material-icons">&#xE55F;</i></div>
    <div class="data"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3114.3738671022656!2d-4.1080114849222875!3d38.68625556696765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6b8cf4ae7c258f%3A0x8874538f015f9871!2sAsociacion+Santa+Agueda!5e0!3m2!1ses!2ses!4v1513761999489" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0CD;</i></div>
      <div class="data">
        <?php echo smartyTranslate(array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<br/>
        <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
       </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE0DF;</i></div>
      <div class="data">
        <?php echo smartyTranslate(array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<br/>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

      </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
    <hr/>
    <div class="block">
      <div class="icon"><i class="material-icons">&#xE158;</i></div>
      <div class="data email">
        <?php echo smartyTranslate(array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
<br/>
       </div>
       <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>
  <?php }?>
</div>
<!-- end /Applications/MAMP/htdocs/prestashop/themes/classic/modules/ps_contactinfo/ps_contactinfo-rich.tpl --><?php }} ?>
