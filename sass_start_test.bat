#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/styletest.scss:css/styletest.css