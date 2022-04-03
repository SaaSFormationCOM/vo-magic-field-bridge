<?php

namespace SaaSFormation\VOMagicFieldBridge\Converters;

use SaaSFormation\Field\InvalidConversionException;
use StraTDeS\VO\Single\UUIDV1;

trait UUIDV1Converter
{
    /**
     * @throws InvalidConversionException
     */
    public function uuidv1(): UUIDV1
    {
        if(!is_string($this->value)) {
            throw new InvalidConversionException("A UUIDV1 can only be generated from a string");
        }

        return UUIDV1::fromString($this->value);
    }
}
