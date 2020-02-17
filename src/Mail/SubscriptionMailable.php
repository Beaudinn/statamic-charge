<?php

namespace Silentz\Charge\Mail;

use Silentz\Charge\Models\User;
use Laravel\Cashier\Subscription;

abstract class SubscriptionMailable extends BaseMailable
{
    /** @var User */
    protected $user;

    public function __construct($payload = [])
    {
        parent::__construct($payload);

        $this->user = Subscription::where('stripe_id', $this->data['id'])
            ->first()
            ->user();
    }
}