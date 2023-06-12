<?php

namespace Prismaticoder\MakerChecker\Events;

use Prismaticoder\MakerChecker\Models\MakerCheckerRequest;

class RequestRejected
{
    public MakerCheckerRequest $request;

    public function __construct(MakerCheckerRequest $request)
    {
        $this->request = $request;
    }
}
