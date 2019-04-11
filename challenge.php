<?php

// BPO Challenge Version 1.00

// Exercise #1 - Routing
// ------------------------------------------------------------------
// In this example, assume that this file is invoked via Apache. Then,
// construct code that will take the URI from $_SERVER['REQUEST_URI'] 
// and parse it to determine this structure:
//
// https://localhost/class/function
//
// The result would be to break the URL into two variables:
// $class and $function for further processing. It's not necessary to
// write a switch statement or similar to handle these, just parsing
// it out of the URL is fine.


// Exercise #2 - Array Manipulation and Serialization
// ------------------------------------------------------------------
// Step through the following array and convert all values (not keys)
// to lowercase, then seralize the array into a JSON-encoded string.

$_USER['a'] = "Apple";
$_USER['b'] = "Banana";
$_USER['c'] = "Cranberry";


// Exercise #3 - cURL
// ------------------------------------------------------------------
// Make a cURL request to https://www.bpobpo.com/ and store the HTML
// in an array of lines.


// Exercise #4 - AWS
// ------------------------------------------------------------------
// Assume the AWS library is loaded and configuration profile 'defualt'
// has been pre-configured and is ready to go. Please use an AWS SDK
// call to reboot the instance `i-123456` in the `us-west-2` region.
// 
// Please reference: 
// https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-ec2-2016-11-15.html#rebootinstances
//

// Load in EC2 library
use Aws\Ec2\Ec2Client;

