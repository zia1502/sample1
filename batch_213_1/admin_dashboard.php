<?php include 'admin_header.php';?>


<h1>Admin Dashboard: logged user <a href="user_profile.php"><span style="font-size: 12px;"><?php echo $_SESSION['logged_user_name'] ?></span></a></h1>

<ul>
    <li><a href="admin_dashboard.php">Dashboad</a></li>
    <li><a href="user_add.php">User Add</a></li>
    <li><a href="user_list.php">User List</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>


<?php include 'admin_footer.php';?>