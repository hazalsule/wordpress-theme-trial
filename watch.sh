#!/bin/bash

while true; do
    inotifywait -e modify -r ./  # Linux içindir, macOS için `fswatch .`
    git add .
    git commit -m "Auto commit on save"
    git push origin main
done
