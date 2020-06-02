

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
                    <h5 class="card-title">Incomes</h2>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th style="width:150px;">Value</th>
                                    <th style="width:250px;">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Paycheck</td>
                                    <td>$5000</td>
                                    <td><a class="waves-effect waves-light btn">Edit</a> <a
                                            class="waves-effect waves-light btn">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>AirBnB</td>
                                    <td>$52</td>
                                    <td><a class="waves-effect waves-light btn">Edit</a> <a
                                            class="waves-effect waves-light btn">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h4>Income</h4>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <select>
                                <option value="" disabled selected>Income type</option>
                                <option value="1">Paycheck</option>
                                <option value="2">AirBnB</option>
                                <option value="3">Side project</option>
                            </select>
                            <label>Income Type</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="balance" type="number" class="validate">
                            <label for="balance">Value</label>
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

