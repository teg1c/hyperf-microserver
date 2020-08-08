<?php

declare(strict_types=1);

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="OrderService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class OrderService implements OrderServiceInterface
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}