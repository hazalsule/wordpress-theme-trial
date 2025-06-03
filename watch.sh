#!/bin/bash

echo "macOS için otomatik Git takibi başlatıldı..."

fswatch -o . | while read f; do
  git add .
  git commit -m "Auto commit"
  git push origin master
  echo "Push yapıldı: $(date)"
done
