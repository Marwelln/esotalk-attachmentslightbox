esoTalk Attachments Lightbox (Colorbox)
===========================

Adds Lightbox support for esoTalk attachments using [Colorbox](http://www.jacklmoore.com/colorbox/) (theme 4).

How to Install
==============

1. Open up your terminal / command prompt and `cd` to `addons/plugins`
2. Run `git clone git@github.com:Marwelln/esotalk-attachmentslightbox.git AttachmentsLightbox`

Dependencies
============

This plugins depends on the [esoTalk Attachments](https://github.com/esotalk/Attachments) plugin.

Translation
===========

Create `definitions.AttachmentsLightbox.php` in your language pack with the following definitions:

```
$definitions["For more information, visit %s."] = "For more information, visit %s.";
$definitions["The transition type. Can be set to 'elastic', 'fade' or 'none'."] = "The transition type. Can be set to 'elastic', 'fade' or 'none'.";
$definitions["Sets the speed of the fade and elastic transitions, in milliseconds."] = "Sets the speed of the fade and elastic transitions, in milliseconds.";
$definitions["true or false. If true, and if maxWidth, maxHeight, innerWidth, innerHeight, width, or height have been defined, Colorbox will scale photos to fit within the those values."] = "true or false. If true, and if maxWidth, maxHeight, innerWidth, innerHeight, width, or height have been defined, Colorbox will scale photos to fit within the those values.";
$definitions["The overlay opacity level. Range: 0 to 1. E.g: 0.5"] = "The overlay opacity level. Range: 0 to 1. E.g: 0.5";
$definitions["true or false. If true, Colorbox will immediately open."] = "true or false. If true, Colorbox will immediately open.";
$definitions["true or false. If true, focus will be returned when Colorbox exits to the element it was launched from."] = "true or false. If true, focus will be returned when Colorbox exits to the element it was launched from.";
$definitions["true or false. Allows for preloading of 'Next' and 'Previous' content in a group, after the current content has finished loading. Set to false to disable."] = "true or false. Allows for preloading of 'Next' and 'Previous' content in a group, after the current content has finished loading. Set to false to disable.";
$definitions["true or false. If false, disables closing Colorbox by clicking on the background overlay."] = "true or false. If false, disables closing Colorbox by clicking on the background overlay.";
$definitions["true or false. If false, will disable closing colorbox on 'esc' key press."] = "true or false. If false, will disable closing colorbox on 'esc' key press.";
$definitions["true or false. If false, will disable the left and right arrow keys from navigating between the items in a group."] = "true or false. If false, will disable the left and right arrow keys from navigating between the items in a group.";
$definitions["Adds a given class to colorbox and the overlay."] = "Adds a given class to colorbox and the overlay.";
$definitions["Sets the fadeOut speed, in milliseconds, when closing Colorbox."] = "Sets the fadeOut speed, in milliseconds, when closing Colorbox.";
$definitions["true or false. Set to false to remove the close button."] = "true or false. Set to false to remove the close button.";
$definitions["Dimensions"] = "Dimensions";
$definitions["Set a fixed total width. This includes borders and buttons. Example: 100%, 500px, or 500"] = "Set a fixed total width. This includes borders and buttons. Example: 100%, 500px, or 500";
$definitions["Set a fixed total height. This includes borders and buttons. Example: 100%, 500px, or 500"] = "Set a fixed total height. This includes borders and buttons. Example: 100%, 500px, or 500";
$definitions["This is an alternative to width used to set a fixed inner width. This excludes borders and buttons. Example: 50%, 500px, or 500"] = "This is an alternative to width used to set a fixed inner width. This excludes borders and buttons. Example: 50%, 500px, or 500";
$definitions["This is an alternative to height used to set a fixed inner height. This excludes borders and buttons. Example: 50%, 500px, or 500"] = "This is an alternative to height used to set a fixed inner height. This excludes borders and buttons. Example: 50%, 500px, or 500";
$definitions["Set the initial width, prior to any content being loaded."] = "Set the initial width, prior to any content being loaded.";
$definitions["Set the initial height, prior to any content being loaded."] = "Set the initial height, prior to any content being loaded.";
$definitions["Set a maximum width for loaded content. Example: 100%, 500, 500px"] = "Set a maximum width for loaded content. Example: 100%, 500, 500px";
$definitions["Set a maximum height for loaded content. Example: 100%, 500, 500px"] = "Set a maximum height for loaded content. Example: 100%, 500, 500px";
```