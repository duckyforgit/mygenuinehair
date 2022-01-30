Getting Started With Style Guide Boilerplate
Download the Style Guide Boilerplate
You can clone, fork, or download the repo from GitHub. Once you have the files for Style Guide Boilerplate, you'll create a directory on your site for them.

Set up a directory on your site for the style guide
I recommend creating a directory named style-guide in your site's root directory.

Upload the Style Guide Boilerplate files
Style Guide Boilerplate is currently PHP based so you will need a server that supports PHP. Upload the files from the GitHub repo to your newly created directory.

Hook up your own CSS into the style guide
In the <head> of Style Guide Boilerplate are custom styles for the boilerplate itself. These have all been prefixed with sg- so they hopefully shouldn't cause any conflicts with your website's own styles.

Below the custom styles for the boilerplate, you will add in your own custom stylesheet(s) which you use on your live site.

<!-- Style Guide Boilerplate Styles -->
<link rel="stylesheet" href="css/sg-style.css">

<!-- Replace below stylesheet with your own stylesheet -->
<link rel="stylesheet" href="css/style.css">
Review your live site CSS
You should be able to go to yoursite.com/style-guide/ and see how your live site's CSS affects base elements. The last step is creating your site's custom patterns/modules.

Create custom patterns
To create custom patterns like buttons, breadcrumbs, alert messages, etc., create a new .html file and add your HTML markup into the file.

Save the file as pattern-name.html into the markup/patterns directory inside of your style-guide directory.

You should now be able to see the new patterns at yoursite.com/style-guide/

Create personalized documentation
You can use markdown or html to create personalized documentation for your examples. Create a new .md or .html file and name it whatever your markup snippet file is named.

Save the file as markup-name.md or markup-name.html into the doc/base or doc/patterns directory inside of your style-guide directory.

For example, if you want to create doc for markup/patterns/breadcrumbs.html, create a file called breadcrumbs.md or breadcrumbs.html and save it into doc/patterns.

You should now be able to see the new doc at yoursite.com/style-guide/

Running the app
You can run the application with PHP's built in web server. Run the following command:

php -S localhost:8000

Now, browse to http://localhost:8000 to see the website.

Generating static HTML style guide
You can generate a static index.html version of style guide boilerplate by running the following command:

php index.php > index.html

Browser Support
I've built Style Guide Boilerplate with progressive enhancement in mind to work on a wide range of browsers.

Known supported browsers include:

Chrome
Firefox
Safari
Opera
IE8+
Safari for iOS
Stock Android Browser (4.0+)
If you come across any bugs, or have any other issues with the boilerplate, please open an issue here on GitHub.

Additional Resources
Styleguides.io

Front-end Style Guides

Front-end Style Guide Roundup

Future-Friendly Style Guides

HTML KickStart

Oli.jp Style Guide

Jeremy Keith's Pattern Primer

Paul Robert Llyod's Style Guide

Pears

Starbucks Style Guide