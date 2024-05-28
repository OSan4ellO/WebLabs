<?php
$postId = $_GET['id'];
include 'api.php';
if (is_int($postId)) {
	var_dump('Invalid ID');
}

$post = getAllIdFromDB(createDBConnection(), $postId);
if (!$post) {
	echo ('404');
}
;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Post</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="static/styles/post-style.css" />
</head>

<body>
	<header class="header">
		<div class="header-navigation">
			<div class="navigation__container">
				<img class="header-logo" src="http://localhost:8080/static/images/logo_b.svg" />
				<ul class="header-list">
					<li>home</li>
					<li>categories</li>
					<li>about</li>
					<li>contact</li>
				</ul>
				<label for="menu" class="menu__button">
					<img src="/static/images/menu_button.png" alt=menuIcon">
				</label>
				<input type="checkbox" id="menu">
			</div>
		</div>
	</header>

	<main class="main">
		<div class="upper">
			<h1 class="main-title">
				<?= $post['title'] ?>
			</h1>
			<h2 class="main-subtitle">
				<?= $post['subtitle'] ?>
			</h2>
		</div>
		<img src="http://localhost:8080/static/images/<?= $post['image_url'] ?>" class="photo" />
		<div class="text">
			<p class="paragraph">
				<?= $post['content'] ?>
			</p>
		</div>
	</main>

	<footer class="footer">
		<div class="footer__container">
			<div class="top-container">
				<h4 class="footer__title">Stay in Touch</h4>
				<div class="rectangle rectangle-footer"></div>
				<div class="footer-email-send">
					<input type="email" class="footer__email-input" placeholder="Enter your email address">
					<h5 class="footer__button">Submit</h5>
				</div>
			</div>
			<div class="bottom-container">
				<nav class="footer-section">
					<img class="footer-section__image" src="http://localhost:8080/static/images/logo_w.svg" alt="Escape">
					<ul class="footer-section__links">
						<li>Home</li>
						<li>Categories</li>
						<li>About</li>
						<li>Contact</li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
</body>

</html>