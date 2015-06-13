<?php

namespace Emoe\GuzzleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Emoe\GuzzleBundle\DependencyInjection\Compiler\ClientCompilerPass;

class EmoeGuzzleBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ClientCompilerPass());
    }
}
