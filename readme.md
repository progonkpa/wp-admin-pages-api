# Modular WP plugin dev structure with framework for intuitive admin pages and WP Settings API DX 

DX means developer experience :)

**Credits to [Alecaddd WP plugin development tutorial](#alecaddd)**  
His code formed the foundation for this refactor.  

## What is this?

Using this code, you can **completely configure one admin page** by extending AbstractPage.  
The page you just created contains all required information. 
- the main page (parent, admin menu item)
- subpages (children, sub items)
- WP Settings API arguments.
  - settings
  - sections
  - fields
- Technically, not ALL information is stored in Page.  
HTML snippets are stored in Templates which feels tidy.

You can of course make as many admin pages as you want.  
All your pages will be registered by AdminPages, which in turn is triggered by Boot.  
Do not forget to include your new Page in AdminPages though :)  
That doesn't happen automatically now though we could build that in the future.

To wrap up , the idea is you shouldn't have to make changes in AbstractPage and AdminPages.  
You just add Page classes that extend AbstractPage in the Pages directory.



## <a id="alecaddd">Alecaddd WP plugin development tutorial</a>

[Code on GitHub](https://github.com/Alecaddd/WordPressPlugin101) | [YouTube Tutorial](https://www.youtube.com/playlist?list=PLriKzYyLb28kR_CPMz8uierDWC2y3znI2)

### <a id="full-list">Full list of sections and features we will build during the series of Tutorials</a>

* Modular Administration Area
* CPT Manager
* Custom Taxonomy Manager
* Widget to Upload and Diaply media in sidebars
* Post and Pages Gallery integration
* Testimonial section: Comment in the front-end, ADmins can approve comments, select which comments to display
* Custom template sections
* Ajax based Login/Register system
* Membership protected area
* Chat system

### <a id="content-table-tutorial">Content table tutorial</a>

- // Set up OOP structure.
- WordPress Plugin Development - Intro"
- Create a WordPress Plugin from Scratch - Part 1"
- Create a WordPress Plugin from Scratch - Part 2"
- Create a WordPress Plugin from Scratch - Part 3 - Basic PHP OOP"
- Create a WordPress Plugin from Scratch - Part 4 - Custom Post Type"
- Create a WordPress Plugin from Scratch - Part 5 - Uninstall Hook"
- WordPress Plugin Development - Part 6 - Enqueue Admin Scripts"
- WordPress Plugin Development - Part 7 - PHP Visibility Methods"
- WordPress Plugin Development - Part 8 - Static Methods and Multiple Files"
- WordPress Plugin Development - Part 9 - Settings Link and Admin Pages"
- WordPress Plugin Development - Part 10 - Namespaces and Composer Autoload"
- WARNING: AUDIO ISSUES, NEW VIDEO LINK IN DESCRIPTION"
- WordPress Plugin Development - Part 11 - Classes as Services"
- WordPress Plugin Development - Part 12 - Starter Plugin Structure"
- WordPress Plugin Development - Part 13 - Visual Debt and Clean up"
  <br /><br />
- // Start of building modules
- WordPress Plugin Development - Part 14 - Modular Administration Page"   // overview what to build
- WordPress Plugin Development - Part 15 - Modular Admin SubPages"
- WordPress Plugin Development - Part 16 - Dealing with Callbacks"
- WordPress Plugin Development - Part 17a - Admin Custom Fields"
- WordPress Plugin Development - Part 17b - Admin Custom Fields"
- WordPress Plugin Development - Part 17c - Admin Custom Fields"
- WordPress Plugin Development - Part 18 - Admin Tabs in Vanilla JS"
- WordPress Plugin Development - Part 19 - Modular Callbacks"    // Gulp.
- WordPress Plugin Development - Part 20 - iOS toggle in SCSS"
- WordPress Plugin Development - Part 21 - Code cleanup"
- WordPress Plugin Development - Part 22 - Database Optimization"
- WordPress Plugin Development - Part 23 - Save Default Options on Activate"
- WordPress Plugin Development - Part 24 - Create Modular Plugin Sections"
- WordPress Plugin Development - Part 25 - Modular Custom Post Types"
- WordPress Plugin Development - Part 26a - Modular Custom Post Types"
- WordPress Plugin Development - Part 26b - Modular Custom Post Types"
- WordPress Plugin Development - Part 27 - Store Arrays in WP_Options"
- WordPress Plugin Development - Part 28 -  Custom Post Types Admin Section"
- WordPress Plugin Development - Part 29 -  Bug Fixes"
- WordPress Plugin Development - Part 30 -  How to Delete a Custom Post Type"
- WordPress Plugin Development - Part 31 -  How to Edit a Custom Post Type"
- WordPress Plugin Development - Part 32 - Export PHP with Code Prettify"
- WordPress Plugin Development - Part 33 - Create a Custom Taxonomy Manager"
- WordPress Plugin Development - Part 34 - Create a Custom Taxonomy Manager PART 2"
- WordPress Plugin Development - Part 35 - Create a Custom Taxonomy Manager PART 3"
- WordPress Plugin Development - Part 36 - Create a Custom Widget"
- WordPress Plugin Development - Part 37 - Media Uploader in Custom Widget"
- WordPress Plugin Development - Part 38 - Testimonial Manager PART 1"
- WordPress Plugin Development - Part 39 - Testimonial Manager PART 2"
- WordPress Plugin Development - Part 40 - Testimonial Manager PART 3"
- WordPress Plugin Development - Part 41 - Create Sortable Custom Columns"
- WordPress Plugin Development - Part 42 - Custom Settings in CPT"
- WordPress Plugin Development - Part 43 - Testimonial Form ShortCode"
- WordPress Plugin #44 - Compile Multiple JS and SCSS with Gulp"       # Gulp.
- WordPress Plugin #45 - Quick SCSS and JS form styling"
- WordPress Plugin #46 - JS Form Validation in es6"
- WordPress Plugin #47 - JavaScript ES6 Fetch Request to WordPress WP_Ajax"
- WordPress Plugin #48 - Add Custom Post Type in Ajax"
- WordPress Plugin #49 - How to use the WordPress Ajax Nonce"
- WordPress Plugin #50 - Testimonial Slider with WP_Query"
- WordPress Plugin #51 - Build a Javascript es6 Slider"
- WordPress Plugin #52 - How to use a Custom Template from a Plugin"
- WordPress Plugin #53 - How to Override Any Default Template"
- WordPress Plugin #54 - Create an Ajax Login Form - PART 1"
- WordPress Plugin #55 - Create an Ajax Login Form - PART 2"
- WordPress Plugin #56 - Upgrade your Plugin for Gutenberg and WordPress 5"
- WordPress Plugin #57 - Custom Taxonomies and WP_Block in Gutenberg"
