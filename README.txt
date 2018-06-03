

Welcome to the MOODSLIDER webapp

BEFORE USE

1. Please create a database called - moodslider -
When ready, import the .sql file

dbname:moodslider
host:localhost
username: root
no password



2. Clone your project from github


3. Open project in netbeans 

4. Project was designed in Google Chrome with Win computer - please test there



ABOUT THE PROJECT

The project is organised in MVC style - but not written as such.
It is though layered as view controller and model.

When you opened the moodslidetest project in Netbeans, please run the index.php file.

It takes you to the main page - Sky Cinema Moodslider

Right now your database is empty therefore you are required to upload the attached xml file which is called
list_of_movies.xml. You can do this by clicking on Upload which will navigate you to the Upload webpage.
Here you can select the xml file and by clicking on the little Upload button in the Data handling section,
the program will format the data from the database table and will tranfer the data from the xml file into the database.
The app will automatically transfer you back to the Moodslider.

Now you can click on the slider which is set to a neutral 3 value in the middle.
On mouse up you will see the suggestions from the database - you can move all the sliders and the
movie selection will adjust.

If you want to reset all sliders, just click on Moodslider.

If you click on the SKY logo, you'll be redirected to sky.com


TECHNICAL PART

I looked at each slider as a mood category (mood1, mood2 etc). Each slider had 5 values eg.:

Mood1: 		Agitated 1	2	3	4	5 Calm

3 is a neutral number - there are no data for that in the database as it is only being use as a starting point.

In this case 1 is very agitated 2 is agitated 4 is calm 5 is very calm
Each movie has a value for each mood eg;

<programme id="13">
        <name>The Giver</name>
        <image>view/pictures/thegiver.jpg</image>
 A       <mood1>4</mood1>	c
 H       <mood2>1</mood2>	S
 T       <mood3>5</mood3>	W
 S       <mood4>4</mood4>	F
</programme>

So this movie comes up if I choose Calm or Very Happy or Very Wide Awake or Sad.


Each time you move the silders, a new query goes to the server which picks 5 RANDOM movies. 
Test; click on the same spot on one slider and it regenerates a new series of suggestions.


Structure of folders and codes

moodslidetest
	controller
		moodslider_upload.php //controls the upload and imports xml date into DB
	js
		moodslider_search.js //retrieves data on mouse up from view - finds data in DB by calling in
				     // php sql (moodslider_search.php) and displays it in cards in sliders.php	
	model
		moodslider_sarch.php //gets data from DB based on js file's data. Retrives random programme_ids
				     // based on search preferences (one category->more movie) so it does
				     // not display the same progammes on the same preferences
	upload
		xml file destination folder
	view
		css
			style.css //holds all css styles
		logos
			//sky logo and mood emoticons for neutral view
		pictures
			//all movie images
		footer.php
			// footer file - called from index.php
		header.php
			// header file - called from index.php
		sliders.php
		upload_page.php
			// sliders file - called from index.php
	index.php
		// starting poing - requires footer, header, sliders
	

XML FILE

It has 40 categorised movies - categorised according to moodslide values


Enjoy the browsing!


Vik





