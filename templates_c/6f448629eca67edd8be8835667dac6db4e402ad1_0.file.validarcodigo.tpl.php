<?php
/* Smarty version 3.1.33, created on 2022-03-24 22:29:29
  from 'C:\xampp\htdocs\proyecto\php\pelisgretta\templates\validarcodigo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_623ce2b99d8c49_83594323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f448629eca67edd8be8835667dac6db4e402ad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\pelisgretta\\templates\\validarcodigo.tpl',
      1 => 1648156072,
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
function content_623ce2b99d8c49_83594323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="sectionLogin">
        <h1>Validación de código</h1>
        <form method="post" action="compararCodigo">
            <input type="text" class="is-ocultar" name="codigogenerado" value="<?php echo $_smarty_tpl->tpl_vars['codigoGenerado']->value;?>
">
            <input type="text" name="codigoingresado" placeholder="Ingresar codigo">
            <input type="submit" id="btn-submit">
        </form>
    </section>
   
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
