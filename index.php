<!doctype html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Secure Contact</title>
  <link rel="stylesheet" media="all" href="gpg.css">
 </head>
 <body>
  <div class="block">
   <h2>Message will be encrypted before post. use a decent browser to get this working :)</h2>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post" onsubmit="return encrypt();" name="myform" id="myform">
    <ul>
     <li><label>Your mail (optional): </label><br/><input type="email" name="mail" id="mail" /></li>
     <li><label>Your message: </label><br/><textarea name="message" id="message"></textarea></li>
    </ul>
    <input type="submit" name="mybutton" id="mybutton" />
   </form>
  </div>
  <div class="block">
   <pre id="pubkey">
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v1.4.12 (Darwin)

mQENBFJYNVcBCADN1PZRbS7I6UpkE0390DXvZ6ZayC1+1X3ckC8UJTEKixURZQbc
rm9VO7eftr+E4lyTJ2aouZWCnrE6A0sfgXSh+EEJ6R8nbolag46WT1/yknIm4K5d
0J14mNL/lqvDf2P8ws50NPM5r02sFpmVsJ0jVbpGCTf8J3sesdgAicNT/gRsxsO3
Fi5JKNKKPJkBLzdMPq4fL3U6fP1dWxxytvOSqByoswz/Dc0+KTF2NH6dJOPj8MUS
O5WS9QOstJFr1dkOhw4b8jxJSX6DxqStwOZvtzMRvg7kLoFihsoZDTrabdT6qhNq
[....... paste your pub key and set your mail at the end ......]
zFSUSqeoeJfPtDN0qt0mUpiXML1GFRfmfepZABEBAAG0GFNFQ1dBTiA8aW5mb0Bz
UOiaKSQ1tEK8uF4oz1rO5gf+ISxoorzlDMzvYkKC36ApraaHaaMINbxQV/yB/Vhh
6SPqMAPxvwPv/tGRu7tOTYPrz/ZJeVYnXFNqyD6R9dBkmM32sz3gcJUgVfETrQ9O
qrlWHUk6wt3p5IAoMUHQke96cqoTUzgNzYTY1hjhrHvhdEr4xI7AV4Q09e8DLl6t
6Iwf0jyRXyx4pk27w5wNzLVR8LI0SAcxfJvXxg1HH/hl9QtIGKTcI7pk1FfBuDGg
49UJPMXJLsokW9pnHq6WxRRJNVIi5TQ=
=cbvY
-----END PGP PUBLIC KEY BLOCK-----
   </pre>
  </div>
  <script src="./jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="./gpg.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>

<?php
if (isset($_POST['mail']))
  {
  $email = $_POST['mail'] ;
  $message = $_POST['message'] ;
  mail("me@nsa.gov", "Message from secure contact form",$message, "From:" . $email);
  }
?>
 
