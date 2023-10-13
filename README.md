
MegaParts Commerce is a robust and user-friendly web application developed in Laravel, designed to streamline the management of an e-commerce platform[STILL IN DEVELOPMENT]

Key Features:

User Registration and Login: Users can create accounts or log in through the following link: http://localhost:8000/, which serves as the landing page. The registration process is hassle-free and offers a convenient way for customers to access your e-commerce platform.

Admin Login: Administrators can log in with the following credentials:

Email: admin@gmail.com
Password: 123456
User Management: Administrators have the authority to manage user accounts. This includes the ability to add, remove, and edit user profiles, granting them complete control over who has access to the system.

Product Management: Product management is made effortless, as administrators can add, update, and delete product listings. This ensures that your e-commerce catalog is always up to date.

Role and Privilege Management: MegaParts Commerce goes beyond basic user and product management. Administrators can also create and manage roles, defining various levels of access within the system. They can grant privileges to roles, giving specific sets of permissions to different groups of users. Furthermore, administrators can easily remove privileges from roles when necessary.

Welcome Email on Registration: When a user registers, they will receive a welcome email. This functionality is achieved by configuring your .env file with MailTrap credentials, ensuring that your users feel appreciated and informed from the moment they join your platform.

Bulk Email Sending: MegaParts Commerce allows you to send bulk emails to all users directly from the command line. Simply use the command php artisan email:send-bulk, and the command line will prompt you to provide a subject and body for the email. Once entered, the email will be sent to all registered users, making it easy to keep your users informed and engaged.