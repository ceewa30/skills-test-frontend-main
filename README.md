# Frontend Skills Test

## Getting Started
To get started, we suggest forking this repository and writing your code there. Alternatively, you can download the repository as a .zip file to set it up locally.

## Review Process
- Fork this repo and begin setting up locally (instructions below)
- Push up changes as needed to your locally forked copy
- When you are done, please email lennyroy.robles@ivinteractive.com with a GitHub link to your work
- The development team at IV Interactive will schedule an in person meeting (Zoom) if you pass

## Setup

To set up the project, you'll need an environment with both PHP and MySQL. We recommend one of the following for Laravel:

- [Homestead](https://laravel.com/docs/8.x/homestead) (Virtual machine)
    - Software requirements
        - [Vagrant](https://www.vagrantup.com/downloads)
        - [Virtualbox](https://www.virtualbox.org/wiki/Downloads) or [Parallels](https://www.parallels.com/products/desktop/)
- [Sail](https://laravel.com/docs/8.x/sail) (Docker image)
    - Software requirements
        - [Docker](https://docs.docker.com/get-docker/)
        - [Docker Compose](https://docs.docker.com/compose/install/)
- Copy either `.env.homestead.example` or `.env.sail.example` to `.env`, depending on which environment you're using.
- Run setup commands (use `php` if using SSH into Homestead or `./vendor/bin/sail` if using Sail):
    - `(php|./vendor/bin/sail) artisan key:generate`
    - `(php|./vendor/bin/sail) artisan migrate`

## Goals

- Match the styling of the [provided PSD file](ivi-form-desktop.psd)
- Implement responsive styling
- Handle form validation issues and successful form submissions with messaging, styling updates, and animations

## Notes

- While the backend processing of form submissions is provided, feel free to customize in any way necessary
- Existing routes can be found in the routes/web.php file
- Form submissions in Laravel require a CSRF token provided by the framework ([documentation](https://laravel.com/docs/8.x/csrf))
- Use [Google Fonts](https://fonts.google.com/)

## FAQs

**Why isn't this working?**  
- If you're receiving a 500 error, check the log files in `storage/logs`.
- If you're using Sail and it seems like a network issue, make sure that the MySQL, Redis and Memcached connections point to image names rather than IP addresses, since that's how images connect to each other on the network.
- If you're experiencing network issues with Homestead, make sure all of the connections point to 127.0.0.1.
- If using Sail and you have a MySQL connection issue, try removing the volume and bringing the images back up to rebuild them, in case you made any updates to the .env after the initial build.
- If using Homestead, make sure that you SSH into the virtual machine to run any `php artisan` commands or to use `composer`.

**I'm connected to the database but the contact form submissions won't save**  
- Check your field names to make sure that they match the fields defined in `app/Models/Contact.php`.
