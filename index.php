<style>
a.button 
{
  -webkit-appearance: button; -moz-appearance: button;
  appearance: button; text-decoration: none; color: initial;
  font-size: 120pt; padding: 15px; margin: 15px;
}
</style>

<a href="index.php?command=pause" class="button">PAUSE</a>&nbsp;
<a href="index.php?command=seekFF" class="button">FF</a>&nbsp;
<a href="index.php?command=seekRR" class="button">REW</a>&nbsp;
<a href="index.php?command=volUP" class="button">VOL+</a>&nbsp;
<a href="index.php?command=volDN" class="button">VOL-</a>&nbsp;
<a href="index.php?command=NOP" class="button">NOP</a>&nbsp;
<a href="index.php?command=NAME" class="button">NAME</a>&nbsp;

<?php
  $command=$_GET["command"];
  echo "command[".$_GET["command"]."]<br>";
  
  switch($command)
  {
    case "pause":  passthru("/home/pi/MiniOmxplayerGuiPHP/dbuscontrol.sh pause"); break;
    case "seekFF": passthru("/home/pi/MiniOmxplayerGuiPHP/dbuscontrol.sh seek 30000000"); break;
    case "seekRR": passthru("/home/pi/MiniOmxplayerGuiPHP/dbuscontrol.sh seek -30000000"); break;
    case "volUP":  passthru("/home/pi/MiniOmxplayerGuiPHP/dbuscontrol.sh volumeup"); break;
    case "volDN":  passthru("/home/pi/MiniOmxplayerGuiPHP/dbuscontrol.sh volumedown"); break;
    case "NAME":   passthru("/home/pi/MiniOmxplayerGuiPHP/dbuscontrol.sh getsource"); break;
  }

?>
