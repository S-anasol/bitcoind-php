<?php

namespace Nbobtc\Component\Bitcoind;

/**
 */
interface ClientInterface
{

    /**
     * @param string $method
     * @param string $params
     * @param string $id
     *
     * @return mixed
     */
    public function execute($method, $params = null, $id = null);
}
