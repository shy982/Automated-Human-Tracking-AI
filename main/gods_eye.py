# -*- coding: utf-8 -*-
"""
Created on Mon Dec  7 20:14:34 2020

@author: SPECTER
"""
import os
import time
import shutil
import recognizer

LocationMap = { "Bannimantap" : '"https://maps.google.com/maps?q=Bannimantap&t=&z=13&ie=UTF8&iwloc=&output=embed',
                "Bhogadi" : 'https://maps.google.com/maps?q=Bhogadi,%20Mysore&t=&z=13&ie=UTF8&iwloc=&output=embed',
                 "Kuvempunagar"  : 'https://maps.google.com/maps?q=Kuvempunagar&t=&z=13&ie=UTF8&iwloc=&output=embed',
                 "Vidyaranyapuram" : 'https://maps.google.com/maps?q=Kuvempunagar&t=&z=13&ie=UTF8&iwloc=&output=embed',
                 "Yadavagiri" : 'https://maps.google.com/maps?q=Yadavagiri&t=&z=13&ie=UTF8&iwloc=&output=embed'
              }
import mysql.connector
mydb  = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database = "FYP"
)
mycursor = mydb.cursor()
def query(area,time,iframe,output):
    val = """INSERT INTO our_guy_table2  values(%s,%s,%s,%s) """
    mycursor.execute(val, (area,time,iframe,output,))
    mydb.commit()
def cleanQuery():
    val = """DELETE FROM our_guy_table2 """
    mycursor.execute(val, ())
    mydb.commit()

areas = ["Bannimantap","Bhogadi","Kuvempunagar","Vidyaranyapuram","Yadavagiri"]
count = 0
DIR_PATH = r"C:\xampp\htdocs\Database"
if os.path.exists(os.path.join(DIR_PATH,'OutputVideo')):
    shutil.rmtree(os.path.join(DIR_PATH,'OutputVideo'))
os.makedirs(os.path.join(DIR_PATH,'OutputVideo'))
CITY_PATH = r"C:\xampp\htdocs\Database\Mysore"
OUTPUT_DIR = r"C:\xampp\htdocs\Database\OutputVideo"
IMG_PATH = r"C:\xampp\htdocs\Database\InputImage\img.jpeg" # Fixed Name and Location
cleanQuery()
for area in areas:
    cctv_dir = os.path.join(CITY_PATH,area)
    footage_list = os.listdir(cctv_dir)
    guy_found = False
    for video in footage_list:
        count+=1
        VIDEO_PATH = os.path.join(cctv_dir,video)
        #print(IMG_PATH,VIDEO_PATH,OUTPUT_DIR,count)
        videoname = 'output'+str(count)
        guy_found = recognizer.isOurGuyFound(IMG_PATH, VIDEO_PATH, OUTPUT_DIR, count)
        if guy_found == True:
            video_create_time = time.ctime(os.path.getatime(os.path.join(cctv_dir,video)))
            iframe = LocationMap[area]
            query(area,str(video_create_time),iframe,videoname)
        else:
            continue