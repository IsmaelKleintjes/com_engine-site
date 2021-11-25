<?php defined("_JEXEC") or die("Restricted access");

class EngineModelOrders extends JModelList
{
    public function getListQuery()
    {
        $query = parent::getListQuery();

        $query->select( "*" );
        $query->from( "#__order" );
        //$query->where( "published = 1" );

        return $query;
    }
}