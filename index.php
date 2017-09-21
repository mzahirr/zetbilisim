<?php get_header(); ?>
<div class="anasayfa-cerceve referanslar">
<h2 class="yazi-baslik">
<?php 
			wp_reset_query(); 
			$post = $posts[0]; if (is_category()) { single_cat_title(); echo' <strong>Kategorisi</strong>'; } 
			elseif( is_tag() ) { single_tag_title(); echo ' <strong>olarak etiketlenmiş yazılar</strong>'; } 
			elseif (is_day()) { the_time('d F Y'); echo' <strong>için Arşiv</strong>'; } 
			elseif (is_month()) { the_time('F Y'); echo' <strong>için Arşiv<strong>'; } 
			elseif (is_year()) { the_time('Y'); echo' <strong>için Arşiv</strong>'; }
			elseif (is_search()) { $title = sprintf(('%s <strong>Arama Sonuçları</strong>'), '&quot;'.get_search_query().'&quot;');echo''.$title.''; }
			elseif (is_author()) { $curauth = get_user_by('slug', get_query_var('author_name')); echo $curauth->display_name.' <strong> Tarafından Eklenenler</strong>';} 
			elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { echo ' <strong>Blog Arşivi</strong>'; }
		?>
</h2>
<div class="anasayfa-ic-ayrim"></div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="blok">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php
				if ( has_post_thumbnail()) : 
					the_post_thumbnail( 'manset', array('class' => '', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'' )); 
				elseif (get_post_meta($post->ID, 'resim', true) != '') : 
					echo '<img src="'.get_post_meta($post->ID, 'resim', true).'" alt="'.get_the_title().'" width="175" height="111" />'; 
				else : 
					echo '<img src="'.get_bloginfo('template_url').'/lib/images/nothumb.jpg" width="175" height="111" alt="'.get_the_title().'" />';
				endif;
			?>
</a>
<span class="proje-isim"><?php the_title(); ?></span>
<span class="proje-aciklama"><?php fs_excerpt('fs_kisa_yazi25', 'fs_kisalt'); ?></span>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="lnk">DETAYA GİT</a>
</div>
			<?php endwhile; endif; ?>
<div class="temizle"></div>
			<?php 
				include TEMPLATEPATH . '/wp-pagenavi.php';
				if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			?>
<div class="temizle"></div>
</div>
<?php get_footer(); ?>