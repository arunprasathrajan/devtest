This is a very basic website example thrown together in PHP using the Twig templating language. We're using Composer to manage PHP dependencies and NPM to manage frontend dependencies.

The /app folder contains our main application code.

The /resources folder contains all our source files including images, javascript, sass files and twig templates.

The /public folder is where the website runs from and all frontend assets will be compiled into this folder.

### Requirements

- A local web server running PHP 5.5+ (e.g. MAMP)
- Composer (https://getcomposer.org/)
- Node/NPM

### How to install

- Clone the repo
- Run `composer install`
- Run `npm install`
- Create a vhost entry for the site with the docroot pointing to the /public folder e.g.

```
<VirtualHost *:80>
    DocumentRoot "/path/to/the/repo/devtest/public
    ServerName devtest.lvh.me
</VirtualHost>
```

- The domain must be devtest.lvh.me
- Don't forget to restart your server

### How to run

- Run `npm run serve` to fire up the site with Browser Sync
