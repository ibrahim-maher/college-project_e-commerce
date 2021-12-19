<?php
session_start();
$pageTitle=' Dashboard';

if (isset($_SESSION['Username'])) {
    
    include 'init.php';
    
    ?>

<div class="home-stats">
			<div class="container text-center">
				<h1 class="my-5">Dashboard</h1>
				<div class="row justify-content-center">
					<div class="col-md-3 m-3">
                            <div class="card bg-dark text-light" style="width: 18rem;">
                                <h3 ><i class="fa fa-users mt-4"></i></h3> 
                                <div class="card-body">
                                    <h5 class="card-title">Total Members</h5>
                                    <h2><?php echo countItems('UserID', 'users') ?></h2>                                           
                                    <a href="members.php" class="btn btn-primary">All members</a>
                                </div>
                            </div>
					</div>

                    <div class="col-md-3 m-3">
                            <div class="card bg-dark text-light" style="width: 18rem;">
                                <h3 ><i class="fa fa-bars mt-4"></i></h3> 
                                <div class="card-body">
                                    <h5 class="card-title">Total categories</h5>
                                    <h2><?php echo countItems('cat_id', 'categories') ?></h2>                                           
                                    <a href="categories.php" class="btn btn-primary">All categories</a>
                                </div>
                            </div>
					</div>

                    <div class="col-md-3 m-3">
                            <div class="card bg-dark text-light" style="width: 18rem;">
                                <h3 ><i class="fa fa-plus mt-4"></i></h3> 
                                <div class="card-body">
                                    <h5 class="card-title">Total items</h5>
                                    <h2><?php echo countItems('it_id', 'items') ?></h2>                                           
                                    <a href="items.php" class="btn btn-primary">All items</a>
                                </div>
                            </div>
					</div>

                </div>
            </div>
</div>


    <?php

    include  $tpl.'footer.php';
}
else
{
    echo " you are not authorized to view this page " ;
    header('Location: index.php'); 
    exit(); 
}