<?php

class ProjectsModel extends BaseModel {
    public function getAll() {
        return array(
            array(
                "title" => "Sketchsaver",
                "desc" => "Sketchsaver is a my personal papersaver"
            ),  
            array(
                "title" => "YouTube-Downloader",
                "desc" => "Node project for downloading video from YouTube"
            ), 
            array(
                "title" => "Taskly",
                "desc" => "Taskly is hybrid-mobile application using Cordova"
            ),
            array(
                "title" => "ChatSystem",
                "desc" => "Node chat system using web socket"
            )
        );
    }   
}
