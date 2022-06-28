<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Contracts\TenantRepositoryInterface;

class ProductService
{
    protected $productService, $tenantService;

    public function __construct(ProductRepositoryInterface $productService, TenantRepositoryInterface $tenantService)
    {
        $this->productService = $productService;
        $this->tenantService = $tenantService;
    }

    public function getProductsByTenantUuid(string $uuid)
    {
        $tenant = $this->tenantService->getTenantByUuid($uuid);

        return $this->productService->getProductsByTenantId($tenant->id);
    }
}
