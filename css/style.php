<style type="text/css">

html{
    scroll-behavior: smooth;
}
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Muli', sans-serif;

}

.row{
    margin-left: 0;
    margin-right: 0;
    
}

.nav_style
{
    background-color: #E5A60A!important;

}

.nav_style a
{
    color: white;
}


.main_header
{
    height: 450px;
    width: 100%;

}

.rightside h1
{
    font-size: 3rem;
}


.corona_rotate img
{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona
{
    0%
    {
        transform: rotate(0);
    }
    100%
    {
        transform: rotate(360deg);
    }
}

.leftside img
{
    animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat
{
    0%
    {
        transform: scale(.75);
    }
    20%
    {
        transform: scale(1);
    }
   40%
    {
        transform: scale(.75);
    }
    60%
    {
        transform: scale(1);
    }
    80%
    {
        transform: scale(.75);
    }
    100%
    {
        transform: scale(.75);
    }
}

.corona_update
{
    margin: 0 0 30px 0;
}

.corona_update h3
{
    color: #ff7675;
}

.corona_update h1
{
    font-size: 2rem;
    text-align: center;

}

.sub_section
{
    background-color: #fbfafd;

}

figure img:hover
{
    animation: zoomin-out 3s linear infinite;
    transition: ease all;
}
@keyframes zoomin-out
{
    0%
    {
        transform: scale(.75);
    }
    20%
    {
        transform: scale(1);
    }
   40%
    {
        transform: scale(.75);
    }
    60%
    {
        transform: scale(1);
    }
    80%
    {
        transform: scale(.75);
    }
    100%
    {
        transform: scale(.75);
    }
}



.footer_style
{
    background-color: #a29bfe;
}

.footer_style p
{
    margin-bottom: 0!important;

}


#myBTN
{
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00a8ff;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBTN:hover
{
    background: #606060;
}



@media(max-width:768px){
    .main_header{
        height: 700px;
        text-align: center;

    }

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 34px;
    }
}



</style>

