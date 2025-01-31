<?php declare(strict_types=1);


namespace App\AgilePm\Domain\Model\Product;


use App\Common\Domain\Model\AbstractId;

class ProductId extends AbstractId
{
    public function __construct(string $anId)
    {
        parent::__construct($anId);
    }
}