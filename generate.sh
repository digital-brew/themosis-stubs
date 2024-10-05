#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for Themosis framework\n * @see https://framework.themosis.com/\n * @see https://github.com/digital-brew/php-stubs-generator\n */'

FILE="themosis-stubs.php"

set -e

# Download dependencies
if [ ! -d vendor ]; then
  composer update
fi

"$(dirname "$0")/vendor/bin/generate-stubs" \
  --force \
  --finder=finder.php \
  --header="$HEADER" \
  --functions \
  --classes \
  --interfaces \
  --traits \
  --out="$FILE"
