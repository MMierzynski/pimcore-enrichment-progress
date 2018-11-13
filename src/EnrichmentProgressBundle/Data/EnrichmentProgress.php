<?php
/**
 * @category    enrichment-progress
 * @date        20/09/2018 13:46
 * @author      Korneliusz Kirsz <kkirsz@divante.co>
 * @copyright   Copyright (c) 2018 Divante Ltd. (https://divante.co/)
 */

namespace Divante\EnrichmentProgressBundle\Data;

use Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue;

/**
 * Class EnrichmentProgress
 * @package Divante\EnrichmentProgressBundle\Data
 */
class EnrichmentProgress extends CalculatedValue
{
    /**
     * @var string
     */
    public $fieldtype = 'enrichmentProgress';

    /**
     * @var string
     */
    public $calculatorClass = EnrichmentProgressCalculator::class;

    /**
     * @var string
     */
    public $queryColumnType = 'tinyint';

    /**
     * @return string
     */
    public function getQueryColumnType()
    {
        return $this->queryColumnType;
    }

    /**
     * @param mixed $data
     * @param mixed $object
     * @param array $params
     * @return mixed
     */
    public function getDataForGrid($data, $object = null, $params = [])
    {
        if (is_int($data)) {
            return $data / 100;
        }

        return null;
    }
}