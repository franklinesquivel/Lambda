(function(){

    function initPage() {
        $.ajax({
            url: 'php/Controller.php',
            type: 'POST',
            data: {getReportData: true},
            success: function(r){
                r = JSON.parse(r);
                console.log(r);
                $('main .tblCont').html(r.table);

                var ctx = document.getElementById("reportChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ["Ingresos", "Gastos"],
                        datasets: [{
                            data: [r.data.total.in, r.data.total.ex],
                            backgroundColor: ['#2ecc71', '#e74c3c']
                        }],
                    }
                });
                // document.getElementById("reportChart").style.width = "500px";
                // document.getElementById("reportChart").style.height = "500px";
            }
        })
    }

    $(document).ready(function(){

        initPage();

    })

})();