jQuery.MCELightBox = function (config) {

    if (config.id == undefined) {
        alert('Debe asignar un id para el popup');
        return;
    }

    var _config = {
        id: config.id,
        width: (config.width != undefined ? config.width : 400),
        image: (config.image != undefined ? config.image : false),
        content: (config.content != undefined ? config.content : ''),
        title: (config.title != undefined ? config.title : '')
    };

    var id = "#" + _config.id;

    // Borramos el popup por si ya existìa
    $(id).remove();

    // Creamos el popup
    var popup = '<div style="width:' + _config.width + 'px;margin-left:-' + (_config.width / 2) + 'px" class="lightBox-Container"><div class="lightBox-Header">' + _config.title + '</div><div class="lightBox-Body">' + (_config.image ? '<img class="lightBox-image" src="' + _config.content + '" />' : _config.content) + '</div><div class="ligthBox-Footer"><button class="btn-close" type="submit">Cerrar</button></div></div>';

    $("body").prepend(popup);

    // Anidamos el evento cerrar a nuestro boton
    $('.btn-close', id).click(function () {
        $(id).hide();
    })
}