#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/style2.scss:css/style2.css