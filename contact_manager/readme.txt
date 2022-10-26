Contact Manager


Fields:

ID
Contact Name
Email ID
Phone No
Group (Friends, Family, Office, College, School, Other)

Listing all contacts
Adding new contact
Editing a contact
Deleting a contact


CREATE TABLE `workshop`.`contacts` (`id` BIGINT NOT NULL AUTO_INCREMENT , `full_name` VARCHAR(150) NOT NULL , `email_id` VARCHAR(200) NOT NULL , `phone_no` VARCHAR(30) NOT NULL , `contact_group` VARCHAR(15) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


Create all User Interfaces (UIs)

