<?php
/* Smarty version 4.1.0, created on 2022-04-25 20:01:52
  from 'C:\xampp\htdocs\php_08_baza_danych\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6266e210ceaa45_86352055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ccac2c71096b955c62c41105a63f9f41f76eeb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_baza_danych\\app\\views\\CalcView.tpl',
      1 => 1650909611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6266e210ceaa45_86352055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11265285156266e210ce48a8_07110385', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15259700406266e210ce4fc3_29835268', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_11265285156266e210ce48a8_07110385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11265285156266e210ce48a8_07110385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Widok strony oparty na <a href="https://html5up.net/arcana" target="_blank">Arcana by HTML5 UP</a><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_15259700406266e210ce4fc3_29835268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15259700406266e210ce4fc3_29835268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <span style="float:right;">
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" method="post">
			<input type="submit" value="Wyloguj"/>
			<br>
			użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
<br> rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>


            <br><br><br><br><br><br><br><br>
           <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultList" class="button primary">Historia Obliczeń</a>
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

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
