The Dank Spangle Memorial Train Timeliness Reckoning
====================================================

Authors
-------

* Peter Schofield
* Philip McAllister

About
-----

A small proof of concept and a complete hack to generate some reckoning of the current state of the UK rail network by monitoring the lateness of trains. It has three states of reckoning: Green (>60% of trains on-time or early), Amber (40% < trains on time or early < 60%), Red (40% > trains on time or early).

Developed at the Off the Rails hack day on 13th October 2012 [http://offtherails.eventbrite.co.uk/](http://offtherails.eventbrite.co.uk/).

It uses the Network Rail public feeds and needs you to sign up for an account at [https://datafeeds.networkrail.co.uk](https://datafeeds.networkrail.co.uk)

Once signed up you will need to select which data appears in your feeds by subscribing to feeds at [https://datafeeds.networkrail.co.uk/ntrod/myFeeds](https://datafeeds.networkrail.co.uk/ntrod/myFeeds)

Setup
-----

* It is a curiosity, yes, but it requires both a working Perl and a working PHP environment (I did say it is a complete hack).
* You'll need a couple of modules installing in Perl from CPAN (`perl -MCPAN -eshell`). Install:
  * Net::STOMP::Client
  * JSON
* You need to make sure that the following files in your base directory are writable by your web server:
  * table.php
  * stats.php


Usage
-----

To generate the data point your browser at generate.pl

It will listen to the data feed for 10 cycles and then output table.php and stats.php.
Then point your browser at index.php to see the results.


To Do
-----

* Hmm, implement in just one programming language.
* Set up as a server so it continually monitors.
* Save data to a database so it can be updated and queried in real time.
* Link the Train ID to an actual train service so we can pull the live departure board or other service info.

The What?
---------

In memory of the work of one Dank Spangle who, in his time as Editor of BBC Travel News, inspired this program with his concept of a UK road network congestion index. He is very much still alive.