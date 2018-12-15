#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded --no-cache scss/gallery.scss:css/gallery.css