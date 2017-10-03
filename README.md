# Google Tag Manager plug-in for phpBB

This extension lets admins put a Google Tag Manager tag in the website via
the ACP with no extra coding. Just enable the extension, go to the board
settings, and set your container ID.

It has been tested to work with phpBB 3.2.0 and phpBB 3.2.1. Older versions
are not supported, although they haven't been tested so I don't know what
to expect.

## Notice

This extension integrates with a third party product made by Google Inc.
named Google Tag Manager. This extension is not affiliated with Google Inc.
This should be obvious, though.

## Installation guide

[Grab a release](https://github.com/danirod/phpbb-tagmanager/releases) and
upload it to your server into the /ext folder in your phpBB instalation. Then,
enable it via Customize tab in your ACP.

## Configuration guide

Go to your Board Settings (General Tab in the phpBB ACP). Find the
"Google Tag Manager ID" option and set as value the container ID. To find
the container ID for your project log in into your Google Tag Manager.

As soon as you save the changes, pages served for your public forum will
contain the Google Tag Manager code and any tags associated with your
workspace will be executed.

## Tasks

* Properly unit test the code. I don't know if there is a pattern for
  the Google Tag Manager keys or if I can only assume that any string
  with >3 characters can be a container ID.

## Support

Use the [Issue Tracker](https://github.com/danirod/phpbb-tagmanager/issues).

## License

Copyright © 2017 Dani Rodríguez. Released under the terms of the GNU
General Public License v3. See `license.txt` for the complete license.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
