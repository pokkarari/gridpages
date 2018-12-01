#!/bin/sh

cd $(dirname $0)
sass --style expanded --watch scss/style.scss:css/style.css