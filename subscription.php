<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishdawnxbe | Abone olduğunuz için teşekkürler!</title>

    <meta property="og:title" content="Dishdawnxbe | Abone olduğunuz için teşekkürler!" />
    <meta property="og:image" content="logoart.svg"/>
    
    <meta property="og:description" content="Dishdawnxbe | Abone olduğunuz için teşekkürler!">
    <meta name="description" content="Dishdawnxbe | Abone olduğunuz için teşekkürler!">
    
        

    <link rel="shortcut icon" href="logoart.svg" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body{
            direction: ltr;
            font-family: 'Baskervville', sans-serif !important;
            font-size: 17px;
            margin: 0;
            padding: 0px;
            line-height: 1.3;
        }

        a {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        ul {
            padding-left: 0;
            margin-top: 0;
            margin-bottom: 0;
            list-style: none;
            padding-inline-start: 0;
        }
        li {
            margin: 0 10px;
        }
        img {
            display: block;
        }

        .link {
            text-decoration: none;
        }

        .link:hover,
        .link:focus {
            color: inherit;
            cursor: pointer;
        }

        .l05-title {
            font-size: 28px;
            margin: 0;
            font-weight: 600;
        }

        @media screen and (min-width: 768px) {
            .l05-title {
                font-size: 37px;
            }
        }

        .l05-title__img {
            display: block;
            max-width: 100%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        }

        @media screen and (min-width: 576px) and (max-width: 991px) {
            .sub-title-l05 {
                font-size: 18px;
            }
        }

        @media screen and (min-width: 992px) {
            .sub-title-l05 {
                font-size: 20px;
            }
        }

        .main-btn-l05 {
            display: inline-block;
            background-color: var(--color-9);
            color: #fff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: inset 0px 1px 0px var(--color-9), 0px 2px 0px 0px var(--color-9a);
            -moz-box-shadow: inset 0px 1px 0px var(--color-9), 0px 2px 0px 0px var(--color-9a);
            -o-box-shadow: inset 0px 1px 0px var(--color-9), 0px 2px 0px 0px var(--color-9a);
            box-shadow: inset 0px 1px 0px var(--color-9), 0px 2px 0px 0px var(--color-9a);
            border: none;
            padding: 10px 20px;
        }

        @media screen and (min-width: 992px) {
            .main-btn-l05 {
                font-size: 20px;
            }
        }

        .main-btn-l05:hover,
        .main-btn-l05:focus {
            cursor: pointer;
            background: #FF7A30;
        }

        :root {
            --color-1: #fa292c;
            --color-1a: #CC2829;

            --color-2: #f324ae;
            --color-2a: #cc2867;

            --color-3: #7d23f3;
            --color-3a: #6f1ba0;

            --color-4: #2046f0;
            --color-4a: #1a239c;

            --color-5: #1db7dd;
            --color-5a: #175086;

            --color-6: #16e038;
            --color-6a: #0aa14e;

            --color-7: #32bb16;
            --color-7a: #20851c;

            --color-8: #2b8d54;
            --color-8a: #176145;

            --color-9: var(--color-9);
            --color-9a: var(--color-9a);

        --brand-color: #EF2143;
        --anim: 800ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .container-l05 {
            padding-left: 12px;
            padding-right: 12px;
            margin-left: auto;
            margin-right: auto;
            max-width: 1200px !important;
        }

        @media screen and (min-width: 576px) and (max-width: 991px) {
            .container-l05 {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media screen and (min-width: 992px) {
            .container-l05 {
                padding-left: 17px;
                padding-right: 17px;
            }
        }

        .header-l05 {
            position: fixed;
            z-index: 150;
            width: 100%;
            background: rgba(32, 40, 53, 0.3);       
        }

        .nav-inner-l05 {
            position: relative;
            display: flex;
            justify-content: space-between;
            padding: 20px 12px;
            align-items: center;
        }

        @media screen and (min-width: 576px) and (max-width: 991px) {
            .nav-inner-l05 {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media screen and (min-width: 992px) {
            .nav-inner-l05 {
                padding-left: 17px;
                padding-right: 17px;
            }
        }

        .logo-link-l05 img {
            display: inline-block;
            max-height: 50px;
            width: 100%;
        }
        .icon {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon svg {
            color: #ffffff;
            width: 40px;
        }

        .icon span {
            color: #fff;
            margin-right: 15px;
            float: left;
            font-size: 20px;
            text-transform: uppercase;
            display: block;
            transition: letter-spacing 0.2s;
            -webkit-transition: letter-spacing 0.2s;
        }

        .mob-nav-bar-l05 {
            position: fixed;
            width: 300px;
            z-index: 999;
            right: 0;
            top: 95px;
            margin: 0em 0em;
            transform: translateX(-100%);
            height: 100%;
            background: #11161E;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
        }
        .mob-nav-bar-l05 h2 {
            color:#EF2143;
            font-size:20px;
            text-transform:uppercase;
            text-align:center;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .mob-nav-bar-l05 img {
            position:relative;
            left:50%;
            margin-left:-17px;
            margin-top:20px;
            width:35px;
            height:35px;
        }
        .mob-nav-bar-l05 hr {
            border-top: 1px solid #595C62;
            width:80%;
            margin-bottom: 10px;
        }
        .mob-nav-bar-l05__list {
            padding-left:10%;
	        padding-right:10%;
        }

        .mob-nav-bar-l05__item {
            padding: 10px 15px;
        }
        .mob-nav-bar-l05__list > li > a {
            color:#CFD0D2;
            font-size:17px;
        }
        .mob-nav-bar-l05__list > li > a > svg {
            float: right;
            -webkit-opacity: 0.0;
            -moz-opacity: 0.0;
            -ms-opacity: 0.0;
            -o-opacity: 0.0;
            opacity: 0.0;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            margin: 0.1em 0.5em -0.1em 0;
            width: 20px;
        }
        .mob-nav-bar-l05__list > li > a:hover {
            color:#fff;
            background:transparent;
            font-weight:bold;
        }
        .mob-nav-bar-l05__list > li > a:hover > svg {
            float: right;
            float: right;
            -webkit-opacity:1.0;
            -moz-opacity:1.0;
            -ms-opacity:1.0;
            -o-opacity:1.0;
            opacity:1.0;
            margin:0.1em -0.4em -0.1em 0;
        }

        .mob-nav-bar-l05__link {
            color: #fff;
            border: none;
            padding: 0;
        }

        #burger,
        .icon > .close,
        .mob-nav-bar-l05 {
            display: none;
        }

        #burger:checked + .icon > .close {
            display: block;
        }

        #burger:checked + .icon >.menu {
            display: none;
        }

        #burger:checked ~ .mob-nav-bar-l05 {
            display: block;
            transform: translateX(0);
        }

        .slider-wrapper {
            height: 100%;
            width: 100%;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .slide {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            opacity: 1;
            background-size: cover;
            background-position: center;
            animation: slider 9s linear infinite;
            will-change: opacity;
            border-bottom: 6px solid #EF2143;
        }

        .slide-1 {
            animation-delay: calc(3s * -1);
            background-image: url(gallery/picture_header_66c481da7951b1.21181805.jpg);
        }

        .slide-2 {
            animation-delay: calc(3s * 0);
            background-image: url(gallery/scene_header_66c481dc4ddd19.35540151.jpg);
        }

        .slide-3 {
            animation-delay: calc(3s * 1);
            background-image: url(gallery/photo_header_66c481dd287881.55350420.jpg);
            opacity: 0;
        }

        @keyframes slider {
            0%{opacity:0;}
            10%{opacity:1;}
            33% {opacity:1;}
            43% {opacity:0;}
            100%{opacity:0;}
        }

        .hero-area-l05 {
            padding-top: 200px;
            padding-bottom: 80px;
            z-index: 5;
            position: relative;
            text-align: center;
        }

        .hero-inner-l05 {
            background: rgba(32, 40, 53, 0.3);
            margin: 0 auto;
            text-transform: uppercase;
            padding: 10px;
        }

        @media screen and (min-width: 576px) {
            .hero-inner-l05 {
                padding: 10px 30px;
            }
        }

        @media screen and (min-width: 991px) {
            .hero-inner-l05 {
                padding: 10px 100px;
                width: 70%;
            }
        }

        .hero-inner-l05 h1{
            font-size: 40px;
            border-bottom: 1px solid #fff;
            color: #ffffff;
        }

        @media screen and (min-width: 768px) {
            .hero-inner-l05 h1{
                
            }
        }
        @media screen and (min-width: 991px) {
            .hero-inner-l05 h1{
                font-size: 65px;

            }
        }

        .hero-inner-l05 h2 {
            font-size: 20px;
            color: #ffffff;
            font-weight: 500;
            margin-top: 20px;
        }

        @media screen and (min-width: 576px) {
            .hero-inner-l05 h2{
                font-size: 28px;
            }
        }

        @media screen and (min-width: 991px) {
            .hero-inner-l05 h2{
                font-size: 28px;
            }
        }

        .hero-btn {
            margin-top: 50px;
        }

        .welcome-l05 {
            padding: 114px 0;
            text-align: center;
        }

        .welcome-l05__img {
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .welcome-l05-title {
            text-transform: uppercase;
            line-height: 1;
            color: #bcbec2;
            font-size: 28px;
            text-align: center;
            margin-top: 20px;
        }
        @media screen and (min-width: 576px) {
            .welcome-l05-title {
                font-size: 36px;
            }
        }
        @media screen and (min-width: 991px) {
            .welcome-l05-title {
                font-size: 60px;
                margin-top: 60px;
            }
        }

        .welcome-l05 hr {
            border-top: 1px solid #EF2143;
            width: 50%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .welcome-l05-text {
            font-size: 22px;
            line-height: 1.2;
            margin: 0 auto;
            color: #44495e;
        }

        @media screen and (min-width: 576px) {
            .welcome-l05-text {
                font-size: 28px;
                max-width: 70%;
            }
        }
        @media screen and (min-width: 991px) {
            .welcome-l05-text {
                font-size: 34px;
            }
        }

        .services-l05 .intro {
            text-align: center;
            margin: 80px auto 50px auto;
        }

        .services-l05 .intro h2 {
            padding-bottom: 10px;
            text-transform: uppercase;
            color: #EF2143;
            font-size: 30px;
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: 500;
            line-height: 1.1;
            border-bottom: unset;
        }

        .services-l05 .intro .text {
            background: #202835;
            border-top: 6px solid #EF2143;
            font-size: 20px;
            padding: 20px;
        }
        .services-l05 .intro .text p {
            color: #fff;
        }
        @media screen and (min-width: 991px) {
            .serv-conteiner {
                max-width: 80%;
                margin: 0 auto;
            }
        }
        .services-l05__list {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            direction: initial;
        }
        @media screen and (min-width: 768px) {
            .services-l05__list {
                flex-direction: row;
            }
        }
        @media screen and (min-width: 991px) {
            .services-l05__list {
            }
        }

        .services-l05__item {
            position: relative;
            padding-top:50px;
            padding-bottom:50px;
        }
        @media screen and (min-width: 768px) {
            .services-l05__item {
                width: 50%;
            }
        }

        .delimiter-hbl,
        .delimiter-hbr,
        .delimiter-vrb,
        .delimiter-vrt {
            position: absolute;
            display: none;
        }

        @media screen and (min-width: 768px) {
            .delimiter-hbl,
            .delimiter-hbr,
            .delimiter-vrb,
            .delimiter-vrt {
                display: block;
            }

            .delimiter-hbl {
                left:0;
                bottom:0;
                width:95%;
                border-bottom:1px solid #EF2143;

            }
            .delimiter-hbr {
                right:0;
                bottom:0;
                width:95%;
                border-bottom:1px solid #EF2143;

            }
            .delimiter-vrb {
                right:0;
                bottom:0;
                height:90%;
                border-right:1px solid #EF2143;
            }
            .delimiter-vrt {
                right:0;
                top:0;
                height:90%;
                border-right:1px solid #EF2143;
            }
        }
        .boxicon-icon {
            position:absolute;
            top:50px;
            left:0;
            text-align: center;
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background-color: #202835;
            color: #fff;
        }
        .boxicon-icon svg {
            margin: 20%;
        }
        .boxicon.left .boxicon-text {
            margin-left: 115px;
            padding-right: 20px;
        }
        .boxicon.right .boxicon-icon {
            right: 0;
            left: auto;
        }
        .boxicon .boxicon-text p {
            font-size:15px;
        }
        .boxicon.right .boxicon-text {
            margin-right: 115px;
            text-align:right;
            padding-left:20px;
        }
        .right-align {
            text-align:right;
        }

        .services-l05 .quote {
            margin-top: 120px;
            padding: 60px 0;
            background-attachment: fixed;
            background-position: 50% 0;
            background-repeat: no-repeat;
            position: relative;
            background-image: url(gallery/drawing_header_66c481df2c5326.29012098.jpg);
            width: 100%;
        }
        @media screen and (min-width: 768px) {
            .services-l05 .quote {
                padding: 120px 0;
            }
        }

        .quote .mask {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #202835;
            opacity: 0.9;
        }

        .quote .container-l05 {
            max-width: 70%;
        }

        .quote .container-l05 p {
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .quote .pattern {
            width: 60%;
            height: 10px;
            background: url(primrose/img/pattern.png);
        }

        .quote-text {
            color: #EF2143;
            font-size: 20px;
            text-align: center;
            padding: 50px 0;
            line-height: 1.2em;
        }
        @media screen and (min-width: 768px) {
            .quote-text {
                width: 80%;
            }
        }

        .main-l05 {
            position: relative;
            overflow: hidden;
        }

        .main-l05 .brand {
            text-transform: uppercase;
            position: absolute;
            font-size: 29px;
            top: 150px;
            right: 0;
            padding: 0;
            margin: 0;
            line-height: 1;
            max-width: 50%;
            color: #cccccc4a;
            text-align: right;
        }
        @media screen and (min-width: 575px) {
            .main-l05 .brand {
                font-size: 50px;
            }
        }

        @media screen and (min-width: 768px) {
            .main-l05 .brand {
                font-size: 80px;
                text-align: left;
            }
        }
        @media screen and (min-width: 991px) {
            .main-l05 .brand {
                font-size: 110px;
            }
        }

        .main-l05-img {
            max-width: 600px;
            border-top: 6px solid #EF2143;
            width: 70%;
        }

        .main-l05-text-wraper {
            padding-bottom: 100px;
        }

        .main-l05-text ul{
            list-style-type: disc;
            padding-left: 30px;
        }
        .main-l05-text h5{
            font-size: 20px;
        }

        .main-l05-price-wrap {
            position: absolute;
            bottom: 0;
            right: 0;
            margin-left: 10px;
            padding: 10px;
            background: #44495e;
            border-top: 6px solid #EF2143;
            width: 40%;
            text-align: left;
        }

        .main-l05-price-wrap p {
            color: #EF2143;
            font-size: 20px;
            margin: 0;
        }
        .main-l05-price-wrap p span {
            font-size: 35px;
            line-height: 1.1em;
            color: #fff;
        }

        .works {
            margin-bottom: 30px;
        }

        .intro-second {
            margin-top: 100px;
            margin-bottom: 50px;
        }

        .intro-second .title {
            border-bottom: 1px solid #EF2143;
        }

        .intro-second .title h2 {
            color: #202835;
            font-size: 25px;
        }

        .reason-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
            justify-content: center;
            align-items: center;
        }
        @media screen and (min-width: 575px) {
            .reason-list {
                flex-direction: row;
                flex-wrap: wrap;
            }
        }

        @media screen and (min-width: 768px) {
            .reason-list {
            }
        }

        .reason-box {
            background: #202835;
            min-height: 220px;
            overflow: hidden;
            position: relative;
            color: #fff;
            transition: background 0.5s;
            max-width: 200px;
        }
        @media screen and (min-width: 575px) {
            .reason-box {
                flex-basis: calc(100% / 2 - 30px);
                margin-left: 20px;
                margin-bottom: 20px;
            }
        }

        @media screen and (min-width: 768px) {
            .reason-box {
                flex: 1;
            }
        }

        .reason-box:hover {
            background:#EF2143;
        }
        .reason-box h1 {
            line-height: 90px;
            top: -25px;
            left: -25px;
            font-size: 90px;
            position:absolute;
            margin:0;
            padding:0;
            font-family:Arial;
        }
        .reason-box p {
            color:#fff;
            font-size:14px;
            margin-top:60px;
            padding:10px;
        }

        .intro {
            margin:80px auto;
        }

        .intro h2 {
            border-bottom:1px solid #EF2143;
            text-align:center;
            padding-bottom:10px;
            text-transform: uppercase;
            color: #EF2143;
            font-size: 30px;
            font-weight: 500;
            line-height: 1.1;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .gallery-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 21px;
        }

        .gallery-item {
            width: 25%;
            padding: 15px;
        }

        .thumbnail {
            height: clamp((960px - 21px * 4) / 4, 210px,(1200px - 21px * 4) / 4);
            width: clamp(210px, 22%, 23%);
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: scale 0.5s;
        }

        .thumbnail:hover img {
            scale: 1.2;
        }

        .infographic {
            background:#202835 url(primrose/img/graph.png) no-repeat center center;
            border-top:6px solid #EF2143;
            background-size: 100% 100%;
            padding-bottom: 50px;
        }
        @media screen and (min-width: 575px) {
            .infographic-wrap {
                width: max(50%, 400px);
            }
        }

        .infographic h4 {
            border-bottom:1px solid #EF2143;
            color:#EF2143;
            padding:10px 0;
        }
        .infographic p {
            color:#70788C;
            margin-bottom:30px;
        }

        .infographic-list {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        @media screen and (min-width: 575px) {
            .infographic-list {
                flex-direction: row;
                flex-wrap: wrap;
            }
        }

      

        .infographic-item {
            padding: 0 15px;
        }
        @media screen and (min-width: 575px) {
            .infographic-item {
                flex: 50%;
            }
        }
        @media screen and (min-width: 768px) {
            .infographic-item {
                flex: 1;
            }
        }

        .chart {
            position: relative;
            display: block;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            margin-bottom:20px;
            text-align: center;
            text-align: center;
            border-radius: 50%;
            background: conic-gradient(#b6bdca  300deg, #EF2143 60deg);
            padding: 10px;
        }
        .skill {
            font-size: 13px;
            display: inline-block;
            line-height: 1;
            background: #ffffff;
            height: 150px;
            border-radius: 50%;
            width: 150px;
            position: absolute;
            top: 0;
            left: 0;
            transform: translate(9%, 9%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 15px;
        }

        .skill span {
            font-weight: 600;
            font-size: 24px;
        }

        .comments {
            padding: 80px 0;
            display: none;
        }
        @media screen and (min-width: 768px) {
            .comments {
                display: block;
            }
        }

        .person-slide {
            float: left; 
            list-style: none; 
            position: relative; 
            width: 100vw;
        }

        .person-title {
            position: absolute;
            z-index: 21;
            top: 0;
            right: 0;
            margin-left:10px;
            padding:10px;
            background:#44495e;
            border-top:6px solid #EF2143;
            width: 40%;
            text-align: left;
        }
        .person-title h3 {
            font-size:35px;
            line-height:1.1em;
            color:#fff;
            margin-bottom: 10px;
        }
        .person-title p {
            color:#EF2143;
            font-size:20px;
            margin:0;
        }

        .person-slide .container-l05 {
            display: flex;
            padding-top: 100px;
            padding-bottom: 100px;
            gap: 50px;
            align-items: center;
        }

        .person {
            width: 400px;
            z-index: 20;
            position: relative;
            margin-left: 20%;
        }
        .person img {
            width: 100%;
        }

        .details {
            flex: 40%;
        }

        .comments-wrapper {
            height: 650px;
            width: 100%;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .comments-indicators {
            position: absolute;
            left: 0;
            z-index: 10;
            width: 100%;
            bottom: 0;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .comments-indicators label {
            cursor: pointer;
            display: inline-block;
            width: 290px;
            height: 170px;
            background-color: #ffffff;
            margin: 0 6px 16px;
            transition: all ease 0.4s;
            border-top: 6px solid #EF2143;
            overflow: hidden;
            position: relative;
            background-size: contain;
            background-repeat: no-repeat;
            background-position-x: right;
        }

        .comments-indicators label:hover,
        .comments-indicators label:focus {
            border-top: 6px solid #428bca;
        }

        .comments-indicators label img {
            width: 100%;
            filter: grayscale(1);
        }

        .comments-indicators label .mask {
            position: absolute;
            left:-75%;
            top:60%;
            width:75%;
            opacity:0.7;
            background: #44495e;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }       

        .comments-indicators label:hover .mask,
        .comments-indicators label:focus .mask {
            left:0;
        }

        .comments-indicators label .mask p {
            padding:5px;
            padding-left:30px;
            color:#fff;
            font-size: 15px;
            margin: 0;
            text-align: center;
            line-height: 1.3;
        }

        .person-slide {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 100%;
            z-index: 1;
            background-size: cover;
            background-position: center;
            transition: left 0.2s 1s, opacity 0s 0.2s backwards;
            opacity: 1;
        }

        [id^='indicat']:checked + .person-slide {
            left: 0;
            z-index: 2;
            transition: left 0.8s ease-out;
        }

        [id^='indicat']:not(:checked) + .person-slide {
            opacity: 0;
        }

        .indicat-1 {
            background-image: linear-gradient(75deg, #fefdfd 52%, transparent 65%), url(avatar/mPprofile-vhDL-0.jpg);
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .indicat-2 {
            background-image: linear-gradient(75deg, #fefdfd 52%, transparent 65%), url(avatar/avatar-w-6jjy-0.jpg);
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .indicat-3 {
            background-image: linear-gradient(75deg, #fefdfd 52%, transparent 65%), url(avatar/mPprofile-vhDL-1.jpg);
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            border: 0;
            padding: 0;
            
            white-space: nowrap;
            clip-path: inset(100%);
            clip: rect(0 0 0 0);
            overflow: hidden;
            bottom: 0;
        }

        .quote {
            background: #EF2143;
            padding:50px 0;
        }
        .quote .container-l05 {
            position:relative;
        }
        .quote blockquote {
            border: none;
            position:relative;
            margin: 0;
            padding:0 36px;
        }
        @media screen and (min-width: 768px) {
            .quote blockquote {
                padding:0 80px;
            }
        }

        .quoteup, .quotedown {
            position:absolute;
            top:0;
            left:0;
            width:35px;
            height:35px;
            background-image: url(primrose/img/quote.png);
            background-repeat:no-repeat;
            background-position:left top;
        }
        .quotedown {
            top:auto;
            left:auto;
            right:0;
            bottom:0;
            background-position:right bottom;
        }
        .quote blockquote p {
            text-align:center;
            font-size: 17px;
            line-height:30px;
            color:#fff;
        }
        @media screen and (min-width: 576px) {
            .quote blockquote p {
                font-size: 20px;
            }
        }

        @media screen and (min-width: 768px) {
            .quote blockquote p {
                font-size: 25px;
            }
        }

        .clients {
            position:relative;
            background-image: url(gallery/picture_header_66c481e0d46640.68006867.jpg);
            background-position: center center;
            background-repeat:no-repeat;
            background-size: cover;
        }
        .clients .mask {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background: #202835;
            opacity:0.9;
        }
        .clients .container {
            position:relative;
        }
        .clients-list {
            padding:70px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }

        .clients-list li {
            padding:20px;
            list-style:none;
        }
        @media screen and (min-width: 576px) {
            .clients-list li {
            }
        }
        @media screen and (min-width: 991px) {
            .clients-list li {
            }
        }

        .clients-list li > img {
            -webkit-filter: grayscale(1);
            filter: grayscale(1);
            margin-left: auto;
            margin-right: auto;
        }
        .clients-list li > img:hover {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }

        .price {
            padding: 120px 0;
        }
        .tarifs {
            display: flex;
            align-items: center;
            flex-direction: column;
            gap: 30px;
        }
        @media screen and (min-width: 768px) {
            .tarifs {
                flex-wrap: nowrap;
                align-items: flex-start;
                flex-direction: row;
            }
        }

        @media screen and (min-width: 576px) {
            .tarif__item {
               
                width: max(500px, 33.3333333333%);
            }
        }
        @media screen and (min-width: 991px) {
            .tarif__item {
                width: 33.3333333333%;
            }
        }

        .price-column {
            background:#F2F2F2;
            margin:0 auto;
            padding-bottom:20px;
            text-align:center;
            margin-bottom:20px;
            border-radius:10px;
        }
        .price-header {
            background:#202835;
            padding-top:20px;
            border-bottom:6px solid #EF2143;
            border-radius:10px 10px 0 0;
        }
        .price-header h3 {
            margin: 0 auto;
            padding-bottom:10px;
            width:80%;
            color: #EF2143;
            border-bottom:1px solid #44495e;
        }
        .price-header span {
            display:block;
            margin-top:10px;
            text-transform: lowercase;
        }
        .price-header span, .price-header .price {
            color:#fff;
        }
        .price-header .price-tarif {
            font-size: 40px;
            color: #ffffff;
            margin: 0 0 10px;
        }

        .price-description {
            padding: 0 15px;
        }
        .price-column ul {
            padding:0;
            margin:20px 0;
            list-style:none;
        }
        .price-column ul > li {
            font-size:20px;
            padding:10px 0;
        }

        .newsletter {
            padding:20px;
            text-align:center;
            background:#202835 url(primrose/img/mail.png) no-repeat 85% 110%;
        }
        .newsletter h3 {
            font-size:24px;
            margin-top:70px;
            margin-bottom:50px;
            color: #EF2143;
        }
        @media screen and (min-width: 576px) {
            .newsletter h3 {
                font-size:26px;
            }
        }
        @media screen and (min-width: 991px) {
            .newsletter h3 {
                font-size:30px;
            }
        }

        .newsletter form {
            margin-bottom:30px;
        }
        .newsletter p {
            font-size:17px;
            color:#fff;
            margin-bottom:50px;
        }        
        @media screen and (min-width: 576px) {
            .newsletter p {
                font-size: 20px;
            }
        }
        @media screen and (min-width: 991px) {
            .newsletter p {
                font-size:25px;
            }
        }

        .newsletter input {
            padding:8px;
            border:1px solid #fff;
            background: transparent;
            color:#fff;
            font-size: inherit;
            margin-bottom: 20px;
        }
        @media screen and (min-width: 576px) {
            .newsletter input {
                margin-right:20px;
                margin-bottom: unset;
            }
        }

        .newsletter button {
            font-size: 14px;
        }

        .contact-wraper {
            min-height:550px;
            z-index: 1;
            position: relative;
            background-image: linear-gradient(#a8a6a6b3, #a8a6a6b3), url(gallery/picture_header_66c481da7951b1.21181805.jpg);
            background-position: center;
            background-repeat: no-repeat;
            padding-bottom: 50px;
        }
        .map-canvas {
            border-top: 6px solid #EF2143;
            height: 100%;
            z-index: 0;
        }

        .contacts-slider-wrap {
            width: 100%; 
            overflow: hidden; 
            position: relative; 
            display: flex;
            direction: initial;
        }
        @media screen and (min-width: 576px) {
            .contacts-slider-wrap {
            width: max(500px, 41.66666666666667%); 
            }
        }

        .contacts-slider-wrap > div {
            overflow: hidden;
        }

        .contacts-indicators {
            position: absolute;
            right: 5%;
            z-index: 10;
            width: 100%;
            bottom: 0;
            text-align: right;
        }
        .contacts-indicators label {
            cursor: pointer;
            display: inline-block;
            margin: 0 6px 16px;
            transition: all ease 0.4s;
            color: #EF2143;
            position: absolute;
            bottom: 0;
            right: 0;
        }
        .contacts-indicators label:hover {
            transform: scale(1.1);

        }
        #indicator-1:checked ~ .contacts-indicators .indicator-1 {
            opacity: 0;
            z-index: -1;
        }
        #indicator-1:checked ~ .contacts-indicators .indicator-2 {
            opacity: 1;
        }

        #indicator-2:checked ~ .contacts-indicators .indicator-2 {
            opacity: 0;
            z-index: -1;
        }
        #indicator-2:checked ~ .contacts-indicators .indicator-1 {
            opacity: 1;
        }

        .text-center button {
            margin-bottom: 25px;
        }

        .contact > input{
            position: absolute;
        }

        .sliders-wrap{
            width: 205%; 
            position: relative; 
            transition-duration: 0s; 
            display: flex;
            gap: 3%;

        }
        .cont-slide {
            height: 100%;
            z-index: 1;
            transition: left 0s 1s;
            float: left; 
            list-style: none; 
            position: relative; 
            flex: 1;
        }

        .cont-slide-1::after {
            content: '';
            position: absolute;
            bottom: -85%;
            left: 50%;
            width: 250px;
            height: 250px;
            opacity: 0.3;
            background-image: url(logoart.svg);
            background-size: auto;
            background-repeat: no-repeat;
            filter: grayscale(1);
        }

        .cont-slide-2 {
            max-width: 48%;
        }

        #indicator-1:checked ~ .sliders-wrap {
            left: 0;
            transition: left 0.8s ease-out;
        }
        #indicator-2:checked ~ .sliders-wrap {
            left: -102%;
            transition: left 0.8s ease-out;
        }

        .contact {
            background: #202835;
            margin-top:150px;
            padding:20px;
        }
        .contact h3 {
            border-bottom:1px solid #EF2143;
            text-transform:uppercase;
            padding:10px 0;
            color: #EF2143;
        }
        .contact p {
            color:#BCBEC2;
            font-size:20px;
            margin-bottom:20px;
            width: 50%;
        }
        .highlighted {
            color: #EF2143;
        }

        .input-l70212980,
        .textarea-l70212980 {
            font-size: 1.2em;
            width: 100%;
            padding: 0.5em 1.5em;
            margin: 0.5em 0;
            background: #fff;
            outline: none;
            border: 1px solid #D6D5D5;
            color: #8B8A8A;
            -webkit-appearance: none;
        }

        .input-l70212980::placeholder,
        .textarea-l70212980::placeholder {
            font-size: 16px;
            font-family: inherit;
        }

        .form-horizontal > label {
            color: #ffffff;
        }

        .form-l05-check {
            margin: 15px 0;
        }

        .form-l05-check-input {
            cursor: pointer;
        }

        .form-l05-check-label {
            font-size: 14px;
            position: relative;
            display: flex;
            align-items: center;
            gap: 5px;
            color: #ffffff;
        }

        .form-l05-check-label a {
            color: #EF2143;
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            border: 0;
            padding: 0;
            white-space: nowrap;
            clip-path: inset(100%);
            clip: rect(0 0 0 0);
            overflow: hidden;
        }

        .footer-l05 {
            overflow:hidden;
            position:relative;
            text-align:center;
            padding-top:20px;
            border-top: 6px solid #EF2143;
            background: #202835;
        }
        .footer-l05 .container-l05 {
            position:relative;
            z-index:2;
        }
        .footer-l05 .logo {
            margin: 0 auto;
            width:110px;
            height:90px;
            display:block;
        }
        .footer-l05 .toTop {
            margin-top:25px;
            display:block;
            text-transform:uppercase;
            color:#EF2143;
            font-size:25px;
        }
        .footer-l05 .copiright {
            margin-top:25px;
            color:#BCBEC2;
        }
        .footer-l05 .brand {
            opacity: 0.1;
            text-transform: uppercase;
            position: absolute;
            font-size: 50px;
            bottom: -50px;
            right: 0;
            padding: 0;
            margin: 0;
            line-height: 1;
        }
        @media screen and (min-width: 576px) {
            .footer-l05 .brand {
                opacity: 0.1;
                font-size: 70px;
            }
        }
        @media screen and (min-width: 768px) {
            .footer-l05 .brand {
                opacity: 0.1;
                font-size: 80px;
            }
        }

        @media screen and (min-width: 991px) {
            .footer-l05 .brand {
                opacity: 0.1;
                font-size: 110px;
            }
        }

        .footer-l05 .brand p {
            position:relative;
            z-index:1;
        }
        .politics-l05 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 14px;
            margin-top: 21px;
        }
        @media screen and (min-width: 576px) {
            .politics-l05 {
                flex-direction: row;
                gap: 23px;
            }
        }

        @media screen and (min-width: 991px) {
            .politics-l05 {
                gap: 92px;
            }
        }

        .politics-l05 a {
            color: #BCBEC2;
        }
        
        @media (max-width: 576px) {
            .skill  {
                font-size: 13px;
            }
            .clients-list li {
                height: 100px;
            }
            .clients-list li > img {
                height: 25px;
                object-fit: contain;
            }
        }

        


    </style>
        
</head>
<body>
    <header class="header-l05">
            <div class="nav-inner-l05">
                <a class="logo-link-l05 link" href="./">
                    <img src="logoart.svg"  alt="">
                    
                </a>
                <input type="checkbox" id="burger">
                <label for="burger" class="icon">
                    <span>Menü</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon close" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon menu" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                </label>

                <nav class="mob-nav-bar-l05">
                    <img src="logoart.svg"  alt="">
                    <h2 class="btn__8OwNV__div">Gezinti</h2>
                    <hr>
                    <ul class="mob-nav-bar-l05__list list">
                        <li class="mob-nav-bar-l05__item">
                            <a class="link" href="./">Ev
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
                            </a>
                        </li>
                        
                        <li class="mob-nav-bar-l05__item">
                            <a class="link" href="./#gellery">Galeri
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
                            </a>
                        </li>
                        
                        <li class="mob-nav-bar-l05__item">
                            <a class="link" href="./#service">Hizmetlerimiz
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
                            </a>
                        </li>
                        
                        <li class="mob-nav-bar-l05__item">
                            <a class="link" href="./#comments">Yorum
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
                            </a>
                        </li>
                        
                        
                        <li class="mob-nav-bar-l05__item">
                            <a class="link" href="./#contact">Kişiler
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
                            </a>
                        </li>
                        
                    </ul>
                    <hr>
                </nav>

            </div>
    </header>

    <section class="hero-l05" id="top">
        <div class="slider-wrapper img__MQHaB__div">
            <div class="slide slide-1"></div>
            <div class="slide slide-2"></div>
            <div class="slide slide-3"></div>

            <div class="container-l05 hero-area-l05">
                <div class="hero-inner-l05">
                    <h1 class="site-title">Dishdawnxbe</h1>
                    <h2>Bize yazarak veya bizi arayarak hizmetlerimizi kullanabilirsiniz. Herhangi bir soruyu cevaplamaktan ve hizmet sipariş etmenize yardımcı olmaktan mutluluk duyacağız!</h2>    
                </div>
                
                <a class="main-btn-l05 hero-btn" href="tel:+902125203073">Pizza sipariş edin</a>
                
            </div>
        </div>
    </section>
       


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-btn__JEwEo__div{
		margin: 0px;
		padding: 0px;
		font-family: 'Space Grotesk', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 325px 0px;
	}
	.bodyClass1-btn__JEwEo__div{
		background: #f8f5f1;
		color: #ffffff;
	}
	.bodyClass2-btn__JEwEo__div{
		background: #f6f5f1;
		color: #fff;
	}
	.bodyClass3-btn__JEwEo__div{
		background: #fff;
		color: #111;
	}
	.wrapage-block-btn__JEwEo__div{
		background-size: 100%;
		width: 100%;
	}
	.box_main-btn__JEwEo__div{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-btn__JEwEo__div h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-btn__JEwEo__div p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-btn__JEwEo__div{
		text-align: center;
	}
	.mainBlock-btn__JEwEo__div ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-btn__JEwEo__div ul>li span{
		font-weight: bold;
	}
	.mainBlock-btn__JEwEo__div{
		max-width: 902px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-btn__JEwEo__div .cBlock-btn__JEwEo__div{
		text-align: center;
	}

	.bodyClass3-btn__JEwEo__div .mainBlock-btn__JEwEo__div{
		background: none;
		border-top: 2px solid #f6f5f1;
		border-bottom: 2px solid #f6f5f1;
	}
	.bodyClass2-btn__JEwEo__div .mainBlock-btn__JEwEo__div{
		background: #000000;
		color: #fff !important;
		box-shadow: 0px 0px 15px #000000;
	}
	.bodyClass2-btn__JEwEo__div .mainBlock-btn__JEwEo__div p{
		color: #fff !important;
	}
	.bodyClass1-btn__JEwEo__div .mainBlock-btn__JEwEo__div{
		background: #FF8D00;
		color: #ffffff;
		border-left: 1px solid #03C4A1;
	}
	.bodyClass1-btn__JEwEo__div .mainBlock-btn__JEwEo__div p{
		color: #ffffff !important;
	}
	.order-btn__JEwEo__div{
		font-size: 20px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-btn__JEwEo__div p{
			padding: 0px 15px;
		  }
		  .box_main-btn__JEwEo__div h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-btn__JEwEo__div{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-btn__JEwEo__div{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-btn__JEwEo__div" id="mainWrapp-btn__JEwEo__div">


	<div class="wrapage-block-btn__JEwEo__div">
		<div class="box_main-btn__JEwEo__div">
			<div class="mainBlock-btn__JEwEo__div">
				<h2>Web sitemize gösterdiğiniz ilgi ve abonelik için içtenlikle teşekkür ederiz! Sizi abonelerimiz arasında görmekten mutluluk duyuyoruz.</h2>
<p>Artık yeni gelenleri, promosyonlarımızı, özel tekliflerimizi ve en son haberleri ilk öğrenenlerden biri olacaksınız. Yalnızca en alakalı ve ilginç bilgileri göndereceğimize söz veriyoruz!</p>
<p>Deneyiminizi geliştirmek için birkaç şey:</p>
<ul>
    <li><span>Kişiselleştirme:</span> Belirli ilgi alanlarınız veya tercihleriniz varsa, size en alakalı teklifleri ve haberleri gönderebilmemiz için lütfen bunları profil ayarlarınızda belirtin.</li>
    <li><span>Spam yok:</span> Zamanınıza ve posta kutunuza saygı duyuyoruz. Bu nedenle, sizi gereksiz bilgilerle boğmayacağımıza söz veriyoruz.</li>
    <li><span>Geri bildiriminiz bizim için önemlidir:</span> Herhangi bir dileğiniz, geri bildiriminiz veya öneriniz varsa, bunları bizimle paylaşmaktan çekinmeyin. Fikriniz gelişmemize yardımcı olur!</li>
</ul>
<p>Yanlışlıkla abone olduysanız veya gelecekte abonelikten çıkmaya karar verirseniz, bizden gelen herhangi bir e-postadaki ilgili bağlantıyı takip ederek bunu her zaman yapabilirsiniz.</p>
			</div>
		</div>
	</div>


</div>



    <footer class="footer-l05">
		<div class="brand"><p>Dishdawnxbe</p></div>
		<div class="container-l05">
			<img class="logo" src="logoart.svg" alt="">
			<a href="#top" class="toTop">Yukarıya geri dön</a>
            <div class="politics-l05">
                <a href="personal-data.html">Gizlilik Politikası</a>
                <a href="membership-terms.html">  Şartlar & Koşullar</a>
                <a href="serviceDisclaimer.html">Feragatname</a>
            </div>
			<p class="copiright">&#169; Dishdawnxbe 2024</p>
        </div>
    </footer>



    <style>
    .x981m3 {
      width: calc(100% - 60px);
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      text-align: left;
      position: fixed;
      bottom: 25px;
      left: calc(50% - 15px);
      transform: translateX(-50%);
      max-width: 843px;
      border-radius: 12px;
      z-index: 3;
      gap: 10px;
      margin: 0 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      overflow: hidden;
    }

    .xmnal3910msjd341-decline-btn{
      background: #f6abab;
    }
  
    .x981m3-message {
      font-size: 14px;
      display: inline-block;
      word-wrap: break-word;
      max-width: 100%;
      color: rgb(69 81 90);
      font-weight: 400;
      opacity: .8;
      padding: 25px;
      text-align: center;
    }
  
    .x981m3-message h1 {
      font-size: 28px;
      margin-block-start: 0;
      margin-block-end: 0;
      margin-bottom: 10px;
      color: #000;
    }
  
    .cfl193 {
      border: none;
      cursor: pointer;
      padding: 15px 15px;
      font-size: 12px;
      transition: background-color 0.3s ease;
      color: #fff;
      white-space: nowrap;
      font-weight: 500;
      text-transform: uppercase;
      border: 2px solid transparent;
    }
  
    .xmnal3910msjd341-customize-btn {
      background: transparent;
      color: #000;
    }
  
    .xmnal3910msjd341-agree-btn {
      color: white;
      background: #041C32;
    }
  
    .x981m3 > div {
      display: flex;
      align-items: center;
      width: 100%;
      border-top: 1px solid #ccc;
      flex-wrap: wrap;
    }
  
    .x981m3 > div > button {
      flex: 1 1 33%;
    }
  
    @media screen and (max-width: 420px) and (min-width: 320px) {
        .x981m3-message {
        font-size: 13px;
      }
      .x981m3-message{
        padding: 10px;
      }
      .cfl193 {
        padding: 15px 10px;
      }
      .x981m3-message h1{
        font-size: 18px;
      }
    }
  
    .xmnal3910msjd341-options-panel {
      background-color: #ffffff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      position: fixed;
      bottom: 25px;
      left: calc(50% - 15px);
      transform: translateX(-50%);
      width: 100%;
      padding: 20px;
      flex-direction: column;
      align-items: center;
      z-index: 4;
      border-radius: 10px;
      max-width: 300px;
      width: calc(100% - 60px);
      margin: 0 15px;
    }
  
    .xmnal3910msjd341-options-panel .center-text {
      font-size: 19px;
      font-weight: 600;
    }
  
    .xmnal3910msjd341-options-panel label {
      margin: 10px 0;
      font-size: 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      padding: 15px;
      border-radius: 12px;
    }
  
    .xmnal3910msjd341-options-panel label svg {
      width: 15px;
      height: 15px;
    }
  
    .xmnal3910msjd341-options-panel label > div {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      width: 100%;
      color: #222;
    }
  
    .xmnal3910msjd341-options-panel label input[type="checkbox"] {
      display: none;
    }
  
    .xmnal3910msjd341-options-panel label input[type="checkbox"] + .toggle {
      position: relative;
      display: inline-block;
      width: 20px;
      height: 20px;
      background-color: #ccc;
      cursor: pointer;
    }
  
    .xmnal3910msjd341-options-panel label input[type="checkbox"] + .toggle:before {
      content: '';
      position: absolute;
      width: 16px;
      height: 16px;
      top: 50%;
      transform: translateY(-50%);
      background-color: #ccc;
      left: 2px;
      transition: all 0.3s ease;
    }
  
    .xmnal3910msjd341-options-panel label input[type="checkbox"]:checked + .toggle {
      background-color: #EF2143;
    }
  
    .xmnal3910msjd341-options-panel label input[type="checkbox"]:checked + .toggle:before {
      background-color: #EF2143;
    }
  
    .xmnal3910msjd341-submit-btn {
      background: #041C32;
      color: #fff;
    }
  
    .hidden {
      display: none !important;
    }
  
    .center-text {
      text-align: center;
      margin-bottom: 35px;
      font-size: 25px !important;
    }
  
    .align-center {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 20px;
    }
  
    .align-center button {
      padding: 15px 30px;
      font-size: 15px;
    }
  </style>
  
  <div class="x981m3 hidden">
    <span class="x981m3-message">
      <h1>	Dosya çerezi!</h1>
  
      Tarama deneyiminizi geliştirmek, site trafiğini analiz etmek ve kişiselleştirilmiş reklamlar sağlamak için çerezleri kullanıyoruz. Bu başlığı görüntülemeye devam ederek veya kapatarak çerez kullanımımızı kabul etmiş olursunuz. Çerezleri nasıl kullandığımız ve "Ayarlar"a tıklayarak bunları nasıl yönetebileceğiniz hakkında daha fazla bilgi edinin.
    </span>
  
    <div>
      <button class="xmnal3910msjd341-customize-btn cfl193">Settings</button>
      <button class="xmnal3910msjd341-decline-btn cfl193">Tümünü Reddet</button>
      <button class="xmnal3910msjd341-agree-btn cfl193">Çerezleri Kabul Et</button>
    </div>
  </div>
  <div class="xmnal3910msjd341-options-panel hidden">
    <div class="center-text">	Çerez ayarları</div>
  
    <label>
      <div>
        <input type="checkbox" checked class="xmnal3910msjd341-consent-checkbox" name="analytics">
        Analytics
  
        <span class="toggle"></span>
      </div>
  
    </label>
    <label>
      <div>
        <input type="checkbox" checked class="xmnal3910msjd341-consent-checkbox" name="preferences">
        Tercihler
  
        <span class="toggle"></span>
      </div>
  
    </label>
    <label>
      <div>
        <input type="checkbox" checked class="xmnal3910msjd341-consent-checkbox" name="marketing">
        Pazarlama
  
        <span class="toggle"></span>
      </div>
  
    </label>
  
    <div class="align-center">
      <button class="xmnal3910msjd341-submit-btn cfl193">Save</button>
    </div>
  </div>
  
  <script>
    function encodeCookieData(name, data, expireDays) {
      let expires = "";
      if (expireDays) {
        const date = new Date();
        date.setTime(date.getTime() + (expireDays * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (data || "") + expires + "; path=/";
    }
  
    function decodeCookieData(name) {
      const cookieString = `${name}=`;
      const cookiesArray = document.cookie.split(';').map(cookie => cookie.trim());
      const foundCookie = cookiesArray.find(cookie => cookie.startsWith(cookieString));
      return foundCookie ? decodeURIComponent(foundCookie.split('=')[1]) : '';
    }
  
    function toggleElementVisibility(elementSelector) {
      const element = document.querySelector(elementSelector);
  
      if (element) {
        element.classList.toggle('hidden');
      }
    }
  
    function remElementVisibility(elementSelector) {
      const element = document.querySelector(elementSelector);
  
      if (element) {
        element.classList.add('hidden');
      }
    }
  
    function collectCheckedBoxes(selector) {
      const checkboxes = Array.from(document.querySelectorAll(selector));
      return checkboxes.filter(checkbox => checkbox.checked).map(checkbox => checkbox.name);
    }
  
    function handlePrivacyConsent(action) {
      const consentData = collectCheckedBoxes('.xmnal3910msjd341-consent-checkbox');
      encodeCookieData("UserSession_40231", JSON.stringify(consentData), 365);
  
      if (action === 'hide') {
        remElementVisibility('.xmnal3910msjd341-options-panel');
        remElementVisibility('.x981m3');
      }
    }
  
    document.querySelector('.xmnal3910msjd341-customize-btn').addEventListener('click', () => toggleElementVisibility('.xmnal3910msjd341-options-panel'));
  
    document.querySelector('.xmnal3910msjd341-submit-btn').addEventListener('click', () => {
      remElementVisibility('.xmnal3910msjd341-options-panel');
    });
  
    document.querySelector('.xmnal3910msjd341-agree-btn').addEventListener('click', () => handlePrivacyConsent('hide'));
    document.querySelector('.xmnal3910msjd341-decline-btn').addEventListener('click', () => handlePrivacyConsent('hide'));
  
  
    const cookieCheckboxes = document.querySelectorAll('.xmnal3910msjd341-consent-checkbox')
  
    function saveCheckboxState() {
      const checkboxesState = {};
      cookieCheckboxes.forEach((input) => {
        checkboxesState[input.name] = input.checked;
      });
      localStorage.setItem('checkboxesState', JSON.stringify(checkboxesState));
    }
  
    cookieCheckboxes.forEach((input) => {
      input.addEventListener('change', e => {
        saveCheckboxState();
      });
    });
  
    function loadCheckboxState() {
      const checkboxesState = JSON.parse(localStorage.getItem('checkboxesState'));
      if (checkboxesState) {
        cookieCheckboxes.forEach((input) => {
          input.checked = checkboxesState[input.name] || false;
        });
      }
    }
  
    document.addEventListener('DOMContentLoaded', loadCheckboxState);
  
    if (!decodeCookieData("UserSession_40231")) {
      toggleElementVisibility('.x981m3');
      document.querySelector('.x981m3').classList.remove('hidden');
    }
  </script>

    

</body>
</html>
