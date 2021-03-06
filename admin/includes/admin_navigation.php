<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CMS admin -- Logged in as: <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];  ?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li><a href="../logout.php">Logout</a></li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts-dropdown"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts-dropdown" class="collapse">
                            <li>
                                <a href="./posts.php">View All Posts</a>
                            </li>
                            <li>
                                <a href="./posts.php?source=add_post">Add new post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-file"></i> Categories</a>
                    </li>
                    
                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users-dropdown"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users-dropdown" class="collapse">
                            <li>
                                <a href="admin_users.php">All users</a>
                            </li>
                            <li>
                                <a href="admin_users.php?source=add_user">Add new user</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="admin_comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-file"></i> CMS Index</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
