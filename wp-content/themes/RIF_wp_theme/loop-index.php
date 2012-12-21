<?php $candidati_query = new WP_Query('post_type=candidati'); ?>
<?php while ($candidati_query->have_posts()) : $candidati_query->the_post(); ?>
	<div class="candidato_container">
		<h3><?php echo get_post_meta($post->ID, "nome", true); ?> <?php echo get_post_meta($post->ID, "cognome", true); ?></h3>
		<?php $candidatoper = get_post_meta($post->ID, "candidato-per", true); ?>
		canditato per: <strong><?php echo $candidatoper ?></strong><br />
		circoscrizione:<strong>
		<?php if($candidatoper == 'Camera'){
			echo get_post_meta($post->ID, "circoscrizione-camera", true);
		}else{
			echo get_post_meta($post->ID, "circoscrizione-senato", true);
		} ?></strong><br />
		
		partito: <strong><?php echo get_post_meta($post->ID, "partito", true); ?></strong><br />
		sito internet: <a href="<?php echo get_post_meta($post->ID, "sito-internet", true); ?>"><strong><?php echo get_post_meta($post->ID, "sito-internet", true); ?></strong></a><br /><br />
		<?php the_content(); ?>
		Dichiarazione personale:<br />
		<strong>"<?php echo get_post_meta($post->ID, "dichiarazione", true); ?>"</strong>
		<hr />
	</div>
<?php endwhile; ?>