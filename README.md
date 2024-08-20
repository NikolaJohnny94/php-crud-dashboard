# <img src='https://www.php.net//images/logos/new-php-logo.svg' width='48'/> CRUD dashboard with daisyUI <img src='https://img.daisyui.com/images/daisyui-logo/daisyui-logomark.svg' width='32'/> and MySQL <img src='https://cdn.icon-icons.com/icons2/2415/PNG/512/mysql_original_wordmark_logo_icon_146417.png' width='52'/>

The dashboard app allows you to create, read, update, and delete users. The user data is displayed in a table with the following columns: Id, Username, Email, Role, Date, Edit, and Delete.

### 💻 Stack: <br/>

<img src='https://www.php.net//images/logos/new-php-logo.svg' width='32'/>[PHP](https://www.php.net/)<br/>
<img src='https://img.daisyui.com/images/daisyui-logo/daisyui-logomark.svg' width='24px'>[daisyUI](https://daisyui.com/)<br/>
<img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/tailwindcss_logo_icon_167923.png" width="22px"/> [Tailwind CSS](https://tailwindcss.com/)<br>
<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/mysql_original_wordmark_logo_icon_146417.png" width="20px"/> [MySQL](https://www.mysql.com/)<br>

## Features

- Display a list of users in a table
- Add a new user using a modal form
- Edit an existing user using a modal form
- Delete a user
- Form validation for adding and editing users

## Table Columns

1. **Id**: Unique identifier for each user
2. **Username**: The username of the user
3. **Email**: The email address of the user (must be unique)
4. **Role**: The role of the user (Admin, Editor, User)
5. **Date**: The date the user was created
6. **Edit**: Button to open the edit user modal
7. **Delete**: Button to delete the user

## Modals

### Add User Modal

- **Username**: Input field for the username
- **Email**: Input field for the email address
- **Role**: Select element with options: Admin, Editor, User

### Edit User Modal

- **Username**: Input field for the username
- **Email**: Input field for the email address
- **Role**: Select element with options: Admin, Editor, User

## Database Configuration

To configure the database connection create **_config/db.php_** file (check _**config/db.example.php**_ for example), and replace values "**db host**", "**db user**", "**password**", and "**db name**" with your actual database credentials.
