<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 343-9911',
        'email_id' => 'info@demo.com',
        'address' => 'demo, Boston, MA 02109, United States',
        'domain_name' => 'ticketxperts.services',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
