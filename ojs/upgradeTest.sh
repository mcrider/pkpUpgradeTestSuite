#!/bin/bash

#
# upgradeTest.sh
#
# Copyright (c) 2003-2010 John Willinsky
# Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
#
# Script to automate OJS upgrade tests
#
# Usage: upgradeTest.sh <to_version> [<from_versions>]
#
# NB: All installation's configuration need to use the same 'upgrade_db'
# NB2: Leave second argument blank to iterate over all versions
#
# $Id$
#

SQL_USERNAME="root"
SQL_PASSWORD="root"
DB_NAME="upgrade_db"
SQL_DUMP_NAME='db.sql'
FOLDER_PREFIX='ojs-'

VERSIONS=("2.3.2-1" "2.3.1-2" "2.3.0" "2.2.3" "2.2.2" "2.2.1" "2.2" "2.1.1" "2.1.0-1" "2.0.2-1" "2.0.1" "2.0")

if [ -z "$1" ]; then
	echo "Usage: $0 <to_version> [<from_versions>]"
	exit 1
fi
TO_VERSION=$1

if [ ! -z "$2" ]; then
	shift 1
	FROM_VERSIONS=$*
else
	FROM_VERSIONS=${VERSIONS[*]}
fi


for FROM_VERSION in ${FROM_VERSIONS[*]}
do
	echo -e "Upgrading from $FROM_VERSION to $TO_VERSION :\n"

	#	-Load from_version's SQL into upgrade_db
	if [ -f $FOLDER_PREFIX$FROM_VERSION/$SQL_DUMP_NAME ]; then
		echo -e "Loading SQL file...\n"
		mysql -u $SQL_USERNAME --password=$SQL_PASSWORD -D $DB_NAME < $FOLDER_PREFIX$FROM_VERSION/$SQL_DUMP_NAME
	else
		echo -e "$FOLDER_PREFIX$FROM_VERSION/$SQL_DUMP_NAME not found!"
		exit 1
	fi

	#	-run new version's tools/upgrade.php upgrade
	if [ -f $FOLDER_PREFIX$TO_VERSION/tools/upgrade.php ]; then
		echo -e "Performing upgrade...\n"
		/Applications/MAMP/bin/php5/bin/php $FOLDER_PREFIX$TO_VERSION/tools/upgrade.php upgrade
	else
		echo -e "$FOLDER_PREFIX$TO_VERSION/tools/upgrade.php not found!"
		exit 1
	fi

	echo -e "\n-------------------------------------------------------\n\n"
done
echo "Done"
