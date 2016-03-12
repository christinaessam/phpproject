<?php
session_start();
$is_login=false;
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $is_login=true;
}
include "modal_alarms.php";
include ("model/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ITI-Opensource36">

    <title>Borsa</title>

    <!-- Bootstrap Core CSS -->
    <link href="phpbootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="phpbootstrap/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="phpbootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-success btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-danger btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Borsa</a>
            </li>
            <li >
                <a href="#top"  onclick = $("#menu-close").click();>Home</a>
            </li>
                <?php
                if($is_login) {
                    ?>
            <li>

            <a href="#alarms" onclick = $("#menu-close").click(); >Alarms</a>
                </li>
            <li>
                    <a href="#" onclick = $("#menu-close").click(); >My Profile</a>
                </li>
            <li>
                    <a href="#"  class="log_out_butt" onclick = $("#menu-close").click(); >Log Out</a>
</li>
                    <?php
                }
                else{
                ?>
                    <li>
                    <a href="#" class="login_but" onclick = $("#menu-close").click(); >Log In</a>
                    </li>
            <li>
                        <a href="#sign_up" onclick = $("#menu-close").click(); >Sign Up</a>
</li>
                    <?php
                }
                ?>

            <li>
                <a href="#wall-street" onclick = $("#menu-close").click(); >Wall-Street</a>
            </li>

            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>

        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
        </div>
    </header>
    <div class="container-fluid">

    <!-- About -->
    <section id="about" class="about center-block">
            <div class="row">
                <div class="col-md-6  head_title">
                    Borsa Alarm$
            </div>
                <?php
                if($is_login) {
                    ?>
                    <div class="col-md-3 text-center hidden-sm hidden-xs">
                        <a href="#alarms" class="btn btn-dark btn-lg glyphicon glyphicon-bell "> My Alarms</a>
                    </div>
                    <div class="col-md-3 text-center  hidden-sm hidden-xs">
                        <a href="#" class="btn btn-dark btn-lg glyphicon glyphicon-log-out glyphicon-lg log_out_butt"> Log out</a>
                    </div>
                    <?php
                }else {
                    ?>
                    <div class="col-md-3 text-center  hidden-sm hidden-xs">
                        <a href="#" class="btn btn-dark btn-lg glyphicon glyphicon-log-in glyphicon-lg login_but" > Log In</a>
                    </div>
                    <div class="col-md-3 text-center  hidden-sm hidden-xs">
                        <a href="#sign_up" class="btn btn-dark btn-lg glyphicon glyphicon-log-in glyphicon-lg"> Sign Up</a>
                    </div>
                    <?php
                }
                ?>
                <!-- /.row -->
        </div>
        <!-- /.container -->
        <?php
        if (!$is_login) {
            ?>
            <h2 class=" offset-1 btn-dark head_title" id="sign_up"> Sign Up </h2>
            <section  class="services bg-success ">
                <div class="row">
                    <div class="col-md-7">
                                <!-- -->
                        <div class="form-group">
                            <label  for="username" class="col-md-3 control-label">Email</label>

                        <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-envelope icon-2x"></i></span>
                                        <input id="email" class="form-control input-lg" placeholder="Email" required="required" maxlength="100" type="text" name="email"  >
                                    </div>
                            </div>
                        <br>
                        <div class="form-group">
                            <label  for="username" class="col-md-3 control-label">User Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic_addon1">@</span>
                                        <input type="text"  id ="user_name" name="user_name" class="form-control input-lg" placeholder="Username" aria-describedby="basic_addon1">
                                    </div>
</div>
                        <br>

                        <div class="form-group">
                            <label  for="username" class="col-md-3 control-label">Password</label>

                        <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-asterisk icon-2x"></i></span>
                                        <input id="password" class="form-control input-lg" placeholder="Password" required="required" maxlength="60" type="password" name="password" >
                                    </div>
                            </div>
                            <br>
                        <div class="form-group">
                            <label  for="username" class="col-md-3 control-label">Confirm Password</label>

                        <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-asterisk icon-2x"></i></span>
                                        <input id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" required="required" maxlength="60" type="password" name="password_confirmation" >
                                    </div>
                            </div>
                            <br>
                                    <div class="form-group">
                                        <button  id="btn_sign_up" class="btn btn-block btn-primary btn-lg">Sign Up</button>
                                    </div>
                                <div class="form-group">
                                    <div class="topCushion">Already a member? <a href="SignIn.html">Login</a></div>
                                </div>
                                <div class="form-group">
                                    <p>By clicking on "Sign Up", you agree to the <a href="#" >Terms of Service</a> and the <a href="#" >Privacy Policy</a>.</p>
                                </div>
                    </div><!-- end of column 2 -->
                </div><!-- end of well row -->
            </section>
            <?php
        }
        ?>
    </section>
    <?php
    if($is_login) {
        ?>
        <h2 id="alarms" class="offset-1 btn-dark head_title">My Alarms</h2>
        <section  class="services bg-warning table-responsive">
            <!-- Callout -->
            <table class="table table-bordered" id="alarms_table">
                <thead class="table-responsive">
                <tr>
                    <th>Active</th>
                    <th>Share</th>
                    <th>Last Price</th>
                    <th>Alert</th>
                    <th> Last Triggered</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $name=$user['user_name'];
                $result = mysqli_query($borsa_db , "select distinct a.alarm_id , s.share_name , s.share_symbol , s.share_price , a.status,a.condition , a.value , a.date  from alarms a , users u , shares s where a.share_id = s.share_id and u.user_id=a.user_id and u.user_name= '$name'");

                if(!empty($result))
                {
                    while ($row=mysqli_fetch_assoc($result)) {
                        echo "<tr id=".'"'.$row['alarm_id'].'"'.">";
                        if($row['status']==1)
                            echo '<td><input type="checkbox" value="" class="disable_alarm" id="check" checked></td>';
                        else
                            echo '<td><input type="checkbox" value="" class="disable_alarm" id="check"></td>';
                        $share=$row['share_symbol']." ( ".$row['share_name']." )";
                        if($row['condition']==1)
                            $cond='goes above';
                        else
                            $cond='drops below';
                        $alert =$cond . $row['value'];
                        echo '<td>'.$share.'</td>';
                        echo '<td>'.$row['share_price'].'</td>';
                        echo '<td>'.$alert.'</td>';
                        echo '<td>'.$row['date'].'</td>';
                        echo '<td><button type="button" class="btn btn-danger delete_alarm">Delete</button></td>';
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>

            <kbd><span class="glyphicon glyphicon-dashboard"></span>Add Alarm </kbd>
            <br>
            <div class="btn-group col-md-3 col-lg-3">
                <button type="button" class="btn btn-default dropdown-toggle mylabel mydrp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    choose share <span class="caret"></span>
                </button>
                <ul class="mylabel dropdown-menu">
                    <?php
                    $result = mysqli_query($borsa_db , "select share_name,share_symbol from shares");
                    if (!empty($result))
                    {
                        while ($row=mysqli_fetch_assoc($result)) {
                            $share_option=$row['share_symbol']."(".$row['share_name'].")";
                            echo '<li class="my_option"><a class="mydrpelm">'.$share_option.'</a></li>';
                        }
                    }

                    ?>
                </ul>
            </div>
            <!--h3>Send me mail when the share.. </h3-->
            <div class="radio col-md-3 col-lg-3">
                <label><input type="radio" name="optradio" value="0">Drops Below</label>
                <label><input type="radio" name="optradio" value="1">Goes Above</label>
            </div>
            <div class="col-md-3 col-lg-3">
                <input class="form-control" id="alarm_value" type="text" placeholder="Enter Value">
            </div>
            <div class="col-md-3 col-lg-2 col-md-offset-1">
            <button type="button" class="btn btn-success" id="addalarm"> Add Alarm </button>
            </div>
        </section>
        <?php
    }
    ?>
        <section id="wall-street">
                <h2 class="head_title btn-dark">Wall $treet</h2>
            <iframe id="wall-street" src="http://markets.wsj.com/" width="100%" height="600px">Wall Street Journal</iframe>
        </section>
    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map ">
        <h2 class="offset-1 btn-dark  head_title"> Find Us Here</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.475018085345!2d29.906080368709915!3d31.193085036477736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x16cbff5d844ff34b!2z2YXYudmH2K8g2KrZg9mG2YjZhNmI2KzZitinINin2YTZhdi52YTZiNmF2KfYqiAtIElUSQ!5e0!3m2!1sar!2seg!4v1457467822804" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Open Source-36</strong>
                    </h4>
                    <p>Alex-iti<br>Open Source Track</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="opensource.iti@gmail.com">opensource.iti@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; iti 2016</p>
                </div>
            </div>
        </div>
    </footer>
        <!-- Modal -->
</div>
    <!-- jQuery -->
    <script src="phpbootstrap/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="phpbootstrap/js/bootstrap.min.js"></script>
    <script src="phpbootstrap/js/borsa.js"></script>
    <script src="phpbootstrap/js/alarmtable.js"></script>
    <script src="phpbootstrap/js/SignInVal.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>