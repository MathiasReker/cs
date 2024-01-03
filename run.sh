#!/usr/bin/env bash

if ! command -v composer &> /dev/null; then
    echo "Composer is not installed. Please install Composer first."
    exit 1
fi

if [ $# -eq 0 ]; then
    echo "Usage: $0 <directory_path>"
    exit 1
fi

directory_path=$1

echo "$directory_path"

vendor/bin/rector process "$directory_path"
vendor/bin/php-cs-fixer fix "$directory_path"
