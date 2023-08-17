<?php
/* Smarty version 3.1.33, created on 2022-03-24 22:15:28
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_623cdf70ee4d22_04351006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac84801349304af902b3a94aaf2ede0693865fb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\login.tpl',
      1 => 1648151580,
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
function content_623cdf70ee4d22_04351006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="sectionLogin">
        <h1>INICIAR SESION</h1>
        <form method="post" action="ingresar">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Clave">
            <input type="submit" id="btn-submit">
        </form>
        <a href="olvidePassword">Olvide contraseña</a>

        <h1>REGISTRARSE</h1>
        <form method="post" action="registrar">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text" name="mail" placeholder="Mail">
            <input type="password" name="clave" placeholder="Clave">
            <input type="password" name="repetirClave" placeholder="Repetir clave">
            <input type="submit" id="btn-submit">
        </form>

    </section>
   
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
