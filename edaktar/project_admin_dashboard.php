<?php include 'project_admin_header.php'; ?>


<main class="container">
<div class="nav-scroller py-1 mb-2">
    <?php include 'project_nav.php'; ?>
</div>
    <div class="row">
        <div class="col-md-12">
        <h1>Admin Dashboard, logged user: <a href="user_profile.php"><span><?php echo $_SESSION['logged_user_name']?></span></a>
        </h1>

        <ul>

            <li><a href="project_add.php">Add Project</a></li>
            <li><a href="project_list.php">Project List</a></li>
            <li><a href="project_logout.php">Logout</a></li>
        </ul>

    
    </div>
    </div>
</main>

<?php include 'project_admin_footer.php'; ?>