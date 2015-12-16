# More[FM] Humbug

Spreading Christmas cheer by encouraging the crushing of hopes and dreams through what is, for all practical purposes, hacking.

## Premise & Objective

Every year, my high school makes it reasonably far in the [More FM High School Choir Competition](http://morefmchoir.com/).  In fact, we usually win.  While many of the normal folks around us will gather as a family and all vote as many times by hand as they possibly can, others of us prefer to have our computers do that work for us, while we can do other more important things like looking for new cat memes. 

This project is meant to be a respository of various methods for automating this voting process. 

## PHP Implementation

The PHP version, which was written in about 5 minutes and is capable of voting about 80 times per minute. (That's 4.8 kvotes per hour, and yes, kvote is a legitimate unit of measurement.)

Running PHP scripts requires a moderately specialized software arrangement, so if you don't already know what you're doing in running PHP with cUrl, please don't bother.

## iMacros Implementation

The iMacros implementation of this system can be run without much technical knowhow using the iMacros plugin for Firefox that can be obtained from [here](https://addons.mozilla.org/en-US/firefox/addon/imacros-for-firefox/).

Two version of the Script are included: The "slow" version that includeds a randomized wait time to appear more human like and the "maxSpeed" version that runs as fast as possible

### Installation 
1. Install the iMacros Plugin for Firefox
2. Add this file to your iMacros Folder
	* On OSX YOUR-USERNAME/iMacros/Macros/
3. Start the iMacros Plugin in Firefox
4. Select this script from the sidebar
5. Select the number of times you want the script to execute
6. Click the Play(Loop) Button
7. Christmas Ruined

## Other Implementations

If you create another implementation, please create a subdirectory for it and submit a pull request.  When possible, please reference libraries as submodules or with standard package managers, so that the full body of the library needn't be comitted to this repo. 

