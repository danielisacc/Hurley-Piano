# Test Hurley Website
The code in this repository uses php instead of HTML for majority of the files for its reusability and scalability. Additionally a large addition to this is the ability to use the backend directly with the code to make the user login and creation much easier.

# The Website Structure
A huge benefit of using php is that we can include html files in the document, meaning that the header and footer can be saved in an seperate document with its own css and script hardcoded in. This makes any changes to the header affect all of the subsequent documents and makes it much easier to impliment the header and footer in the rest of the website.

# Note to developers
The programs in this github account are designed to be run on a XAMPP Server. I tried to reduce as many magic variables as possible in my short time at Hurley Piano, but the config file located in the scripts documents needs to be updated to run the server properly. There, you will find the location of the database connection information and the email connection information. If this information is not correct, then requests to the database will be unsuccessful. Additionally, the path locations within the config file is a way of allowing flexibility in how the folders are organized, meaning if you decided to move the imgs or change the name of the imgs folder, it can be. If this functionality is removed, be sure to make changes throughout all documents that include this config.php file. If you need to contact me, my phone number is no longer available, but feel free to email me at my developer email daniel.delavega.dev@gmail.com. I will try to reply quickly. I understand this code was done quickly and does not include propper documentation,so feel free to ask questions if you don't understand something in the code.