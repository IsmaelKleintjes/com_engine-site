<?php defined( '_JEXEC' ) or die;

class EngineControllerOrders extends JControllerForm
{
    protected $view_list = 'orders';

    public function getModel($name = 'Order', $prefix = 'EngineModel', $config=array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }

}