(function(){

    function initPage() {
        $.ajax({
            url: 'php/Controller.php',
            type: 'POST',
            data: {initIncome: true},
            success: function(r) {
                console.log(r);
            }
        })
    }
    
    $(document).ready(function(){

        initPage();

    })

})();