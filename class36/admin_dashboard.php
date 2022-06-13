<?php include 'admin_header.php'; ?>


<main class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Admin Dashboard, logged user: <a href="user_profile.php"><span><?php echo $_SESSION['logged_user_name'] ?></span></a>
        </h1>

        <ul>

            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="user_add.php">User Add</a></li>
            <li><a href="user_list.php">User List</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    
    </div>
    </div>
</main>

<?php include 'admin_footer.php'; ?>