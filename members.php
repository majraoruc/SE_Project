

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
                    <h5 class="card-title">Members</h2>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width:250px;"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Mujo Adislić</td>
                                    <td><a class="waves-effect waves-light btn">Edit</a> <a
                                            class="waves-effect waves-light btn">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Fikreta Adislić</td>
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


    <div class="fixed-action-btn">
        <a href="#modal" data-target="modal" class="btn-floating btn-large red modal-trigger" href="#modal">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <?php include_once("template/includes/js.php"); ?>
</body>

</html>


