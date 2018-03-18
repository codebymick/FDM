<?php
get_header();
 $content = explode("<!--more-->", $post->post_content);
?>
		<!--/.Start Banner Block-->
	<div class="frontpage-banner-outer">

		<div class="cycle-pager"></div>

	</div>
		<!--/.End Banner Block-->

		<!--/.Begin Content-->
	<div id="content">
		<div class="container-fluid">
			<div class="wrapper">
				<div class="row-fluid">
					<div class="span12 homepage-content">
            <h1 style="color: #000;">404 Error</h1>
            <p><br></p>
            <p>you have come to a place that ISN'T HERE!</p>
            <p>what the?!</p>
            <a href="<?php bloginfo('url');?>">&larr; go to a better place!</a>
          </div>

				</div>
        <?php get_template_part('modules', 'ideas'); ?>
        <?php get_template_part('modules', 'brag'); ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
