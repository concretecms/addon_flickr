<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class FlickrPackage extends Package {

	protected $pkgHandle = 'flickr';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion = '1.2.1';
	
	public function getPackageDescription() {
		return t("Display photos from the website Flickr.com");
	}
	
	public function getPackageName() {
		return t("Flickr Photos");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('flickr', $pkg);
		
	}




}
