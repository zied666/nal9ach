<?php

namespace admin\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class adminUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
