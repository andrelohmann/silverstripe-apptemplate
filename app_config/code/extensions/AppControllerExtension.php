<?php

class AppControllerExtension extends Extension {

	public function onBeforeInit(){
            
            $url = explode('/',$this->owner->request->getURL());
            
            // Set Requirements for all custom Controllers
            if(!in_array($url[0], array('admin', 'dev', 'interactive'))){
                Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
                //Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.min.js');
                // Jquery wird von Bootstrap im Page.ss Template geladen
                Requirements::block(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.min.js');
                // <!--script src="http://code.jquery.com/jquery.min.js"></script-->
                
                Requirements::javascript('bootstrap_extra_fields/javascript/tooltip.js');
            }
        
        }

}
