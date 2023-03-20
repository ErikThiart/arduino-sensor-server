-- Author: Erik Thiart
-- Date: 2023-01-01

/*
Table Name: devices
Columns: id (primary key), name (varchar), description (text), location (varchar), device_type ENUM('temperature_humidity', 'motion', 'light', 'gas'), created_at (datetime), updated_at (datetime)
Context: The device_type column is an ENUM that allows you to specify the type of device. The available options are: temperature_humidity, motion, light, and gas. You can add additional options to the ENUM as needed for your specific use case.
You can use the ENUM data type to enforce data integrity by restricting the values that can be inserted into the device_type column. This can help prevent errors and ensure that the data in your database is consistent.
Note: Remember to adjust the column data types and lengths to fit your specific needs, and add or modify the ENUM options as needed.

Supported Devices

Temperature Sensor (e.g. TMP36, LM35)
Humidity Sensor (e.g. DHT11, DHT22)
Motion Sensor (e.g. PIR Sensor)
Light Sensor (e.g. Photoresistor, LDR)
Gas Sensor (e.g. MQ-2, MQ-5)
Sound Sensor (e.g. Microphone Sensor)
Proximity Sensor (e.g. Ultrasonic Sensor)
Vibration Sensor (e.g. Tilt Sensor)
Pressure Sensor (e.g. BMP180, BMP280)
Accelerometer (e.g. ADXL335, MPU-6050)
Gyroscope (e.g. L3GD20, MPU-6050)
Magnetometer (e.g. HMC5883L)
Color Sensor (e.g. TCS3200, TCS230)
Infrared Sensor (e.g. IR Sensor, IR Receiver)
pH Sensor (e.g. pH Sensor Kit)
Flex Sensor (e.g. Flex Sensor 2.2")
Heart Rate Sensor (e.g. MAX30100, Pulse Sensor)
Oxygen Sensor (e.g. MAX30100)
CO2 Sensor (e.g. MG-811)
UV Sensor (e.g. GUVA-S12SD)
Water Level Sensor (e.g. Ultrasonic Water Level Sensor)
Soil Moisture Sensor (e.g. FC-28)
Weight Sensor (e.g. Load Cell)
RFID Reader (e.g. RC522)
NFC Reader (e.g. PN532)
RTC Module (e.g. DS1307)
Barometric Pressure Sensor (e.g. BMP180, BMP280)
Distance Sensor (e.g. VL53L0X, Sharp GP2Y0A02YK0F)
Flame Sensor (e.g. Flame Sensor Module)
CO Sensor (e.g. MQ-7)
*/

CREATE TABLE devices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    location VARCHAR(255),
    device_type ENUM(''),
    device_status ENUM('online', 'offline', 'disabled', 'error'),
    created_at DATETIME,
    updated_at DATETIME
);

ALTER TABLE devices
MODIFY COLUMN device_type ENUM(
    'temperature_humidity',
    'temperature',
    'humidity',
    'motion',
    'light',
    'gas',
    'sound',
    'proximity',
    'vibration',
    'pressure',
    'accelerometer',
    'gyroscope',
    'magnetometer',
    'color',
    'infrared',
    'ph',
    'flex',
    'heart_rate',
    'oxygen',
    'co2',
    'uv',
    'water_level',
    'soil_moisture',
    'weight',
    'rfid',
    'nfc',
    'rtc',
    'barometric_pressure',
    'distance',
    'flame',
    'co'
) NOT NULL;

-- Path: app/database_schemas/devices.sql
