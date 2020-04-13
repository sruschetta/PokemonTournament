# S'nce Pokemon Tournament app

Container for the S'nce Pokemon Tournament App. 

## How to run

Simply start the container with <i>docker-compose up</i> or <i>docker-compose up -d</i> for background execution.

Then you need to create the necessary tables with the shell in the php container with:<br/><br/>
<i>docker-compose exec php-fpm bash</i><br/><br/>
Then from the shell type the following command:<br/><br/> 
<i>php pokemon-tournament/bin/console doctrine:schema:update --force</i>

The app is running on <b>localhost:8080</b>




## How it works

The following pages allow you to interact with the app:<br/><br/><br/>
<b>/team/list:</b><br/><br/>
will display all your submitted pokemon teams sorted by creation date from the most recent. You can filter the existing teams by the type of its members (You'll see only the available types of Pokemon).<br/><br/><br/>
<b>/team/create:</b><br/><br/>will display a form for a new team creation. Clicking on <b>Gotta catch'em all</b> will generate a random Pokemon from pokeapi.co storing it on the database if necessary ( the Pokemon types are also saved in database if necassary ).
You must assign a name to your team and click on "Create team" in order to submit your new team.<br/><br/><br/>
<b>/team/{id}/edit:</b><br/><br/>will display the details of the team identified by $id. From this page you can also edit your team name.<br/><br/>







