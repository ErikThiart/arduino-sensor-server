-- Name: uv_sensor_data
-- Description: The uv sensor data table stores the uv data from the uv sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the uv data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), sensor_reading (int), uv_index (decimal), uv_intensity (decimal), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE uv_sensor_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    device_id INT NOT NULL,
    sensor_reading INT NULL,
    uv_index DECIMAL(5,2) NULL,
    uv_intensity DECIMAL(5,2) NULL,
    uv_timestamp DATETIME
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- path: app/database_schemas/uv_sensor_data.sql