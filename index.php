<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet'>
<script>
function startTime() {
    var date="";
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
   date + h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<style>
    #txt {
        text-align: center;
        font-size: 32px;
        background-color: wheat;
        font-family: "Consolas";
        font-weight: bold;
    }
    body
    {
        font-family: 'Inconsolata';
        background-color: red;
    }
    </style>
</head>

<body onload="startTime()">

<div id="txt"></div>
<pre>
<?php
print "\nHello!!\nThese is the IP address information of my end machine\n\n";
print `ifconfig`;
print "\n\nMemory information (in MiB)\n\n";
print `free -w -m`;
?>
</pre>
</body>
</html>
