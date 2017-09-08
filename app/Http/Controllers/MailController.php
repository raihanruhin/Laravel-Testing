<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function basic_email(){
      $data = array('name'=>"Raihan Ruhin");
   
      \ Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('raihan.ruhin@teamworkbd.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('raihanruhin@gmail.com','Raihan Ruhin');
      });
      echo "Basic Email Sent. Check your inbox.";
   }

   public function html_email(){
      $data = array('name'=>"Virat Gandhi");
      \ Mail::send('mail', $data, function($message) {
         $message->to('raihan.ruhin@teamworkbd.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   
   public function attachment_email(){
      $data = array('name'=>"Virat Gandhi");
      \ Mail::send('mail', $data, function($message) {
         $message->to('raihan.ruhin@teamworkbd.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('F:\Passport Pic.jpg');
         //$message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
