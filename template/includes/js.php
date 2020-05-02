<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/toastr.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
$('.sidenav').sidenav();
$('.fixed-action-btn').floatingActionButton();
$('.modal').modal();
$('select').formSelect();

$('.profile-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false,
    hover: true,
    gutter: 0,
    coverTrigger: false,
    alignment: 'right',
    stopPropagation: false
});

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

$('.modal-close').on('click', function() {
    toastr.success('Successfully saved data');
});

// Income chart
google.charts.load('current', {
    'packages': ['line']
});
google.charts.setOnLoadCallback(drawIncomeChart);

// Top expenses chart
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawTopExpensesChart);

function drawTopExpensesChart() {
    var data = google.visualization.arrayToDataTable([
        ['Expense', 'Value'],
        ['Bills', 1000],
        ['Shopping', 1200],
        ['Donations', 500],
        ['Fuel', 300]
    ]);

    var options = {
        width: '100%',
        height: 300
    };

    var chart = new google.visualization.PieChart(document.getElementById('top-expenses-chart'));

    chart.draw(data, options);
}

function drawIncomeChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Month');
    data.addColumn('number', 'Income');

    data.addRows([
        ['Jan', 1000],
        ['Feb', 1250],
        ['Mar', 3000],
        ['Apr', 2220],
        ['May', 4000],
        ['Jun', 5000],
        ['Jul', 1000],
        ['Aug', 1231],
        ['Sep', 2000],
        ['Oct', 2000],
        ['Nov', 3200],
        ['Dec', 4000],
    ]);

    var options = {
        width: '100%',
        height: 300,
        legend: {
            position: 'none'
        }
    };

    var chart = new google.charts.Line(document.getElementById('income-chart'));

    chart.draw(data, google.charts.Line.convertOptions(options));
}

$(window).resize(function() {        
        setTimeout(function() {
            drawIncomeChart();
            drawTopExpensesChart();
        }, 1000);
});
</script>