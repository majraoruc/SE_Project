
<head>
    <title>Finance Application - Home</title>
    <?php include_once("template/includes/head.php"); ?>
    <?php include_once("template/includes/css.php"); ?>
    <script>
    $(document).ready(function(){
        $("#modal").modal('show');
    });
</script>
</head>

<body>

    
    <?php include_once("template/header.php"); ?>
    <?php include_once("template/sidenav.php"); ?>
     <!-- Modal Structure -->
     <div id="modal" class="modal">
        <div class="modal-content">
            <h4>Member</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="firstname" type="text" required class="validate">
                            <label for="firstname">Firstname</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="lastname" type="text" required class="validate">
                            <label for="lastname">Lastname</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Save</a>
        </div>
      </div>
    </div>
    <div class="container main">
        <div class="row">
            <div class="col s12">
                <div class="current-balance">
                    Current Balance: $2000
                </div>
            </div>
            <!--<div class="col s6">
            Period: Weekly | Monthly | Yearly | Custom
            </div>-->
        </div>

        <div class="row">
            <div class="col m6 s12">
                <div class="custom-card">
                    <h5 class="card-title">Income trending</h2>
                        <div id="income-chart" class="chart">
                        </div>
                </div>
            </div>
            <div class="col m6 s12">
                <div class="custom-card no-bottom-margin">
                    <h5 class="card-title">Top Expenses</h2>
                        <div id="top-expenses-chart" class="chart">
                        </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <div class="custom-card">
                    <h5 class="card-title">Latest Transactions</h2>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Value</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><span class="new badge red">Expense</span></td>
                                    <td>Gas</td>
                                    <td>$23</td>
                                </tr>
                                <tr>
                                    <td><span class="new badge red">Expense</span></td>
                                    <td>Groceries</td>
                                    <td>$51</td>
                                </tr>
                                <tr>
                                    <td><span class="new badge">Income</span></td>
                                    <td>AirBnB</td>
                                    <td>$46</td>
                                </tr>
                                <tr>
                                    <td><span class="new badge">Income</span></td>
                                    <td>AirBnB 2</td>
                                    <td>$56</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("template/includes/js.php"); ?>
    <div class="fixed-action-btn">
        <a href="#modal" data-target="modal" class="btn-floating btn-large red modal-trigger" href="#modal">
            <i class="large material-icons">add</i>
        </a>
    </div>
</body>

</html>
