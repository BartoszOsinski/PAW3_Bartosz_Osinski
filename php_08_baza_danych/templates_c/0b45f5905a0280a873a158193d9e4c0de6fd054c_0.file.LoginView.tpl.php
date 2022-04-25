<?php
/* Smarty version 4.1.0, created on 2022-04-25 18:33:08
  from 'C:\xampp\htdocs\php_08_baza_danych\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6266cd44715ad3_58801389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b45f5905a0280a873a158193d9e4c0de6fd054c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_baza_danych\\app\\views\\LoginView.tpl',
      1 => 1650899754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6266cd44715ad3_58801389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10133655486266cd4470e971_50582742', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4523696856266cd4470f4c5_30753909', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_10133655486266cd4470e971_50582742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10133655486266cd4470e971_50582742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_4523696856266cd4470f4c5_30753909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4523696856266cd4470f4c5_30753909',
  ),
);
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

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
