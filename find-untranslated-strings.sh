#!/bin/bash

mod=${PWD##*/}

for i in `cat lang/en/$mod.php | grep 'string\['.*'\]' | sed "s:.*\['\(.*\)'\] = .*:\1:g"`; do if [ `cat lang/pt_br/$mod.php | grep "string\['$i'\]" | wc -l ` -eq "0" ]; then echo $i; fi; done
