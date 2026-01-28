
		<?php include 'includes/header-top.php'; ?>
		
        <title>Acura Books</title>
		
        <?php include 'includes/header-bottom-2.php'; ?>



        <!-- main-area -->
        <main class="fix">

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Our Partners</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Partners</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                    <img src="assets/img/images/breadcrumb_shape02.png" alt="">
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- team-details-area -->
            <section class="team-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="team-details-content">
							
							<?php
								if(isset($_GET['teamid']))
								{
									$teamid = $_GET['teamid'];
									
									$name = "";
									$desi = "";
									$paragraph = "";
									$imagepath = "";
									
									if($teamid=="1")
									{
										$name = "Mahendra Kumar Gupta";
										$desi = "Senior Partner";
										$paragraph = "<p>Mahendra Kumar Gupta is a Chartered Accountant by profession and is the senior partner of Acura books. He has more than 30 years of experience in all phases of client service and accounting practices. He has served as the responsible partner in a variety of industries, including many which are deeply involved in multinational operations. He has lectured on accounting and management topics for various organizations in India.<br/>He has overseen every aspect of the firm’s business and is a member of the firm’s Executive management team where he works closely with other members of the firm’s Executive management team to develop strategy and set the direction for the firm’s future sustainability, growth and profitability.</p>";
										$imagepath = "assets/img/team/default.jpg";
									}
									else if($teamid=="3")
									{
										$name = "Nitika bansal";
										$desi = "Senior Audit Manager";
										$paragraph = "<p>She is a member of the Institute of Chartered Accountant of India having experience of more than 8 years post qualification. Her area of specialization is Statutory Audit, Internal Audit and MIS Reports which include preparation of monthly financial statements, inventory accounting and other planning for the clients. She has more than 3 years of international experience of working for India’s leading corporate bank. She plays a strategic role by providing professional services, aiming towards maximizing profitability for her clients and partnering in meeting the vision of the firm.</p>";
										$imagepath = "assets/img/team/team_img03.jpg?id=sdf";
									}
									else if($teamid=="4")
									{
										$name = "Ashish Gupta";
										$desi = "Chief Finance Controller";
										$paragraph = "<p>Mr. Ashish Gupta is a co-founder of the firm and working as a chief-finance controller with the Firm. He is a graduate and a fellow member of Institute of Chartered Accountants of India with 5 years standing in the profession. He has wide experience in the field of Direct Tax, Assurance and Accounting. His strength lies in maintaining integrity and delivering client satisfying services. He has held leadership roles and has been in the forefront in articulating group philosophy and values and believes in a team building approach. He has been involved in various social activities throughout his life apart from his profession.</p>";
										$imagepath = "assets/img/team/team_img01.jpg?id=sdf";
									}
									else if($teamid=="5")
									{
										$name = "Arzoo bansal";
										$desi = "Senior manager";
										$paragraph = "<p>She is a dynamic finance professional with a Master of Business Administration (MBA) in Finance and an impressive track record of five years in the finance industry. With a keen analytical mind and a strategic approach, she has consistently contributed to the success of organizations through her expertise in financial management, analysis, and strategic planning.<br/>She is a results-oriented finance specialist with a proven ability to drive financial excellence and enhance profitability. Her comprehensive knowledge of finance principles, coupled with hands-on experience in various financial domains, sets her apart as a valuable asset to any team.</p>";
										$imagepath = "assets/img/team/team_img02.jpg?id=sd";
									}
									else if($teamid=="6")
									{
										$name = "Tushar Jain";
										$desi = "Principal & Accounting Service Line leader";
										$paragraph = "<p>With more than 8 years of diverse industries experience in all areas of Audit, Investigation, Due Diligence, Taxation (Direct and Indirect), Company Law Matters for both domestic and foreign companies, Management Consultancy, Information System Audit and FEMA. He is well geared to take up any professional assignments in the above areas. He has association with firms of Chartered Accountants, Management Consultants, Company Secretaries and IT Professionals etc. </p>";
										$imagepath = "assets/img/team/team_img05.jpg?id=asdf";
									}
								}
							?>
							
							
								<img src='<?php echo $imagepath; ?>' style='float:left; padding:0px 20px 20px 0px' />
								<h2 class="title"><?php echo $name; ?></h2>
                                <span style='margin-bottom:0px;'><?php echo $desi; ?></span>
                                <?php echo $paragraph; ?>
								
								<hr/>
								
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-details-area-end -->


        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
           <!-- fotter -->
       <?php include 'includes/fotter.php'; ?>