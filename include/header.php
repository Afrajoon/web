<?php
        session_start();
        if(isset($_SESSION['counter']))
        {
            $_SESSION['counter']+=1;
        }
        else
            $_SESSION['counter']=1;
        echo("نفر".$_SESSION['counter']." تعداد بازدید کنندگان");
        ?>
        <img src="image/126.jpg" height="400px" width="100%">
        
    <style>
            .topnav{
                overflow: hidden;
                
            }
            .topnav a{
                float: left;
                display: block;
                color:black ;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            .topnav a:hover{
                background-color:white;
                color: black;
            }
            .topnav a.active{
                background-color: #2196F3;
                color: white;
            }
            .topnav input[type=text]{
                float: right;
                padding: 6px;
                border: none;
                margin-top: 8px;
                margin-right: 16px;
                font-size: 17px;
            }
            @media screen and(max-width:600px) {
                .topnav a, .topnav input[type=text]{
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
            }
        </style>      
</header>