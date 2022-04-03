<?php

namespace SaaSFormation\VOMagicFieldBridge\Tests\Unit;

use SaaSFormation\Field\InvalidConversionException;
use SaaSFormation\VOMagicFieldBridge\VOField;
use PHPUnit\Framework\TestCase;
use StraTDeS\VO\Single\Description;
use StraTDeS\VO\Single\Name;
use StraTDeS\VO\Single\UUIDV1;

class VOFieldTest extends TestCase
{
    /**
     * @test
     * @return void
     * @throws InvalidConversionException
     */
    public function checkAProperNameIsReturnedWhenAStringIsProvided(): void
    {
        // Arrange
        $value = "John";
        $expectedName = Name::fromValue($value);

        // Act
        $converted = (new VOField($value))->name();

        // Assert
        $this->assertInstanceOf(Name::class, $converted);
        $this->assertEquals($expectedName, $converted);
    }

    /**
     * @test
     * @return void
     */
    public function checkNameThrowsAnExceptionWhenANonStringIsProvided(): void
    {
        // Arrange
        $value = 1;
        $this->expectException(InvalidConversionException::class);

        // Act
        (new VOField($value))->name();

        // Assert
    }

    /**
     * @test
     * @return void
     * @throws InvalidConversionException
     */
    public function checkAProperDescriptionIsReturnedWhenAStringIsProvided(): void
    {
        // Arrange
        $value = "This is a description";
        $expectedDescription = Description::fromValue($value);

        // Act
        $converted = (new VOField($value))->description();

        // Assert
        $this->assertInstanceOf(Description::class, $converted);
        $this->assertEquals($expectedDescription, $converted);
    }

    /**
     * @test
     * @return void
     */
    public function checkDescriptionThrowsAnExceptionWhenANonStringIsProvided(): void
    {
        // Arrange
        $value = 1;
        $this->expectException(InvalidConversionException::class);

        // Act
        (new VOField($value))->description();

        // Assert
    }

    /**
     * @test
     * @return void
     * @throws InvalidConversionException
     */
    public function checkAProperUUIDV1IsReturnedWhenAValidStringIsProvided(): void
    {
        // Arrange
        $value = "f9fb8670-ff7d-4086-b1a2-2cd8b2403ad1";
        $expectedUUIDV1 = UUIDV1::fromString($value);

        // Act
        $converted = (new VOField($value))->uuidv1();

        // Assert
        $this->assertInstanceOf(UUIDV1::class, $converted);
        $this->assertEquals($expectedUUIDV1, $converted);
    }

    /**
     * @test
     * @return void
     */
    public function checkUUIDV1ThrowsAnExceptionWhenANonStringIsProvided(): void
    {
        // Arrange
        $value = 1;
        $this->expectException(InvalidConversionException::class);

        // Act
        (new VOField($value))->uuidv1();

        // Assert
    }
}
