cur_image = '';

jQuery(document).ready(function(){
    newImg();

    jQuery('form.sorter button').on('click', function(e){
        e.preventDefault();
        if (jQuery(this).attr('value') == 9 ){
            newImg();
        }else{
            jQuery.ajax({
                type: "POST",
                url: "lib/ajax/sortImage.ajax.php",
                data: {
                    image: cur_image,
                    dir: jQuery(this).attr('value')
                },
                success: function(n) {
                    n = jQuery.parseJSON(n);
                    if (n.success == true){
                        images.splice(jQuery.inArray(cur_image, images),1);
                        newImg();
                    }else{
                        showError('Ein Fehler ist aufgetreten - ' + n.state );
                        images.splice(jQuery.inArray(cur_image, images),1);
                        setTimeout('newImg()', 1000);
                    }
                }
            });
        }
    });


});

function newImg(){
    cur_image = images[Math.floor(Math.random() * images.length)];
    jQuery('#imageView').removeClass('png');
    if (cur_image.substr(cur_image.length - 3) == 'png'){
        jQuery('#imageView').addClass('png');
    }
    jQuery('#imageView').html('<h3><a href="images/' + cur_image + '" target="_blank">' + cur_image + '</a></h3><img src="images/' + cur_image + '">');
    var obj = { Page: cur_image, Url: cur_image };
    //history.pushState(obj, obj.Page, obj.Url);
}

function showError(text) {
    $container = jQuery('#notification');
    $container.empty();
    $container.prepend('<div class="jsalert alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' + text + '</div>');
    setTimeout('clearSides()', 2000);
}

function showSuccess(text) {
    $container = jQuery('#notification');
    $container.empty();
    $container.prepend('<div class="jsalert alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' + text + '</div>');
    setTimeout('clearSides()', 1500);
}

function clearSides() {
    jQuery('#notification').empty();
}
