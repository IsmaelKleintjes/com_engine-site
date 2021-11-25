<?php defined( '_JEXEC' ) or die;

class EngineControllerCompanies extends JControllerForm
{
    protected $view_list = 'companies';

    public function getModel($name = 'Company', $prefix = 'EngineModel', $config=array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }

}