#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/style.scss:css/style.css