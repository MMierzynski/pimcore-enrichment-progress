<?php
/**
 * @category    enrichment-progress
 * @date        20/09/2018 13:46
 * @author      Korneliusz Kirsz <kkirsz@divante.co>
 * @copyright   Copyright (c) 2018 Divante Ltd. (https://divante.co/)
 */

namespace EnrichmentProgressBundle;

use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class EnrichmentProgressBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    /**
     * @return string
     */
    public function getComposerPackageName(): string
    {
        return 'divante-ltd/pimcore-enrichment-progress';
    }

    /**
     * @return string
     */
    public function getNiceName()
    {
        return 'Enrichment Progress Bundle';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'This is a package that contains custom data type that allows to monitor enrichment progress of objects';
    }

    /**
     * @return array
     */
    public function getJsPaths()
    {
        return [
            '/bundles/enrichmentprogress/js/pimcore/object/classes/data/enrichmentProgress.js',
            '/bundles/enrichmentprogress/js/pimcore/object/tags/enrichmentProgress.js',
            '/bundles/enrichmentprogress/js/pimcore/startup.js',
            '/bundles/enrichmentprogress/js/pimcore/progressbar.js',
        ];
    }

    /**
     * @return array
     */
    public function getCssPaths()
    {
        return [
            '/bundles/enrichmentprogress/css/style.css',
        ];
    }
}
