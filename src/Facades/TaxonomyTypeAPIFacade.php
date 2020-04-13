<?php

declare(strict_types=1);

namespace PoP\Taxonomies\Facades;

use PoP\Taxonomies\TypeAPIs\TaxonomyTypeAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class TaxonomyTypeAPIFacade
{
    public static function getInstance(): TaxonomyTypeAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('taxonomy_type_api');
    }
}