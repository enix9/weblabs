
$( document ).ready(function() {
    $('.links').hide();

    $('.items').click(function (){
        if($(this).next().is(":hidden")) {
            $(this).next().show();
        }else{
            $(this).next().hide();
        }
    })

});