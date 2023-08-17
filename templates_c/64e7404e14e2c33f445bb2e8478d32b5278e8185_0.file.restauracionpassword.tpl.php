<?php
/* Smarty version 3.1.33, created on 2022-03-24 22:29:09
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\restauracionpassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_623ce2a5e82ea7_55833549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e7404e14e2c33f445bb2e8478d32b5278e8185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\restauracionpassword.tpl',
      1 => 1648155715,
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
function content_623ce2a5e82ea7_55833549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="sectionLogin">
        <h1>Usuario para recuperar contraseña</h1>
        <form method="post" action="mandarCodigo">
            <input type="text" name="usuario" placeholder="Ingrese su usuario">
            <input type="submit" id="btn-submit">
        </form>
    </section>
   
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
