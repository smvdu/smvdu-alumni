
	<?php
	if(
		( function_exists( 'bp_get_members_root_slug' ) &&  ! substr_count( $_SERVER['REQUEST_URI'], '/' . bp_get_members_root_slug() ) ) &&
		( function_exists( 'bp_get_groups_root_slug' ) &&  ! substr_count( $_SERVER['REQUEST_URI'], '/' . bp_get_groups_root_slug() ) )
	) :
	?>

		<div id="sidebar-blog">

			<?php dynamic_sidebar( 'sidebar-blog' ) ?>

		</div><!-- #sidebar-blog -->

	<?php endif ?>