<?php
/* Smarty version 3.1.33, created on 2022-02-01 23:28:17
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\recuperarCont.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61f9b401af9ad9_40248430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '584a45a7e1215a4b0c5841eda0f1f6658854c879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\recuperarCont.tpl',
      1 => 1616967416,
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
function content_61f9b401af9ad9_40248430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <form method="post" action="recuperarContraseña">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="submit" name="Mandar codigo">
        </form>

        <form method="post" action="validarCodigo">
            <input type="text" name="codRecuperacionIngr" placeholder="Ingresar codigo">
            <input type="submit" name="validar">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
