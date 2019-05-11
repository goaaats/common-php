<?php

namespace XIV\Exceptions;

class CompanionMarketServerException extends \Exception
{
    use ExceptionTrait;
    
    const CODE    = 400;
    const MESSAGE = 'Invalid server provided for request.';
}