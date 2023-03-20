-- Name: vibration_sensor_data
-- Description: The vibration_sensor_data table stores the vibration data from the vibration sensor. The sensor_id column is a foreign key that references the id column in the sensors table. This allows you to associate the vibration data with the sensor that collected it.
-- Columns: id (primary key), device_id (foreign key), sensor_data (ENUM), created_at (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the vibration sensor data options as needed.

CREATE TABLE IF NOT EXISTS vibration_sensor_data (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    device_id INTEGER NOT NULL,
    sensor_data ENUM("Detected") NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/vibration_sensor_data.sql