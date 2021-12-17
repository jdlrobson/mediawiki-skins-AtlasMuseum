<?php
/**
 * Skin file for skin atlasmuseum.
 *
 * @file
 * @ingroup Skins
 */

/**
 * SkinTemplate class for atlasmuseum skin
 * @ingroup Skins
 */
class SkinAtlasMuseum extends SkinTemplate {
	var $skinname = 'atlasmuseum', $stylename = 'AtlasMuseum',
		$template = 'AtlasMuseumTemplate', $useHeadElement = true;

	/**
	 * This function adds JavaScript via ResourceLoader
	 *
	 * Use this function if your skin has a JS file(s).
	 * Otherwise you won't need this function and you can safely delete it.
	 *
	 * @param OutputPage $out
	 */
	
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		//$out->addScript('<script type="text/javascript" src="http://publicartmuseum.net/w/skins/AtlasMuseum/resources/atlamuseum.js"></script>');
		$out->addModules( array(
			'skins.atlasmuseum.js'
		) );
		/* 'skins.atlasmuseum.js' is the name you used in your skin.json file */
		$out->addStyle('http://fonts.googleapis.com/css?family=Open+Sans:100,200,400,700|Oswald:100,200,400,700|Libre+Franklin:100,200,400,700', 'screen');
		$out->addStyle('http://publicartmuseum.net/w/skins/AtlasMuseum/Fonts/font.css', 'screen');
		/*$out->addScriptFile('http://publicartmuseum.net/w/skins/AtlasMuseum/resources/atlasmuseum.js');*/
		$out->addModuleStyles( array(
			'skins.atlasmuseum'
			/* 'skins.atlasmuseum' is the name you used in your skin.json file */
		) );
	}
}
