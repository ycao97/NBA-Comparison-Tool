* File structure
  * Client-Side Scripting
    * bootstrap(folder) – This folder includes files to make colors around input boxes, dropdown, and buttons by using bootstrap program.  
    * index.php – Homepage. This file connects every file such as HTML, CSS, and JavaScript to make the application for client side. 
  * Server-Side Scripting
    * config.php – This file connects MySQL and select database. 
    * fetch.php – This file fetch data which is player’s information and stats from database.
    * getPlayerYears.php – Populate dropdown based on autocomplete search. User search for players in autocomplete search box. The years that player played will be auto generated.
    * resultData.php – Once users input player’s name in the input box and select season, this file get data from database and show a result.
    * nba_players.sql – database. My SQL
* Necessary software/libraries
  * If you would like to change any design, you will need to use bootstrap, HTML, CSS, JavaScript, and PHP IDEs, and text edit program.
  * jQuery, JavaScript Framework Library - Ajax development
  * localhost PHP server
* System environment 
  * Tested out in Windows and Mac OS.
* Database structure
  * Source from Kaggle dataset – Seasons_Stats.csv, NBA Players stats since 1950
  * https://www.kaggle.com/drgilermo/nba-players-stats
  * We only want to compare player’s stat for last 10 years, so we edit and shrink the dataset to 2008 to 2017. 
  * Only one database including Id number from 0 to 5946 which is a primary key and stats of each players which are  Year, player, Pos, Age, Tm, G, GS, MP, PER, TS%, 3Par, FTr, ORB%, DRB%, TRB%, AST%, STL%, BLK%, TOV%, USG%, blanl, OWS, DWS, WS, WS/48, blank2, OBPM, DBPM, BPM, VORP, FG, FGA, FG%, 3P, 3PA, 3P%, 2P, 2PA, 2P%, eFG%, FT, FTA, FT%, ORB, DRB, TRB, AST, STL, BLK, TOV, PF, and PTS
