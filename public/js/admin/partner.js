$(document).ready(function() {

    var $elem = $(document);

    $('.partner').hide();

    $('#partner_check').click(function(){
        $('.partner').toggle();

        $('html, body').animate({scrollTop: $elem.height()}, 800);

        if($(".btn").val() == "Add Guest"){
            $(".btn").val("Add Guests" );
        }else{
            $(".btn").val("Add Guest" );
        }
    })

});
