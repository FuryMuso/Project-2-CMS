<?php

include_once ('home-add-select-pdo.php');
include_once ('about-add-select-pdo.php');
include_once ('portfolio-add-select-pdo.php');
$homeContent = retrieveHomeData();
$aboutContent = retrieveAboutData();
$portfolioContent = retrievePortfolioData();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet"> 
		<link href="index.css" type="text/css" rel="stylesheet">
		<title>Dan Tucker - Portfolio Webpage</title>
	<head>
			<body>
				<section class="home">
					<nav>
						<div class="hamburger">
							<img src="images/hamburger-menu.png" alt=" a hamburger... but code">
						</div>
							<img src="images/logo-black-nav.png" alt="small logo">
							<div class="navButtons">
								<div class="navOptions">
									<a href="#index">Home</a>
								</div>
								<div class="navOptions">
									<a href="#about">About</a>
								</div>
								<div class="navOptions">
									<a href="#portfolio">Portfolio</a>
								</div>
								<div class="navOptions">
									<a href="#contact">Contact</a>
								</div>
                                <div class="navOptions">
                                    <form method="POST" action="login.php" target="_blank">
                                        <input type="submit" value="CMS">
                                    </form>
                                </div>
							</div>	
				   </nav>
						<header class="header" id="index">
						    <h1 class="logo">
								<div><strong>Dan</strong></div>
								<div><strong>Tucker</strong><strong class="fullstop">.</strong></div>
							</h1></a>
								<div class="introduction">
									<div class="introWrittenContent">
                                        <?php
                                        foreach ($homeContent as $outputHomeContent)
                                        {
                                            if ($outputHomeContent['section_title'] == 'intro_header') {
                                                echo "<h2>" . $outputHomeContent['text_input'] . "</h2>";
                                            }
                                        }


                                        foreach ($homeContent as $outputHomeContent)
                                        {
                                            if ($outputHomeContent['section_title'] == 'intro') {
                                                echo "<p>" . $outputHomeContent['text_input'] . "</p>";
                                            }
                                        }
                                        ?>

									</div>
									<div class="background"> </div>
							 </div>
								<div class="headerColumns">
                                        <?php
                                        foreach ($homeContent as $outputHomeContent)
                                        {
                                            if ($outputHomeContent['section_title'] == 'column') {
                                                echo "
                                                <div class='headerColumn'>
                                                    <div>
                                                        <img src='images/logo-orange.png' alt='An image of...'>
                                                        <p>" . $outputHomeContent['text_input'] . "</p>
                                                    </div>
                                                </div>";
                                            }
                                        }
                                        ?>
							   </div>
							   <div class="icons">
								   <div class="programIcons">
								   		<div class="icon html">
									   	 	<img src="images/icons/HTML-icon.png">
								  	  	</div>
								   	 	<div class="icon css">
									   	 	<img src="images/icons/CSS-icon.png">
								   	 	</div>
								   	 	<div class="icon javascript">
									   	 	<img src="images/icons/JavaScript-icon.png">
								   	 	</div>
							      </div>
								  <div class="textIcons">
										  <p>HTML</p>
									      <p>CSS</p>
										  <p>JavaScript</p>
								  </div>
					 </header>
			  </section>
				
			<!-- ABOUT PAGE BEGINS -->

			  <section class="about" id="about">
				  <div class="pageTitles aboutContainer">
					  <h3>ABOUT ME</h3>
				  </div>
				  	  <div class="aboutRows">
			  			  <div>
						  		<p class="contentLeft">Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
									<div class="aboutImages">
										<img src="images/logo-orange.png" alt="An image of..."></img>
									</div>
								<p class="contentRight">Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
						  </div>
						  <div>
								<p class="contentLeft">Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
									<div class="aboutImages">
										<img src="images/logo-orange.png" alt="An image of..."></img>
									</div>
							    <p class="contentRight">Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
						  </div>
			  			  <div>
								<p class="contentLeft">Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
									<div class="aboutImages">
										<img src="images/logo-orange.png" alt="An image of..."></img>
									</div>
                                <p class="contentRight">Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
						  </div>
                          <?php
                          foreach ($aboutContent as $outputAboutContent)
                          {
                              echo "<div>
								        <p class='contentLeft'>" . $outputAboutContent['text_input'] . "</p>
									<div class='aboutImages'>
										<img src='images/logo-orange.png' alt='An image of...'>
									</div>
                                        <p class='contentRight'>" . $outputAboutContent['text_input'] . "</p>
						            </div>";
                          }
                          ?>
					  </div>
              </section>
				
			<!-- PORTFOLIO PAGE BEGINS -->
			
			<section class="portfolio" id="portfolio">
					<div class="pageTitles portfolioContainer">
						<h3>PORTFOLIO</h3>
					</div>
					<div class="portfolioRows">
						<div class="portfolioRow">
							<a class="portfolioImage" href="my first project"><img src="images/pilotshop-logo.png" alt="A photo of my first project"></a>
							<div class="portfolioContent">
								<h4>Jumbotron for Bootstrap</h4>
								<p>Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
							</div>
						</div>
						<div class="portfolioRow">
							<div>
								<a class="portfolioImage" href="my second project"><img src="images/pilotshop-project.png" alt="A photo of my second project"></a>
							</div>
							<div class="portfolioContent">
								<h4>Pilotshop Build</h4>
								<p>Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
							</div>
						</div>
						<div class="portfolioRow">
							<div>
								<a class="portfolioImage" href="my third project"><img src="images/portfolio-project.png" alt="A photo of my third project"></a>
							</div>
							<div class="portfolioContent">
								<h4>Self Portfolio</h4>
								<p>Sed euismod, neque id blandit consectetur, enim leo cursus mauris, vitae molestie metus urna quis lectus. Proin at tincidunt dolor. Donec ornare et lectus ac venenatis. Aliquam ex est, vestibulum consectetur est vel, pellentesque elementum velit. Sed ullamcorper ex neque, et aliquet purus feugiat eu. Quisque tempor erat et justo efficitur maximus. Morbi velit sem, pretium a iaculis a, bibendum sed justo. </p>
							</div>
						</div>
                        <?php
                        foreach ($portfolioContent as $outputPortfolioContent)
                        {
                            echo "<div class='portfolioRow'>
							<a class='portfolioImage' href='my first project'><img src='' alt='image would go here'></a>
							<div class='portfolioContent'>
								<h4>" . $outputPortfolioContent['section_title'] . "</h4>
								<p>" . $outputPortfolioContent['text_input'] . "</p>
							</div>
						</div>";
                        }
                        ?>
					</div>
			</section>
				
				<!-- CONTACT PAGE BEGINS -->
				
			<section class="contact" id="contact">
						<div class="pageTitles contactContainer">
							<h3>CONTACT</h3>
						</div>
					<div class="contactContent">
							<div>
								<img src="images/me-contact.png" alt="A photo of Daniel Tucker (me)">
							</div>
						<div class="contactContent">
							<p>22 Well Lane<br />Yatton<br />Bristol<br />BS49 4HT</p>
							<br />
							<p>Phone Number: 07480131633<br />Email@: furymuso@aim.com<br />Twitter: @FuryMuso</p>
							<br />
							<div>
								<a href="https://twitter.com/furymuso" target="_blank">Twitter</a>
								<br />
								<a href="https://www.youtube.com/user/FuryMuso" target="_blank">Youtube</a>
								<br />
							</div>
						</div>
					</div>
				</section>
		<footer class="footer">
			<div>
				<p title="Return to top"><a href="#index"><img src="images/black-logo-footer.png" alt="image of logo"></a></p>
			</div>
			<div>
				<div class="copyright">
					<p>&copy; Copyright 2017 | All rights reserved</p>
			</div>
		</footer>
	</body>
</html>