<?php

namespace Botble\ImpersonateAccount\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LeaveImpersonationAccount
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Authenticatable $impersonator;

    public Authenticatable $impersonated;

    public function __construct(Authenticatable $impersonator, Authenticatable $impersonated)
    {
        $this->impersonator = $impersonator;
        $this->impersonated = $impersonated;
    }
}
