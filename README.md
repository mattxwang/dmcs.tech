# [dmcs.tech](https://dmcs.tech)

[![Build Status](https://travis-ci.org/uccdmcs/dmcs.tech.svg?branch=master)](https://travis-ci.org/uccdmcs/dmcs.tech)

Heya there! This is the repository for the [UCC DMCS Website](https://dmcs.tech), where you can learn about what our club does, what events we recommend, and some resources to get you started!

## Setup

Want to build your own version of dmcs.tech? No problem!

You'll need a few things:

* [Ruby](https://www.ruby-lang.org/en/), to install [Jekyll](https://jekyllrb.com)
* [Jekyll](https://jekyllrb.com), to build and run the website
* [Git](https://git-scm.com/), to clone this repository
* A Browser, to view the website of course!

First things first, we need to install Jekyll. We assume that you have Git and Ruby installed. If you don't, please visit the links above to install them. We also assume you're using a [Unix-based system](https://en.wikipedia.org/wiki/Unix); if you aren't, follow jekyll's alternatives instruction page.

Type in your command line:
```
gem install jekyll
```

After Jekyll completes its setup, clone the git repository:
```
git clone https://github.com/uccdmcs/dmcs.tech.git
```

Note: if you plan to use the "challenger" folder, please use the `--recursive` flag when cloning the repository, like so:

```
git clone --recursive https://github.com/uccdmcs/dmcs.tech.git
```


Then, cd into the repository:
```
cd dmcs.tech
```

Inside the repository, all you'll need to do is "serve" the site. Type the following into your command line:
```
jekyll serve
```

After that, you should get a response that looks something like this:

```
jekyll serve
Configuration file: /Users/matthew.wang/github/dmcs.tech/_config.yml
            Source: /Users/matthew.wang/github/dmcs.tech
       Destination: /Users/matthew.wang/github/dmcs.tech/_site
 Incremental build: disabled. Enable with --incremental
      Generating...
                    done in 0.287 seconds.
 Auto-regeneration: enabled for '/Users/matthew.wang/github/dmcs.tech'
Configuration file: /Users/matthew.wang/github/dmcs.tech/_config.yml
    Server address: http://127.0.0.1:4000/
  Server running... press ctrl-c to stop.

```

Visit what follows the "Server address:" line (which is normally [http://127.0.0.1:4000/](http://127.0.0.1:4000/)).

And voila! Everything should work for you! Congrats, you did it!
