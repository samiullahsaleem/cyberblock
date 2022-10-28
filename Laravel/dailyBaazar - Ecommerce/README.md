## dailyBazaar:
 Providing the following features to the users: 
- User Friendly Responsive UI
- Register/Login
- Email Verification
- Forgot/Reset Password
- Account Management
- Handle Cart
- Manage Wishlist
- Search Products/Categories/Subcategories
- Filter Products on search
- Order via COD/PayFast (Payment Gateway)
- Subscribe to Newsletter

## Screenshot:
![5](https://user-images.githubusercontent.com/58470182/159130611-d561fab1-e031-4f97-ab3f-e495056abdb8.png)

## dailyKhaata:
 Admin dashboard providing following features to the admin:
- Conditional redirect on login based upon email.
- Add Category/Subcategory/Products
- View Fullfilled/Unfullfiled Orders
- Review Customer Details

## Screenshot:
![2](https://user-images.githubusercontent.com/58470182/159131008-fc53bed5-e520-45c5-8afe-eb2339b45f10.PNG)

## Configure Access to dailyKhaata:
 Follow the instructions for modifying configuration:
- You can change the login response in app\Http\Responses\LoginResponse.php (Redirects authenticated user to dailyKhaata)
- You can also change admin middleware response in app\Http\Middleware\IsAdmin.php (Ensures that only provided email can access dailyKhaata) 

## Usage:
- Clone this repository on your Local Machine
- Make sure you've Composer, Laravel (V7.1+), PHP, Xaamp(Local Host) installed
- After cloning the repository rename .env.example file to .env
- Create a database in phpmyadmin
- Replace the database name in .env => DB_DATABASE = {Your created database} 
- Import the dailybazaar.sql file in your newly created database in phpmyadmin
- After successful import
- In the Terminal run the following commands:
1. `php artisan composer install`
2. `php artisan generate:key`
3. `php artisan serve`

:rocket: Application would be running on http://127.0.0.1:8000/
