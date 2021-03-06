<?php

namespace Silentz\Charge\Mail;

use Silentz\Charge\Mail\BaseMailable as Mailable;

class InvoicePaymentActionRequired extends Mailable
{
    public function build()
    {
        return $this
            ->view($this->template());
    }

    protected function recipient(): string
    {
        return '';
    }
}
