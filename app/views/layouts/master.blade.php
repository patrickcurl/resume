<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ruby on Rails developer for hire, PHP Developer for Hire - Patrick Curl is a Rails developer, looking for his next big move. He has 10 + years experience in php, and 2 years experiecne using/self-learning Rails">
        <meta name="keywords" content="Ruby on Rails Resume, PHP Resume, Laravel Resume, AngularJS Resume, AngularJS Developer Resume, Ruby on Rails Developer Resume">
        <meta name="author" content="Patrick Curl">

        <title>Ruby on Rails Developer Resume | PHP Developer For Hire</title>

        <!-- Styles
        ================================================== -->
        <link rel='stylesheet' type="text/css" media="screen" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
        <link href="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-modal-bs3patch.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-modal.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/freelancer.css">

        <!-- IE support
        ================================================== -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE 7]>
          <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->
        <style>
body {background:#fff; font-family:Verdana, Geneva, sans-serif; font-size:12px; line-height:20px; color:#545353;}

.contContainer {
    width:960px;
    margin:0px auto;
    position:relative;
    z-index:12;
    }

/* Positions the contact form so it doesn't interfere with any other content, as well as a z-index above any other elements on the page */
#contactFormContainer {
    position:absolute;
    left:368px;
    z-index:12;
    }

/* Hides the whole contact form until needed */
#contactForm {
    height:389px;width:658px;
    background:#515151 url(../img/birdy.jpg) no-repeat 241px 11px;
    border:1px solid #929191;
    padding:7px 12px;
    color:#fff;
    display:none;
    }

/* Loading bar that will appear while the ajax magic is happening */
.bar{
    display:none;
    background:url(../img/ajax-loader.gif) no-repeat center;
    margin-top:100px;
    height:40px; width:230px;
    }

/* Hides the confirmation message until needed */
#messageSent {display:none;}

/* This hides the form validation alert messages until needed */
#contactForm span {
    display:none;
    font-size:9px;
    line-height:10px;
    padding-left:6px;
    color:#f5c478;
    }

/* Some styling for the contact button */
#contactFormContainer .contact {
    height:47px; width:211px;
    background:url(../img/contact_me.png);
    position:absolute;
    left:368px; bottom:-44px;
    cursor:pointer;
    }

/* Hides the darkening layer for the Modal effect. The z-index is necessary for layering purposes, and be sure to keep the positioning/height/width the same */
#backgroundPopup{
    display:none;
    position:fixed;
    _position:absolute;
    height:100%; width:100%;
    top:0; left:0;
    background:#000;
    z-index:11;
    }

/* Form styling from here on out. There is nothing in here that you HAVE to use to get this to work */
#contactForm textarea, #contactForm input {
    width:180px;
    background:#6d6d6d url(../img/contact_input.png) repeat-x top;
    color:#fff;
    border:1px solid #8a8a8a;
    height:15px;
    line-height:14px;
    font-size:11px;
    padding:2px 2px 0px;
    }
#contactForm input {background-position:0px -20px;}
#contactForm textarea {height:114px; font-family:Verdana, Geneva, sans-serif;}
#contactForm .submit {
    border:1px solid #aba8a8;
    background:#e5e5e5;
    text-transform:uppercase;
    color:#4d4d4d;
    font-weight:bold;
    padding:7px 16px 7px 14px;
    height:37px; width:124px;
    cursor:pointer;
    float:left;
    margin-top:196px;
    }
#contactForm .submit:active {background:#cacaca; }
#contactForm label {padding-left:4px; font-weight:bold;}
#contactForm p {padding-bottom:8px;}
#contactForm .input_boxes {float:left; width:204px;}

#dummycontent {padding-top:100px; height:900px; position:relative;}
.bottomlink {position:absolute; bottom:0;}
        </style>
    </head>

    <body>

