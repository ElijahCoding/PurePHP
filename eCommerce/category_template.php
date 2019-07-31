<li>
	<a href="?category=<?=$category['id']?>"><?=$category['title']?></a>
	<?php if(isset($category['childs'])): ?>
	<ul>
		<?php echo categories_to_string($category['childs']); ?>
	</ul>
	<?php endif; ?>
</li>
