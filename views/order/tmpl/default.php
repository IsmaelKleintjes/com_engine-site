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
$session = JFactory::getSession();
$shopping_cart = $session->get('shopping_cart');
?>
<form action="index.php?option=com_engine&view=orders" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
                        <th width="10%">
				<?php echo JText::_('name') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('price') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('description') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('image') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('quantity') ;?>
			</th>
		<tfoot>
			<tr>
				<td colspan="5">
				</td>
			</tr>
		</tfoot>
		<tbody>
                    <?php
                    foreach ($shopping_cart as $order_id => $quantity)
                    {    
                        foreach ($this->products as $i => $row) : 
                            if($row->id == $order_id)
                            {
                            $link = 'index.php/product?id=' . $row->id;
                            ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $link; ?>" title="<?php echo JText::_('Product details'); ?>">
                                                <?php echo $row->name; ?>
                                        </a>
                                    </td>
                                    <td>
                                    <?php echo $row->price; ?>
                                    </td>
                                    <td>
                                    <?php echo $row->description; ?>
                                    </td>
                                    <td>
                                    <?php echo $row->image; ?>
                                    </td>
                                    <td><?=$quantity?></td>
                                </tr><?php
                                }
                        endforeach; 
                    }
                    ?>
		</tbody>
	</table>
</form>



<form action="" method="post" id="adminForm" name="adminForm">
    <input value="Order" name="order" type="submit">
</form>
<?php
if(isset($_POST['order']))
{
    echo $this->loadTemplate('order_form');
}