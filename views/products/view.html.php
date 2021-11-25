<?php defined("_JEXEC") or die("Restricted access");

class EngineViewProducts extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->pagination = $this->get('pagination');
        $model = $this->getModel();
        $this->items = $model->getItems();

        parent::display($tpl);
    }
}