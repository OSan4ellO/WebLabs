<?php
$posts = [
	[
		'title' => 'The Road Ahead',
		'subtitle' => 'The road ahead might be paved - it might not be.',
		'img_modifier' => 'mat_avatar.png',
		'author' => 'Mat Vogels',
		'button' => 'Photography',
		'id' => '1',
		'date' => 'September 25, 2015',
		'button_link' => 'post.php',
		// другие свойства этого поста
	],
	[
		'title' => 'From Top Down',
		'subtitle' => 'Once a year, go someplace you’ve never been before.',
		'img_modifier' => 'william_avatar.png',
		'author' => 'William Wong',
		'button' => 'Adventure',
		'id' => '2',
		'date' => 'September 25, 2015',
		'button_link' => '',
		// свойства второго поста
	],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Lab_2</title>
	<link rel="stylesheet" href="styles/home-style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
		rel="stylesheet" />
</head>

<body>
	<header class="header">
		<nav class="navigation-section">
			<img class="header-navigation__image" src="/images/logo_w.svg" alt="Escape" />
			<ul class="header-navigation__links">
				<li>Home</li>
				<li>Categories</li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</nav>
	</header>

	<main class="main">
		<div class="main-title">
			<div class="main-title__text">
				<h1>Let's do it together.</h1>
				<h2>
					We travel the world in search of stories. Come along for the ride.
				</h2>
				<a class="main__button--view" href="#">View Latest Posts</a>
			</div>
		</div>

		<nav class="main-navigation">
			<ul class="main-navigation__links">
				<li>Nature</li>
				<li>Photography</li>
				<li>Relaxation</li>
				<li>Vacation</li>
				<li>Travel</li>
				<li>Adventure</li>
			</ul>
		</nav>
		<div class="main__container">
			<div class="main-content">
				<div class="main-content__featured">
					<h3 class="featured__title content-title">Featured Posts</h3>
					<div class="rectangle"></div>
					<div class="featured-content">
						<?php
						foreach ($posts as $post) {
							include 'post_preview.php';
						}
						?>
					</div>
				</div>
				<div class="main-content__recent">
					<div>
						<h3 class="recent__title content-title">Most Recent</h3>
						<div class="rectangle"></div>
						<div class="recent__content">
							<div class="recent-content__item1 recent__item">
								<div class="recent-item__image recent_image1"></div>
								<div class="recent-item__description">
									<p class="recent-item__title">Still Standing Tall</p>
									<p class="recent-item__subtitle">
										Life begins at the end of your comfort zone.
									</p>
								</div>
								<div class="recent-item__information">
									<div class="recent-item__autor">
										<img class="item-autor__avatar" src="./images/william_avatar.png" alt="author_photo" />
										<p class="recent-autor_name">William Wong</p>
									</div>
									<p class="recent-autor_date">9/25/2015</p>
								</div>
							</div>

							<div class="recent-content__item2 recent__item">
								<div class="recent-item__image recent_image2"></div>
								<div class="recent-item__description">
									<p class="recent-item__title">Sunny Side Up</p>
									<p class="recent-item__subtitle">
										No place is ever as bad as they tell you it’s going to be.
									</p>
								</div>
								<div class="recent-item__information">
									<div class="recent-item__autor">
										<img class="item-autor__avatar" src="./images/mat_avatar.png" alt="author_photo" />
										<p class="recent-autor_name">Mat Vogels</p>
									</div>
									<p class="recent-autor_date">9/25/2015</p>
								</div>
							</div>

							<div class="recent-content__item3 recent__item">
								<div class="recent-item__image recent_image3"></div>
								<div class="recent-item__description">
									<p class="recent-item__title">Water Falls</p>
									<p class="recent-item__subtitle">
										We travel not to escape life, but for life not to escape
										us.
									</p>
								</div>
								<div class="recent-item__information">
									<div class="recent-item__autor">
										<img class="item-autor__avatar" src="./images/mat_avatar.png" alt="author_photo" />
										<p class="recent-autor_name">Mat Vogels</p>
									</div>
									<p class="recent-autor_date">9/25/2015</p>
								</div>
							</div>

							<div class="recent-content__item4 recent__item">
								<div class="recent-item__image recent_image4"></div>
								<div class="recent-item__description">
									<p class="recent-item__title">Through the Mist</p>
									<p class="recent-item__subtitle">
										Travel makes you see what a tiny place you occupy in the
										world.
									</p>
								</div>
								<div class="recent-item__information">
									<div class="recent-item__autor">
										<img class="item-autor__avatar" src="./images/william_avatar.png" alt="author_photo" />
										<p class="recent-autor_name">William Wong</p>
									</div>
									<p class="recent-autor_date">9/25/2015</p>
								</div>
							</div>

							<div class="recent-content__item5 recent__item">
								<div class="recent-item__image recent_image5"></div>
								<div class="recent-item__description">
									<p class="recent-item__title">Awaken Early</p>
									<p class="recent-item__subtitle">
										Not all those who wander are lost.
									</p>
								</div>
								<div class="recent-item__information">
									<div class="recent-item__autor">
										<img class="item-autor__avatar" src="./images/mat_avatar.png" alt="author_photo" />
										<p class="recent-autor_name">Mat Vogels</p>
									</div>
									<p class="recent-autor_date">9/25/2015</p>
								</div>
							</div>

							<div class="recent-content__item6 recent__item">
								<div class="recent-item__image recent_image6"></div>
								<div class="recent-item__description">
									<p class="recent-item__title">Try it Always</p>
									<p class="recent-item__subtitle">
										The world is a book, and those who do not travel read only
										one page.
									</p>
								</div>
								<div class="recent-item__information">
									<div class="recent-item__autor">
										<img class="item-autor__avatar" src="./images/mat_avatar.png" alt="author_photo" />
										<p class="recent-autor_name">Mat Vogels</p>
									</div>
									<p class="recent-autor_date">9/25/2015</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="footer">
		<nav class="footer-section">
			<img class="footer-section__image" src="images/logo_w.svg" alt="Escape" />
			<ul class="footer-section__links">
				<li>Home</li>
				<li>Categories</li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</nav>
	</footer>
</body>

</html>