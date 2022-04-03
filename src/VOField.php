<?php

namespace SaaSFormation\VOMagicFieldBridge;

use SaaSFormation\Field\StandardField;
use SaaSFormation\VOMagicFieldBridge\Converters\DescriptionConverter;
use SaaSFormation\VOMagicFieldBridge\Converters\NameConverter;
use SaaSFormation\VOMagicFieldBridge\Converters\UUIDV1Converter;

class VOField extends StandardField
{
    use NameConverter;
    use DescriptionConverter;
    use UUIDV1Converter;
}
