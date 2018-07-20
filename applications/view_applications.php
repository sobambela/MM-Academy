<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Montgomery &amp; Miller Academy | Educated for Success</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link href='../custom.css' rel='stylesheet' type='text/css'>
    <link href="../countdown_with_background.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="../js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../js/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../js/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="../js/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="../js/flexslider/flexslider.css">
    <link rel="stylesheet" href="../js/isotope/isotope.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../js/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fixes.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="../css/icomoon/style.css" type="text/css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- SKIN -->
    <link rel="stylesheet" href="../css/color-scheme/gold.css" type="text/css">


    <link rel='shortcut icon' href='../favicon.ico' type='image/x-icon' />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>
    <![endif]-->




</head>

<body>



    <div class="outer-wrapper">

        <!-- TOPBAR -->
        <div id="top-bar" class="hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-content">
                            <p>Have any questions? <span></span><i class="icon-mobile2"></i> (021) 851 43 81 <span></span>&bull;<span></span> <i class="icon-mail3"></i><a href="#">info@mm.academy</a></p>
                        </div>
                        <div class="nav-social-icons">
                            <ul class="social-icons">
                                <li class="facebook">
                                    <a href="http://facebook.com" target="_blank">
                                        <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="http://instagram.com" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div>
   
        <!-- NEWS SECTION
=========================================================================== -->
        <section class="border-bottom-fix" id="news-section">
            <a class="scroll smoothScroll" href="#news-section" title="Next Section">Next Section</a>
            <section class="parallax-bg5 padding60">
                <div class="container home-blog">
                    <!-- <div class="space60"></div> -->
                    <h2 class="text-center section-title-blue">Online Applications</h2>
                    <div class="line-gold"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center space40">
                                <table class="table table-bordered " id="applications-table-view" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Surname</th>
                                            <th> Name</th>
                                            <th> DOB</th>
                                            <th> Age</th>
                                            <th> ID No</th>
                                            <th>Date Created</th>
                                            <th>Application Form</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th> Surname</th>
                                            <th> Name</th>
                                            <th> DOB</th>
                                            <th> Age</th>
                                            <th> ID No</th>
                                            <th>Date Create</th>
                                            <th>Application Form</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                <?php
                                    $sql = "SELECT * FROM applications ORDER BY id DESC";
                                    $rs = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($rs) > 0):
                                        $count=0;
                                ?>
                                <?php
                                        while($row = mysqli_fetch_array($rs)){
                                            echo '<tr>
                                                    <td>
                                                    <p class="">'.$count.'</p>
                                                    </td>
                                                    <td>
                                                    <p class="">'.$row['applicants_surname'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class="">'.$row['applicants_firstnames'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class="">'.$row['applicants_dob'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class="">'.$row['applicants_age'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class="">'.$row['applicants_id_passport'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class="">'.$row['date_created'].'</p>
                                                    </td>
                                                    <td>
                                                    <p class=""><a href="/applications/application_forms/'.$row['applcaication_form_file'].'" target="_blank">'.$row['applcaication_form_file'].'</a></p>
                                                    </td>
                                                    <td>
                                                    '."<a form-id='".$row['id']."' title='Delete Application' class='btn btn-danger delete-form' style='padding:4px 7px 6px 7px'><i class='fa fa-trash-o'></i></a>".'
                                                    </td>

                                            </tr>';
                                            $count=$count+1;
                                        }
                                    else:
                                        echo '<tr><td colspan="7">There are no results at present.</td></tr>';
                                    endif;
                                ?>

                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra-padding" style="padding-bottom: 20px;"></div>
            </section>

        </section>

    <!-- FOOTER -->
    <footer>

    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>&copy; Copyright 2016. Montgomery & Miller Academy (Pty) Ltd.</p>
                </div>
                <div class="col-md-4">
                    <div class="f-social pull-right">
                        <a class="fa fa-instagram" href="#"></a>
                        <a class="fa fa-facebook" href="#"></a>
                        <!-- <a class="fa fa-linkedin" href="#"></a>
                        <a class="fa fa-dribbble" href="#"></a>
                        <a class="fa fa-google-plus" href="#"></a>
                        <a class="fa fa-skype" href="#"></a>
                        <a class="fa fa-behance" href="#"></a>
                        <a class="fa fa-stumbleupon" href="#"></a>
                        <a class="fa fa-rss" href="#"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Plugins -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/loader.js"></script>
    <script src="../js/owl-carousel/owl.carousel.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/isotope/isotope.pkgd.js"></script>
    <script src="../js/jflickrfeed.min.js"></script>
    <script src="../js/tweecool.js"></script>
    <script src="../js/flexslider/jquery.flexslider.js"></script>
    <script src="../js/easypie/jquery.easypiechart.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery.inview.js"></script>
    <!--<script src="../js/jquery.countdown_chris.min.js"></script>-->
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.matchHeight-min.js"></script>

    <script src="../js/main.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="../js/gmaps/greyscale.js"></script>


    <!-- <script type="text/javascript" src="../http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="../js/smoothscroll.js"></script>


    <!--      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script> -->
<script src="../js/countdown_with_background.js" type="text/javascript"></script>
<script src="../js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script>

    jQuery(document).ready(function(){
        $('#applications-table-view').dataTable();
        $( document ).on('click','.delete-form', function(){
            if(confirm('Are you sure you want to delete form?')){
                jQuery.post('process.php', {
                        'action': 'delete_form',
                        'id': $(this).attr('form-id')
                }, function (data){
                    var response= JSON.parse(data);
                    alert(response.msg);
                    location.reload();
                });
                
            }
        });
    });
			
		
</script>

</body>

</html>