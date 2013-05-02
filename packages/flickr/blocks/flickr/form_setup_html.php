<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div id="ccm-ui">
	<fieldset>
		<div class="clearfix">
			<label for="ccm_flickr_url"><?php echo t('Flickr Feed URL')?>:</label>
			<div class="input">
				<input id="ccm_flickr_url" name="url" value="<?php echo $controllerObj->url?>" maxlength="255" type="text">
				<span class="help-block"><?php echo t('This should be an RSS feed url on one of the pages on flickr.')?></span>
			</div>
		</div>
		<div class="clearfix">
			<label for="ccm_flickr_title"><?php echo t('Title')?>: (<?php echo t('Optional')?>)</label>
			<div class="input">
				<input id="ccm_flickr_title" name="title" value="<?php echo $controllerObj->title?>" maxlength="255" type="text">
			</div>
		</div>	
		<div class="clearfix">
			<label for="ccm_flickr_itemsToDisplay"><?php echo t('Number of images to display')?>:</label>
			<div class="input">
				<input id="ccm_flickr_itemsToDisplay"  name="itemsToDisplay" value="<?php echo intval($controllerObj->itemsToDisplay)?>" type="text" size="2" maxlength="3">
			</div>
		</div>
		<div class="clearfix">
			<label for="ccm_flickr_max_width"><?php echo t('Max Width')?>:</label>
			<div class="input">
				<input id="ccm_flickr_max_width" name="maxWidth" value="<?php echo $controllerObj->maxWidth?>" maxlength="8" type="text" >
			</div>
		</div>
		<div class="clearfix">
			<label for="ccm_flickr_max_height"><?php echo t('Max Height')?>:</label>
			<div class="input">
				<input id="ccm_flickr_max_height" name="maxHeight" value="<?php echo $controllerObj->maxHeight?>" maxlength="8" type="text" >
			</div>
		</div>
		<div class="clearfix">
			<label for="launchInNewWindow"><?php echo t('Open In New Window?') ?></label>
			<div class="input">
				<input type="checkbox" name="launchInNewWindow" value="1" <?php echo $launchInNewWindow ? 'checked' : 0 ?> />
			</div>
		</div>
	</fieldset>
</div>
