# INSTALLATION

LaSalle Software is comprised of packages (ie, add-ons). You can install the Laravel app as usual, and then install each package individually. 

To make things easier, I set-up this app with LaSalle packages pre-integrated. 

Also pre-integrated are some really good third party packages that must be installed. 
 
From the command line, run:
 
```
composer create-project lasallecms/lasallecms name-of-subfolder-where-new-project-resides --prefer-dist
```

To run the latest development version of my flagship app, and want to include the packages in the "require-dev":
 
```
composer create-project lasallecms/lasallecms name-of-subfolder-where-new-project-resides --prefer-dist --dev --stability dev
```

As all LaSalle Software (FOSS) packages are included in the composer.json and config/app.php files, in order to remove unwanted packages you must delete them from these files and then run:
 
```
composer update 
```

There is at least one classmap in composer.json to register: the database seed folder. So run:

```
composer dump-autoload
```


## Publish the Package's Config

Publish the packages' config files with Artisan:


```
php artisan vendor:publish
```

It is a good idea to go through each config file at this time. 

## Migration

Set up your database manually. 

Ensure your database settings are ok in the .env file.

Create the database tables using Artisan: 

```
php artisan migrate
```

## Seed

Populate your database tables with the included initial data using Artisan:

```
php artisan db:seed
```

## Change the Default User Details

The default Super Administrator (my ode to Joomla) is "admin@example.org" with the password "password" (omit quotes). It is a good idea to log into the admin with this user to ensure that you can log in; and, then change the user details & password. 

Ok, an interjection: change the username BEFORE logging in. I know, I know, not how it's supposed to be done. BUT... all those middleware constraints really work, which is messing up the ability to login, change the email, and log out. At this point, the best thing to do is change the username manually before logging in. 

Please note that this username is listed in config/auth.php in "users_allowed_to_access_the_admin". Delete this user from this array after you change the user details.

## Modify the .env and Config Files

Modify .env; and, the Laravel and LaSalle config files in the /config/ folder. 

## Folder Permissions

The /storage/ folder in particular should be read/write. Wrong folder permissions is a common reason why the site will not display at this point. 

## bootstrap/cache/services.json

Got a file_put_contents error (eg, for cache/services.json)? Again, make sure the folder permissions are ok. 

## Login to the Admin

At this point, you should be able to login to the admin (yes, the subfolder is "admin"). If you cannot, then check the steps above. 

If everything seems ok, then run "php artisan" -- sometimes an error will display. 

## Front End

You might have to create a quick front-end blade file at "pages/home.blade.php" in your front-end view folder, in order to see something. 

