<?php

namespace TG\Core\AddOn\DataType;

abstract class AbstractDataType extends \XF\AddOn\DataType\AbstractDataType
{
    abstract public function getShortName();

    abstract public function getContainerTag();

    abstract public function getChildTag();

    abstract public function exportAddOnData($addOnId, \DOMElement $container);

    abstract public function importAddOnData($addOnId, \SimpleXMLElement $container, $start = 0, $maxRunTime = 0);

    abstract public function deleteOrphanedAddOnData($addOnId, \SimpleXMLElement $container);
}