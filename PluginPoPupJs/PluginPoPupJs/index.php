<html>
    <head>
        <title>PlugIn PopUp y JS </title>
        <style>
            body{margin:0;padding:0;background:#222;color:#eee;}
        </style>
        <link href="css/estilo.css" rel="stylesheet" />
    </head>
<body>
    <div id="nVentana" style="width:600px; margin-left:-300px; display: none;" class="lightBox-Container">
        <div class="lightBox-Header">Titulo de la Ventana</div>
        <div class="lightBox-Body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class='ligthBox-Footer'>
            <button class="btn-close" type="submit">Cerrar</button>
        </div>
    </div>
    <button id="btnMostar">Mostar</button>

    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"/>
    <script src="js/mce.lightbox.jquery.js"/>
    <script>
        
        $(document).ready(function () {
            $("#btnMostar").click(function () {
                $.MCELightBox({
                    id: 'mPrueba',
                    width: 600,
                    content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    title: 'Genial, soy un hermoso popup'
                });
            })            
        })
    </script>
</body>
</html>