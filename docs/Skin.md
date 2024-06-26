Skins {#skin}
=======

## Core Skins

MediaWiki includes four core skins:

* Vector: The default skin. Introduced in the 1.16 release (2010), it has been
  set as the default in MediaWiki since the 1.17 release (2011), replacing
  Monobook.
* Monobook: Named after the black-and-white photo of a book in the page
  background. Introduced in the 2004 release of 1.3, it had been the
  default skin since then, before being replaced by Vector.
* Modern: An attractive blue/grey theme with sidebar and top bar. Derived from
  Monobook.
* Cologne Blue: A lightweight skin with minimal formatting. The oldest of the
  currently bundled skins, largely rewritten in 2012 while keeping its
  appearance.

### Legacy core skins

Several legacy skins were removed in the 1.22 release, as the burden of
supporting them became too heavy to bear. Those were:

* Standard (a.k.a. Classic): The old default skin written by Lee Crocker during
  the phase 3 rewrite, in 2002.
* Nostalgia: A skin which looks like Wikipedia did in its first year (2001).
  This skin is now used for the old Wikipedia snapshot at
  https://nostalgia.wikipedia.org/
* Chick: A lightweight Monobook skin with no sidebar. The sidebar links were
  given at the bottom of the page instead.
* Simple: A lightweight skin with a simple white-background sidebar and no top
  bar.
* MySkin: Essentially Monobook without the CSS. The idea was that it could be
  customised using user-specific or site-wide CSS (see below).


## Custom CSS/JS

It is possible to customise the site CSS and JavaScript without editing any
server-side source files. This is done by editing some pages on the wiki:

* `MediaWiki:Common.css` for skin-independent CSS
* `MediaWiki:Common.js` for skin-independent JavaScript
* `MediaWiki:Vector.css`, `MediaWiki:Monobook.css`, etc. for skin-dependent CSS
* `MediaWiki:Vector.js`, `MediaWiki:Monobook.js`, etc. for skin-dependent
  JavaScript

These can also be customised on a per-user basis, by editing
`User:<name>/vector.css`, `User:<name>/vector.js`, etc.


## Custom skins

Several custom skins are available as of 2019. List of all skins is available at
[MediaWiki.org](https://www.mediawiki.org/wiki/Special:MyLanguage/Category:All_skins).

Installing a skin requires adding its files in a subdirectory under `skins/` and
adding an appropriate `wfLoadSkin` line to `LocalSettings.php`, similarly to
how extensions are installed.

You can then make that skin the default by adding:

```php
$wgDefaultSkin = '<name>';
```


Or disable it entirely by removing the `wfLoadSkin` line. (User settings will
not be lost if it's reenabled later.)

See https://www.mediawiki.org/wiki/Manual:Skinning for more information on
writing new skins.

### Legacy custom skins

Until MediaWiki 1.25 it used to be possible to just put a `<name>.php` file in
MediaWiki's `skins/` directory, which would be loaded and expected to contain
the `Skin<name>` class. This way has always been discouraged because of its
limitations (inability to add localisation messages, ResourceLoader modules,
etc.) and awkwardness in managing such skins. For information on migrating skins
using this old method, see
https://www.mediawiki.org/wiki/Manual:Skin_autodiscovery.