<div class="contContainer hidden-xs">
    <div id="contactFormContainer">
        <div id="contactForm">
            <div class="loader"></div>
            <div class="bar"></div>
            <form action="/mail" class="contactForm" name="cform" method="post">
                <p>Ruby on Rails Developer for hire : Need a kickass developer? Drop me a line!</p>
                <div class="input_boxes">
                    <p><label for="name">Name</label><span class="name-missing">Please enter your name</span><br />
                    <input id="name" type="text" value="" name="name"  /></p>
                    <p><label for="e-mail">E-mail</label><span class="email-missing">Please enter a valid e-mail</span><br />
                    <input id="e-mail" type="text" value="" name="email" /></p>
                    <p><label for="message">Message</label><span class="message-missing">Say something!</span><br />
                    <textarea id="message" rows="" cols="" name="message"></textarea></p>
                 </div>
                 <input class="submit" type="submit" name="submit" value="Submit Form" onfocus="this.blur()"  />
            </form>
      </div>
      <div class="contact"></div>
  </div>
  </div>
        <div class="container resume" >

            <!-- Heading
            ================================================== -->
            <div class="row heading">

                <div class="col-xs-11 col-md-8">
                    <img class="my-picture" src="img/patrick-curl.jpg" alt="Ruby on Rails Developer Resume">
                    <img class="layout-topborder-480px" src="img/css/topborder-480px.png" alt="corner top right">
                    <img class="layout-topborder-320px" src="img/css/topborder-320px.png" alt="corner top right">
                    <h1 class="my-name">Patrick Curl</h1>
                    <h2 class="my-profession">Ruby on Rails Developer.</h2>
                    <p class="my-message">
                        <strong><i class="icon-comment-alt"></i>&nbsp;Greetings</strong> If you made it to this page, it probably means you need a KICKASS Ruby on Rails developer, and of course you came knocking on my virtual door. I've been designing web pages, back when geocities was popular(circa 1998).</p><p>I've Spent a good decade just doing mostly freelance work, and installing apps (Drupal, OsCommerce, Wordpress, PHPNuke, Joomla, etc..).  Hacking/Designing already built cms's was mostly all I was good at - but I wanted to be better - so for the past two years I've been highly devoted to learning Object oriented coding, and standard best practices : i.e. -unlearn my hacking/spaghetti coding ways for more efficient methods and best practices. I'm hoping for my next career to not only be some place I can write aswesome code, but also where I can learn a lot. .</p><p>I've developed small apps and side projects on Ruby on Rails, and Laravel a PHP framework that is very similar to Rails, and enjoy both immensely. PHP for the longest time was daunting to create a full-scale project from scratch, Laravel makes it much easier, and Ruby on Rails is just always easy and fun - I especially like Ruby's  easy to read syntax.</p>Why did I go w/ Laravel over Rails for my latest projects? --deployability, my current company was w/ hostgator at the time, which couldn't house a new Ruby on Rails app. Now that we've migrated to Linux VPS, who knows? </p><p>Am I an expert? Nah - But I know where to get free access to developers, and devops, when I hit the inevitable brick wall(IRC CHAT) and I'm always focused on learning how things work. </p>
                </div>

                <div class="col-xs-8 col-md-3 col-md-offset-1 services" style="margin-top:30px;">
                    <img class="layout-topborder-screen" src="img/css/topborder-screen.png" alt="corner top right">
                    <h2 class="my-services">My Services <i class="fa fa-cogs"></i></h2>
                    <ul>
			<li><span class="phone-480px"><li class="icon-pushpin"></i></span>Ruby on Rails Development</li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span>MVPs</li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span>Mockups</li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span>SEO Consulting</li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span>Laravel App Development</li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span>Wordpress Installation/Customization</li>
                    </ul>
                     <h2 class="my-services">Code Examples<i class="fa fa-code fa-fw"></i></h2>
                    <ul>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span><a href="https://github.com/pixelgremlins/learn_ruby">Learn Ruby Solutions</a></li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span><a href="https://github.com/pixelgremlins/mykoans">Ruby Koans (Solved)</a></li>
                        <li><span class="phone-480px"><i class="icon-pushpin"></i></span><a href="https://github.com/pixelgremlins/CodeEvalSolutions">CodeEval Solutions</a></li>
		
                    </ul>
                    <a href="files/Resume_PatrickCurl_02_05_14.pdf" class="btn btn-info">Download Resume</a>

                    <strong>Salary Requirement : $70,000 + Relocation if Required.</strong>
                    <br />* Negotiable.
                </div>

            </div>

            <!-- Tabs
            ================================================== -->
            <ul class="nav nav-tabs" id="#myTab">
                <li class="active">
                    <a href="#resume-tab" data-toggle="tab"><i class="fa fa-tasks"></i> Resume</a>
                </li>
                <li>
                    <a href="#portfolio-tab" data-toggle="tab"><i class="fa fa-briefcase"></i> Portfolio</a>
                </li>
                <li>
                    <a href="#contact-tab" data-toggle="tab"><i class="fa fa-envelope"></i> Contact</a>
                </li>
            </ul>

                    <div class="tab-content">

                        <!-- Resume
                        ================================================== -->
                        <div id="resume-tab" class="tab-pane row active fade in">

                            <!-- column 1 -->
                            <div class="col-xs-8 col-md-4">

                                <h3 class="my-caption">Education</h3>

                                <h4 class="my-activity">Certificate in Massage Therapy</h4>
                                <h5 class="my-venture">Utah College of Massage Therapy<span>2002-2003</span></h5>

                                <h4 class="my-activity">AS in Software Development (Currently Enrolled)</h4>
                                <h5 class="my-venture">Sinclair Community College - Dayton, OH <span>2011 - Current</span></h5>


                                <h3 class="my-caption">Published</h3>

                                <h4 class="my-activity">QuickOnlineTips</h4>
                                <h5 class="my-venture" ><i class="fa fa-pencil-square-o"></i><a href="http://www.quickonlinetips.com/archives/2010/03/first-social-media-consulting-gig/">How to Secure Your First Social Media Consulting Gig</a><span>03/10</span></h5>
                                <h5 class="my-venture" ><i class="fa fa-pencil-square-o"></i><a href="http://www.quickonlinetips.com/archives/2010/05/social-media-trumps-seo/">Six Reasons Social Media Trumps SEO</a><span>05/10</span></h5>
                                <h5 class="my-venture" ><i class="fa fa-pencil-square-o"></i><a href="http://www.quickonlinetips.com/archives/2010/05/local-businesses-dominate-twitter/">8 Easy Steps for Local Businesses to Dominate Twitter</a><span>05/10</span></h5>
                            </div>

                            <!-- column 2 -->
                            <div class="col-xs-8 col-md-4">

                                <h3 class="my-caption">Employment</h3>

                                <h4 class="my-activity">Lead Developer (Web)</h4>
                                <h5 class="my-venture">RecycleABook.com<span>06/2013 - Present</span></h5>
                                <p  class="my-specifics">
                                    Create a CRM for buying used textbooks, and also a PriceComparison engine similar to Bookscouter.com.
                                    <a name="popover" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-content="Features of CRM: Shopping Cart, API for Bookscouter etc to pull in quotes, Sort and Filter orders using AngularJS, Sort and Filter Files assigned to Buyers(payroll, etc..), Drag and drop files, and assign files to buyers using inline editing.
                                    <br /><br />Api's used: Amazon Product API for book data, UPS Shipping API for shipping labels.
                                    <br /><br />Cache/Sessions: Redis.
                                    <br /><br />Server Stack: 2 App Servers w/ content duplicated via GlusterFS and served up via nodebalancers. 1 Central Storage Server for Redis, File Uploads, Analytics(Piwik), Mysql(Master). All reads come from a local mysql slave, w/ writes going to the master. Nginx + php5-fpm php5.4 + APC + Varnish.
