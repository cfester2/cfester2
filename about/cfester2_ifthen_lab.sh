#!/bin/bash


echo "Input a file name:"

read filename



if [ -e $filename ]

	then

	echo "Yes it's just where you thought it was. It's name is $filename"

		else

		echo "Sorry, it's just not there. It's name was $filename"

		exit 10

fi
	

