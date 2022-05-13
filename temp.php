<?php
$email = "catalin12noi7@yaoo.com";
$pass = "sfds";

//$command = escapeshellcmd('python C:\wamp64\www\Project_php\index\main_user.py' . " " . $email);
   //  da   $cmd = 'python C:\wamp64\www\Project_php\index\test.py'.' '.$email.' '.$pass.' &';
   $cmd = 'python C:\wamp64\www\Project_php\index\main_user1.py' . " " . $email.' &';
   $command = escapeshellcmd($cmd);
   $output = shell_exec($command);
   echo $output;
?>