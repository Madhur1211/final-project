/*db for employee contacts*/
CREATE TABLE users (
  id int(11) NOT NULL auto_increment,
  name varchar(100),
  email varchar(100),
  mobile varchar(15),
  PRIMARY KEY  (id)
);
/*db for registration*/
CREATE TABLE admin (
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     username VARCHAR(50) NOT NULL UNIQUE,
     password VARCHAR(255) NOT NULL,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);