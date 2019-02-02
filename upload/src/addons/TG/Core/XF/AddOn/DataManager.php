<?php

namespace TG\Core\XF\AddOn;

class DataManager extends XFCP_DataManager
{
    public function getDataTypeClasses() : array
    {
        $dataTypes = parent::getDataTypeClasses();
        
        return array_merge($dataTypes, [
            'TG\Core:Rebuild'
        ]);
    }
}