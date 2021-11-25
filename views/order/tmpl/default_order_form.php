<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <form action="<?php echo JUri::base(); ?>index.php?option=com_engine" method="post" name="adminForm" id="form-validate" class="form-validate form-contact contact-form">
                    <div class="panel-heading"><?php echo JText::_('COM_ENGINE_ORDER_FORM'); ?></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('product_id'); ?>
                                    <?php echo $this->form->getInput('product_id'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('user_id'); ?>
                                    <?php echo $this->form->getInput('user_id'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('shipping_address'); ?>
                                    <?php echo $this->form->getInput('shipping_address'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('email'); ?>
                                    <?php echo $this->form->getInput('email'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('phone'); ?>
                                    <?php echo $this->form->getInput('phone'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('zipcode'); ?>
                                    <?php echo $this->form->getInput('zipcode'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('city'); ?>
                                    <?php echo $this->form->getInput('city'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('country'); ?>
                                    <?php echo $this->form->getInput('country'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('shipping_name'); ?>
                                    <?php echo $this->form->getInput('shipping_name'); ?>
                                </div>
                            </div>
                        </div>
                                                <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('amount'); ?>
                                    <?php echo $this->form->getInput('amount'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('price'); ?>
                                    <?php echo $this->form->getInput('price'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $this->form->getLabel('created_at'); ?>
                                    <?php echo $this->form->getInput('created_at'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-success"><?php echo JText::_('COM_ENGINE_SENT'); ?></button>
                        <div>
                            <input type="hidden" name="task" id="task" value="orders.save" />
                            <?php echo $this->form->getInput('id'); ?>
                            <?php echo $this->form->renderField('captcha'); ?>
                            <?php echo JHtml::_('form.token'); ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>