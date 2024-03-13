<div class="featured-content__<?= $post['item_num'] ?> featured__item">
	<a class="feautered-<?= $post['item_num'] ?>__link" href="#">
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