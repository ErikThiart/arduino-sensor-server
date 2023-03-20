-- Name: heart_rate_sensor_data
-- Description: The heart rate sensor data table stores the heart rate data from the heart rate sensor. The device_id column is a foreign key that references the id column in the devices table. This allows you to associate the heart rate data with the device that collected it.
-- Columns: id (primary key), device_id (foreign key), heart_rate (int), sp02 (int), ir (int), hz (float), delta (int), timestamp (datetime)
-- Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

CREATE TABLE heart_rate_sensor_data (
    id INT NOT NULL AUTO_INCREMENT,
    device_id INT NOT NULL, -- MAX30100
    heart_rate INT NULL, -- MAX30100
    sp02 INT NULL, -- MAX30100
    ir INT NULL, -- MAX30102
    hz FLOAT NULL, -- MAX30102
    delta INT NULL, -- MAX30102
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE
);

-- Path: app/database_schemas/heart_rate_sensor_data.sql