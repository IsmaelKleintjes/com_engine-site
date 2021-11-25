<?php defined("_JEXEC") or die("Restricted access");

class EngineModelProducts extends JModelList
{
    public function getListQuery()
    {
        $query = parent::getListQuery();

        $query->select( "*" );
        $query->from( "#__product" );
        //$query->where( "published = 1" );

        return $query;
    }
}