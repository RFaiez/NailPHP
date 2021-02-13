<?php
/* Smarty version 3.1.38, created on 2021-02-12 16:38:00
  from '/var/www/html/php-architecture/template/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6026a0d8e5b4e0_97741853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '683ad2a007ecc7ddf646b2ed095318d22ee5dfb8' => 
    array (
      0 => '/var/www/html/php-architecture/template/base.tpl',
      1 => 1613144081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6026a0d8e5b4e0_97741853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4377067596026a0d8e55b33_04784198', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14933693286026a0d8e57b78_97341494', 'head');
?>

</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16045385956026a0d8e59570_71233151', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5281923076026a0d8e5a973_59992079', 'javascripts');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_4377067596026a0d8e55b33_04784198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4377067596026a0d8e55b33_04784198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Hello<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_14933693286026a0d8e57b78_97341494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14933693286026a0d8e57b78_97341494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_16045385956026a0d8e59570_71233151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16045385956026a0d8e59570_71233151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'javascripts'} */
class Block_5281923076026a0d8e5a973_59992079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascripts' => 
  array (
    0 => 'Block_5281923076026a0d8e5a973_59992079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'javascripts'} */
}
