$(document).ready(function () {
    $('.datepicker').pickadate({
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Cerrar',
        firstDay: 1,
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',

        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100 // Creates a dropdown of 15 years to control year
    });


    $("#frmRegister").submit(function (event) { //Evento submit del formulario
        event.preventDefault();
        if ((isNaN($("#txtAmount").val()) == false) && ($("#txtAmount").val().length > 0) && ($("#txtDescription").val().length > 0) && ($("#dtpDate").val().length != "") && ($("#txtTypeAmount").val().length > 0)) {
            sendData();
        } else {
            Materialize.toast('Favor ingresar todos los datos', 3000, 'rounded');
        }
    });

    function sendData() {
        $.ajax({
            type: 'POST',
            url: 'php/Controller.php',
            data: {
                expenses: 1,
                amount: $("#txtAmount").val(),
                type: $("#txtTypeAmount").val(),
                description: $("#txtDescription").val(),
                date: $("#dtpDate").val()
            }
        }).done(function (r) {
            Materialize.toast(r, 3000, 'rounded');
            $("#mdlRegister").modal('close');
            frmRegister.reset();
            initPage();
        });
    }

    $("#btnModalAdd").on('click', function () {
        console.log("Abrir modal");
        $("#mdlRegister").modal('open');
    });

    function initPage() {
        $.ajax({
            type: 'POST',
            url: 'php/Controller.php',
            data: {
                tblExpenses: 1
            }
        }).done(function (r) {
            $("#tblExpenses").html(r);
        });
    }

    initPage();
});

