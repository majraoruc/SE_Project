


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
                <div class="custom-card without-min-height">
                    <h5 class="card-title">Accounts</h2>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width:150px;">Balance</th>
                                    <th style="width:250px;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Primary</td>
                                    <td>$1000</td>
                                    <td><a class="waves-effect waves-light btn">Edit</a> <a
                                            class="waves-effect waves-light btn">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Savings</td>
                                    <td>$16,123</td>
                                    <td><a class="waves-effect waves-light btn">Edit</a> <a
                                            class="waves-effect waves-light btn">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>-$100</td>
                                    <td><a class="waves-effect waves-light btn">Edit</a> <a
                                            class="waves-effect waves-light btn">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <h4>Account</h4>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" type="text" required class="validate">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="balance" type="number" class="validate">
                                <label for="balance">Initial Balance</label>
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


    <div class="fixed-action-btn">
        <a href="#modal" data-target="modal" class="btn-floating btn-large red modal-trigger" href="#modal">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <?php  include_once("template/includes/js.php"); ?>
</body>

</html>

