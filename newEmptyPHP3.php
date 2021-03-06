<style>
*
{
    margin: 0;
    padding: 0;
}
body
{
font-family: Arial, sans-serif;
background-color: #cecece;
background-color: aqua;
font-family: sans-serif;
max-width: 100%;
overflow-x: hidden;
}
top-nav-bar
{
    height: 57px;
    top: 0;
    position: sticky;
    background: #fff;
    margin-bottom: 20px;
    border-bottom: 3px solid orange;
    z-index: 2;
}
.logo
{
    height: 40px;
    margin: 5px 10px;
}
.form-control
{
    margin-top: 9px;
    margin-left: 30px;
    border: 1px solid aqua;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: none;
}
.input-group-text
{
    background: aqua;
    border: 1px solid aqua;
    margin: 8.5px 10px 3px 0;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    cursor: pointer;
}
.search-box
{
    display: inline-flex;
    width: 60%;
}
.fa-search
{
    color: #fff;
}
.menu-bar
{
    width: 40%;
    height: 57px;
    float: right;
}
.menu-bar ul
{
    display: inline-flex;
    float: right;
}
.menu-bar ul li
{
    border-left: 1px solid #fff;
    list-style-type: none;
    padding: 15px 35px;
    text-align: center;
    background-color: aqua;
    cursor: pointer;
}
.menu-bar ul li a
{
    font-size: 15px;
    font-weight: bold;
    color: #fff;
    text-decoration: none
}
.fa-shopping-basket
{
    margin-right: 5px; 
}
@media only screen and (max-width: 980px)
{
    .top-nav-bar
    {
        height: 118px;
        border-bottom: 0;
    }
    .search-box
    {
        width: 100%;
    }
    .menu-bar
    {
        width: 100%;
    }
    .menu-bar ul
    {
        margin: 10px 0;
        width 100%;
    }
    .menu-bar ul li
    {
        height: 57px;
        width: 100%;
    }
}
/*--------side-menu------*/
.side-menu
{
    height: 79%;
    width: 15%;
    font-size: 14px;
    float: left;
    z-index: 2;
    background-color: #ddd;
}
.side-menu ul
{
    margin-left: 5px;
}
.side-menu ul li
{
    list-style-type: none;
    font-weight: bold;
    margin-top: 10px;
    cursor: pointer;
}
.side-menu ul li:hover
{
    color: aqua;
}
.side-menu ul li ul
{
    display: none;
    z-index: 10;
    top: 77px;
    
}
.side-menu ul li:hover ul
{
    display: block;
    height: 400px;
    margin-left: 15%;
    padding: 0 100px 10px 10px;
    position: fixed;
    background: #ececec;
    box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5) 
}
.fa-angle-right
{
    margin-top: 4px;
    margin-right: 8px;
    float: right;
}
#menu-btn, #close-btn
{
    font-size: 30px;
    margin: 10px;
    color: aqua;
    display: none;
}
@media only screen and (max-width: 980px)
{
    .side-menu
    {
        width: 34%;
        z-index: 20;
        top: 133px;
        position: fixed;
        font-size: 12px;
        display: none;
    }
    .side-menu ul li ul
    {
        top: 133px;
    }
    .side-menu ul li:hover ul
    {
        margin-left: 31%;
    }
    #menu-btn
    {
        display: block;
    }

}
/*------slider------*/
.slider
{
    width: 80%;
    margin-left: 17%;
    padding: 0 10px;
}
.carousel-indicators
{
    z-index: 1;
}
@media only screen and (max-width: 980px)
{
    .slider
    {
        width: 100%;
        margin-left: 0;
    }
}
/*-----------Feature----------*/
.featured-categories
{
    margin: 50px 0;
}
.featured-categories img
{
    width: 100%;
    padding: 20px 0;
    transition: 1s;
    cursor: pointer;
}
.featured-categories img:hover
{
    transform: scale(1.1);
}
/*--------On-Sale---------*/
.title-box
{
    background: aqua;
    color: #fff;
    width: 180px;
    padding: 4px 10px;
    height: 40px;
    margin-bottom: 30px;
    display: flex;
}
.title-box h2
{
    font-size: 24px;
}
/*---------Product-Top---------*/
.product-top img
{
    width: 100%;
}
.overlay-right
{
    display: block;
    opacity: 0;
    position: absolute;
    top: 10%;
    margin-left: 0;
    width: 70px;
}
.overlay-right .fa
{
    cursor: pointer;
    background-color: #fff;
    color: #000;
    height: 35px;
    width: 35px;
    font-size: 20px;
    padding: 7px;
    margin-top: 5%;
    margin-bottom: 5%;
}
.overlay-right .btn-secondary
{
    background: none;
    border: none;
    box-shadow: none;
}
.product-top:hover .overlay-right
{
    opacity: 1;
    margin-left: 5%;
    transition: 0.5s;
}
/*---------Prodcut-bottom---------*/
.product-bottom .fa
{
    color: gold;
    font-size: 20px;
}
.product-bottom h3
{
    font-size: 20px;
    font-weight: bold;
}
.product-bottom h5
{
    font-size: 15px;
    padding-bottom: 10px;
}
/*------------Website-features------------*/
.website-features
{
    margin: 60px 0;
}
.website-features img
{
    width: 50%;
}
.feature-text
{
    margin-top: 10px;
    float: right;
    width: 80%;
    padding-left: 20px;
}
.feature-box
{
    padding-top: 20px;
}
/*------------Footer-------------*/
.footer
{
    margin-top: 50px;
    background: #000;
    color: #fff;
}
.footer h1
{
    font-size: 15px;
    margin: 25px 0;
}
.copyright
{
    margin-bottom: -80px;
    text-align: center;
    font-size: 15px;
    padding-bottom: 20px;
}
.fa-heart-o
{
    color: red;
    font-size: 15px;
}
.footer hr
{
    margin-top: 10px;
    background-color: #ccc;
}
.footer-image igm
{
    width: 150px; 
}
.footer .row .fa
{
    padding-right: 20px;
    font-size: 15px;
}
/*------------Single-Product--------------*/
.prodcut-slider
{
    margin-top: 70px;
}
.new-arrival
{
    background: green;
    width: 50px;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    margin-top: 20px;
}
.col-md-7 h2
{
    color: #555;

}
.single-product .fa
{
    color: aqua;
}
.single-product .price
{
    color: aqua;
    font-size: 26px;
    font-weight: bold;
    padding-top: 20px;
}
.single-product input
{
    border: 1px solid #ccc;
    font-weight: bold;
    height: 33px;
    text-align: center;
    width: 30px;
}
.single-product .btn-primary
{
    background: aqua;
    color: #fff;
    font-size: 15px;
    margin-left: 20px;
    border: none;
    box-shadow: none;
}
/*--------------Product-description------------*/
.product-description h6
{
    margin-top: 50px;
    color: aqua;
}
.product-description p
{
    margin-top: 30px; 
}
.product-description hr
{
    margin-bottom: 50px;
}
.register 
{
width: 500px;
padding: 16px;
margin: 0 auto;
background-color: white;
}
input[type=text], input[type=password]
{
width: 100%;
padding: 15px;
display: inline-block;
border: none;
background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus 
{
background-color: #ddd;
outline: none;
}
hr 
{
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
.submit
{
background-color: #0900bd;
color: white;
padding: 15px 18px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
.submit:hover
{
opacity: 1;
}
.login
{
background-color: #ffffff;
text-align: center;
}
<style type="text/css">.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
vertical-align: middle;
}
 
@media screen and (max-width: 600px) { 
table#cart tbody td .form-control { 
width:20%; 
display: inline !important;
} 
 
.actions .btn { 
width:36%; 
margin:1.5em 0;
} 
 
.actions .btn-info { 
float:left;
} 
 
.actions .btn-danger { 
float:right;
} 
 
table#cart thead {
display: none;
} 
 
table#cart tbody td {
display: block;
padding: .6rem;
min-width:320px;
} 
 
table#cart tbody tr td:first-child {
background: #333;
color: #fff;
} 
 
table#cart tbody td:before { 
content: attr(data-th);
font-weight: bold; 
display: inline-block;
width: 8rem;
} 
 
table#cart tfoot td {
display:block;
} 
table#cart tfoot td .btn {
display:block;
}
}</style>

