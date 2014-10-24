<?php
/**
 * Implements a basic Controller
 * @package some config
 * http://doc.silverstripe.org/framework/en/3.1/topics/controller
 */
class HomeController extends Page_Controller {
	
	private static $url_segment = 'home';
	
	private static $allowed_actions = array( 
		'index', 
		'tos', 
		'contact',
                'ContactForm',
		'imprint'
	);
	
	public static $template = 'BlankPage';
	
	/**
	 * Template thats used to render the pages.
	 *
	 * @var string
	 */
	public static $template_main = 'Page';
	
	/**
	 * Initialise the controller
	 */
	public function init() {
		parent::init();
 	}

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function index() {
            
            // Vorerst keine Seite erstellt
            $tmpPage = new Page();
            $tmpPage->Title = _t('PROJECT.HOMETITLE', 'PROJECT.HOMETITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('PROJECT.HOMETITLE', 'PROJECT.HOMETITLE'),
                "Content" => _t('PROJECT.HOMECONTENT', 'PROJECT.HOMECONTENT'),
                "Form" => ''
            ));
            
            Requirements::css('project_home/css/home_index.css');
            
            return $customisedController->renderWith(
                array('Home_index', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function tos() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('PROJECT.TOSTITLE', 'PROJECT.TOSTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('PROJECT.TOSTITLE', 'PROJECT.TOSTITLE'),
                "Content" => _t('PROJECT.TOSCONTENT', 'PROJECT.TOSCONTENT'),
                "Form" => ''
            ));
            
            return $customisedController->renderWith(
                array('Home_tos', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function contact() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('PROJECT.CONTACTTITLE', 'PROJECT.CONTACTTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('PROJECT.CONTACTTITLE', 'PROJECT.CONTACTTITLE'),
                "Content" => _t('PROJECT.CONTACTCONTENT', 'PROJECT.CONTACTCONTENT'),
                "Form" => $this->ContactForm()
            ));
            
            return $customisedController->renderWith(
                array('Home_contact', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}
        
        public function ContactForm(){
            // http://doc.silverstripe.org/framework/en/3.1/topics/forms
            if(Session::get('ContactFormSend')){
                Session::clear('ContactFormSend');
                return false;
            }
            return ContactForm::create($this, "ContactForm");
        }

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function imprint() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('PROJECT.IMPRINTTITLE', 'PROJECT.IMPRINTTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('PROJECT.IMPRINTTITLE', 'PROJECT.IMPRINTTITLE'),
                "Content" => _t('PROJECT.IMPRINTCONTENT', 'PROJECT.IMPRINTCONTENT'),
                "Form" => ''
            ));
            
            return $customisedController->renderWith(
                array('Home_imprint', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}
}
