<?php

function arafat_load_textdomain() {
	$plugin_dir			=	'recipe/lang';
	load_plugin_textdomain( 'recipe', false, $plugin_dir );
}


#use a software call poedit for generating the translator

#po
#mo
#pod files

#this 3 files r important for translating

#1st generate pot
#click on text imo 
#save it as recipe.pot

#translation 1) msgid 2) msdsgr

#create new translation select language  ......... save as  recipe-fr_FR.po