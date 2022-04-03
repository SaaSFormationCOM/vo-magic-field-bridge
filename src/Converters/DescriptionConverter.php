<?php

namespace SaaSFormation\VOMagicFieldBridge\Converters;

use SaaSFormation\Field\InvalidConversionException;
use StraTDeS\VO\Single\Description;
use StraTDeS\VO\Single\Name;

trait DescriptionConverter
{
    /**
     * @throws InvalidConversionException
     */
    public function description(): Description
    {
        if(!is_string($this->value)) {
            throw new InvalidConversionException("Description can only be created from a string");
        }

        return Description::fromValue($this->value);
    }

    /**
     * @return Description|null
     * @throws InvalidConversionException
     */
    public function descriptionOrNull(): ?Description
    {
        $converter = $this->value;

        if(is_null($converter)) {
            $converter = null;
        } else {
            $converter = $this->description();
        }

        return $converter;
    }
}
