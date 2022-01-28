# wp-childtheme
A simple starter child theme for WordPress. Includes some help/notes internally.

To install this child theme, you need to:

1. Download and extract the wp-childtheme.zip file.
2. Edit the ParentThemeDirectory in the style.css file. (see below)
3. Zip the files back together.
4. In WordPress, go to Appearance>Themes and click "Add New"
5. Click "Upload Theme".
6. Click "Choose File" and choose the new wp-childtheme.zip file with the edited style.css file.
7. Click "Install Now" (WordPress will confirm if the parent theme is installed. If you see a warning, go back and check the style.css file to make sure you have the correct directory name")
8. Click "Activate" if the child theme is good to go!
   
Typically, the ParentThemeDirectory is the same as the Theme Name... but all lowercase and no spaces. For Example: For "Twenty TwentyTwo", the ParentThemeDirectory is "twentytwentytwo". You can also look in the source code of your website as well. Look for https://yourdomain.com/wp-content/themes/(ParentThemeDirectory)/style.css.

If you had styles/changes in the Customizer for your theme, you must migrate your Customizer settings to the child theme. 

Exporting Customizer Settings
Navigate to [Appearance] > [Customize] > [Export/Import]
Click the Export button. This will download a .dat file to your computer
Importing Customizer Settings
Navigate to Appearance > Themes and activate the child theme into which you wish to import the Customizer settings
Navigate to Appearance > Customize > Export/Import
Click the Choose File button, select the .dat file you downloaded and then click Import
