<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\JsonRpc\UserServiceInterface;

class IndexController extends AbstractController
{
    public function index(UserServiceInterface $userService)
    {
        return $userService->add(2,2);
    }
}
