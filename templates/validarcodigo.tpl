{include file="header.tpl"}
{include file="nav.tpl"}
    <section id="sectionLogin">
        <h1>Validación de código</h1>
        <form method="post" action="compararCodigo">
            <input type="text" class="is-ocultar" name="codigogenerado" value="{$codigoGenerado}">
            <input type="text" name="codigoingresado" placeholder="Ingresar codigo">
            <input type="submit" id="btn-submit">
        </form>
    </section>
   
{include file="foot.tpl"}