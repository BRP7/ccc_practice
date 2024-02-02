<?php
class View_Product
{
    public function __construct()
    {

    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';
        	$form .= '<div>';
	        	$form .= $this->creteTextField('pdata[product_name]', "Product Name: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteTextField('pdata[sku]', "Sku: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteTextField('pdata[price]', "Price: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteTextField('pdata[manufacturer_cost]', "Cost: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createSelectField('pdata[category]', 'Category', ['' => 'Select Category', 'Living room', 'Dining & kitchen','Office','Mattresses','Bar & Game Room','Outdoor','Decor','Lighting'],'dining & kitchen');
	        $form .= '</div>';
            $form .= '<div>';
	        	$form .= $this->createRadioBtn('pdata[status]','Status', ['Enabled','Disabled']);
	        $form .= '</div>';
            $form .= '<div>';
	        	$form .= $this->createRadioBtn('pdata[product_type]','Product Type', ['Simple','Bundle']);
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteSubmitBtn('Submit');
	        $form .= '</div>';
		$form .= '</form>';
		return $form;
    }

    public function creteTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '">';
    }


    // public function createSelectField($name, $title, $options = [], $selectedValue = '', $id = '')
    // {
    // $selectField = '<span> ' . $title . ' </span><select id="' . $id . '" name="' . $name . '">';

    // foreach ($options as $value => $label) {
    //     $selected = ($value == $selectedValue) ? 'selected="selected"' : '';
    //     $selectField .= '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
    // }
    // $selectField .= '</select>';
    // return $selectField;
    // }

    public function createSelectField($name, $title, $options = [], $selectedValue = '', $id = '')
    {
    $selectField = '<span> ' . $title . ' </span><select id="' . $id . '" name="' . $name . '">';

    foreach ($options as $value) {
        $selected = ($value == $selectedValue) ? 'selected="selected"' : '';
        $selectField .= '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
    }

    $selectField .= '</select>';
    return $selectField;
    }
    // public function createRadioBtn($name, $title, $options = [], $selectedValue = '', $id = ''){
    //     $radioBtn='<span> ' . $title . ' </span><input type="radio" id="' . $id . '" name="' . $name '"';
    //     foreach ($options as $value) {
    //         $selected = ($value == $selectedValue) ? 'selected="selected"' : '';
    //         $radioBtn .= '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
    //     }
    //     $radioBtn .= '/>"';
    // }


    public function createRadioBtn($name, $title, $options = [], $selectedValue = '', $id = ''){
        $radioBtn = '<span>' . $title . '</span>';
    
        foreach ($options as $value) {
            $checked = ($value == $selectedValue) ? 'checked' : '';
            $radioBtn .= '<label><input type="radio" id="' . $id . '" name="' . $name . '" value="' . $value . '" ' . $checked . '> ' . $value . '</label>';
        }
    
        return $radioBtn;
    }
    


    public function creteSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="'.$title.'">';
    }

    public function toHtml()
    {
    	return $this->createForm();
    }
}
