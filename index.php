<p><?php $content = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); $trimmed_content = wp_trim_words($content, 20); echo $trimmed_content; ?></p>
