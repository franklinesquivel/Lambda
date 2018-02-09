(function(){
    $(document).ready(function(){
        $("#frmRegisterUser").submit(function(event){
            event.preventDefault();
            sendData();
        });
    })

    function sendData(){
        $.ajax({
            type: 'POST',
            url: 'php/Controller.php',
            data: {
                registerUser: 1,
                name: $("#txtName").val(),
                lastName: $("#txtLastName").val()
            }
        }).done(function (r) {
            Materialize.toast(r, 2000);
            frmRegisterUser.reset();
        });
    }
})()