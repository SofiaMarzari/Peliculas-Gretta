<?php
/* Smarty version 3.1.33, created on 2023-03-21 14:53:31
  from 'C:\Apache24\htdocs\proyectos_php\php\pelisgretta\templates\addGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6419c4eb8598b6_89371222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67fabde5428a621f417d6ab1127f807db473c577' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\php\\pelisgretta\\templates\\addGenero.tpl',
      1 => 1615837131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419c4eb8598b6_89371222 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Genero</h1>
        <form action="addGenero" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
