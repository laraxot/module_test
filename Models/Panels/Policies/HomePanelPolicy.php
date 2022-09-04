<?php
namespace Modules\Test\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Test\Models\Panels\Policies\HomePanelPolicy as Panel;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class HomePanelPolicy extends XotBasePanelPolicy {
}
