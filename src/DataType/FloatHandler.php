<?php

namespace Plank\Metable\DataType;

/**
 * Handle serialization of floats.
 */
class FloatHandler extends ScalarHandler
{
    /**
     * {@inheritdoc}
     */
    protected $type = 'double';

    /**
     * {@inheritdoc}
     */
    public function getDataType(): string
    {
        return 'float';
    }

    public function getNumericValue(mixed $value, string $serializedValue): null|int|float
    {
        return $value;
    }

    public function getStringValue(mixed $value, string $serializedValue): null|string
    {
        return (string) $value;
    }
}
