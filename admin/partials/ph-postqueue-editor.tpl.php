<?php
/**
 * template for postqueues tools admin interface
 */
?>
<script type="text/javascript">
	window.ph_postqueues = <?php echo json_encode($store->get_queues()); ?>;

	//TODO: hard coded?!? please not!
	window.ph_postqueue_feed_url = "<?php echo get_site_option("ph-postqueue-feeds-url", ""); ?>";

</script>
<div class="wrap ph-postqueue">
	<h2>Postqueues: <span class="ph-postqueues-name-display"></span></h2>

	<div class="ph-postqueues-widget">
		
		<div class="queue-name">
			<input class="ph-postqueue-name" type="text" placeholder="Queue suchen / erstellen"/>
		</div>

		<div class="ph-new-queue">
			<p>»<span class="queue-name"></span>« erstellen</p>
		</div>
		
		<ul class="queues-list">
			<!-- <li class="queue">
				<div class="queue-name">Hard codiert</div>
				<div class="queue-controls">
					[slug] 
					| 
					<a href="#" target="_new">RSS-Feed</a> 
					| 
					<a href="#">Bearbeiten</a>
				</div> 
			</li> -->
		
		</ul>

	</div>
	
	<!-- Edit Postqueue -->
	<div class="ph-the-queue-wrapper">
		<div class="the-queue-controls">
			<button class="save-queue button button-primary">Save</button>
			<button class="cancel-queue button button-secondary">Cancel</button>
		</div>
		<ol class="the-queue"></ol>
	</div>
	<!-- Edit Postqueue ENDE -->

	
</div>