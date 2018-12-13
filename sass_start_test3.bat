#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/nav_test.scss:css/navtest.css