

<?php 

  $directoryURI = $_SERVER['REQUEST_URI'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('/', $path);
  $last_part = $components[count($components)-1];
?>

<ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
        <div class="user-view">
            <div class="background">

            </div>
            <a href="#user"><img class="circle" src="assets/img/avatar.png"></a>
            <a href="#name"><span class="white-text name">Meho Adislić</span></a>
            <a href="#email"><span class="white-text email">madislic@gmail.com</span></a>
        </div>
    </li>
    <li class="<?php (strtolower($last_part) == "index.php" || trim($last_part) == "" ? "active" : "") ?>"><a href="index.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li class="<?php (strtolower($last_part) == "accounts.php" ? "active" : "") ?>"><a href="accounts.php"><i class="material-icons">account_balance_wallet</i>Accounts</a></li>
    <li class="<?php (strtolower($last_part) == "incomes.php" ? "active" : ""); ?>"><a href="incomes.php"><i class="material-icons">input</i>Incomes</a></li>
    <li class="<?php (strtolower($last_part) == "expenses.php" ? "active" : "") ?>"><a href="expenses.php"><i class="material-icons">shopping_cart</i>Expenses</a></li>
    <li class="<?php (strtolower($last_part) == "members.php" ? "active" : "") ?>"><a href="members.php"><i class="material-icons">account_circle</i>Members</a></li>
    <li class="<?php (strtolower($last_part) == "budget.php" ? "active" : "") ?>"><a href="budget.php"><i class="material-icons">monetization_on</i>Budgets</a></li>
</ul>

