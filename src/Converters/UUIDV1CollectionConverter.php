<?php

namespace SaaSFormation\VOMagicFieldBridge\Converters;

use Ramsey\Uuid\Exception\InvalidUuidStringException;
use SaaSFormation\Field\InvalidConversionException;
use StraTDeS\VO\Collection\IdCollection;
use StraTDeS\VO\Single\UUIDV1;

trait UUIDV1CollectionConverter
{
    /**
     * @throws InvalidConversionException
     */
    public function uuidv1Collection(): IdCollection
    {
        if(!is_array($this->value)) {
            throw new InvalidConversionException("An UUIDV1IdCollection can only be generated from an array of id's");
        }

        $idCollection = IdCollection::create();

        try {
            foreach($this->value as $uuidv1) {
                $idCollection->add(UUIDV1::fromString($uuidv1));
            }
        } catch(InvalidUuidStringException $e) {
            throw new InvalidConversionException("An UUIDV1IdCollection can only be generated from an array of id's");
        }

        return $idCollection;
    }
}
