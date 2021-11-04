# -*- coding: utf-8 -*-
"""
Created on Mon Dec  7 20:14:34 2020

@author: SPECTER
"""
import face_recognition
import cv2
import os
def isOurGuyFound(IMG_PATH,VIDEO_PATH,OUTPUT_PATH,ch):
    guy_found = False
    movie = [os.path.join(OUTPUT_PATH,'output'+str(ch)+'.mp4')]
             #,os.path.join(OUTPUT_PATH,'output'+str(ch)+'.avi')]
    for out in movie:
        print("Generating ",out," ...")
        input_movie = cv2.VideoCapture(VIDEO_PATH)
        length = int(input_movie.get(cv2.CAP_PROP_FRAME_COUNT))
        
        codec = int(input_movie.get(cv2.CAP_PROP_FOURCC))
        fps = int(input_movie.get(cv2.CAP_PROP_FPS))
        frame_width = int(input_movie.get(cv2.CAP_PROP_FRAME_WIDTH))
        frame_height = int(input_movie.get(cv2.CAP_PROP_FRAME_HEIGHT))
        output_movie = cv2.VideoWriter(out, codec, fps, (frame_width,frame_height))
        
        image = face_recognition.load_image_file(IMG_PATH)
        face_encoding = face_recognition.face_encodings(image)[0]
        
        known_faces = [
            face_encoding,
        ]
        face_locations = []
        face_encodings = []
        face_names = []
        frame_number = 0
        
        while True:
            ret, frame = input_movie.read()
            frame_number += 1
        
            if not ret:
                break
        
            rgb_frame = frame[:, :, ::-1]
        
            face_locations = face_recognition.face_locations(rgb_frame)
            face_encodings = face_recognition.face_encodings(rgb_frame, face_locations)
        
            face_names = []
            for face_encoding in face_encodings:
                match = face_recognition.compare_faces(known_faces, face_encoding, tolerance=0.50)
    
                name = None
                if match[0]:
                    name = "Our Guy"
                    guy_found = True
        
                face_names.append(name)
        
            for (top, right, bottom, left), name in zip(face_locations, face_names):
                if not name:
                    continue
        
                cv2.rectangle(frame, (left, top), (right, bottom), (0, 0, 255), 2)
        
                cv2.rectangle(frame, (left, bottom - 25), (right, bottom), (0, 0, 255), cv2.FILLED)
                font = cv2.FONT_HERSHEY_DUPLEX
                cv2.putText(frame, name, (left + 6, bottom - 6), font, 0.5, (255, 255, 255), 1)
        
            print("Writing frame {} / {}".format(frame_number, length))
            output_movie.write(frame)
        
        input_movie.release()
        cv2.destroyAllWindows()
    print("output.mp4 contains video with recognized face if any and bounding box")
    return guy_found