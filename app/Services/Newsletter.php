<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email, string $list = null) {

        // This is null safe assignment operator
        // if variable is null, then make it equal to what is on the right side of operator
        // but if something is passed to list by function then we use that
        $list ??= config("services.mailchimp.list.subscribers");

        return $this->client()->lists->addListMember(config("services.mailchimp.lists.subscribers"), [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }

    public function client() {
        $mailchimp = new ApiClient();

        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);
    }
}
