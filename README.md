# how-to
My Employee Tree Program

<h1>Project Overview</h1>
Employee Tree is a program that lets employees manage their schedules and employees with positions of power can manage the schedules of other employees that report to them.

The employees manage their schedules by creating new ones, deleting and updating existing schedules. The CEO has a special privilege in that he/she can manage the schedules of employees that dont report to him/her directly.

Here are the languages i used to write this software:

<ul>
  <li>PHP (backend / server side)</li>
  <li>HTML, CSS, Javascript and Bootstrap (Frontend / Client Side)</li>
  <li>SQL (database)</li>
</ul>

<h3> Why PHP?</h3>
It doesnt require users to constantly update libraries when a new version is released, which means people who download this code today will still be able to install the program and have no issues in the future.

It is fast and secure. It provides in built fuctions such as hashing for passwords and it also gives in built functions to dehash passwords which saves time for the programmer.

It offers sessions. This makes it easy to use an ID of a user across an entire website without manually managing IDs

Lastly, I had only 8 days after my exams to build this project and PHP is the language i was taught this year interms of a fullstack programming thus, it was easier for me to work with, given the short time i had to build this program :)

<h1>Architectural Diagram</h1>

![Architectural Diagram](https://user-images.githubusercontent.com/85521815/206405910-ef42c677-b1f8-4721-9eb7-3532ed486550.png)

<h1>Detailed Setup Instructions</h1>

<h3>Step1: Download XAMPP</h3>
  visit this link and download XAMPP for windows
  
  https://www.apachefriends.org/download.html
  
  <h3>Step2:Install XAMPP</h3>
  After downloading XAMPP, click the downloaded app and follow along with the installation instructions. If you get a windows security alert prompt, do not be afraid, since XAMPP is a localserver it requires some special secuirty privileges on your computer to be able to function properly as a server on your machine. Simply press allow access and wait for XAMPP to finish installing.
 
 
  
![1](https://user-images.githubusercontent.com/85521815/206415385-5cf4d59d-95bb-4706-923d-127646a927dd.png)

<h3>Step3: Open XAMPP by searching for the XAMPP Control Panel on your windows search bar</h3>

After Openning the XAMPP CONTROL PANEL, click the <b>Start</b> buttons that are aligned with APACHE and MySQL, dont CLOSE it.

![1](https://user-images.githubusercontent.com/85521815/206416559-37aec876-1fe1-4695-a3fc-4590877b534e.png)


<h3>Step4: Download, the files on this repo, and copy them to the appropriate file created by XAMPP</h3>

After downloading the project file from github, take the folder and move it to the following directory:
<h3>first open the local disk folder as shown here:</h3>

![1](https://user-images.githubusercontent.com/85521815/206418606-bb000ba0-edd0-422a-af49-53aa74ef9434.png)

<h3>Look for the folder called xampp and click it, as shown here:</h3>

![1](https://user-images.githubusercontent.com/85521815/206419157-0e2fedd7-1cb6-44e3-8479-1e6a6937fadb.png)

<h3> finally find a folder called htdocs and open it</h3>

![1](https://user-images.githubusercontent.com/85521815/206419869-762aa414-ad16-4bca-8437-1418beeee7d6.png)

<h3>Now that you openned the htdocs folder paste your downloaded git files in this folder and rename the file to EPI-USE
  
  
![1](https://user-images.githubusercontent.com/85521815/206421351-b648bcb3-2fa7-446f-98a3-7859dd06bb8e.png)

 Open the folder, and look for a folder called database and open it as shown below:
  
  ![1](https://user-images.githubusercontent.com/85521815/206421878-fe04eadf-3112-44ce-ae74-21715f1223cc.png)
  
  <h3>Right click the epiuse.sql file and compress it to a zip file</h3>
  
  ![1](https://user-images.githubusercontent.com/85521815/206425778-66467c5e-542f-4b52-a1e7-c7677556d8db.png)


<h3>Step5: Time to import the database in your localserver</h3>
  
  Go to your webbrowser of choice, and type in the following: http://localhost/phpmyadmin/
  
  Make sure the XAMPP CONTROL PANEL is still open foe this to work!
  
  ![1](https://user-images.githubusercontent.com/85521815/206423463-9b2afc2b-809b-4fa2-b2d3-82682a621f42.png)
  
  <h3>If the page loads succesfully, click the new button as shown below, else go back to step 3 and make sure that APACHE and MYSQL are on by pressing the start button for them </h3>
  
  ![1](https://user-images.githubusercontent.com/85521815/206427197-43bda1c7-3562-4cd2-92d7-94079ad5aba4.png)

  <h3> Name your database "epiuse" small letters and click the create button as shown below:</h3>
  
  ![1](https://user-images.githubusercontent.com/85521815/206427730-ff194ef6-aa65-4c85-af3c-3388bb4137cd.png)
  
  <h3>Your newly created database, should show on the left panel, if it is selected click the import button as shown below:</h3>
  
  ![1](https://user-images.githubusercontent.com/85521815/206428722-c5619bce-065f-428c-9f72-7dfd33557cd4.png)
  
  <h3>Press the browse button and go to the XAMPP/HTDOCS/EPI-USE/DATABASE directory and select the zip file you made earlier epiuse.zip </h3>
  
  
![1](https://user-images.githubusercontent.com/85521815/206430640-80d9ce0a-b813-450c-9582-e17a9f7e6e9e.png)

  
![1](https://user-images.githubusercontent.com/85521815/206430350-7cad51d5-906a-43db-b4a3-c223ab94ad92.png)
  
  <h3>Scroll to the bottom of the page and press the import button, as shown below:</h3>
  
![1](https://user-images.githubusercontent.com/85521815/206431341-867240a0-7914-4815-9d61-b711fb912068.png)
  
<h3>You have now officially imported the database, you can verify by checking if you see the tbusers and tbschedule in your epiuse databse</h3>
  
  ![1](https://user-images.githubusercontent.com/85521815/206431837-a5a9a4b0-a660-44cb-8891-87165999a86e.png)

  <h3>Step5: Time to Run the Application!</h3>
  
  Open a new tab in your webbrowser of choice, and type the following link: http://localhost/epi-use/login.php
  
  if you followed all the instructions properly you should see a login page. You can now use the app, enjoy!
  
  ![1](https://user-images.githubusercontent.com/85521815/206432595-81cd2994-da53-4469-9995-a9cfda02ee1b.png)

  
  <h1>Screenshots of application’s visual interface and functionality</h1>

  
  <h3>Login Page where users have to input their details:</h3>
  
  ![1](https://user-images.githubusercontent.com/85521815/206433708-86e08577-018a-4d20-9a2a-e70d36d0420a.png)
  
  <h3>Hierarchy Page where users see who reports to them:</h3>
  
  
![1](https://user-images.githubusercontent.com/85521815/206434045-3614caad-57b7-49cb-bf50-059d8ed6d09f.png)
  

  <h3>Schedule Management page where users manage employees that report to them, since im curently logged in as a CEO i also have a button that says View Reportees, this is to allow the CEO to manage employees that dont report to him directly but report to the managers</h3>
  

  ![1](https://user-images.githubusercontent.com/85521815/206434614-583a1357-2072-4bf0-9768-fba23a6ceb99.png)



