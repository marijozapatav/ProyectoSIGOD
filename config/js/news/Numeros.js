$(document).ready(function() {

$('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

}); 