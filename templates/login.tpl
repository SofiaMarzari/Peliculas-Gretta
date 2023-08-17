{include file="header.tpl"}
{include file="nav.tpl"}
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
   
{include file="foot.tpl"}