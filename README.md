
Module Brief
--------------------------------------------

--This module shows to create a Custom login form and assign it to the Drupal Block programmatically by following the Drupal 6 Standards.
--A template file is created, that contains a login form with all the associated fields.
--A custom block is created and can be placed anywhere in the website.
--The hooks are used to alter the form, create a block.

INSTALLATION OF A MODULE
-------------------------

Few easy steps.

1) Know where custom modules go, not in /modules but in /sites/all/modules
2) Create a folder there, e.g., customlogin.
3) Open a text editor and create a file named customlogin.info


CREATE A MODULE
------------------

4) In customlogin.info add the following lines:

name = Customlogin
description = Custom Drupal Login Module. It creates a block for Drupal Login and can be positioned anywhere on the page.
package = Custom
core = 6.x

5) Create another file named customlogin.module

6) In customlogin.module, we have used the function hook_menu(), hook_theme(), hook_form_alter() to implement.

Also, functions as callback are created to display the output.
