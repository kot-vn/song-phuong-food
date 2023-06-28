#!/bin/bash

# Generate migration (SQL file)
cat ./21232f297a57a5a743894a0e4a801fc3/assets/database/migrations/*.sql > ./21232f297a57a5a743894a0e4a801fc3/assets/database/first_run_migration/migration.sql

# Path to the env.php file
ENV_FILE="./env.php"

# Retrieve MySQL database credentials from env.php
DB_USER=$(grep -oP "(?<=DB_USERNAME=')[^']+" "$ENV_FILE")
DB_PASS=$(grep -oP "(?<=DB_PASSWORD=')[^']+" "$ENV_FILE")
DB_NAME=$(grep -oP "(?<=DB_DATABASE=')[^']+" "$ENV_FILE")

# Path to the SQL file
SQL_FILE="./21232f297a57a5a743894a0e4a801fc3/assets/database/first_run_migration/migration.sql"

# Execute SQL file using mysql client
if [ -z "$DB_PASS" ]; then
  output=$(mysql -u "$DB_USER" "$DB_NAME" < "$SQL_FILE" 2>&1)
else
  output=$(mysql -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" < "$SQL_FILE" 2>&1)
fi

if [ $? -eq 0 ]; then
  echo "Migration completed successfully."
else
  echo "Error occurred during migration:"
  echo "$output"
fi
