<?php

namespace SaaSFormation\VOMagicFieldBridge\Converters;

use SaaSFormation\Field\InvalidConversionException;
use StraTDeS\VO\Single\Name;

trait NameConverter
{
    /**
     * @throws InvalidConversionException
     */
    public function name(): Name
    {
        if(!is_string($this->value)) {
            throw new InvalidConversionException("Name can only be created from a string");
        }

        return Name::fromValue($this->value);
    }

    /**
     * @return Name|null
     * @throws InvalidConversionException
     */
    public function nameOrNull(): ?Name
    {
        $converter = $this->value;

        if(is_null($converter)) {
            $converter = null;
        } else {
            $converter = $this->name();
        }

        return $converter;
    }
}
