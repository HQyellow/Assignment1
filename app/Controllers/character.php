<?php
 namespace App\Controllers;
 class character extends \CodeIgniter\Controller
 {
 public function index()
 {
 // connect to the model
 $places = new \App\Models\character();
 // retrieve all the records
 $records = $places->findAll();
 // JSON encode and return the result
 return json_encode($records);
 }
 }
