{\rtf1\ansi\ansicpg1252\cocoartf2639
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;\red255\green255\blue255;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;\cssrgb\c100000\c100000\c100000\c0;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs28 \cf2 \cb3 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 <?php\
  if(isset( $_POST['name']))\
  $name = $_POST['name'];\
  if(isset( $_POST['email']))\
  $email = $_POST['email'];\
  if(isset( $_POST['message']))\
  $message = $_POST['message'];\
  if(isset( $_POST['subject']))\
  $subject = $_POST['subject'];\
\
  $content="From: $name \\n Email: $email \\n Message: $message";\
  $recipient = \'93samhurst5150@gmail.com";\
  $mailheader = "From: $email \\r\\n";\
  mail($recipient, $subject, $content, $mailheader) or die("Error!");\
  echo "Email sent!";\
?>\
\
}