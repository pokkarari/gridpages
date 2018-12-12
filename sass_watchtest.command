#!/bin/sh

cd $(dirname $0)
sass --style expanded --watch scss/styletest.scss:css/styletest.css