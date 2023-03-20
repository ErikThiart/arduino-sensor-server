#!/bin/bash

# Create a SQLite instance
sqlite3 sensor_data.db <<EOF
.quit
EOF

# Loop through each SQL file in the database_schemas directory
for file in ./database_schemas/*.sql
do
    # Execute the SQL file to create the table
    sqlite3 sensor_data.db < "$file"
done

# Path: app/database_schemas/sensor_data.sql