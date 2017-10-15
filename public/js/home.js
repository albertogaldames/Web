$(document).ready(function(){

    $('.sidenav--opener').click(function(){
        $('.sidenav--close').show();
        $('#sidenav').css('transform','translateX(-310px)');   
    });
    $('.sidenav--close').click(function(){
        $('.sidenav--close').hide();
        $('#sidenav').css('transform','translateX(310px)');   
    })
});
