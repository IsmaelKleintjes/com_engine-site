<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<br><h1><?php echo $this->item->name ?></h1>
	<table class="table table-striped table-hover">
                        <th width="10%"><?php echo JText::_('price') ;?></th>
                        <th width="10%"><?php echo JText::_('description') ;?></th>
                        <th width="5%"><?php echo JText::_('image') ;?></th>
		<tbody>
                        <tr>
                            <td><?php echo $this->item->price; ?></td>
                            <td><?php echo $this->item->description; ?></td>
                            <td><?php echo $this->item->image; ?></td>
                        </tr>
		</tbody>
	</table>

<form action="" method="post" id="adminForm" name="adminForm">
    <input type="hidden" name="product_id" value="<?php echo $this->item->id ?>">
    <input type="text" name="quantity" value="">
    <input value="Add to shopping cart" name="order" type="submit">
</form>
<?php 
if (isset($_POST['product_id']))
{
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];              
    if (isset($_SESSION['shopping_cart']) && is_array($_SESSION['shopping_cart']))
    {   
        if (array_key_exists($product_id, $_SESSION['shopping_cart'])) {
                $_SESSION['shopping_cart'][$product_id] += $quantity;
            } else {
                $_SESSION['shopping_cart'][$product_id] = $quantity;
            }
    } else
    {
        $_SESSION['shopping_cart'] = array($product_id => $quantity);
    }
    $session = JFactory::getSession();
    $session->set('shopping_cart', $_SESSION['shopping_cart']);
    header("Location: http://localhost/joomla_3/Twins/index.php/products");   
}
?>
