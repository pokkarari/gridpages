#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/nav_test02.scss:css/nav_test02.css