<?php

namespace App\Dto;

abstract readonly class BaseDto
{
    protected function extractToArray(array $data): array
    {
        return array_filter($data, function($value){
            return $value !== null;
        });
    }    
}
