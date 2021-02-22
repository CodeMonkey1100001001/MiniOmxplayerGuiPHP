#!/bin/bash
while :
do
        find /home/pi/Videos/ -name '*.mp4' -o -name '*.m4v' 2>/dev/null |  awk '1==1{ printf("echo %s ; omxplayer -b \"%s\"; sleep 2\n",$0,$0)};' | sort -R   >/tmp/playlist
        chmod +x /tmp/playlist
        /tmp/playlist
        sleep 10
        echo "Loop"
done
