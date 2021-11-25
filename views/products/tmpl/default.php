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
//$_SESSION['shoping_cart'] = null;
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
<form action="index.php?option=com_engine&view=products" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
                        <th width="10%">
				<?php echo JText::_('name') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('description') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('image') ;?>
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
                                    $link = 'index.php/product?id=' . $row->id;
                                    ?>
					<tr>
                                                <td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('Product details'); ?>">
                                                            <?php echo $row->name; ?>
                                                    </a>
						</td>
                                                <td>
						<?php echo $row->description; ?>
						</td>
                                                <td>
						<?php echo $row->image; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>
