<?php

declare(strict_types=1);

namespace Modules\Test\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class _ModulePanelPolicy extends XotBasePanelPolicy
{
    public function test(UserContract $user, PanelContract $panel): bool
    {
        //In this case all users can access the action Test
        return true;
    }
}
