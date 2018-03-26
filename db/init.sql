CREATE TABLE download_records (yt_video_id VARCHAR(40), 
                               file_name VARCHAR(255),
                               dt DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);