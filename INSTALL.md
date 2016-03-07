# CAVEAT

These instructions may be out of date, as I am constantly tweaking. 

The bright side is that there is no proprietary installation. The installation is Composer installs of straight Composer installable packages. 


# INSTALLATION

LaSalle Software is comprised of installable packages. You can install this Flagship app first, and then install each package individually. 

To make things easier, I set-up this app with LaSalle packages pre-integrated (update: some LaSalle packages are not pre-integrated, written as I pass the 20 such packages).

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

The seed files contain live data for lookup tables. So do not skip this step.


## Change the Default User Details

The default Super Administrator (my ode to Joomla) is "admin@example.org" with the password "password" (omit quotes). It is a good idea to log into the admin with this user to ensure that you can log in; and, then change the user details & password. 

Ok, an interjection: change the username BEFORE logging in. I know, I know, not how it's supposed to be done. BUT... all those middleware constraints really work, which is messing up the ability to login, change the email, and log out. At this point, the best thing to do is change the username manually before logging in. 

Please note that this username is listed in config/auth.php in "users_allowed_to_access_the_admin". Delete this user from this array after you change the user details.

## Modify the .env and Config Files

Modify .env; and, the Laravel and LaSalle config files in the /config/ folder. 

If you are using Forge, then I suggest you populate your .env file, and then copy-paste to your Forge site. This local .env file should ignored in your git repo. 

There are a lot of LaSalle Software config files, They are modest files, except of special note lasallecmsusermanagement.php. You may wonder why a certain setting is in a LaSalle config file when it seems more logical that it should be in another LaSalle config file, but Big Important Executive Decisions had to be made, so c'est la vie! Lasalle Software config file names begin with "Lasallecms".

## Folder Permissions

The /storage/ folder in particular should be read/write. Wrong folder permissions is a common reason why the site will not display at this point. 

Folder permission problems is the source of many problems. Especially dramatic are the problems where it seems like your app crashed -- because there were problems writing to the storage/logs folder. 

## bootstrap/cache/services.json

Got a file_put_contents error (eg, for cache/services.json)? Again, make sure the folder permissions are ok. 

## Login to the Admin

At this point, you should be able to login to the admin (yes, the subfolder is "admin"). If you cannot, then check the steps above. 

If everything seems ok, then run "php artisan" -- sometimes an error will display. 

Also, if you enable two factor authorization, but forget to enter your country code & cell number into the users table directly upon initial set-up, you will be see the message that you cannot login to the admin so please contact your administrator.  

## Front End

There is no default front-end. A welcome message should display in your browser, courtesy of my LaSalleCMS Front-end package.  I want you to really think about, and invest in, your front-end, so I do not feel entirely guilty about not having any "themes". You have a turn-key administrative site and my administrative form automation to help you turn your attention to your front end. 

