# jal
This project is a php based app that determines how many days annual leave the user needs to take off work for the selected Jewish holidays over the desired time period.

Given employees are allocated a certain number of days annual leave in a given 12 month period, the user will need to enter:
* The start date of their working year
* The end date of their working year
* The Jewish festivals to be observed.

The app then runs sends a GET request to the server, which returns a table of all jewish holidays that fall in the time period. The results are returned with an additional column indicating whether a day of annual leave is required or not (ie if the festival falls on a weekend/bank holiday). 

Hit counts are recorded in the `counter.txt` file, and can be viewed running by running the hits.php.

A live version of this site can be found here http://nickwip-com.stackstaging.com

