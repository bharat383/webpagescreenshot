# Take Screenshot of Webpage or Particular Div Content Download WebPage or Particular area of the webpage as Image.

# Developed By : 
Bharat Parmar

# Version : 
1.0

# File Structure :
1) example.php  : Example Script file 
2) saveimage.php : This file will save the HTML Content in PNG Image Format.
3) downloadimage.php : This file will ask user to download the generated image.
4) screenshot : This directory will store temp image files.

# Requirements : 
1) PHP Version : 3.0 and above

# How It Works :

1) HTML to Canvas : Script will read the HTML code of the given print area. 
2) HTML2Canvas Plugin : This plugin will generate Canvas content into the base64 data url of the image.
3) saveimage.php : Jquery send the Canvas Image Data URL to php file which will created new png image file.
4) downloadimag.php : PHP file will ask User to download the image.

# How to use : 
<button class='save-image' data-print-area='#print_div_2'>Capture Image1</button>

1) class : 'save-image' selectore will trigger the save image function.
2) attribute : 'data-print-area' will provide the printable area selector.

# Advance Usage :
You can make your custom script to trigge the function as per you requirement. This script can be used to take screenshot of the user on particular time interval.

