/*
Title: Generic Sensor Data
Description: This table can be used as a catch-all for sensors that are not explicitly defined in the database schema. You can insert data into this table for any type of sensor by specifying the sensor_type column. However, using a generic table like this can make it more difficult to query and analyze the data, since each sensor type will have its own unique set of data and metadata.
*/

CREATE TABLE generic_sensor_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    device_id INT NOT NULL,
    sensor_type VARCHAR(255),
    sensor_value DECIMAL(10,2),
    sensor_unit VARCHAR(255),
    sensor_timestamp DATETIME
    FOREIGN KEY (device_id) REFERENCES devices(id) ON DELETE CASCADE,
);

-- Path: app/database_schemas/generic_sensor_data.sql   