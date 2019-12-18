# Laravel 6 Live-Chart Demo: Refresh Chart Every Second

Added some custom code to our [QuickAdminPanel](https://quickadminpanel.com)-generated dashboard:

- Used Chart.js library to draw a simple chart of speed measurements every second
- Used API endpoint to get the latest 30 measurements for refresh

![Laravel Live-Chart](https://laraveldaily.com/wp-content/uploads/2019/12/Screen-Shot-2019-12-18-at-10.23.13-AM.png)
(_refreshes once per second_)

- - - - -

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: login to adminpanel by going go `/login` URL and login with credentials __admin@admin.com__ - __password__


- - - - -

## License

Basically, feel free to use and re-use any way you want.

- - - - -

## More from our LaravelDaily Team

- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Read our [Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
