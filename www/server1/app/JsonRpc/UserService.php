<?php

declare(strict_types=1);

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="UserService", protocol="jsonrpc", server="jsonrpc", publishTo="consul")
 */
class UserService implements UserServiceInterface
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}