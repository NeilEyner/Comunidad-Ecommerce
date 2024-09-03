<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
</head>
<body>
    
    <h1>Bienvenido, Administrador <?= session()->get('Nombre') ?></h1>
    <nav>
        <ul>
            <li><a href="#">Gestionar Usuarios</a></li>
            <li><a href="#">Gestionar Productos</a></li>
            <li><a href="#">Reportes y Estadísticas</a></li>
            <li><a href="#">Configuración del Sistema</a></li>
        </ul>
    </nav>
    <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
</body>
</html> -->





    <section id="Estado" class="section-contenido" data-section="estado">
        <h1 class="heading-2">Estado de donaciones realizadas</h1>
        <ul role="list">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>
    <section id="Donar" class="section-contenido" data-section="donaciones">
        <div id="Donaciones" class="w-layout-blockcontainer w-container">
            <h1 class="heading-3">Elementos de la donación<br />‍</h1><a id="BAlimento" href="#"
                class="button-4 w-button">Agregar alimento</a><a id="BProducto" href="#"
                class="button-2 w-button">Agregar producto</a><a id="BDinero" href="#" class="button-3 w-button">Agregar
                efectivo</a>
            <div id="RecogeDonacion" class="form-block w-form">
                <form id="FormAlimentos" name="wf-form-Donaciones" data-name="Donaciones" method="post" class="form-2"
                    data-wf-page-id="66275a5b798f9aabd4b39277"
                    data-wf-element-id="a1c578b7-2309-ab7b-f670-7fa33c5484b7"><label for="NombreA"
                        class="field-label">Nombre</label><input class="text-field-3 w-input" maxlength="256"
                        name="NombreA" data-name="NombreA" placeholder="Nombre del alimento" type="text" id="NombreA"
                        required="" /><label for="CantidadA" class="field-label-2">Cantidad</label><input
                        class="text-field-2 w-input" maxlength="256" name="CantidadA" data-name="CantidadA"
                        placeholder="Cantidad del alimento" type="number" id="CantidadA" required="" /><label
                        for="FechaVec" class="field-label-3">Fecha de vencimiento</label><input
                        class="text-field w-input" maxlength="256" name="FechaVec" data-name="FechaVec"
                        placeholder="dd/mm/aaaa" type="text" id="FechaVec" required="" /><input type="submit"
                        data-wait="Please wait..." id="AgregarA" class="submit-button w-button" value="Agregar" />
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <div id="RecogeDonacion" class="form-block w-form">
                <form id="FormProductos" name="wf-form-Donaciones" data-name="Donaciones" method="post" class="form-2"
                    data-wf-page-id="66275a5b798f9aabd4b39277"
                    data-wf-element-id="1e50c5f5-901d-17d7-16c6-d8ad828ca604"><label for="NombreP"
                        class="field-label">Nombre</label><input class="text-field-3 w-input" maxlength="256"
                        name="NombreP" data-name="NombreP" placeholder="Nombre del producto" type="text" id="NombreP"
                        required="" /><label for="CantidadP" class="field-label-2">Cantidad</label><input
                        class="text-field-2 w-input" maxlength="256" name="CantidadP" data-name="CantidadP"
                        placeholder="Cantidad del producto" type="number" id="CantidadP" required="" /><input
                        type="submit" data-wait="Please wait..." id="AgregarP" class="submit-button w-button"
                        value="Agregar" /></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <div id="RecogeDonacion" class="form-block w-form">
                <form id="FormDinero" name="wf-form-Donaciones" data-name="Donaciones" method="post" class="form-2"
                    data-wf-page-id="66275a5b798f9aabd4b39277"
                    data-wf-element-id="8b61d9c5-243b-86b4-ad2e-4d2b7d652348"><label for="Monto"
                        class="field-label-2">Monto</label><input class="text-field-2 w-input" maxlength="256"
                        name="email-2" data-name="Email 2" placeholder="Monto" type="number" id="Monto"
                        required="" /><label for="Divisa" class="field-label-3">Divisa</label><input
                        class="text-field w-input" maxlength="256" name="Divisa" data-name="Divisa"
                        placeholder="Ej. Boliviano, Dolar, Euro" type="text" id="Divisa" required="" /><input
                        type="submit" data-wait="Please wait..." id="AgregarD" class="submit-button w-button"
                        value="Agregar" /></form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <ul role="list" class="list">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div><a id="RealizarD" href="#" class="button-5 w-button">Realizar Donación</a>
        <div class="w-layout-blockcontainer w-container">
            <h1 class="heading-5">Programar la recolección de la donación</h1>
            <div class="form-block-2 w-form">
                <form id="FormRecoleccion" name="email-form" data-name="Email Form" method="get"
                    data-wf-page-id="66275a5b798f9aabd4b39277"
                    data-wf-element-id="12c66b42-760b-1351-555b-f42e1ddcddfa"><label for="Direccion"
                        class="field-label-4">Dirección</label><input class="text-field-4 w-input" maxlength="256"
                        name="Direcci-n" data-name="Dirección" placeholder="Ej. Calle Murillo #9999" type="text"
                        id="Direccion" required="" /><label for="FechaR">Form Label</label><input
                        class="text-field-5 w-input" maxlength="256" name="field" data-name="Field"
                        placeholder="dd/mm/aaaa" type="text" id="FechaR" required="" />
                    <div class="w-widget w-widget-map" data-widget-style="roadmap" data-widget-latlng=""
                        data-enable-scroll="true" role="region" title="" data-enable-touch="true" data-widget-zoom="12"
                        data-widget-tooltip=""></div><input type="submit" data-wait="Please wait..." id="ProgramarR"
                        class="submit-button-2 w-button" value="Programar" />
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </section>
    <section id="Historial" class="section-contenido" data-section="historial">
        <h1 class="heading-4">Historial de donaciones realizadas</h1>
        <div class="w-layout-blockcontainer w-container"></div>
    </section>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66275a5b798f9aabd4b39200"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="scriptdon.js"
        type="text/javascript"></script>
