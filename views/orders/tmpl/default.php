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
session_start();
?>
<form action="" method="post" id="adminForm" name="adminForm">
    <input value="Go to shopping cart" name="shopping_cart" type="submit">
</form>
<?php
if(isset($_POST['shopping_cart']))
{
    echo $this->loadTemplate('cart');  
}

?>
<form action="index.php?option=com_engine&view=orders" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
                        <th width="10%">
				<?php echo JText::_('id') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('product_id') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('user_id') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('shipping_address') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('email') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('phone') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('zipcode') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('city') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('country') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('shipping_name') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('amount') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('price') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('created_at') ;?>
			</th>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
                        
				<?php foreach ($this->items as $i => $row) : 
                                    $link = 'index.php/order?id=' . $row->id;
                                    ?>
					<tr>
                                                <td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('Product details'); ?>">
                                                            <?php echo $row->id; ?>
                                                    </a>
						</td>
                                                <td>
						<?php echo $row->product_id; ?>
						</td>
                                                <td>
						<?php echo $row->user_id; ?>
						</td>
                                                <td>
						<?php echo $row->shipping_address; ?>
						</td>
                                                <td>
						<?php echo $row->email; ?>
						</td>
                                                <td>
						<?php echo $row->phone; ?>
						</td>
                                                <td>
						<?php echo $row->zipcode; ?>
						</td>
                                                <td>
						<?php echo $row->city; ?>
						</td>
                                                <td>
						<?php echo $row->country; ?>
						</td>
                                                <td>
						<?php echo $row->shipping_name; ?>
						</td>
                                                <td>
						<?php echo $row->amount; ?>
						</td>
                                                <td>
						<?php echo $row->price; ?>
						</td>
                                                <td>
						<?php echo $row->created_at; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>
