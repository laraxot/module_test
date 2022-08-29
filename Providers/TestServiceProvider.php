<?php

declare(strict_types=1);

namespace Modules\Test\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\BladeService;

class TestServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'test';

    public function bootCallback(): void
    {
        BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Media');
    }
}
