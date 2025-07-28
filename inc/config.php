<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 343-9911',
        'email_id' => 'info@ticketxperts.services',
        'address' => '4350 La Jolla Village Drive, Suite 100
San Diego, California 92122',
        'domain_name' => 'ticketxperts.services',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
