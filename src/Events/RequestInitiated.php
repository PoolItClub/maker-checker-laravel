<?php

namespace Prismaticode\MakerChecker\Exceptions;

use Prismaticode\MakerChecker\Models\MakerCheckerRequest;

class RequestInitiated
{
    public MakerCheckerRequest $request;

    public function __construct(MakerCheckerRequest $request)
    {
        $this->request = $request;
    }
}