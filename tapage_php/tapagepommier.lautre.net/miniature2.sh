#!/bin/sh
# verifying file
if [ -f $1 ]; then
    # get image infos
    infos=$(identify $1)
	DIR=$2

    # get real format and extension
    format=$(echo $infos | awk -F" " '{print $2}')
    case $format in
        JPEG)
            extension=jpg;;
        PNG)
            extension=png;;
        *)
            echo "Sorry, only PNG and JPEG pictures are accepted"
            exit;;
    esac

    # get image resolution and size
    resolution=$(echo $infos | awk -F" " '{print $3}')
    size=$(echo $infos | awk -F" " '{print $5}')

    # get image name, without extension
    ext=$(echo $1 | sed 's/.*([^.]+).([^.]+)$/2/')
    name=$(basename $1 .$ext)

    # resize image and add infos
    convert $1 -resize 400x200 -gravity South -background Black -fill white -splice 0x18 -draw "text 0,2 '$format : $resolution - $size'" $name-thumb.$extension
    
else
    echo "file does not exist"
fi

