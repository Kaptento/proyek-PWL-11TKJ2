Blogspot 📰

Blogspot is a simple website that functions as a main forum for its users.
This platform is designed so that users can create, upload, read, save, and share posts easily. It also includes a search feature at the top of the page to help users quickly find specific articles or information.

📦 Installation

Clone this repository to your local machine:
https://github.com/Kaptento/proyek-PWL-11TKJ2.git

Enter the project directory.

No additional dependencies are required since this project only uses HTML and CSS.

Open the Homepage.html file in your preferred browser.

🚀 Usage

Run the website by opening Homepage.html.

Navigate through the sidebar menu:

See News → Displays the latest news or posts.

Posts → Create or view uploaded articles.

Favorites → Save important articles for easy access.

Statistics → View interaction data within the website.

Theme → Customize the website’s theme according to user preference.

Settings → Manage account and personal preferences.

Use the search bar at the top to quickly find posts.

Each article is displayed as a card containing the title, thumbnail image, publication info, and interaction icons (favorite, share, user).

On the top-right corner, there are additional features:

Mailbox icon → Access and manage notifications or messages.

User profile icon → Manage user information and account details.

🏗️ Architecture

Project structure:

Homepage.html → Main page.

style.css → Website styling and design.

img/ → Folder for supporting images.

README.md → Project documentation.

Technologies used:

HTML5 → Website content structure.

CSS3 → Visual styling and layout.

🤝 Contributing

We welcome contributions from anyone who wants to improve Blogspot.
Contributions can include bug fixes, adding new features, enhancing documentation, or improving the overall design.

How to Contribute

Fork this repository.

Create a new branch for your feature or fix.

Commit your changes with clear messages.

Push the branch to your repository and open a Pull Request.

Wait for review and feedback before merging.

Contribution Guidelines

Keep your code clean and well-documented.

Make sure new features or fixes are properly tested.

Be respectful and collaborative in discussions.

Together, we can make Blog Spot a better and more useful forum platform! 🚀

📄 License

This project is licensed under the MIT License.
You are free to use, modify, and redistribute this project as long as proper credit is given.


Our main feature is posting, which can be done by logged-in users on our website. Other features, which non-logged-in users can only view on the main page.
The entities used in our database are in the users table.
Attributes (Columns) of the Users Entity

1.id
-Type: Integer
-Primary Key
-Unique identifier for each user
-Automatically generated

2. name
-Type: Varchar
-Stores the full name or username of the user
-Used for identification or display purposes within the system

3. password
-Type: Varchar
-Stores the hashed (encrypted) password
-The system uses password_verify() to check it during login
-Never stored in plain text

4. email
-Type: Varchar
-Must be unique
-Used as the login credential
-Acts as the main reference to find a user in the login process


Entities used in our database are in the posts table.
Attributes (Columns) of the Posts Entity:
.
1.id
-Type: Integer
-Primary Key
-Unique identifier for each post

2.title
-Type: Varchar/Text
-Stores the title of the post

3.content
-Type: Text
-Contains the full content of the post

4.user_id
-Type: Integer
-Foreign Key referencing users.id
-Indicates which user created the post

5.image_path
-Type: Varchar
-Stores the path or file location of the uploaded image for the post


How to use our website;
-Create a MySQL database named: blogger

-Import the SQL file into the database:
blogger (1).sql
(This file contains all the required tables and sample users.)

-Clone or download this repository from GitHub.

-Move the project folder into your local web server:
For Laragon:
C:\laragon\www\
For XAMPP:
C:\xampp\htdocs\

-Open the database configuration file:
config/db-connection.php
Make sure the settings match your local environment:
Host: localhost
User: root
Password: (empty)
Database: blogger

-Run the project through your browser:
http://localhost/
<folder-name>/

-Log in using an existing account from the imported SQL file.
After logging in, you can access the dashboard and start creating posts.

👥 Team Members

Darren Bagus S

Harry Vanessa

Louis Garcia




