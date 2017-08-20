#!/bin/bash
/Applications/XAMPP/xamppfiles/bin/mysqldump -u root adminwilayah > dbs.sql
git add .
git commit -m "$1"
git push origin master
