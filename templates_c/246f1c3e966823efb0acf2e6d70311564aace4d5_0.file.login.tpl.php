<?php
/* Smarty version 3.1.33, created on 2023-03-21 14:54:05
  from 'C:\Apache24\htdocs\proyectos_php\php\pelisgretta\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6419c50d78a127_61374753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246f1c3e966823efb0acf2e6d70311564aace4d5' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\php\\pelisgretta\\templates\\login.tpl',
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
function content_6419c50d78a127_61374753 (Smarty_Internal_Template $_smarty_tpl) {
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
