#!/bin/bash

for i in `cat lang/en/bigbluebuttonbn.php | grep 'string\['.*'\]' | sed "s:.*\['\(.*\)'\] = .*:\1:g"`; do if [ `cat lang/pt_br/bigbluebuttonbn.php | grep "string\['$i'\]" | wc -l ` -eq "0" ]; then echo $i; fi; done
