## Description of the flow

<p align="left">The flow steps are the following:</p>
1. A prospect is giving the name and surname of a referee, who should have previously done some purchase online in the connected e-commerce
2. A check is done to verify the existence of this referee in a second database, relative to the e-commerce
3. If the referee exists, the prospect is redirected to a second page where he/she will have to insert name, surname and email
4. Both prospect and referee will receive an email containing a discount code, one for each

## Structure of the app

<p align="left">In the app we have 2 controllers, one for the page of the referee (Step 1) and one for the page of the prospect (Step 2).</p>

### RefereeController

<p align="left">It contains 2 methods:</p>
<p align="left">**show():** it simply shows the view referee.blade.php</p>
<p align="left">**verify(request):** it checks if the referee exists in the second database, and save it in session for later</p>

### RegistrationController 

<p align="left">It contains 2 methods as well:</p>
<p align="left">**show():**</p>
- It checks if the prospect is laded in the page without giving a referee
- If it has happened, he will be redirected to the homepage with an error message
- If the referee is correctly in session, the new form for the prospect data will be shown
it simply shows the view registration.blade.php
<p align="left">**verify(request):**</p>
- It validates the data of the prospect
- It checks if the prospect is already in database: in that case he/she would have already received a discount code
- If the prospect is already in database, there will be a redirection to the homepage with an error message
- The prospect is added in database
- The emails are sent to the prospect and to the referee with their discount codes

## Templates

<p align="left">The templates included in the package are the following:</p>
- **layout.blade.php:** it is the basic template for the pages, built with tailwind css, very simple pages at the moment
- **referee.blade.php:** it is the template for the homepage, where to insert the information of the referee; it extends layout with a form
- **registration.blade.php:** it is the template for the registration of the prospect; it extends layout as well with another form
- **emails/referee.blade.php:** it is the template for the email to the referee
- **emails/prospect.blade.php:** it is the template for the email to the prospect
