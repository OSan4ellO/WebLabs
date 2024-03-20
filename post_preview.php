<div class="featured-content__item<?= $post['id'] ?> featured__item">
	<a class="feautered-item<?= $post['id'] ?>__link" href="<?= $post['button_link'] ?>">
		<?= $post['button'] ?>
	</a>
	<div class="feautered-item__content">
		<p class="feautered-item__naming">
			<?= $post['title'] ?>2
		</p>
		<p class="feautered-item__description">
			<?= $post['subtitle'] ?>
		</p>
		<div class="feautered-item__information">
			<div class="feautered-item__autor">
				<img class="feautered-autor__icon" src="/image/<?= $post['img_modifier'] ?>" alt="author_photo">
				<p class="feautered-autor__name">
					<?= $post['author'] ?>
				</p>
			</div>
			<p class="feautered-item__date">
				<?= $post['date'] ?>
			</p>
		</div>
	</div>
</div>