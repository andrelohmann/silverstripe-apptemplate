<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class SignupForm extends BootstrapHorizontalModalForm {
 
    public function __construct($controller, $name, $fields = null, $actions = null) {
        
        $fields = new FieldList(
            $Firstname = TextField::create('FirstName')->setTitle(_t('Member.FIRSTNAME','Member.FIRSTNAME'))->setValue(Session::get('FormInfo.SignupForm.Firstname')),
            $Surname = TextField::create('Surname')->setTitle(_t('Member.SURNAME','Member.SURNAME'))->setValue(Session::get('FormInfo.SignupForm.Surname')),
            $Email = EmailField::create('Email')->setTitle(_t('Member.EMAIL','Member.EMAIL'))->setValue(Session::get('FormInfo.SignupForm.Email')),
            PasswordField::create('Password')->setTitle(_t('Member.PASSWORD','Member.PASSWORD')),
            LiteralField::create('Accept_TOS', _t('SignupForm.CONFIRMTOS', 'SignupForm.CONFIRMTOS'))
        );
        
        $actions = new FieldList(
            $Submit = BootstrapLoadingFormAction::create('doSignup')->setTitle(_t('SignupForm.BUTTONSIGNUP','SignupForm.BUTTONSIGNUP'))
        );
        
        $ModalOpenButton = new BootstrapModalFormAction($Title = _t('SignupForm.MODALBUTTON','SignupForm.MODALBUTTON'));
        $ModalOpenButton->addExtraClass('btn-info btn-lg btn-block');
         
        parent::__construct(
            $controller,
            $name,
            $fields,
            $actions,
            new RequiredUniqueFields(
                    $required = array(
                        "FirstName",
                        "Surname",
                        "Email",
                        "Password"
                    ), $unique = array(
                        "Email" => _t('SignupForm.EMAILEXISTS', 'SignupForm.EMAILEXISTS')
                    ), $objectClass = 'Member'
            ),
            $title = _t('SignupForm.MODALTITLE','SignupForm.MODALTITLE'),
            $ModalOpenButton
        );
    }
    
    public function doSignup(array $data) {
            
        Session::clear('FormInfo.SignupForm.Firstname');
        Session::clear('FormInfo.SignupForm.Surname');
        Session::clear('FormInfo.SignupForm.Email');
            
        $o_Member = Member::create();
        
        $this->saveInto($o_Member);
            
        $o_Member->Locale = i18n::get_locale();
        $o_Member->write();
            
        // We use Email Verified Member
        $this->controller->redirect('Security/emailsent/'.$data['Email']);
    }
}
