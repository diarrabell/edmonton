<!doctype html>
<html lang="en">
	<?php 
		$title = "Web Dev Students";
		include "includes/head.php";?>
	<body class="homepage">
		<header>
			<h1>We are Web Development Students!</h1>
			<button class="button"><a href="about.php">Read More!</a></button>
		</header>

		<figure>
			<img src="images/spider.jpg" alt="Spider Web">
		</figure>
		
		<main>
			<section>
				<h2>Jayda</h2>
				<div class="section__content" class="float-left">
					<p>Jayda Medina is a Computer Science major. She will graduate in 2021. Her extracurriculars include being a member of Strong Jugglers, and TOOP, a student run theatre company.</p>
					<img src="images/jayda.jpg" alt="Jayda"/>
				</div><!-- .section__content -->
			</section>
			<section>
				<h2>Diarra</h2>
				<div class="section__content">
					<img src="images/diarra.jpg" alt="Diarra"/>
					<p>Diarra Bell is a Computer Science major, with a minor in Japanese. She will graduate in 2020. She is a member of The Pact and in her free time, volunteers for Women in Computing.</p>
				</div><!-- .section__content -->
			</section>
			<section>
				<h2>Margaret</h2>
				<div class="section__content">
					<p>Margaret Thurston was a Development and Sustainability major. Unlike Jayda and Diarra, she's a graduate. She graduated in 2018. She's a member of Students for a Democratic Society, Greenspace, and Partners in Reading.</p>
					<img src="images/margaret.jpg" alt="Margaret"/>
				</div><!-- .section__content -->
			</section>
			<section class="bottom-row">
				<p>All of these students have taken CSC170 and are currently taking CSC174. Jayda, Margaret and Diarra welcome you!</p>
				<button><a href = "about.php">Learn More</a></button>
			</section><!-- .bottom-row -->
		</main>
	</body><!-- .homepage -->
</html>




<!-- Stuff we cut out:
	<nav>
		<ul>
			<li><a href="index.php">Web Dev Students</a></li>
			<li><a href="about.php">About The Web Dev Students</a></li>
		</ul>
	</nav>
-->