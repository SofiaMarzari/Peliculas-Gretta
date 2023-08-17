<?php
/* Smarty version 3.1.33, created on 2022-03-19 23:28:25
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\validarCodigo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62365909120153_72710716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5fd1803819ddeb093d7bf5afb7bb3770471a7b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\validarCodigo.tpl',
      1 => 1647726144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_62365909120153_72710716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <form method="post" action="compararCodigo">
            <input type="text" name="codRecuperacionIngresado" placeholder="Ingresar codigo">
            <input type="submit" name="validar">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
