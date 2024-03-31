<div class="featured-content__item<?= $post['id'] ?> featured__item">
	<a title='<?= $post['title'] ?>' href='/post?id=<?= $post['id'] ?>' class="link_content">
		<a class="feautered-item<?= $post['id'] ?>__link">
			<?= $post['button'] ?>
		</a>
		<div class="feautered-item__content">
			<p class="feautered-item__naming">
				<?= $post['title'] ?>
			</p>
			<p class="feautered-item__description">
				<?= $post['subtitle'] ?>
			</p>
			<div class="feautered-item__information">
				<div class="feautered-item__autor">
					<img class="feautered-autor__icon" src="static/images/<?= $post['img_modifier'] ?>" alt="author_photo">
					<p class="feautered-autor__name">
						<?= $post['author'] ?>
					</p>
				</div>
				<p class="feautered-item__date">
					<?= $post['date'] ?>
				</p>
			</div>
		</div>
	</a>
</div>