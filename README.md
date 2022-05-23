
# QUESTION ONE


 There is only one real reason that is preventing the plugin from being seen on the admin side. We need to Add the initial plugin registration in the comment section at the top of hello-world.php 

## 2. If enabled, what would this plugin do?

This plugin would hook in Hello World as a title tag at the start of the content. 

I would also not it is good practice to add all of these things when setting up a boilerplate for plugins. 
    * Added the plugin initiation at the top of the file
    * Disable direct access to the file
    * Allow for Translation
    * Continue with plugin code




# QUESTION TWO

## 1. What does this code do? 

This code will add a cog icon and title to the admin menu on the left inside of the admin view. When you click on this admin URL href="admin.php?page=custom-menu" it will take you to the page layed out in the h1 and p tags. More details are outlined inside the code.

## 2. Who can/cannot view its effects?

Only those with admin privileges but there are other ways to get around this without a direct path block. 

## 3. What URL exposes the new functionality?

http://localhost:10008/wp-admin/admin.php?page=custom-menu

I would prevent this with:
``` 
<?php defined( 'ABSPATH' ) || exit; ?>
```



# QUESTION THREE

## 1. Write the code that would accomplish this.

Code is present in [question-three.php](https://github.com/babykittenz/Example-1/blob/main/question-three.php)

## 2. How would you trigger the execution of this code?

This operation would only need to occur once to update the old content in the database. Normally I create a plugin that calls this function on activation of the plugin. The plugin can be deleted afterwards to reduce code.

