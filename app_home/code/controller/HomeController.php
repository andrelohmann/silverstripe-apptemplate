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
		'terms',
		'privacy',
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
            $tmpPage->Title = _t('Home.HOMETITLE', 'Home.HOMETITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('Home.HOMETITLE', 'Home.HOMETITLE'),
                "Content" => _t('Home.HOMECONTENT', 'Home.HOMECONTENT'),
                "Form" => ''
            ));
            
            Requirements::css('app_home/css/home_index.css');
            
            return $customisedController->renderWith(
                array('Home_index', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function terms() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('Home.TERMSTITLE', 'Home.TERMSTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('Home.TERMSTITLE', 'Home.TERMSTITLE'),
                "Content" => _t('Home.TERMSCONTENT', 'Home.TERMSCONTENT'),
                "Form" => ''
            ));
            
            return $customisedController->renderWith(
                array('Home_terms', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function privacy() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('Home.PRIVACYTITLE', 'Home.PRIVACYTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('Home.PRIVACYTITLE', 'Home.PRIVACYTITLE'),
                "Content" => _t('Home.PRIVACYCONTENT', 'Home.PRIVACYCONTENT'),
                "Form" => ''
            ));
            
            return $customisedController->renderWith(
                array('Home_privacy', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function contact() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('Home.CONTACTTITLE', 'Home.CONTACTTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('Home.CONTACTTITLE', 'Home.CONTACTTITLE'),
                "Content" => _t('Home.CONTACTCONTENT', 'Home.CONTACTCONTENT'),
                "Form" => $this->ContactForm()
            ));
            
            return $customisedController->renderWith(
                array('Home_contact', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}
        
        public function ContactForm(){
            // http://doc.silverstripe.org/framework/en/3.1/topics/forms
            return ContactForm::create($this, "ContactForm");
        }

	/**
	 * Show the "login" page
	 *
	 * @return string Returns the "login" page as HTML code.
	 */
	public function imprint() {
            
            $tmpPage = new Page();
            $tmpPage->Title = _t('Home.IMPRINTTITLE', 'Home.IMPRINTTITLE');
            $tmpPage->URLSegment = self::$url_segment;
            $tmpPage->ID = -1;// Set the page ID to -1 so we dont get the top level pages as its children

            $controller = Page_Controller::create($tmpPage);
            $controller->init();
            
            $this->init();
            
            $customisedController = $controller->customise(array(
                "Title" => _t('Home.IMPRINTTITLE', 'Home.IMPRINTTITLE'),
                "Content" => _t('Home.IMPRINTCONTENT', 'Home.IMPRINTCONTENT'),
                "Form" => ''
            ));
            
            return $customisedController->renderWith(
                array('Home_imprint', 'Home', 'Page', $this->stat('template_main'), 'BlankPage')
            );
	}
}
