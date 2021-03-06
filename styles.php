<style type="text/css">
html{
  scroll-behavior: smooth;
}
  *{margin: 0; padding: 0;  box-sizing: border-box; font-family: 'Mulish', sans-serif;}


  .nav_style{
    background-color: #a29bfe!important
  }
  .nav_style a{color: white;}
/* main header */
.main_header{
  height: 450px;
  width: 100%;
}

.leftside img{
  animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat {

  0%{transform: scale(.75);}
  20%{transform: scale(1);}
  40%{transform: scale(.75);}
  60%{transform: scale(1);}
  80%{transform: scale(.75);}
  100%{transform: scale(.75);}

}

.rightside h1{
  font-size: 3rem;
}

.corona_png_rotate img{
  animation: gocorona 3s linear infinite;
}
@keyframes gocorona {
  0%{transform: rotate(0);}
  100%{transform: rotate(360deg);}

}

/* *************corona update************* */

.cororna_update{
  margin: 0,0,30px,0;
}
.cororna_update h3{
  color: #ff7675;
}
.cororna_update h1{
  font-size: 2rem; text-align:center;
}


/* ***************about section*************
 */

.sub_section{
  background-color: #fbfafd;
}


/* ***********footer*********** */
.footer_style{
  background-color: #a29bfe!important;
}
.footer_style p{
  margin-bottom: 0!important;
}


/* ******************myBtn***************** */

#myBtn{
display:none;
position: fixed;
bottom: 30px;
right: 40px;
z-index: 99;
border: none;
outline: none;
background-color: #00A8FF;
color: white;
cursor: pointer;
padding: 10px;
border-radius: 10px;
}
#myBtn:hover{
  background-color: #606060;
}
</style>
