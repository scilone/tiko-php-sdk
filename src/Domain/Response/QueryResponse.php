<?php

namespace Scilone\TikoSDK\Domain\Response;

use Scilone\TikoSDK\Domain\Entity\Query;

class QueryResponse
{
    private Query $query;

    public function __construct(Query $query)
    {
        $this->query = $query;
    }

    public function getQuery(): Query
    {
        return $this->query;
    }
}
