#!/bin/bash
#Note that this is a modified version of the one in the portfolio description ("random"->"urandom").
echo | dd if=/dev/urandom bs=4 count=16 status=none | od -A none -t u4
