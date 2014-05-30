<?php

//Khai bao namespace cho class UploadForm
namespace Application\Form;

//G?i d?n CLASS ch?a d?i tu?ng t?o FORM
use Zend\Form\Form;

class UploadForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('appForm');
//Khai b�o phuong th?c s? d?ng trong FORM
        $this->setAttribute('method', 'post');       
        //Khai b�o ki?u d? li?u du?c g?i l�n server 
        $this->setAttribute('enctype','multipart/form-data');

        //Khai b�o ph?n t? textbox 'username'
        $this->add(array(
            'name' => 'picture',
            'attributes' => array(
               'type'  => 'file',
      'required' => 'required',
               'class' => 'txtInput txtMedium'
            ),
            'options' => array(
                'label' => 'File upload:',
            ),
        ));
       
        
        //submit
        $this->add(array(
              'name' => 'submit',
              'attributes' => array(
                    'type'  => 'submit',
                    'value' => 'Send data'
              ),
        ));
        
    }
}
?>