<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Langcloud</title>
</head>
<h1>Langcloud AWS Demo With Git Pull</h1>
<body>
<p>
<img src="https://s3-eu-west-1.amazonaws.com/langclouddemo/img/ProtocolDroid.png" align="left">
<br>
<br>
<br>
<br>
Hello, you have commected to instance :
<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://169.254.169.254/latest/meta-data/instance-id");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    print $result;
?>
<br>
My instance size is :
<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://169.254.169.254/latest/meta-data/instance-type");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    print $result;
?>
<br>
My IP address is :
<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://169.254.169.254/latest/meta-data/local-ipv4");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    print $result;
?>
<br>
I live in :
<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://169.254.169.254/latest/meta-data/placement/availability-zone");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    print $result;
?>
<br>
<br>
<br>
*Variables are provided via the EC2 Metadata Service
</p>
<br>
<br>
<a href="https://github.com/lang7/AWSLangclouddemo" title="github" target="new">github</a>
</body>
</html>
