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
                        <th width="10%">
				<?php echo JText::_('quantity') ;?>
			</th>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
                    <?php
                    foreach ($_SESSION['shoping_cart'] as $product_id => $quantity)
                    {    
                        foreach ($this->items as $i => $row) : 
                            if($row->id == $product_id)
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
    <input value="Go to shopping cart" name="shopping_cart" type="submit">
</form>
<?php
if(isset($_POST['shopping_cart']))
{
    echo $this->loadTemplate('cart');
}



