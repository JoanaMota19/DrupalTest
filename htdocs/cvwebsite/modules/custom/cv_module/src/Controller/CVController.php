<?php

namespace Drupal\cv_module\Controller;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\cv_module\Controller\drupal_set_message
//class CVController {

  //  public function listing() {
    //    $element = array (
      //  '#markup'=> 'Hello World',
        //   );

    //return $element;
    //}
//}

 class CVForm extends FormBase
{
public function getFormid()
{
 return 'cv form';
}
public function buildForm (array $form, FormStateInterface $form_state)
{
$form['Name'] = array(
    '#title' => ('Name'),
    '#type' => 'textfield',
    '#size' => 25,
    '#required' => TRUE,
);

$form['Adress'] = array(
    '#title' => ('Adress'),
    '#type' => 'textfield',
    '#size' => 25,
    '#required' => TRUE,
);

// district dropdown
$options ['District'] = array('Aveiro',
 'Beja','Braga','Bragança','Castelo Branco','Coimbra','Évora','Faro','Guarda','Leiria','Lisboa','Portalegre','Porto','Santarém','Setúbal',
'Viana do Castelo','Vila Real','Viseu');
echo"<select>";
foreach($options as $option)
{
    echo "<option value='$options'>$options</options";
}
echo"</select>";

$form  ['submit'] = array (
    '#title' => 'submit',
    '#value' => ('submit'),
);
    return $form;
}


//submit form

public function submitForm(array $form, FormStateInterface $form_state)
    {
    drupal_set_message('Form completed');
    }
}
?>
</div>
<div>

