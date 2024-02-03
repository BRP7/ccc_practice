<?php
class View_Product
{
    public function __construct(Model_Request $request)
{
    $modelProduct = new Model_Product();
    $this->products = $modelProduct->show();
    // ... rest of the constructor
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
    
    public function toHtml($products)
    {
        $html = '';  // Initialize the HTML variable
    
        // Debugging statement
        $html .= '<pre>' . print_r($products, true) . '</pre>';
    
        // Check if products exist
        if (!empty($products)) {
            $html .= '<table>';
            $html .= '<tr><th>Product Name</th><th>Actions</th></tr>';
    
            foreach ($products as $product) {
                $html .= '<tr>';
                $html .= '<td>' . $product['product_name'] . '</td>';
                $html .= '<td>';
                $html .= '<a href="index.php?action=edit&id=' . $product['product_id'] . '">Edit</a> | ';
                $html .= '<a href="index.php?action=delete&id=' . $product['product_id'] . '">Delete</a>';
                $html .= '</td>';
                $html .= '</tr>';
            }
    
            $html .= '</table>';
        } else {
            $html .= '<p>No products found.</p>';
        }
    
        // Display the form with data if the action is "edit"
        if (isset($_GET['action']) && $_GET['action'] == 'edit') {
            $productId = $_GET['id'] ?? null;
            $productData = $this->getProductDataById($products, $productId);
    
            // Debugging statement
            $html .= '<pre>' . print_r($productData, true) . '</pre>';
    
            if ($productData) {
                $html .= '<br>' . $this->createForm($productData);  // Display the form with data
            }
        } elseif (isset($_GET['action']) && $_GET['action'] == 'insert') {
            $html .= '<br>' . $this->createForm();  // Display the form with blank fields
        }
    
        return $html;
    }
    

}