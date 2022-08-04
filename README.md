# Symfony Layla

Symfony layla is a fun project, that has been built in less than a
hour of total time. It is a simple symfony bundle that registers a new route
that displays the layla text in karaoke style and plays the song if you click
on the text. It is quite simple. There is no real world changing technique or benefit from 
this project. It is only built for fun.

# Usage

Why should you use Symfony Layla? Because it is fun! Imagine building
the next billion dollar symfony application, but from time to time the development process 
gets boring. Just install this bundle and enter the `/layla` route to
enjoy the development process again.

# Installation

Installation is quite easy with 
```shell
composer require mathisburger/symfony-layla
```
Symfony flex does the rest for you.
But you also have to add the resource to your `routes.yml`
```yaml
layla:
    resource: '@LaylaBundle/Resources/config/routes.yml'
```