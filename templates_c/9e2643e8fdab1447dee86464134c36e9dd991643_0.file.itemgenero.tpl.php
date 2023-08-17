<?php
/* Smarty version 3.1.33, created on 2023-08-16 23:20:56
  from 'C:\Apache24\htdocs\proyectos_php\php\pelisgretta\templates\itemgenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64dd59d87356b8_35632636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2643e8fdab1447dee86464134c36e9dd991643' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\php\\pelisgretta\\templates\\itemgenero.tpl',
      1 => 1616971303,
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
function content_64dd59d87356b8_35632636 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="is-contenedorPeliculasGenero">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaPelis']->value, 'peli');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
?>
            <section class="is-sectionPeliculaGenero">
                <img class="imgpelicula" src="<?php echo $_smarty_tpl->tpl_vars['peli']->value['imagen'];?>
" alt="peli">
                <p><?php echo $_smarty_tpl->tpl_vars['peli']->value['nombre'];?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['peli']->value['anio'];?>
</p>
                <button>
                    <a href="pelicula/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_pelicula'];?>
">Ver</a>
                </button>
                <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
                    <button>
                        <a href="delete/<?php echo $_smarty_tpl->tpl_vars['peli']->value['id_pelicula'];?>
">Eliminar</a>
                    </button>
                <?php }?>
            </section>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
