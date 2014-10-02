<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
                    
                Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
                //Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.min.js');
                // Jquery wird von Bootstrap im Page.ss Template geladen
                Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.min.js');
                // <!--script src="http://code.jquery.com/jquery.min.js"></script-->
                
                Requirements::javascript('bootstrap_extra_fields/javascript/tooltip.js');
	}

}
