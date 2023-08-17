<?php
/* Smarty version 3.1.33, created on 2023-03-21 14:53:31
  from 'C:\Apache24\htdocs\proyectos_php\php\pelisgretta\templates\addPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6419c4ebbf0249_07616338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be7e3fa6ac20eb45082ffd47f9904ebc1559c7e6' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\php\\pelisgretta\\templates\\addPelicula.tpl',
      1 => 1616352418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419c4ebbf0249_07616338 (Smarty_Internal_Template $_smarty_tpl) {
?>    <section class="section-formAdd">
        <h1>Pelicula</h1>
        <form action="addPelicula" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="text" name="genero" placeholder="Genero">
            <input type="number" name="duracion" placeholder="Duracion">
            <input type="number" name="anio" placeholder="Año">
            <input type="file" name="img_input">
            <input type="submit" class="is-btn-submit">
        </form>
    </section><?php }
}
