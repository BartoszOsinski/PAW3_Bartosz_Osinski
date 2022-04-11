<?php
/* Smarty version 3.1.30, created on 2022-04-11 19:18:24
  from "C:\xampp\htdocs\php_07_routing\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_625462e0645c43_03050899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2917cd6c882c567d47064342c16d72416f5fd89f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_routing\\app\\views\\CalcView.html',
      1 => 1649697504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
    'file:messages.html' => 1,
  ),
),false)) {
function content_625462e0645c43_03050899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_430372943625462e063f374_34797884', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2108339718625462e0645973_20481915', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_430372943625462e063f374_34797884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2108339718625462e0645973_20481915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<span style="float:right;">
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" method="post">
			<input type="submit" value="Wyloguj"/>
			<br>
			użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
<br> rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>

		</form>
	</span>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<h3>Wprowadź dane</h3>
	<fieldset>
		<label for="id_x">Kwota pożyczki: </label>
		<input id="id_x" type="text" name="sum" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->sum;?>
" />
		<label for="id_y">Liczba miesięcy: </label>
		<input id="id_y" type="text" name="months" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->months;?>
" />
		<label for="id_z">Procent: </label>
		<input id="id_z" type="text" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
" />
	</fieldset>
	<br>
	<input type="submit" value="Oblicz" />
</form>

<?php $_smarty_tpl->_subTemplateRender("file:messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>



<?php
}
}
/* {/block 'content'} */
}
