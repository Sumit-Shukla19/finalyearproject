<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">HOME SITE</a></li>
                
           
                    
                    
                    
                    
                    
                    
                   
                       
                       
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                   
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Courses <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="./post.php">View all course </a>
                            </li>
                            <li>
                                <a href="post.php?source=add course">Add course</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i>Categories</a>
                    </li>
                   
                    
                    <li class="">
                        <a href="./comments.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li>
                    
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">View all users</a>
                            </li>
                            <li>
                                <a href="users.php?source=add user">Add user</a>
                            </li>
                            </ul> -->
                    <!-- </li> -->
                    <!-- <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>