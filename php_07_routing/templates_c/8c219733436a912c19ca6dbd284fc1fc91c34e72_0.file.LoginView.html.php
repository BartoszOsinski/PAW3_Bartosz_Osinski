<?php
/* Smarty version 3.1.30, created on 2022-04-11 19:19:25
  from "C:\xampp\htdocs\php_07_routing\app\views\LoginView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6254631daf1748_54438690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c219733436a912c19ca6dbd284fc1fc91c34e72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_routing\\app\\views\\LoginView.html',
      1 => 1649697564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
    'file:messages.html' => 1,
  ),
),false)) {
function content_6254631daf1748_54438690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4589419876254631daee307_08050739', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17076274546254631daf1414_06101534', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_4589419876254631daee307_08050739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_17076274546254631daf1414_06101534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" >
	<legend><h3>Logowanie do systemu</h3></legend>
	<fieldset>
        <div>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div>
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div>
			<input type="submit" value="zaloguj"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
