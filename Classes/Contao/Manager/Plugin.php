<?php

/**
 * @package     scopehelper
 * @since       06.09.2024 - 15:45
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @see         http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2024
 * @license     LGPL
 */

declare(strict_types=1);

namespace Esit\Scopehelper\Classes\Contao\Manager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Esit\Scopehelper\EsitScopehelperBundle;

class Plugin implements BundlePluginInterface
{


    /**
     * @param ParserInterface $parser
     * @return array|ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [BundleConfig::create(EsitScopehelperBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
    }
}
