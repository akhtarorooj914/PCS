# School Management System for Pune Central School
This project has been submitted as a partial fulfillment for MCA final semester, as an intership under the "Unique Welfare and Education Trust", for Pune Central School, Borade nagar campus, Pune.

The School Management System (SMS) is an advanced web-based platform that harnesses the power of modern technologies such as HTML, Laravel 8, CSS, and MySQL to revolutionize the administrative processes of educational institutions. SMS is an innovative web-based platform designed to streamline and enhance the administrative processes of educational institutions. This system serves as a comprehensive solution, facilitating seamless communication and collaboration between students, teachers, parents, and school administrators.
The primary objective of the SMS is to computerize paperwork and automate routine tasks, reducing the complexity of school management while optimizing efficiency and productivity. By centralizing all student and teacher data, the system minimizes the chances of data duplication and ensures accurate and secure storage.
The key features of the SMS include student information management, fee management, timetable and examination scheduling, marksheet generation, and parent-teacher communication. From the moment a student is admitted, the system diligently manages their details throughout their academic journey. Fee management is simplified, enabling parents and staff to monitor and handle payments efficiently, with automated notifications for pending fees to ensure timely follow-ups.
The SMS also empowers school administrators to create well-organized timetables and manage examination schedules effortlessly, saving valuable time and effort. For teachers, recording and accessing students' marks are streamlined, and the system automates the process of generating comprehensive mark sheets.
Moreover, the SMS fosters strong communication between parents and teachers, providing parents with easy access to their child's academic progress, attendance, and other important information. Direct communication channels encourage active parental involvement in their child's education, leading to a collaborative and supportive learning environment.


# Software Requirements:
1. Operating System: The system is compatible with various operating systems, including Windows, macOS, and Linux. Common versions like Windows 10/11.
2. Web Browser: The SMS should be accessible through standard web browsers such as Google Chrome, Mozilla Firefox, Microsoft Edge, or Safari. It is essential to ensure cross-browser compatibility for a seamless user experience.
3. Web Server: The system relies on a web server to host and serve the web application. Popular web server like Apache.
4. PHP Runtime Environment: As the back-end of the system is built using PHP Laravel 8, a PHP runtime environment must be installed and configured on the web server.
5. Database Management System: The system utilizes MySQL as the database management system.
6. Text Editor / IDE: Developers working on the system should use a text editor or an Integrated Development Environment (IDE) like Visual Studio Code.

# Users of the system

1. Super Admin:
   - The Super Admin has the highest level of access and authority in the system.
   - Can oversee and manage academics, including creating and managing timetables for the academic sessions.
   - Has the authority to admit students, record marksheets, handle promotions, and manage graduations.
   - Creates and manages user accounts for admins, teachers, parents, accountants, and students.
   - Handles the creation and management of subjects, classes, sections, and exams.
   - Manages system settings, including customization options.
   - Can delete any record when necessary.

2. Admin:
   - The Admin has significant control over the system, but with some limitations compared to the Super Admin.
   - Manages students' class/sections within the school.
   - Views the marksheet of students and manages student records.
   - Creates, edits, and manages user accounts and profiles for teachers, parents, accountants, and students.
   - Has the authority to create, edit, and manage exams and grades.
   - Creates, edits, and manages subjects offered by the school.
   - Can edit specific system settings related to the administration of the school.
   - Manages Payments and fees for students.


3. Teacher:
   - The Teacher has access to functionalities relevant to their role as educators.
   - Manages marks for the subjects they are responsible for teaching.
   -  They can view the class timetable.
   - Manages their own profile information within the system.
   - Uploads study materials and resources for students.

4. Student:
   - Students have access to specific functionalities related to their academic journey.
   - Views subjects assigned to their class, along with study materials and resources shared by teachers.
   - Views their own marks and the class timetable.
   - Views payment details and fee status.
   - Manages their own profile information.

5. Parent:
   - Parents have access to functionalities related to monitoring their child's education.
   - Views profiles of teachers handling their child's classes.
   - Accesses study materials and resources shared by teachers.
   - Views their child's marksheet and can download or print PDF copies.
   - Views their child's timetable.
   - Manages their own profile information.

6. Accountant:
   - The Accountant has specific responsibilities related to managing payments and fees.
   - Manages payments and fees, including recording transactions and updating payment records.
   - Prints payment receipts for parents and guardians.
     

# Requirements

Check Laravel 8 Requirements https://laravel.com/docs/8.x

# Installation

Install dependencies (composer install)
Set Database Credentials & App Settings in dotenv file (.env)
Migrate Database (php artisan migrate)
Database seed (php artisan db:seed)
Login Credentials After seeding. Login details as follows:

AccountType	      Username	  Email	                Password

Super Admin	        cj	     cj@cj.com	              cj

Admin	             admin	  admin@admin.com	          cj

Teacher          	teacher	  teacher@teacher.com	      cj

Parent           	parent  	parent@parent.com	        cj


Student          	student  	student@student.com	      cj

![WhatsApp Image 2023-11-25 at 12 32 10 AM](https://github.com/akhtarorooj914/PCS/assets/101574230/d15034e6-ac4a-4ed8-96d2-3a5a678f53f8)

<img width="1074" alt="Screenshot 2023-08-04 134730" src="https://github.com/akhtarorooj914/PCS/assets/101574230/fec635f9-c072-4795-ad0e-655c41f019bd">
<img width="1075" alt="Screenshot 2023-08-04 135505" src="https://github.com/akhtarorooj914/PCS/assets/101574230/cae12ef6-fee3-4e25-b6a4-83728b11bdc3">

<img width="1063" alt="Screenshot 2023-08-04 134502" src="https://github.com/akhtarorooj914/PCS/assets/101574230/678fe6ef-9717-4c31-9f2f-788eaf718419">
<img width="1075" alt="Screenshot 2023-08-04 134254" src="https://github.com/akhtarorooj914/PCS/assets/101574230/d91ad94e-95d9-4e51-bf8e-97eac32d3ad1">
<img width="1063" alt="Screenshot 2023-08-03 014206" src="https://github.com/akhtarorooj914/PCS/assets/101574230/123d26ad-938c-4d2b-be73-ed10e7755190">
<img width="1060" alt="Screenshot 2023-08-03 014107" src="https://github.com/akhtarorooj914/PCS/assets/101574230/e3b1d7ee-940f-4e83-a05c-faa8dd58b96a">
<img width="1065" alt="Screenshot 2023-08-03 012519" src="https://github.com/akhtarorooj914/PCS/assets/101574230/68fabb51-8184-4129-b748-d096db64e46e">
<img width="1066" alt="Screenshot 2023-08-03 011550" src="https://github.com/akhtarorooj914/PCS/assets/101574230/9634ba2e-398b-4420-860d-25bc33435491">
<img width="1080" alt="Screenshot 2023-08-03 011226" src="https://github.com/akhtarorooj914/PCS/assets/101574230/4fbbe177-3607-4193-9c17-643ac5498e39">


![Uploading er-new.drawio (1).png…]()
![class diagram drawio](https://github.com/akhtarorooj914/PCS-PHP-laravel/assets/101574230/47641700-c4bb-4061-a429-fa63af116a1e)





<img width="1053" alt="Screenshot 2023-08-03 005922" src="https://github.com/akhtarorooj914/PCS/assets/101574230/e6fdaf4b-bb59-449d-9f43-fc2cdf0a4185">

<img width="1080" alt="Screenshot 2023-08-03 005153" src="https://github.com/akhtarorooj914/PCS/assets/101574230/f8b52fc7-e9fa-48a0-97de-cad1dd616fca">


