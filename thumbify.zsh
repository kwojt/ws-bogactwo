#!/usr/bin/env zsh

echo "Making thumbnails for all files in ./thumbs."
mkdir thumbs
cp * thumbs/
cd thumbs
mogrify -resize 200 -quality 60 *
echo "Done."
