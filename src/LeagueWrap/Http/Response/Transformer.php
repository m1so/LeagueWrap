<?php

namespace LeagueWrap\Http\Response;

use Psr\Http\Message\ResponseInterface;

class Transformer
{
    /**
     * @param ResponseInterface $response
     *
     * @return array
     */
    public static function toArray(ResponseInterface $response)
    {
        return json_decode($response->getBody()->__toString(), true);
    }
}
