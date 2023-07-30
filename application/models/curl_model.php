<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Curl_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    function index(){

    }

    function getUserInfo(){
         // Step 1: Initialize cURL
         $ch = curl_init();

         // Step 2: Set cURL options
         $url = 'http://localhost:3000/users'; // Replace with the URL you want to access
 
         // Optional: If you need to send headers, you can set them using CURLOPT_HTTPHEADER
         // For example, setting the 'Authorization' header:
         // $headers = array('Authorization: Bearer YOUR_ACCESS_TOKEN');
         // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
         // Set other options if needed, such as CURLOPT_RETURNTRANSFER to capture the response
         $header = [
             'Content-Type:application/json',
             'Authorization: Bearer YOUR ACCESS TOKEN'
         ];
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
 
         // Step 3: Execute the request and get the response
         $response = curl_exec($ch);
 
         // Step 4: Check for cURL errors (if any)
         if (curl_errno($ch)) {
             // Handle errors, if needed
             echo 'cURL Error: ' . curl_error($ch);
         }
 
         // Step 5: Close the cURL session
         curl_close($ch);
         // Now, you can use the $response variable, which contains the data returned by the server
         // For example, you can echo the response to see the output
         return json_decode($response,true);
    }
}