">More details...</a>

                                                                    </p>

                                <h4 class="my-activity">Chief Technology Officer</h4>
                                <h5 class="my-venture">Complete Solutions Inc. (Insurance agency w/ 2000+ agents nationwide)<span>06, 2011 - 06, 2013</span></h5>
                                <p  class="my-specifics">
                                    Managed many wordpress installations, and seo marketing campaigns for multiple sites. <a name="popover" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-content="<ul><li><a href='http://www.medicareplanstoday.com'>MedicarePlansToday.com</a></li><li><a href='http:  //www.sellmedsup.com'>SellMedSup.com</a></li><li><a href='http://www.csi-411.com'>CSI-411.com</a></li><li><a href='http://www.sellfinalexpense.com'>SellFinalExpense.com</a></li><li><a href='http://www.vandaliamastermasons.com'>VandaliaMasterMasons.com</a></li><li><a href='http://www.salesgoliath.com'>SalesGoliath.com</a></li></ul> Achieved 1st rank in google for keyword 'final expense'. Made all technical decisions and handled everything relating to the web properties. Coded custom plugins for wordpress to create a mini-crm system. Installed and managed SugarCRM for leads, built a bridge between wordpress sites and SugarCRM.">More details...</a>

                                </p>
                                <h4 class="my-activity">Marketing Director</h4>
                                <h5 class="my-venture">MarketingOC<span>03, 2010 - 03, 2011</span></h5>
                                <p  class="my-specifics">
                                    Installed, managed, and tweaked wordpress sites. Created SEO/Social Media Marketing quotes for customers. Created exciting engaging twitter profiles, and facebook pages. Helped offer suggestions for imrpovements. Tightened SEO by ensuring good high quality backlinks, and a strong on-page SEO score.
                                </p>



                            </div>

                            <!-- column 3 -->
                            <div class="col-xs-8 col-md-4">

                                <h3 class="my-caption">Graphic &amp; Multi Media Skills</h3>

                                <h4 class="my-skill">
                                    Gimp
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Photoshop
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>

                                <h3 class="my-caption">Programming Skills</h3>

                                <h4 class="my-skill">
                                    HTML(5) &amp; CSS(3)
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Javascript &amp; jQuery
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    PHP &amp; SQL
                                    <span class="pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Ruby
                                    <span class="pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Java
                                    <span class="pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h3 class="my-caption">Frameworks</h3>

                                <h4 class="my-skill">
                                    Rails
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Laravel
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Wordpress
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    NodeJS
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    AngularJS
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Twitter-Bootstrap
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </h4>
                                <h4 class="my-skill">
                                    Web2Py
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>
                                <h3 class="my-caption">Foreign Languages</h3>

                                <h4 class="my-skill">
                                    Spanish
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </h4>

                            </div><!-- end of resume-tab, column 3 -->

                        </div><!-- end of resume-tab -->

                        <!-- Portfolio
                        ================================================== -->
                        <div id="portfolio-tab" class="tab-pane row fade">



                            <div class="row">
                              <div class="col-xs-6 col-md-4">
                                 <a href="#full-width" class="thumbnail" data-toggle="modal" >
                                    <img src="img/portfolio/rab/recycleabook-ss.png" alt="...">
                                  </a>
                                </div>
                            </div>
                            <div class="full-width" style="position: relative; overflow: hidden">

          </div>

                            <!-- end of portfolio -->


                        </div><!-- end of portfolio-tab -->

                        <!-- Contact
                        ================================================== -->
                        <div id="contact-tab" class="tab-pane fade">

                            <!-- google map container -->
                            <div id="my-location">
                            </div>

                            <div class="row">

                                <!--column 1 -->
                                <div class="col-md-4">

                                    <h3 class="my-caption">Personal Information</h3>
                                    <h4 class="my-info">Birthday <span>November 14, 1979</span></h4>
                                    <h4 class="my-info">Address <span>3653 Canary Way</span></h4>
                                    <h4 class="my-info">&nbsp;<span>Eagle Mountain, UT 84005</span></h4>

                                </div>

                                <!--column 2 -->
                                <div class="col-md-4">

                                    <h3 class="my-caption">Contact Me</h3>

                                    <h4 class="my-info">
                                        <i class="icon-phone"></i> Phone
                                        <span>937.422.8646</span>
                                    </h4>

                                    <h4 class="my-info">
                                        <i class="icon-envelope"></i> Email
                                        <span>
                                            <a href="mailto:patrickwcurl@gmail.com">patrickwcurl@gmail.com</a>
                                        </span>
                                    </h4>

                                    <h4 class="my-info">
                                        <i class="icon-globe"></i> Website / Blog
                                        <span>
                                            <a href="http://patrickcurl.com" target="_blank">patrickcurl.com</a>
                                        </span>
                                    </h4>

                                </div>

                                <div class="col-md-4">

                                    <h3 class="my-caption">Follow Me</h3>
                                    <h4 class="my-info">
                                        <i class="icon-google-plus"></i>
                                        <span>
                                            <a href="#" target="_blank">Google+</a>
                                        </span>
                                    </h4>
                                    <h4 class="my-info">
                                        <i class="icon-facebook"></i>
                                        <span>
                                            <a href="http://www.facebook.com/patrickwcurl" target="_blank">Facebook</a>
                                        </span>
                                    </h4>
                                    <h4 class="my-info">
                                        <i class="icon-twitter"></i>
                                        <span>
                                            <a href="http://www.twitter.com/patrickcurl" target="_blank">Twitter (12k+ followers)</a>
                                        </span>
                                    </h4>
                                    <h4 class="my-info">
                                        <i class="icon-linkedin"></i>
                                        <span>
                                            <a href="http://www.linkedin.com/in/patrickcurl" target="_blank">LinkedIn (7500+ connections)</a>
                                        </span>
                                    </h4>

                                </div><!-- end of column 3 -->

                            </div><!-- end of contact-tab, row -->

                        </div><!-- end of contact-tab -->

                    </div><!-- end of tab-content ??? -->
<!-- Modal -->
                      <div id="full-width" class="modal container fade" tabindex="-1" style="display: none;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">RecycleABook.com</h4>
  </div>
  <div class="modal-body">
    <a href="img/portfolio/rab/RecycleABook.com-backend-files.png" >
        <img src="img/portfolio/rab/RecycleABook.com-backend-files.png" class="img-thumbnail portfolio-modal" />
    </a>
    <img src="img/portfolio/rab/recycleabook-ss.png" class="img-thumbnail portfolio-modal"  />
  </div>

</div>
        </div><!-- end of container -->

        <div id="backgroundPopup"></div>
        <!-- Javascript
        ================================================== -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="js/jquery-1.11.0.min.js"></script>


        <script src="js/jquery.masonry.min.js"></script>
        <script src="js/bootstrap2.min.js"></script>
        <script src="js/bootstrap-modalmanager.js"></script>

        <script src="js/bootstrap-modal.js"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/freelancer.js"></script>

    </body>
</html>
