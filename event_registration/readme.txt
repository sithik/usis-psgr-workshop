

Registration form:

Student Name
College
City
Student Roll No
Email ID
Phone No
Event (Paper Presentation, Quiz, LiveCode, Debugging)
Comments


Table Create Query:

CREATE TABLE `event_registrations` (
  `id` bigint(20) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `college_name` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `student_roll_no` varchar(50) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `competition` varchar(50) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `registration_date` datetime NOT NULL
);
