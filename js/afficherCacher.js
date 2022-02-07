$(document).ready(function(){
    //Dès qu'on clique sur #b1, on applique hide() au titre
    $("#b1").click(function(){
        $("h1").hide();
    });

    //Dès qu'on clique sur #b1, on applique show() au titre
    $("#b2").click(function(){
        $("h1").show();
    });
});