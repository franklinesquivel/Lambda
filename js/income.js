(function(){

    function initPage() {
        $.ajax({
            url: 'php/Controller.php',
            type: 'POST',
            data: {initIncome: true},
            success: function(r) {
                $('main').html(r);
            }
        })
    }
    
    $(document).ready(function(){
        initPage();

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
                    $('#mdlIncome').modal('close');
                    frmIncome.reset();
                    initPage();
                }
            })
        })
    })

})();