<nav class="navbar navbar-default">
    <div class="container-fluid container">
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <?php if(!isset($_GET['page'])):?>
                    <li class='active'><a href="index.php?page=1">Home</a></li>
                    <li <?=($_GET['page']==2) ? "class='active'":""?>><a href="index.php?page=2">Add</a></li>
                    <li <?=($_GET['page']==3) ? "class='active'":""?>><a href="index.php?page=3">Show</a></li>
                <?php else:?>
                    <li <?=($_GET['page']==1) ? "class='active'":""?>><a href="index.php?page=1">Home</a></li>
                    <li <?=($_GET['page']==2) ? "class='active'":""?>><a href="index.php?page=2">Add</a></li>
                    <li <?=($_GET['page']==3) ? "class='active'":""?>><a href="index.php?page=3">Show</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>