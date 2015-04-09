<form class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>" method="get">
	<fieldset>
		<label for="search" style="display: none;">Search in <?php echo home_url( '/' ); ?></label>
		<div class="form-group">
			<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
		</div>
		<button type="submit" class="btn btn-default">Search</button>
	</fieldset>
</form>