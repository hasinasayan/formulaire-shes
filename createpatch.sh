#!/bin/bash

if [ $# -ne 2 ] ; then
    echo "Utilisation : ./createpatch.sh <starting_reision> <destination_path>"
    exit -127
fi

zStartingRevision=$1
zDestPath=$2

if [ ! -d ${zDestPath} ] ; then
    mkdir -p ${zDestPath}
    if [[ $? -ne 0 ]] ; then
        echo "Impossible de creer le repertoire de destination : ${zDestPath}"
        exit -127
    else
        echo "Repertoire de destination (${zDestPath}) cree !"
    fi
fi

tzModifiedFiles=`git diff --name-only ${zStartingRevision} HEAD`
for zModifiedFile in ${tzModifiedFiles} ; do
    zDotTester=`echo "${zModifiedFile}"| sed 's#^\..\+$#.#g'`
    if [ ${zDotTester} != "." ] ; then
        zModifiedFilePath=`echo "${zModifiedFile}"| sed 's#/[^/]\+$##g'`
        if ! [ ${zModifiedFilePath} == ${zModifiedFile} ] ; then
            mkdir -p ${zDestPath}/${zModifiedFilePath}
        fi
        echo "Copy ${zModifiedFile} to ${zDestPath}/${zModifiedFile}"
        cp ${zModifiedFile} "${zDestPath}/${zModifiedFile}"
    fi
done