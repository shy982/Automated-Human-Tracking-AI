# gods-eye


## Important Updates to Repo 

Home Page & View CCTV Footage Pages have been completed by KC 
Several CSS, PHP and image files have been added, Update your local repo with latest code and verify.
### VP & CA Refer Open Issue #2

Repo contains all required files for completion of local setup of gods-eye

## Requirements, Dependencies and Initial Setup

First, Download this repository into your PC at any location


Follow these exact steps in the same order before attempting to run the project:

(If you have the required tools already in your system start from Step 3)

1. Download XAMPP for your system https://www.apachefriends.org/download.html    (XAMPP Path should be C:\XAMPP preferably)

2. If you don't have Anaconda, download and install Anaconda from https://www.anaconda.com/products/individual#Downloads 

3. Open Anaconda >> Click on Environment >> Click on Create >> Give name of the environment as "fyp" , choose Python version **3.6 (must be exactly 3.6)** from dropdown >> Click Create

4. Once the environment is created Click on Home >> In the "Applications on" dropdown **select "fyp" environment** >> You will see Spyder editor icon, Click on Install.

5. Once spyder installation is complete you may Launch spyder and you can view the python files there when required.

6. Copy the two folders which are **inside the dlib folder** in the repository to the following path (may vary based on your anaconda installation path)
    **C:\Users\username\anaconda3\envs\fyp\Lib\site-packages**

7. Click on Environments in Anaconda, Click fyp, next to fyp env you will see a Play button, Click Open with terminal. Execute "All" commands given in Dependencies.txt file.                  
                  7(a) - After this try to run gods_eye.py in spyder, if it shows some ....300W iBuG shape_landmark_detector.. error DM me.

8. Go to This PC, Right Click >> Click Properties >> Advanced System Settings Settings >> Environment Variables >> In User Variables & System Variables, you will find "Path"

9. **Add our python env (fyp) path to both of those "PATH" Variables which will be something like this "C:\Users\username\anaconda3\envs\fyp"** (Important Step)

10. Now copy all the contents of (i.e. folders & files inside the) **main** folder of our repo into **C:\xampp\htdocs**

11. Inside C:\XAMPP\ you'll find xampp-control.exe >> Double click and start Apache and MySql. Ensure MySQL runs in port 3306. 
      
      11(a) - Go to your browser and type localhost/phpmyadmin/ . Dashboard will open up. Click on SQL >> Execute the queries given in SQLSetup.txt file.
      
12. If you have completed everything till here successfully, then the project will work.


If any issues arise in between, please DM. Anything you try apart from these steps in your project setup will be at your own risk.

