-- Name: co2_sensor_data
-- Description: The co2 sensor data table stores the co2 data from the co2 sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the co2 data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), co2 (int), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE co2_sensor_date (
    id INT AUTO_INCREMENT PRIMARY KEY,
    device_id INT NOT NULL,
    reading INT,
    reading_timestamp DATETIME
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- path: app/database_schemas/co2_sensor_data.sql