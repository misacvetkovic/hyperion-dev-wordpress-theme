<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label for="search-field"><?php echo _x( 'Search for:', 'hyperion' ) ?></label>
	<input id="search-field" class="search-field" type="search" placeholder="<?php echo esc_attr_x( 'Search …', 'hyperion' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'hyperion' ) ?>" />
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'hyperion' ) ?>" />
</form>