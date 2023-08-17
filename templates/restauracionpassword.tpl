{include file="header.tpl"}
{include file="nav.tpl"}
    <section id="sectionLogin">
        <h1>Usuario para recuperar contraseña</h1>
        <form method="post" action="mandarCodigo">
            <input type="text" name="usuario" placeholder="Ingrese su usuario">
            <input type="submit" id="btn-submit">
        </form>
    </section>
   
{include file="foot.tpl"}