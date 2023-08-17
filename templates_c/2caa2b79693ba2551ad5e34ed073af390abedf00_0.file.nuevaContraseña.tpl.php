<?php
/* Smarty version 3.1.33, created on 2022-03-25 04:42:33
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\nuevaContraseña.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_623d3a29734b82_37973367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2caa2b79693ba2551ad5e34ed073af390abedf00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\nuevaContraseña.tpl',
      1 => 1648157591,
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
function content_623d3a29734b82_37973367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>
        <form method="post" action="guardarPassword">
            <input type="password" name="claveNueva" placeholder="Clave nueva">
            <input type="password" name="repetirClaveNueva" placeholder="Repetir clave nueva">
            <input type="submit" name="enviar">
        </form>
    </section>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
