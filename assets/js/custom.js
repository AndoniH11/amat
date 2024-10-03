jQuery(document).ready(function($) {
    console.log('test');
    // Verifica si ya existe un <h1> en el contenido
    if (!$('h1').length) {
        var title = pageData.title; // Obtiene el título de la página desde los datos pasados desde PHP
        var h1Tag = $('<h1>', {
            class: 'automatic-title',
            text: title
        });
        
        // Aplicar estilos con !important
        h1Tag[0].style.setProperty('font-size', '30px', 'important');
        h1Tag[0].style.setProperty('font-weight', '300', 'important');
        h1Tag[0].style.setProperty('position', 'absolute', 'important');
        h1Tag[0].style.setProperty('left', '50%', 'important');
        h1Tag[0].style.setProperty('transform', 'translate(-50%, 0)', 'important');
        
        // Añade el H1 al inicio del contenido del body
        $('body').prepend(h1Tag);
    }
});