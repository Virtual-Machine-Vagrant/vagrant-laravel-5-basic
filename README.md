#Vagrant + Puppet Demo

Laravel 5.1 [tasks example](http://laravel.com/docs/5.1/quickstart) build with Vagrant and Puppet.

##Installation

Quite simple:

 * install [Vagrant](https://www.vagrantup.com/downloads.html)
 * checkout project

```bash
git clone git@github.com:arkady-emelyanov/vagrant-puppet-demo.git
```

 * build vagrant machine
 
```bash
vagrant up
```

 * ssh into builded vm
 
```bash
vagrant ssh
``` 

 * setup project (create database, apply migrations, load development fixtures)
 
```bash
./setup_dev.sh
``` 

 * point browser to [127.0.0.1:8081](http://127.0.0.1:8081)

##Tests

All tests are resides in ./tests directory. Run them with:
```bash
./bin/phpunit
```
