<?php
/**
 * Created by Spark108
 * Date: 02.02.2019 11:11
 * Project: TGStudio
 * Author: Spark108 (https://vk.com/spark108 | https://spark108.ru)
 * Development Organization: TechGate Studio (https://spark108.ru/tgs)
 */

namespace TG\Core\Install\Data
{
    abstract class AbstractMySQL
    {
        /**
         * @param array $data
         */
        abstract public function getData(array &$data = []) : void;
    }
}