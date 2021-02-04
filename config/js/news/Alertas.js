$(document).ready(function() {
    $(".NO-DISPONIBLE").click(function() {
        swal({
            title: "",
            text: "Esta seccion aun no esta disponible",
            type: "error",
            timer: 2000,
            showConfirmButton: false
        })
    });
})