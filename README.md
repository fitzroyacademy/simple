# WOWZERS, let's do the internet


This is a simple version of putting our things on the internet yet. Code like it's 1997, baby! YEOW!


## Installing:

* Download MAMP: https://www.mamp.info
* Install and run MAMP (not MAMP pro!)
* Set ports to 80 + 3306
* Grab the files from Github with `git clone git@github.com:fitzroyacademy/simple.git`
* Set MAMP's settings to look at the above github directory
* Turn MAMP on!

Now SCSS:

* install npm
* `npm install -g sass`


## Starting work

* Make sure MAMP is running
* open the main folder in terminal
* `sass --watch assets/scss/fit.scss assets/css/fit.css` to make SCSS compile
* `git pull` to get the latest codez
* edit things!


## Sending code to the internet as you work

Do it pretty stricty in this order:

* `git status` to see what git thinks you've done
* `git add .` to 'add' your changed code
* `git commit -m "your message goes here"` to explain the mess you've made
* `git pull` to get the latest from the server before sending your own
* If you get an error here we'll have to merge! Talk to Will.
* `git push` to send your code to the internets


## Fixing merges:

* If you `git pull` and get a new screen showing a bunch of merge conflict stuff, hit `:qa` to quit the editor
* Once done go ahead and `git add .` and so on

## Other things:

Use `<!-- todo -->` to mark things we need to fix. (command + ? on Sublime for comments)


## Updating the live website:

* Make sure you have `git push` for your latest changes
* Go to https://earl.serversaurus.com.au:2083/
* Login with the right user/pass
* Find 'terminal' (open in safari / FF if it doesn't work)
* `cd public_html` <-- get into the right directory
* `git pull` <-- pulls the latest version from git to the site