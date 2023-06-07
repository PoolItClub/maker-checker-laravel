<?php

namespace Prismaticode\MakerChecker\Enums;

abstract class RequestTypes
{
    public const CREATE = 'create';
    public const UPDATE = 'update';
    public const DELETE = 'delete';
    public const ACTION = 'action';

    public static function getAll(): array
    {
        return [
            static::CREATE,
            static::UPDATE,
            static::DELETE,
            static::ACTION,
        ];
    }
}