<?php
$is_login=true;
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
            <li>
                <?php
                if($is_login) {
                    ?>
                    <a href="#alarms" onclick = $("#menu-close").click(); >Alarms</a>
                    <a href="#" onclick = $("#menu-close").click(); >My Profile</a>
                    <a href="#" onclick = $("#menu-close").click(); >Log Out</a>

                    <?php
                }
                else{
                ?>
                    <a href="#" onclick = $("#menu-close").click(); >Log In</a>
                    <a href="#" onclick = $("#menu-close").click(); >Sign Up</a>

                    <?php
                }
                ?>
            </li>
            <li>
                <a href="#wall-street" onclick = $("#menu-close").click(); >Wall-Street</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
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
    <div class="container">

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
                        <a href="#" class="btn btn-dark btn-lg glyphicon glyphicon-log-out glyphicon-lg"> Log out</a>
                    </div>
                    <?php
                }else {
                    ?>
                    <div class="col-md-3 text-center  hidden-sm hidden-xs">
                        <a href="#" class="btn btn-dark btn-lg glyphicon glyphicon-log-in glyphicon-lg"> Log In</a>
                    </div>
                    <div class="col-md-3 text-center  hidden-sm hidden-xs">
                        <a href="#" class="btn btn-dark btn-lg glyphicon glyphicon-log-in glyphicon-lg"> Sign Up</a>
                    </div>
                    <?php
                }
                ?>
                <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
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
                <tr id="1">
                    <td><input type="checkbox" value="" class="disable_alarm"></td>
                    <td><?php ?></td>
                    <td>john@example.com</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>
                        <button type="button" class=" delbtn btn btn-danger delete_alarm" >Delete</button>
                    </td>
                </tr>
                <tr id="2">
                    <td><input type="checkbox" value="" class="disable_alarm"></td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>
                        <button type="button" class="btn btn-danger delbtn delete_alarm">Delete</button>
                    </td>
                </tr>
                <tr id="3">
                    <td><input type="checkbox" value=""  class="disable_alarm"></td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>
                        <button type="button" class="btn btn-danger delbtn delete_alarm">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>
        <?php
    }
    ?>
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="phpbootstrap/img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="phpbootstrap/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="phpbootstrap/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="phpbootstrap/img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

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
        <h2 class="offset-1 btn-dark  head_title">You Can Find Us Here</h2>
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
</div>
    <!-- jQuery -->
    <script src="phpbootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="phpbootstrap/js/bootstrap.min.js"></script>
    <script src="phpbootstrap/js/borsa.js"></script>

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