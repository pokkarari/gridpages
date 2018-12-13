#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/top_test1.scss:css/top_test1.css