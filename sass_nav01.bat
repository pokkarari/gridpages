#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/nav01.scss:css/nav01.css