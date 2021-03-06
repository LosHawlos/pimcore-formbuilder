<?php

namespace Formbuilder\Lib\Form\Frontend\Mapper;

abstract class MapAbstract
{
    /**
     * @param array  $element
     * @param string $formType
     * @param array  $formInfo
     *
     * @return array
     */
    public static function parse($element = [], $formType = '', $formInfo = [])
    {
        return $element;
    }
}