# LaSalle Content Management System 

[![Build Status](https://img.shields.io/travis/lasallecms/lasallecms-l5-flagship/master.svg?style=flat-square)](https://travis-ci.org/lasallecms/lasallecms)
[![Total Downloads](https://img.shields.io/packagist/dt/lasallecms/lasallecms.svg?style=flat-square)](https://packagist.org/packages/lasallecms/lasallecms)
[![Latest Stable Version](https://poser.pugx.org/lasallecms/lasallecms/v/stable.svg)](https://packagist.org/packages/lasallecms/lasallecms)
[![Latest Unstable Version](https://poser.pugx.org/lasallecms/lasallecms/v/unstable.svg)](https://packagist.org/packages/lasallecms/lasallecms)
[![GitHub Issues](https://img.shields.io/github/issues/lasallecms/lasallecms-l5-flagship.svg)](https://github.com/lasallecms/lasallecms-l5-flagship/issues)
[![Software License](https://img.shields.io/badge/license-GPLv3-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Laravel](https://img.shields.io/badge/Laravel-v5-brightgreen.svg?style=flat-square)](http://laravel.com)

## NOTE

LaSalleCMS is in active **Alpha** development  

## Summary

Laravel 5 Framework based Content Management System. 

Works on its own. Also acts as the foundational base for custom app development.

LaSalleCMS is my own content system used for my own, and client, sites. 

 
## Shpiel

I spent years and years specializing in Joomla.

You know what I loved about the early days of Joomla? How understandable and customizable it really was. The source code was incredibly hackable, the templates were customizable. I was in control. It was great! 

Then came the rise of the template frameworks and new Joomla versions, and things became different.

When I moved on from Joomla in April 2014, the notion of building my own content system was far from my mind:

* why recreate something that is already out there as free open source software? 
* how can I hope to recreate all the features of these other projects?
* people will be terrified to use my software because "it's just one guy doing it"

After searching for the perfect blogging/content system that suited my sensibilities, you know what I discovered? I discovered that: 

* no such system exists;
* the marketplace shares my frustration to an extent that shocked me;
* there are a number of major independent cms projects going on;
* there is a huge DIY movement.

I was quite surprised to find my frustrations to be more mainstream than marginalized. Nothing encapsulated my experience more than the discovery of the [Grav](http://www.rockettheme.com/blog/team/163-rockettheme-s-10th-anniversary-interview-with-andy-miller) project by one of the Joomla founders who runs one of the longest running template clubs. I see that in conjunction with Grav is a Gantry re-write. The money quote:

<blockquote>
We were looking to add support for a simpler platform, but after extensively evaluating all the options, we couldn’t find a good solution. So, we built our own.
</blockquote>

So are a lot of people building their own, so I discovered. 

Like a lot of people, I learned Laravel by creating a blog app. Which I built-out, calling it LaSalleCMS v1. All my sites except my Media site, use it.
 
## Coding Style 

LaSalleCMS v2 is built lovingly with the superb Laravel 5 Framework.
 
Under-engineered but not under-sophisticated, LaSalleCMS harnesses the underneath power of Laravel 5. 
 
The coding is straight forward, understandable, and commented. 

Those who know L5 will hit the ground running. Those familiar with Laracasts will note its influence. 

Those familiar with the [League of Extraordinary Packages](https://thephpleague.com/#quality) will note its influence.

## Contracts, Implementing Contracts, and Interfaces

[![Go Where You Wanna Go](https://i.ytimg.com/vi/joPUjfx1JRg/mqdefault.jpg)](https://www.youtube.com/watch?v=joPUjfx1JRg "Go Where You Wanna Go")

LaSalleCMS API package phase one completion contains contracts for the repositories. Each model has its own repository, which has its own separate contract. The base repository has its contract. 

I love interfaces. Using them for Form Processing is a boon, providing a kick-ass uniform structure for command handlers. This consistency is the crucial basis for an "automation" refactoring.

The L5 is big with interfaces.

But... sometimes ya gotta go where yer going to go. And repository interfaces are frustrating me greatly. So I am dispensing with them. For you purists out there, the repository interfaces existed in full glory in phase one admin side completion of LaSalleCMS, but are dispensed with for version one release after much angst.
 
News flash: LaSalle Software is married to eloquent. Period. Full stop. I have no plans to make LaSalle Software "agnostic" when it comes to eloquent.
  
## Security

If you discover any security related issues, please email Bob Bloom at "info at southlasalle dot com" instead of using the issue tracker.

## Links

* [CONTRIBUTING](CONTRIBUTING.md)
* [CHANGELOG](CHANGELOG.md)
* [INSTALL](INSTALL.md)
* [GPLv3 License File](LICENSE.md)
 

   
  
