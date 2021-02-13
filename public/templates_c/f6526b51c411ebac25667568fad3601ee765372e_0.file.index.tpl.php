<?php
/* Smarty version 3.1.38, created on 2021-02-12 16:38:00
  from '/var/www/html/php-architecture/template/app/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6026a0d8d52451_60101064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6526b51c411ebac25667568fad3601ee765372e' => 
    array (
      0 => '/var/www/html/php-architecture/template/app/index.tpl',
      1 => 1613144080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6026a0d8d52451_60101064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4665103236026a0d8d47d20_79202295', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../base.tpl");
}
/* {block 'body'} */
class Block_4665103236026a0d8d47d20_79202295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4665103236026a0d8d47d20_79202295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

<?php
}
}
/* {/block 'body'} */
}
