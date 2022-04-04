<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(protected ApiClient $client){
        //
    }

    public function subscribe(string $email, string $list = null) {

        // This is null safe assignment operator
        // if variable is null, then make it equal to what is on the right side of operator
        // but if something is passed to list by function then we use that
        $list ??= config("services.mailchimp.list.subscribers");

        return $this->client->lists->addListMember(config("services.mailchimp.lists.subscribers"), [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }
}
