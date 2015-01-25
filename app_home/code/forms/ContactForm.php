<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ContactForm extends BootstrapHorizontalForm {
 
    public function __construct($controller, $name, $fields = null, $actions = null) {
        
        $fields = new FieldList(
            $Email = EmailField::create('Email')->setTitle(_t('ContactForm.EMAIL','ContactForm.EMAIL')),
            $Name = TextField::create('Name')->setTitle(_t('ContactForm.NAME','ContactForm.NAME')),
            $Message = TextareaField::create('Message')->setTitle(_t('ContactForm.MESSAGE','ContactForm.MESSAGE'))
        );
        
        $actions = new FieldList(
            $Submit = FormAction::create('doContact')->setTitle(_t('ContactForm.BUTTONSEND','ContactForm.BUTTONSEND'))
        );
        
        $Submit->addExtraClass('btn');
         
        parent::__construct(
            $controller,
            $name,
            $fields,
            $actions,
            new RequiredFields(
                "Email",
                "Name",
                "Message"
            )
        );
    }
    
    public function doContact(array $data) {
        
        $email = new Email();
        $email->setTo(Email::getAdminEmail());
        $email->setFrom($data['Email']);
        $email->setSubject(_t('ContactForm.SUBJECT', 'ContactForm.SUBJECT').$data['Name']);
        $email->setBody($data['Message']);
        //$email->set
        $email->send();
        
        $this->sessionMessage(_t('ContactForm.SUCCESS', 'ContactForm.SUCCESS'), 'good');
        
        $this->controller->redirectBack();
    }
}
