jQuery jCloner 1.0
=======

jCloner is a jQuery plugin for the elements on your webpage. It allows you to create clones of any HTML elements on your page with just a single click of a mouse.

jCloner is an extension of the jQuery clone() method with more customization and flexibility to fit most of your needs. The footprint is less than 3 KB in size.


# Installation #


## Step 1: ##
Include a reference to the jQuery Core library (1.3 or above) and the jCloner plugin. 

```html
<script language="javascript" src="jquery.js"></script>
<script language="javascript" src="jquery.jCloner.js"></script>
```


## Step 2: ##
In your HTML file, provide the markup required by jCloner ("TABLE", "DIV" etc). 

```html
<form name="form1" method="post" action="">
    <table id="UserInformation" class="UserInformation" width="400" border="0" cellpadding="2" cellspacing="0">
      <tbody><tr>
        <td>Name:</td>
        <td>
          <input name="name" type="text">
 
        </td>
      </tr>
      <tr>
        <td>Email Address </td>
        <td><input name="email" type="text"></td>
      </tr>
    </tbody></table>
    <hr>
    <div id="NewUserInfoContainer"></div>
 
    <table width="400" border="0" cellpadding="2" cellspacing="0">
        <tbody><tr>
            <td colspan="2"><input id="submit" value="Submit" name="submit" type="button"></td>
        </tr>
    </tbody></table>
    <div id="AddMoreUsers" class="link">Add more users</div>
</form>
```

In the example above, we have a form wrapped around a table. Note that the table has an id and a class attribute.

The following DIV is where the new clone element shall be copied into. This can be placed anywhere in the BODY tag: 

```html
<div id="NewUserInfoContainer"></div>
```

## Step 3: ##
Finally you need to fire a call to the jCloner plugin and supply your parameters: 

```html
<script language="javascript">
    $(document).ready(function () {
 
        $('#UserInformation').jCloner({
            cloneClass: 'UserInformation',
            addTextID: 'AddMoreUsers',
            removeText: 'Remove User',
            removeClass: 'link',
            removeTextAppend: '<hr>',
            confirmOnRemove: true,
            confirmText: 'Sure to remove?',
            maxItemsAllowed: 5,
            appendElement: 'NewUserInfoContainer'
 
        });
    }
</script>
```

__jCloner accepts the following arguments:__

* cloneClass: The name of the class for the parent element to be cloned.

* addTextID: Specify the ID for the "Add more" link.

* removeText: You can specify any text that you'd like the "Remove" link read.

* removeClass: This specifies the class for the "Remove" link.

* removeTextAppend: This is where you can specify any text or html markup you would like to appened after the "remove" link.

* confirmOnRemove: Determines whether a confirmation message to be displayed before deleting the selected element. Accepts a boolean value. Setting it to "True" will display a confirmation box to the user before deleting the element.

* confirmText: Specify any text for the remove confirmation prompt window.

* maxItemsAllowed: Specifying the maximum number of elements to be cloned. Can be any integer for example 0, 10, 25 etc.

* appendElement: This is where the cloned copy shall be copied to. Usually this is an ID for a <DIV> element. The DIV can be placed anywhere within the body tag.


[Click here for Demo](http://shouvik.net/jcloner.php)


