#Vagrant + Puppet 101

Laravel 5.1 [tasks example](http://laravel.com/docs/5.1/quickstart) build with Vagrant and Puppet.

##Installation

Is quite simple:

 * install [Vagrant](https://www.vagrantup.com/downloads.html)
 * checkout project

```bash
git clone git@github.com:arkady-emelyanov/vagrant-puppet-101.git
```

 * build vagrant machine
 
```bash
vagrant up
```

 * ssh into builded vm
 
```bash
vagrant ssh
``` 

 * setup project
 
```bash
./setup_dev.sh
``` 

 * point browser to [Project root](http://127.0.0.1:8081)

##Tests

All tests are resides in ./tests directory. Run them with:
```bash
./bin/phpunit
```
