#!/usr/bin/env bash

echo "---- Generating CDN ---"
rm -rf cdn/deploy
cd cdn
php -d include_path=/var/www/html/_include:. cdnrefresh.php
cd ..
