<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<style>
table#FlickrSetup th {font-weight: bold; text-style: normal; padding-right: 8px; white-space: nowrap}
table#FlickrSetup td{ font-size:12px }

</style> 

<table id="FlickrSetup" width="100%">
	<tr>
		<th><?php echo t('Flickr Feed URL')?>:</th>
		<td width="100%">
			<input id="ccm_flickr_url" name="url" value="<?php echo $controllerObj->url?>" maxlength="255" type="text" style="width:100%"><br />
			<div class="ccm-note"><?php echo t('This should be RSS feed url on one of the pages on flickr.')?></div>
		</td>
	</tr>
	<tr>
		<th><?php echo t('Title')?>: (<?php echo t('Optional')?>)</th>
		<td><input id="ccm_flickr_title" name="title" value="<?php echo $controllerObj->title?>" maxlength="255" type="text" style="width:100%"></td>
	</tr>	
	<tr>
		<th><?php echo t('Number of images to display')?>:</th>
		<td><input id="ccm_flickr_itemsToDisplay"  name="itemsToDisplay" value="<?php echo intval($controllerObj->itemsToDisplay)?>" type="text" size="2" maxlength="3"></td>
	</tr>
	<tr>
		<th><?php echo t('Max Width')?>:</th>
		<td>
			<input id="ccm_flickr_max_width" name="maxWidth" value="<?php echo $controllerObj->maxWidth?>" maxlength="8" type="text" >
		</td>
	</tr>
	<tr>
		<th><?php echo t('Max Height')?>:</th>
		<td>
			<input id="ccm_flickr_max_height" name="maxHeight" value="<?php echo $controllerObj->maxHeight?>" maxlength="8" type="text" >
		</td>
	</tr> 		
</table>