<?php
/* Smarty version 4.1.0, created on 2022-04-25 19:39:29
  from 'C:\xampp\htdocs\php_08_baza_danych\app\views\ResultList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6266dcd1362ba3_42380216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4392fc4e3d7c00a32237611ffdd9ed469da57f1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_08_baza_danych\\app\\views\\ResultList.tpl',
      1 => 1650908368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6266dcd1362ba3_42380216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19231968796266dcd1358f01_71702772', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19231968796266dcd1358f01_71702772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19231968796266dcd1358f01_71702772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="history">
    <div>
        <?php if ($_smarty_tpl->tpl_vars['db']->value->count("results") > 0) {?>
            <table
                <thead>
                <tr>
                    <th>Kwota</th>
                    <th>Ilość Miesięcy</th>
                    <th>Procent</th>
                    <th>Miesięczna rata</th>
                    <th>Data</th>
                </tr>
            </thead>
<tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["sum"];?>
 zł</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["months"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["percent"];?>
%</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["result"];?>
 zł</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["data"];?>
</td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            </div>
            <div>
            <br>
            <span style="float:right;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php" class="button primary" >Wróć do kalkulatora</a>
	</span>
            <?php if (inRole('admin')) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultListClear" class="button primary">Wyczyść</a><br><br>
            <?php }?>
        <?php } else { ?>
                <span style="float:right;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php" class="button primary" >Wróć do kalkulatora</a>
<?php }?>

	</span>
    </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
