<!DOCTYPE html>

<head>
    <title>Finance Application - Home</title>
    <?php include_once("template/includes/head.php"); ?>
    <?php include_once("template/includes/css.php"); ?>
</head>

<body>
    <?php include_once("template/header.php"); ?>
    <?php include_once("template/sidenav.php"); ?>

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
</body>

</html>