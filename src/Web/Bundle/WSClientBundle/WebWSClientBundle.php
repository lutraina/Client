<?php

namespace Web\Bundle\WSClientBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 *WebWSClientBundle
 */
class WebWSClientBundle extends Bundle
{
    /**
     * trick allowing bypassing the Bundle::getContainerExtension check on getAlias
     * not very clean, to investigate
     *
     * @return Object DependencyInjection\WebStatsdExtension
     */
    public function getContainerExtension()
    {
        return new DependencyInjection\WebWSClientExtension();
    }
}
