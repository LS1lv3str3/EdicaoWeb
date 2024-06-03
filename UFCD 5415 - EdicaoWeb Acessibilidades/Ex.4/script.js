$(function() {
    $("#tabs").tabs();

    let bg_checked = true;
    $("#trocarCorBtn").click(function() {
        if (bg_checked){
            $(".novo_elemento").css("background-color", "#F2E8CF");
        }
        else{
            $(".novo_elemento").css("background-color", "rgba(72, 132, 84, 0.7)");
        }
        bg_checked = !bg_checked;
    });

    $("#toggleElementBtn").click(function() {
        $("#toggleElement").toggle();
    });
});


