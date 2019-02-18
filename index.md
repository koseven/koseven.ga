---
layout: default
title: Koseven a Kohana Framework fork compatible with PHP7
---
## [Download 3.3.9](https://github.com/koseven/koseven/archive/3.3.9.zip)

### [Join the Forum](https://koseven.discourse.group/)

# Koseven PHP Framework

Koseven is an elegant, open source, and object oriented HMVC framework built using PHP7, by a team of volunteers. It aims to be swift, secure, and small. 

It is based and [nearly](https://koseven.discourse.group/t/upgrading-kohana-to-koseven/15) full compatible on defunct [Kohana](http://kohanaframework.org/) 3.3.X.

Released under a [BSD license](LICENSE.md), Koseven can be used legally for any open source, commercial, or personal project.

## Will work as dropin of Kohana?

If you were using 3.3.x version you may need to make some small changes. Please refer to [upgrading from kohana](https://docs.koseven.ga/guide/kohana/upgrading-from-kohana) section of the documentation.

## History/Why a Kohana alternative?

Kohana 3.3.x is used by us in many live projects, and the original team (where @neo22s belonged too) stopped the development a while ago and on Feb 4, 2017 Shadowhand announced the final retirement [Kohana is DEAD](http://discourse.kohanaframework.org/t/kohana-retirement-2017-07-01/1277).

Before the final announcement everyone started to check if it was possible to migrate existing projects to other alternative PHP frameworks. As it turned out switching would be a complex and lengthy job.
So it became clear that keeping the project alive and updated is a priority.

And so the Koseven repository was born and will keep this repository updated for future releases of PHP, giving the framework a clear perspective for the future.

## Are modules of the original Kohana compatible?

Yes they are, just be sure that they are compatible with Kohana 3.3.X. An overview of Koseven's team own modules can be found on [modules](https://koseven.ga/modules.html) page. There's also a list online with a nice overview of existing kohana modules maintained (or abandoned) by others. You can consult this list at [kohana-modules.com](https://kohana-modules.com)

### Why all modules in 1 repo?

This was personal choice of @neo22s to keep the project as simple and easier to manage. The modules are commonly used and are not enabled by default. If not used they can be removed from the codebase.

## I Need help!

You need Help, How-To's, Guides,...?
Please consider to **[use our Forum](https://koseven.discourse.group/).**, maybe your answer is already there. If not feel free to open a topic and ask for it. If you want to you can also Join our **[Telegram](https://telegram.me/koseven)** Group, but keep in mind that this wan't guarantee you faster answer times, as we get also notified via Telegram if you open a Forum Topic.

## Documentation

Koseven documentation can be found at [docs.koseven.ga](https://docs.koseven.ga) which also contains an API browser.

The `userguide` module included in all Kohana/Koseven releases allows you to view the documentation locally. To use it you need to enable the`userguide` module in the bootstrap.php file (found in the `application` directory). Next you should be able to read the documentation from your own site via `/index.php/guide` (or just `/guide` if you are rewriting your URLs).

## Reporting Bugs / Security Issues
If you've stumbled across a bug or a security issue, please help us out by [reporting](https://github.com/koseven/koseven/issues/new) what you have found. Simply log in or register and submit a new issue, leaving as much information as possible, e.g.

* Steps to reproduce
* Expected result
* Actual result

This will help us to fix the issue as quickly as possible, and if you'd like to fix it yourself feel free to [fork us on GitHub](https://github.com/koseven) and submit a pull request!

## Contributing

Any help is more than welcome! Please see [Contributing](https://github.com/koseven/koseven/blob/master/CONTRIBUTING.md) for detailed Instructions.

## Special Thanks

Special Thanks to all our Contibuters and our Comminuty!

Also Special Thanks to [Discourse Team](https://discourse.org/) for offering us a Free Discourse Hosting!
