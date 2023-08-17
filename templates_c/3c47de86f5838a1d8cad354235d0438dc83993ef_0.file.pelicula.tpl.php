<?php
/* Smarty version 3.1.33, created on 2023-03-21 14:53:43
  from 'C:\Apache24\htdocs\proyectos_php\php\pelisgretta\templates\pelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6419c4f7ef9252_43421044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c47de86f5838a1d8cad354235d0438dc83993ef' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\php\\pelisgretta\\templates\\pelicula.tpl',
      1 => 1644439571,
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
function content_6419c4f7ef9252_43421044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="is-sectionPeliculaParticular">
        <img class="imgpelicula" src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['imagen'];?>
" alt="peli">
        <h1><?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['nombre'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['descripcion'];?>
</p>
        <section id="section-reproduccionPelicula">
        </section>
        <section id="sectionComentarios">
            <h3>Comentarios</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'coment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
?>
                <article>
                    <p><?php echo $_smarty_tpl->tpl_vars['coment']->value['usuarioNombre'];?>
:</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['coment']->value['comentario'];?>
</p>
                    <?php if ($_smarty_tpl->tpl_vars['coment']->value['usuarioNombre'] == $_smarty_tpl->tpl_vars['nomUsr']->value) {?>   
                        <button id="btn-deletComent">
                            <a href="eliminarComentario/<?php echo $_smarty_tpl->tpl_vars['coment']->value['id_comentario'];?>
}/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['id_pelicula'];?>
">Eliminar</a>
                        </button>
                    <?php }?>
                </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
            <section id="is-sectionformcomentario">
                <p>Escribe un comentario: </p>
                <form method="post" action="comentar/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value[0]['id_pelicula'];?>
">
                    <textarea name="comentario"></textarea>
                    <input id="btn-enviarForm" type="submit">
                </form>
            </section>
        <?php }?>
    </section>
    
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
