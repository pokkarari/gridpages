#!/bin/sh

cd $(dirname $0)
sass --style expanded --watch scss/style2.scss:css/style2.css