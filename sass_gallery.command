#!/bin/sh

cd $(dirname $0)
sass --style expanded --watch scss/gallery.scss:css/gallery.css