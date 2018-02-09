(function(){

    function initPage() {
        $.ajax({
            url: 'php/Controller.php',
            type: 'POST',
            data: {initIncome: true},
            success: function(r) {
                if(Number(r) == -1){
                    $('main').html(`
                        <br><br><br>
                        <h2 class='center red-text'>No existen registros de ingresos!</h2>
                        <br><br><br>
                    `);
                }else{
                    $('main').html(r);
                }
            }
        })
    }
    
    $(document).ready(function(){
        initPage();

        frmIncome.onsubmit = function(){return false;}

        $('.btnSend').click(function(){
            $.ajax({
                url: 'php/Controller.php',
                type: 'POST',
                data: {addIncome: true, data: {
                    date: frmIncome.txtDate.value,
                    type: frmIncome.txtType.value,
                    description: frmIncome.txtDesc.value,
                    amount: frmIncome.txtAmount.value,
                }},
                success: function(r){
                    Materialize.toast('El ingreso ha sido añadido éxitosamente!', 2000);
                    $('#mdlRegister').modal('close');
                    frmIncome.reset();
                    initPage();
                }
            })
        })
    })

})();