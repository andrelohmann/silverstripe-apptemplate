<?php
/**
 * Implements a basic Controller
 * @package some config
 * http://doc.silverstripe.org/framework/en/3.1/topics/controller
 */
class ProfileController extends Controller {
	
	public static $url_topic = 'profile';
	
	public static $url_segment = 'profile';
	
	private static $allowed_actions = array( 
		'index'
	);
	
	public static $template = 'BlankPage';
	
	/**
	 * Template thats used to render the pages.
	 *
	 * @var string
	 */
	public static $template_main = 'Page';

	/**
	 * Returns a link to this controller.  Overload with your own Link rules if they exist.
	 */
	public function Link() {
		return self::$url_segment .'/';
	}
	
	/**
	 * Initialise the controller
	 */
	public function init() {
		parent::init();
                
                if(!Member::currentUser()) $this->redirect('home/index');
 	}

	/**
	 * Show the "index" page
	 *
	 * @return string Returns the "index" page as HTML code.
	 */
	public function index() {
            
            // Vorerst keine Seite erstellt
            return $this->customise(new ArrayData(array(
                "Title" => _t('Profile.INDEXTITLE', 'Profile.INDEXTITLE'),
                "Content" => _t('Profile.INDEXCONTENT', 'Profile.INDEXCONTENT'),
                "Form" => ''
            )))->renderWith(
                array('Profile_index', 'Profile', $this->stat('template_main'), $this->stat('template'))
            );
	}
}
