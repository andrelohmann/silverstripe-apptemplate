<?php

class AppControllerExtension extends Extension {

	public function onBeforeInit(){
            
            $url = explode('/',$this->owner->request->getURL());
            
            // Set Requirements for all custom Controllers
            if(!in_array($url[0], array('admin', 'dev', 'interactive'))){
		
				Requirements::css("themes/bootstrap/css/bootstrap/cosmo/bootstrap.min.css");
				//Requirements::css("//netdna.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css");
				
				// http://daneden.github.io/animate.css/
				Requirements::css("themes/bootstrap/css/animate/animate.min.css");
				//Requirements::css("//cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css");
				Requirements::css("themes/bootstrap/css/animate/animationdelay.css");
				
				//http://fortawesome.github.io/Font-Awesome/
				Requirements::css("themes/bootstrap/css/font-awesome/css/font-awesome.min.css");
				//Requirements::css("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
				
				//https://useiconic.com/open/
				Requirements::css("themes/bootstrap/css/open-iconic/css/open-iconic-bootstrap.min.css");
				//Requirements::css("//cdn.jsdelivr.net/open-iconic/1.1.0/font/css/open-iconic-bootstrap.min.css");
				
				//http://ionicons.com/
				Requirements::css("themes/bootstrap/css/ionicons/css/ionicons.min.css");
				//Requirements::css("//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
				
				// App CSS
				Requirements::css("app_config/css/app.css");
                    
				// Load JQuery From bootstap theme
					Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
					Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.min.js');
				
				Requirements::javascript("themes/bootstrap/javascript/jquery/jquery.min.js");
				//Requirements::javascript("//code.jquery.com/jquery.min.js");
				
				Requirements::javascript("themes/bootstrap/javascript/bootstrap/bootstrap.min.js");
				//Requirements::javascript("//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js");
				
            }
        
        }
        
        public function URLTopic(){
            $OwnerClass = get_class($this->owner);
            return (property_exists($OwnerClass, 'url_topic'))?$OwnerClass::$url_topic:'';
        }
        
        public function URLSegment(){
            $OwnerClass = get_class($this->owner);
            return (property_exists($OwnerClass, 'url_segment'))?$OwnerClass::$url_segment:'';
        }
        
        public function URLAction(){
            return $this->owner->getAction();
        }
        
        public function URLPath(){
            return $this->owner->URLSegment()."/".$this->owner->URLAction();
        }
        
        public function AbsoluteURLPath(){
            return Director::absoluteBaseURL().$this->owner->URLSegment()."/".$this->owner->URLAction();
        }
        
        // return Locale (e.g. de_DE, en_US)
        public function CurrentLocale(){
            return i18n::get_locale();
        }
        
        // return Language (e.g. de, en)
        public function CurrentLang(){
            return i18n::get_tinymce_lang();
        }
        
        /**
         * @param type $array
         * @return json object
         */
        public function jsonResponse($array){
            Controller::curr()->response->addHeader("Content-Type", "application/json");
            
            return json_encode($array);
        }
		
		public function Translate($Namespace, $Entity){
			return _t($Namespace.".".$Entity, $Namespace.".".$Entity);
		}
}
