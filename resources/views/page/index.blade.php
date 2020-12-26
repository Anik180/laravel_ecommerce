@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style type="text/css">
    @charset "utf-8";


@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

/*********************************
2. Body and some general stuff
*********************************/

*
{
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
body
{
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #FFFFFF;
    color: #000000;
}
div
{
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
ul
{
    list-style: none;
    margin-bottom: 0px;
}
p
{
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    line-height: 1.7;
    font-weight: 400;
    color: #828282;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a
{
    display: inline;
    position: relative;
    color: inherit;
    border-bottom: solid 1px #ffa07f;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
a, a:hover, a:visited, a:active, a:link
{
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a:active
{
    position: relative;
    color: #FF6347;
}
p a:hover
{
    color: #FFFFFF;
    background: #ffa07f;
}
p a:hover::after
{
    opacity: 0.2;
}
::selection
{
    
}
p::selection
{
    
}
h1{font-size: 48px;}
h2{font-size: 36px;}
h3{font-size: 24px;}
h4{font-size: 18px;}
h5{font-size: 14px;}
h1, h2, h3, h4, h5, h6
{
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
    text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
h1::selection, 
h2::selection, 
h3::selection, 
h4::selection, 
h5::selection, 
h6::selection
{
    
}
.form-control
{
    color: #db5246;
}
section
{
    display: block;
    position: relative;
    box-sizing: border-box;
}
.clear
{
    clear: both;
}
.clearfix::before, .clearfix::after
{
    content: "";
    display: table;
}
.clearfix::after
{
    clear: both;
}
.clearfix
{
    zoom: 1;
}
.float_left
{
    float: left;
}
.float_right
{
    float: right;
}
.trans_200
{
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.trans_300
{
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}
.trans_400
{
    -webkit-transition: all 400ms ease;
    -moz-transition: all 400ms ease;
    -ms-transition: all 400ms ease;
    -o-transition: all 400ms ease;
    transition: all 400ms ease;
}
.trans_500
{
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}
.fill_height
{
    height: 100%;
}
.super_container
{
    width: 100%;
    overflow: hidden;
}
.prlx_parent
{
    overflow: hidden;
}
.prlx
{
    height: 130% !important;
}
.nopadding
{
    padding: 0px !important;
}
.button
{
    display: inline-block;
    background: #0e8ce4;
    border-radius: 5px;
    height: 48px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.button a
{
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px;
}
.button:hover
{
    opacity: 0.8;
}

/*********************************
3. Header
*********************************/

.header
{
    position: relative;
    width: 100%;
    z-index: 10;
}

/*********************************
3.1 Top Bar
*********************************/

.top_bar
{
    width: 100%;
    height: 56px;
    background: #fafafa;
    border-bottom: solid 1px rgba(0,0,0,0.05);
    z-index: 2;
}
.header.scrolled .top_bar
{
    display: none;
}
.top_bar_contact
{
    display: inline-block;
}
.top_bar_contact_item
{
    font-size: 16px;
    font-weight: 300;
    line-height: 56px;
    margin-right: 40px;
}
.top_bar_contact_item:not(:first-child)
{
    margin-right: 0px;
}
.top_bar_contact_item a
{
    font-size: 16px;
    font-weight: 300;
    line-height: 56px;
    color: #000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.top_bar_contact_item a:hover
{
    color: #8a8a8a;
}
.top_bar_contact_item:last-child
{
    margin-right: 0px;
}
.top_bar_icon
{
    display: inline-block;
    margin-right: 14px;
    -webkit-transform: translateY(-2px);
    -moz-transform: translateY(-2px);
    -ms-transform: translateY(-2px);
    -o-transform: translateY(-2px);
    transform: translateY(-2px);
}
.top_bar_menu
{
    display: inline-block;
}

.top_bar_dropdown li
{
    padding-left: 13px;
    padding-right: 13px;
}
.standard_dropdown li
{
    display: inline-block;
    position: relative;
    height: 56px;
}
.standard_dropdown li li
{
    display: block;
    width: 100%;
}
.standard_dropdown li li a
{
    display: block;
    width: 100%;
    border-bottom: solid 1px #f2f2f2;
    font-size: 16px;
}
.standard_dropdown li:last-child a
{
    border-bottom: none;
}
.standard_dropdown li.hassubs > a i
{
    display: inline-block;
    margin-left: 5px;
}
.standard_dropdown li a
{
    display: block;
    position: relative;
    font-size: 16px;
    font-weight: 300;
    color: #000000;
    line-height: 56px;
    white-space: nowrap;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.standard_dropdown li a:hover
{
    color: #0e8ce4;
}
.standard_dropdown li a i
{
    display: none;
    -webkit-transform: translateY(-1px);
    -moz-transform: translateY(-1px);
    -ms-transform: translateY(-1px);
    -o-transform: translateY(-1px);
    transform: translateY(-1px);
    font-size: 12px;
}
.standard_dropdown li ul
{
    display: block;
    position: absolute;
    top: 120%;
    left: 0;
    width: auto;
    visibility: hidden;
    opacity: 0;
    background: #FFFFFF;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    transition: all 0.3s ease;
    z-index: 1;
}
.standard_dropdown li:hover > ul
{
    top: 100%;
    visibility: visible;
    opacity: 1;
}
.standard_dropdown ul ul
{
    left: 100%;
    top: 0 !important;
}
.top_bar_user
{
    display: inline-block;
    margin-left: 35px;
}
.user_icon
{
    display: inline-block;
    margin-right: 7px;
    -webkit-transform: translateY(-2px);
    -moz-transform: translateY(-2px);
    -ms-transform: translateY(-2px);
    -o-transform: translateY(-2px);
    transform: translateY(-2px);
    width: 15px;
}
.user_icon img
{
    width: 100%;
}
.top_bar_user div
{
    display: inline-block;
}
.top_bar_user div:nth-child(2)
{
    margin-right: 21px;
}
.top_bar_user div:nth-child(2)::after
{
    display: block;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: -13px;
    width: 1px;
    height: 17px;
    background: rgba(0,0,0,0.1);
    content: '';
}
.top_bar_user a
{
    font-size: 16px;
    font-weight: 300;
    line-height: 56px;
    color: #000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.top_bar_user a:hover
{
    color: #8a8a8a;
}

/*********************************
3.2 Header Main
*********************************/

.header_main
{
    z-index: 1;
}
.header.scrolled .header_main
{
    display: none;
}
.header_main_item
{
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}
.logo_container
{
    height: 175px;
}
.logo
{
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}
.logo a
{
    font-size: 36px;
    font-weight: 500;
    color: #0e8ce4;
}
.header_search
{
    height: 175px;
}
.header_search_content
{
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
}
.header_search_form_container
{
    width: 100%;
    height: 50px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
}
.header_search_form
{
    width: 100%;
    height: 100%;
}
.header_search_input
{
    display: block;
    position: relative;
    width: calc((100% - 50px) * 0.601);
    height: 100%;
    line-height: 50px;
    border: none !important;
    outline: none !important;
    padding-left: 26px;
    color: #7f7f7f;
    float: left;
}
.header_search_input::-webkit-input-placeholder
{
    font-size: 16px !important;
    font-weight: 300;
    line-height: 50px;
    color: #a3a3a3 !important;
}
.header_search_input:-moz-placeholder /* older Firefox*/
{
    font-size: 16px !important;
    font-weight: 300;
    line-height: 50px;
    color: #a3a3a3 !important;
}
.header_search_input::-moz-placeholder /* Firefox 19+ */ 
{
    font-size: 16px !important;
    font-weight: 300;
    line-height: 50px;
    color: #a3a3a3 !important;
} 
.header_search_input:-ms-input-placeholder
{ 
    font-size: 16px !important;
    font-weight: 300;
    line-height: 50px;
    color: #a3a3a3 !important;
}
.header_search_input::input-placeholder
{
    font-size: 16px !important;
    font-weight: 300;
    line-height: 50px;
    color: #a3a3a3 !important;
}
.custom_dropdown
{
    width: calc((100% - 50px) * 0.399);
    height: 50px;
    float: left;
    padding-left: 26px;
}
.custom_dropdown::before
{
    display: block;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0;
    width: 1px;
    height: 28px;
    background: #e5e5e5;
    content: '';
}
.custom_dropdown_list i
{
    display: inline-block;
    color: #a3a3a3;
    font-size: 10px;
    margin-left: 3px;
    -webkit-transform: translateY(-1px);
    -moz-transform: translateY(-1px);
    -ms-transform: translateY(-1px);
    -o-transform: translateY(-1px);
    transform: translateY(-1px);
}
.custom_dropdown_placeholder
{
    display: inline-block;
    font-size: 16px;
    font-weight: 300;
    color: #a3a3a3;
    line-height: 48px;
    cursor: pointer;
}
.custom_dropdown_placeholder i
{
    
}
.custom_list
{
    text-align: left;
    position: absolute;
    padding: 0;
    top: 75px;
    left: -15px;
    visibility: hidden;
    opacity: 0;
    box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
    -webkit-transition: opacity 0.2s ease;
    -moz-transition: opacity 0.2s ease;
    -ms-transition: opacity 0.2s ease;
    -o-transition: opacity 0.2s ease;
    transition: all 0.2s ease;
}
.custom_list.active
{
    visibility: visible;
    opacity: 1;
    top: 50px;
    box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    transition: all 0.3s ease;
}
.custom_list li
{
    height: 35px;
    padding-left: 15px;
    padding-right: 15px;
    background: #FFFFFF;
}
.custom_list li a
{
    display: block;
    color: #a3a3a3;
    line-height: 35px;
    border-bottom: solid 1px #ededed;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.custom_list li a:hover
{
    color: #0e8ce4;
}
select
{
    display: inline;
    border: 0;
    width: auto;
    margin-left: 10px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    border-bottom: 2px solid #555;
    color: #7b00ff;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
select:hover
{
    cursor: pointer;
}
select option
{
    border: 0;
    border-bottom: 1px solid #555;
    padding: 10px;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.header_search_button
{
    position: absolute;
    top: 0;
    right: 0;
    width: 50px;
    height: 100%;
    background: #0e8ce4;
    border: none;
    outline: none;
    cursor: pointer;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.wishlist_cart
{
    height: 175px;
}
.wishlist
{
    margin-right: 50px;
}
.wishlist_icon img
{
    width: 100%;
}
.wishlist_content
{
    margin-left: 14px;
}
.wishlist_text a
{
    font-size: 18px;
    font-weight: 400;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.wishlist_text a:hover
{
    color: #0e8ce4;
}
.wishlist_count
{
    margin-top: -2px;
    color: #a3a3a3;
    font-size: 14px;
}
.cart_count
{
    position: absolute;
    bottom: -1px;
    right: -14px;
    width: 23px;
    height: 23px;
    background: #0e8ce4;
    border-radius: 50%;
    text-align: center;
}
.cart_count span
{
    display: block;
    line-height: 23px;
    font-size: 12px;
    color: #FFFFFF;
    -webkit-transform: translateY(1px);
    -moz-transform: translateY(1px);
    -ms-transform: translateY(1px);
    -o-transform: translateY(1px);
    transform: translateY(1px);
}
.cart_icon img
{
    width: 100%;
}
.cart_content
{
    margin-left: 28px;
}
.cart_text a
{
    font-size: 18px;
    font-weight: 400;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.cart_text a:hover
{
    color: #0e8ce4;
}
.cart_price
{
    font-size: 14px;
    color: #a3a3a3;
    margin-top: -2px;
}

/*********************************
3.3 Main Navigation
*********************************/

.main_nav
{
    width: 100%;
    border-top: solid 1px #f2f2f2;
    box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
    background: #FFFFFF;
}
.header.scrolled .main_nav
{
    position: fixed;
    top: 0;
    left: 0;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.main_nav_content
{
    width: 100%;
    height: 60px;
}
.cat_menu_container
{
    width: 293px;
    height: 100%;
    background: #0e8ce4;
    padding-left: 35px;
    cursor: pointer;
    z-index: 1;
}
.cat_menu_title
{
    height: 100%;
}
.cat_burger
{
    width: 18px;
    height: 14px;
}
.cat_burger span
{
    display: block;
    position: absolute;
    left: 0;
    width: 100%;
    height: 2px;
    background: #FFFFFF;
}
.cat_burger span:nth-child(2)
{
    top: 6px;
}
.cat_burger span:nth-child(3)
{
    top: 12px;
}
.cat_menu_text
{
    font-size: 18px;
    font-weight: 400;
    color: #FFFFFF;
    text-transform: uppercase;
    margin-left: 20px;
}
.cat_menu_container ul
{
    display: block;
    position: absolute;
    top: 100%;
    left: 0;
    /*visibility: hidden;
    opacity: 0;*/
    min-width: 100%;
    background: #FFFFFF;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    transition: all 0.3s ease;
}
.cat_menu_container > ul
{
    padding-top: 13px;
}
.cat_menu_container:hover .cat_menu
{
    visibility: visible;
    opacity: 1;
}
.cat_menu li
{
    display: block;
    position: relative;
    width: auto;
    height: 46px;
    border-bottom: solid 1px #f2f2f2;
    padding-left: 35px;
    padding-right: 30px;
    white-space: nowrap;
}
.cat_menu li.hassubs > a i
{
    display: block;
}
.cat_menu li a
{
    display: block;
    position: relative;
    font-size: 16px;
    font-weight: 300;
    color: #000000;
    line-height: 46px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.cat_menu li a:hover
{
    color: #0e8ce4;
}
.cat_menu li a i
{
    display: none;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 0;
    font-size: 12px;
}
.cat_menu li ul
{
    display: block;
    position: absolute;
    top: 35px;
    left: 100%;
    visibility: hidden;
    opacity: 0;
    width: 100%;
    background: #FFFFFF;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
}
.cat_menu li:hover > ul
{
    top: 0;
    visibility: visible;
    opacity: 1;
}
.main_nav_dropdown li
{
    margin-right: 35px;
}
.main_nav_dropdown li:last-child
{
    margin-right: 0px;
}
.main_nav_dropdown li a
{
    font-size: 18px;
    font-weight: 400;
    color: #a19a9a;
    line-height: 60px;
}
.main_nav_dropdown li li
{
    padding-left: 15px;
    padding-right: 15px;
    margin-right: 0px;
}
.menu_trigger_container
{
    display: none;
    width: auto;
    height: 100%;
    padding-right: 25px;
    padding-left: 25px;
    cursor: pointer;
}
.menu_trigger
{
    height: 100%;
}
.menu_burger_inner
{
    display: inline-block;
}
.menu_trigger_text
{
    display: inline-block;
    font-size: 18px;
    font-weight: 400;
    color: #FFFFFF;
    text-transform: uppercase;
    margin-right: 16px;
}

/*********************************
3.4 Page Menu
*********************************/

.page_menu
{
    margin-top: 15px;
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
}
.page_menu_content
{
    height: 0px;
    background: #0e8ce4;
    padding-left: 15px;
    padding-right: 15px;
    overflow: hidden;
}
.page_menu_search
{
    display: none;
    width: 100%;
    margin-top: 30px;
    margin-bottom: 30px;
}
.page_menu_search_input
{
    width: 100%;
    height: 40px;
    background: #FFFFFF;
    border: none;
    outline: none;
    padding-left: 25px;
}
.page_menu_item
{
    display: block;
    position: relative;
    border-bottom: solid 1px rgba(255,255,255,0.1);
    vertical-align: middle;
}
.page_menu_item > a
{
    display: block;
    color: #FFFFFF;
    font-weight: 500;
    height: 50px;
    line-height: 50px;
    font-size: 14px;
    text-transform: uppercase;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.page_menu_item > a:hover
{
    color: #b5aec4;
}
.page_menu_item a i
{
    display: none;
    margin-left: 8px;
}
.page_menu_item.has-children > a > i
{
    display: inline-block;
}
.page_menu_selection
{
    margin: 0;
    width: 100%;
    height: 0px;
    overflow: hidden;
    z-index: 1;
}
.page_menu_selection li
{
    padding-left: 10px;
    padding-right: 10px;
    line-height: 50px;
}
.page_menu_selection li a
{
    display: block;
    color: #FFFFFF;
    border-bottom: solid 1px rgba(255,255,255,0.1);
    font-size: 14px;
    text-transform: uppercase;
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    transition: all 0.3s ease;
}
.page_menu_selection li a:hover
{
    color: #b5aec4;
}
.page_menu_selection li:last-child a
{
    border-bottom: none;
}
.menu_contact_item
{
    display: inline-block;
    font-size: 12px;
    font-weight: 300;
    line-height: 56px;
    margin-right: 40px;
    color: #FFFFFF;
}
.menu_contact_item:not(:first-child)
{
    margin-right: 0px;
}
.menu_contact_item a
{
    font-size: 12px;
    font-weight: 300;
    line-height: 56px;
    color: #FFFFFF;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.menu_contact_item a:hover
{
    color: #8a8a8a;
}
.menu_contact_item:last-child
{
    margin-right: 0px;
}
.menu_contact_icon
{
    display: inline-block;
    margin-right: 14px;
    -webkit-transform: translateY(-2px);
    -moz-transform: translateY(-2px);
    -ms-transform: translateY(-2px);
    -o-transform: translateY(-2px);
    transform: translateY(-2px);
}

/*********************************
4. Banner
*********************************/

.banner
{
    width: 100%;
    padding-top: 68px;
    padding-bottom: 83px;
    overflow: hidden;
}
.banner_background
{
    position: absolute;
    top: 0;
    left: 0;
    width: 1920px;
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
.banner_content
{
    z-index: 1;
}
.banner_text
{
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    line-height: 1.166;
    color: #7599b2;
    text-transform: uppercase;
    letter-spacing: 0.038em;
}
.banner_price
{

}
.banner_price
{
    font-size: 30px;
    color: #df3b3b;
    margin-top: 87px;
}
.banner_price span
{
    display: inline-block;
    position: relative;
    color: #7e8285;
    margin-right: 14px;
}
.banner_price span::after
{
    display: block;
    position: absolute;
    top: 21px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #8d8d8d;
    content: '';
}
.banner_product_name
{
    font-size: 18px;
    font-weight: 400;
    color: #000000;
    margin-top: 8px;
}
.banner_button
{
    margin-top: 42px;
}
.banner_product_image
{
    position: absolute;
    top: -5px;
    right: -52px;
    z-index: 0;
}

/*********************************
5. Characteristics
*********************************/

.characteristics
{
    padding-top: 70px;
    padding-bottom: 70px;
}
.char_item
{
    width: 100%;
    height: 100px;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border: solid 1px #e8e8e8;
    padding-left: 36px;
}
.char_icon
{
    margin-right: 24px;
}
.char_content
{
    transform: translate(-1px, 3px);
}
.char_title
{
    font-size: 14px;
    font-weight: 500;
    color: #000000;
}
.char_subtitle
{
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.5);
    margin-top: 3px;
}

/*********************************
6. Deals of the week
*********************************/

.deals_featured
{
    width: 100%;
}

/*********************************
6.1 Deals
*********************************/

.deals
{
    width: 36%;
    margin-right: 7%;
    padding-top: 85px;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 35px;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
    border-radius: 5px;
}
.deals_title
{
    position: absolute;
    top: 27px;
    left: 40px;
    font-size: 18px;
    font-weight: 500;
    color: #000000;
}
.deals_slider_container
{
    width: 100%;
}
.deals_item
{
    width: 100% !important;
}
.deals_image
{
    width: 100%;
}
.deals_image img
{
    width: 100%;
}
.deals_content
{
    margin-top: 33px;
}
.deals_item_category a
{
    font-size: 14px;
    font-weight: 400;
    color: rgba(0,0,0,0.5);
}
.deals_item_price_a
{
    font-size: 14px;
    font-weight: 400;
    color: rgba(0,0,0,0.6);
}
.deals_item_name
{
    font-size: 24px;
    font-weight: 400;
    color: #000000;
}
.deals_item_price
{
    font-size: 24px;
    font-weight: 500;
    color: #df3b3b;
}
.available
{
    margin-top: 19px;
}
.available_title
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
    font-weight: 400;
}
.available_title span
{
    font-weight: 700;
}
.sold_title
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
    font-weight: 400;
}
.sold_title span
{
    font-weight: 700;
}
.available_bar
{
    width: 100%;
    height: 10px;
    background: #e8e8e8;
    border-radius: 5px;
    overflow: hidden;
    margin-top: 5px;
}
.available_bar span
{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    border-radius: 5px;
    background: #0e8ce4;
}
.deals_timer
{
    margin-top: 30px;
}
.deals_timer_title
{
    font-size: 14px;
    font-weight: 500;
    color: #000000;
}
.deals_timer_subtitle
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
}
.deals_timer_content
{
    padding-bottom: 17px;
}
.deals_timer_box
{
    width: 173px;
    padding-left: 3px;
    padding-right: 3px;
    border: solid 1px #cccccc;
    border-radius: 5px;
    margin-right: 1px;
}
.deals_timer_unit
{
    width: 33.33333333%;
    font-size: 24px;
    font-weight: 500;
    color: #000000;
    padding-left: 12px;
    padding-right: 12px;
    padding-top: 3px;
    padding-bottom: 2px;
    float: left;
}
.deals_timer_unit:first-child::after,
.deals_timer_unit:nth-child(2)::after
{
    display: block;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 0px;
    width: 1px;
    height: 25px;
    background: #e5e5e5;
    content: '';
}
.deals_timer_unit span
{
    position: absolute;
    display: block;
    bottom: -22px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    font-size: 8px;
    color: rgba(0,0,0,0.5);
    text-transform: uppercase;
}
.deals_slider_nav_container
{
    position: absolute;
    top: 20px;
    right: 40px;
}
.deals_slider_nav
{
    display: inline-block;
    cursor: pointer;
}
.deals_slider_nav i
{
    font-size: 18px;
    padding: 10px;
    color: #666666;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.deals_slider_nav:hover i
{
    color: #000000;
}
.deals_slider_nav:active i
{
    color: #df3b3b;
}
.deals_slider_prev
{
    margin-right: 4px;
}

/*********************************
6.2 Featured
*********************************/

.featured
{
    width: 57%;
    -webkit-transform: translateY(60px);
    -moz-transform: translateY(60px);
    -ms-transform: translateY(60px);
    -o-transform: translateY(60px);
    transform: translateY(60px);
}
.tabbed_container
{
    width: 100%;
}
.tabs
{
    width: 100%;
}
.tabs ul li
{
    font-size: 18px;
    font-weight: 500;
    color: rgba(0,0,0,0.5);
    float: left;
    margin-right: 53px;
    cursor: pointer;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.tabs ul li:hover
{
    color: rgba(0,0,0,0.8);
}
.tabs ul li:last-child
{
    margin-right: 0px;
}
.tabs ul li.active
{
    color: rgba(0,0,0,0.8);
}
.tabs_line
{
    width: 100%;
    height: 1px;
    background: #dadada;
    margin-top: 12px;
}
.tabs.tabs-right .tabs_line
{
    margin-top: 39px;
}
.tabs_line span
{
    position: absolute;
    top: -1px;
    left: 0;
    width: 80px;
    height: 2px;
    background: #0e8ce4;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.tabs.tabs-right ul
{
    float: right;
}
.product_panel
{
    display: none;
    margin-left: -60px;
    margin-right: -60px;
}
.product_panel.active
{
    display: block;
}
.featured_slider
{
    width: 100%;
}
.featured_slider .slick-list
{
    padding-left: 20px;
    padding-right: 20px;
}
.featured_slider .slick-track
{
    padding-bottom: 120px;
}
.featured_slider_item
{
    height: 263px;
    width: 25%;
}
.product_item
{
    position: relative;
    left: -10px;
    width: calc(100% + 20px);
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    background: #FFFFFF;
    cursor: pointer;
    padding-top: 40px;
    z-index: 0;
}
.slick-active .product_item:hover
{
    box-shadow: 0px 5px 25px rgba(0,0,0,0.1);
    z-index: 10;
}
.product_image
{
    width: 100%;
    height: 115px;
}
.product_image img
{
    display: block;
    position: relative;
    max-width: 100%;
}
.product_content
{
    width: 100%;
}
.product_price
{
    font-size: 16px;
    font-weight: 500;
    margin-top: 25px;
}
.product_price.discount
{
    color: #df3b3b;
}
.product_price span
{
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.6);
    margin-left: 10px;
}
.product_name
{
    margin-top: 4px;
    overflow: hidden;
}
.product_name div
{
    width: 100%;
    
}
.product_name div a
{
    font-size: 14px;
    font-weight: 400;
    color: #000000;
    white-space: nowrap;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_name div a:hover
{
    color: #0e8ce4;
}
.product_color
{
    visibility: hidden;
    opacity: 0;
    margin-top: 19px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_extras
{
    width: 100%;
    background: #FFFFFF;
    max-height: 0px;
    overflow: hidden;
    -webkit-transition: max-height 200ms ease;
    -moz-transition: max-height 200ms ease;
    -ms-transition: max-height 200ms ease;
    -o-transition: max-height 200ms ease;
    transition: max-height 200ms ease;
}
.slick-active .product_item:hover .product_extras
{
    max-height: 300px;
}
.slick-active .product_item:hover .product_color,
.slick-active .product_item:hover .product_cart_button
{
    visibility: visible;
    opacity: 1;
}
.product_color input
{
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    display: inline-block;
    position: relative;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 8px;
}
.product_color input:checked::after
{
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-family: 'FontAwesome';
    content: '\f00c';
    color: #FFFFFF;
}
.product_cart_button
{
    position: relative;
    left: 0px;
    visibility: hidden;
    opacity: 0;
    width: 100%;
    height: 48px;
    background: #0e8ce4;
    border: none;
    outline: none;
    font-size: 18px;
    font-weight: 400;
    color: #FFFFFF;
    cursor: pointer;
    margin-top: 19px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_cart_button:hover
{
    background: rgba(14, 140, 228, 0.8);
}
.featured_slider .slick-dots
{
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 100px;
}
.featured_slider .slick-slide
{
    outline: none;
}
.featured_slider .slick-dots li
{
    display: inline-block;
    width: 15px;
    height: 15px;
    border: none;
    outline: none;
    padding: 0px;
    margin: 0px;
    border-radius: 50%;
    content: '';
    background: #e8e8e8;
    margin-right: 20px;
    cursor: pointer;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.featured_slider .slick-dots li:hover
{
    background: #0e8ce4;
}
.featured_slider .slick-dots li.slick-active
{
    background: #0e8ce4;
}
.featured_slider .slick-dots li:last-child
{
    margin-right: 0px;
}
.featured_slider .slick-dots li button
{
    display: none;
}
.featured_slider_dots_cover
{
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 100px;
    width: 100px;
    height: 30px;
    background: #FFFFFF;
    z-index: 1;
    display: none;
}
.product_fav
{
    position: absolute;
    top: 33px;
    right: 12px;
    width: 36px;
    height: 36px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border-radius: 50%;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_fav:hover
{
    box-shadow: 0px 1px 5px rgba(0,0,0,0.3);
}
.product_item:hover .product_fav
{
    top: 18px;
}
.product_fav i
{
    display: block;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    color: #cccccc;
    line-height: 36px;
    pointer-events: none;
    z-index: 0;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_fav.active i
{
    color: red;
}
.product_item:hover .product_fav
{
    visibility: visible;
    opacity: 1;
}
.product_marks
{
    display: none;
    position: absolute;
    top: 33px;
    left: 30px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.slick-active .product_marks
{
    display: block;
}
.product_item:hover .product_marks
{
    top: 18px;
    left: 18px;
}
.product_mark
{
    display: inline-block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    text-align: center;
    line-height: 36px;
    font-size: 12px;
}
.product_new
{
    display: none;
    background: #0e8ce4;
    visibility: hidden;
    opacity: 0;
}
.product_discount
{
    display: none;
    background: #df3b3b;
    visibility: hidden;
    opacity: 0;
}
.product_item.is_new .product_new,
.product_item.discount .product_discount
{
    display: inline-block;
    visibility: visible;
    opacity: 1; 
}

/*********************************
7. Popular Categories
*********************************/

.popular_categories
{
    padding-top: 88px;
    padding-bottom: 90px;
}
.popular_categories_title
{
    font-size: 30px;
    font-weight: 500;
    color: #000000;
    line-height: 1.2;
}
.popular_categories_slider_nav
{
    margin-top: 27px;
}
.popular_categories_nav
{
    display: inline-block;
    width: 36px;
    height: 36px;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
    margin-right: 16px;
}
.popular_categories_nav:last-child
{
    margin-right: 0px;
}
.popular_categories_nav i
{
    line-height: 36px;
    color: #e5e5e5;
    font-size: 18px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.popular_categories_nav:hover i
{
    color: #474747;
}
.popular_categories_link
{
    margin-top: 40px;
}
.popular_categories_link a
{
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #0e8ce4;
}
.popular_category
{
    height: 216px;
    padding-left: 40px;
    padding-right: 40px;
}
.popular_categories_slider .owl-item:nth-child(even)
{
    background: #eff6fa;
}
.popular_category_image img
{
    max-height: 100%;
    max-width: 100%;
}
.popular_category_text
{
    margin-top: 20px;
    line-height: 1.714;
    text-align: center;
}

/*********************************
8. Banner 2
*********************************/

.banner_2
{
    width: 100%;
}
.banner_2_background
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
.banner_2_item
{
    height: 580px;
}
.banner_2_content
{
    padding-top: 145px;
}
.banner_2_image_container
{
    width: 100%;
    height: 100%;
}
.banner_2_image
{
    min-width: 100%;
    width: calc(44.8vw);
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0;
}
.banner_2_image img
{
    width: 100%;
}
.banner_2_category
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
}
.banner_2_title
{
    font-size: 30px;
    font-weight: 500;
    color: #000000;
    margin-top: 11px;
}
.banner_2_text
{
    font-size: 16px;
    font-weight: 300;
    color: #828282;
    line-height: 1.5;
    margin-top: 9px;
}
.banner_2_rating
{
    margin-top: 18px;
}
.rating_r i::before
{
    font-family: 'FontAwesome';
    content: "\f006";
    font-style: normal;
    font-size: 19px;
    margin-right: 4px;
    color: #f5e211;
}
.rating_r_1 i:first-child::before{content: "\f005";}
.rating_r_2 i:first-child::before{content: "\f005";}
.rating_r_2 i:nth-child(2)::before{content: "\f005";}
.rating_r_3 i:first-child::before{content: "\f005";}
.rating_r_3 i:nth-child(2)::before{content: "\f005";}
.rating_r_3 i:nth-child(3)::before{content: "\f005";}
.rating_r_4 i:first-child::before{content: "\f005";}
.rating_r_4 i:nth-child(2)::before{content: "\f005";}
.rating_r_4 i:nth-child(3)::before{content: "\f005";}
.rating_r_4 i:nth-child(4)::before{content: "\f005";}
.rating_r_5 i:first-child::before{content: "\f005";}
.rating_r_5 i:nth-child(2)::before{content: "\f005";}
.rating_r_5 i:nth-child(3)::before{content: "\f005";}
.rating_r_5 i:nth-child(4)::before{content: "\f005";}
.rating_r_5 i:nth-child(5)::before{content: "\f005";}
.banner_2_button
{
    margin-top: 43px;
}
.banner_2_dots
{
    position: absolute;
    bottom: 40px;
    left: calc((100% - 1170px) / 2 + 15px);
    z-index: 1000000;
}
.banner_2_dots .owl-dot
{
    display: inline-block;
    width: 15px;
    height: 15px;
    background: #FFFFFF;
    border-radius: 50%;
    margin-right: 16px;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    cursor: pointer;
}
.banner_2_dots .owl-dot:last-child
{
    margin-right: 0px;
}
.banner_2_dots .owl-dot.active
{
    background: #0e8ce4;
    box-shadow: none;
}

/*********************************
9. Hot New Arrivals
*********************************/

.new_arrivals
{
    width: 100%;
    padding-top: 96px;
    padding-bottom: 96px;
}
.new_arrivals_title
{
    position: absolute;
    left: 0;
    top: -7px;
    font-size: 24px;
    font-weight: 500;
    margin-bottom: -29px;
}
.arrivals_slider
{
    width: 100%;
}
.arrivals_slider .slick-list
{
    padding-left: 20px;
    padding-right: 20px;
}
.arrivals_slider .slick-track
{
    padding-bottom: 80px;
}
.arrivals_slider_item
{
    visibility: hidden;
    height: 263px;
    width: 25%;
}
.arrivals_slider .slick-active .arrivals_slider_item
{
    visibility: visible;
}
.border_active.active
{
    display: block;
}
.border_active
{
    display: none;
    position: absolute;
    top: 40px;
    right: 0;
    width: 1px;
    height: 183px;
    background: #e5e5e5;
    content: '';
    z-index: 1;
}
.arrivals_slider .slick-dots
{
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 50px;
}
.arrivals_slider .slick-slide
{
    outline: none;
}
.arrivals_slider .slick-dots li
{
    display: inline-block;
    width: 15px;
    height: 15px;
    border: none;
    outline: none;
    padding: 0px;
    margin: 0px;
    border-radius: 50%;
    content: '';
    background: #e8e8e8;
    margin-right: 20px;
    cursor: pointer;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.arrivals_slider .slick-dots li:hover
{
    background: #0e8ce4;
}
.arrivals_slider .slick-dots li.slick-active
{
    background: #0e8ce4;
}
.arrivals_slider .slick-dots li:last-child
{
    margin-right: 0px;
}
.arrivals_slider .slick-dots li button
{
    display: none;
}
.arrivals_slider_dots_cover
{
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 100px;
    width: 100px;
    height: 30px;
    background: #FFFFFF;
    z-index: 1;
    display: none;
}
.arrivals_single
{
    width: 100%;
    padding-top: 73px;
}
.arrivals_single > div
{
    width: 212px;
    float: right;
}
.arrivals_single_image
{
    width: 100%;
}
.arrivals_single_image img
{
    max-width: 100%;
}
.arrivals_single_content
{
    width: 100%;
}
.arrivals_single_button
{
    position: relative;
    left: 0px;
    width: 100%;
    height: 48px;
    background: #0e8ce4;
    border: none;
    outline: none;
    font-size: 18px;
    font-weight: 400;
    color: #FFFFFF;
    cursor: pointer;
    margin-top: 19px;
    border-radius: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.arrivals_single_button:hover
{
    background: rgba(14, 140, 228, 0.8);
}
.arrivals_single_category
{
    margin-top: 27px;
}
.arrivals_single_category a
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.arrivals_single_category a:hover
{
    color: #0e8ce4;
}
.arrivals_single_name_container
{
    width: 100%;
}
.arrivals_single_name
{
    margin-top: 2px;
    float: left;
}
.arrivals_single_name a
{
    font-size: 16px;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.arrivals_single_name a:hover
{
    color: #0e8ce4;
}
.arrivals_single_price
{
    font-size: 16px;
    font-weight: 500;
    float: right;
}
.arrivals_single_rating
{
    margin-top: 9px;
}
.arrivals_single_marks 
{
    display: block;
    position: absolute;
    top: -15px;
    left: 0px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.arrivals_single_marks .product_mark
{
    display: inline-block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    text-align: center;
    line-height: 36px;
    font-size: 12px;
}
.arrivals_single_marks .product_new
{
    display: block;
    background: #0e8ce4;
    visibility: visible;
    opacity: 1;
}
.arrivals_single_marks .product_discount
{
    display: block;
    background: #df3b3b;
    visibility: visible;
    opacity: 1;
}
.arrivals_single .product_fav
{
    position: absolute;
    top: -15px;
    right: 0px;
    width: 36px;
    height: 36px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border-radius: 50%;
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_fav:hover
{
    box-shadow: 0px 1px 5px rgba(0,0,0,0.3);
}
.product_fav i
{
    display: block;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    color: #cccccc;
    line-height: 36px;
    pointer-events: none;
    z-index: 0;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.product_fav.active i
{
    color: red;
}

/*********************************
10. Hot Best Sellers
*********************************/

.best_sellers
{
    padding-top: 56px;
    background: #eff6fa;
    padding-bottom: 50px;
    margin-top: -77px;
}
.bestsellers_panel
{
    display: none;
    width: 100%;
    padding-top: 50px;
}
.bestsellers_panel.active
{
    display: block;
    padding-top: 50px;
}
.bestsellers_slider
{
    width: calc(100% + 30px);
    left: -15px;
    padding-bottom: 67px;
}
.bestsellers_item
{
    background: #FFFFFF;
    border-radius: 8px;
    padding: 25px;
}
.bestsellers_slider .slick-slide > div:first-child
{
    margin-bottom: 30px;
}
.bestsellers_slider .slick-slide
{
    outline: none;
}
.bestsellers_slider .slick-slide
{
    margin: 0 15px;
}
.bestsellers_image
{
    width: 115px;
    height: 115px;
}
.bestsellers_image img
{
    max-width: 100%;
    max-height: 100%;
}
.bestsellers_content
{
    padding-left: 25px;
}
.bestsellers_category a
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bestsellers_category a:hover
{
    color: #0e8ce4;
}
.bestsellers_name
{
    margin-top: 2px;
}
.bestsellers_name a
{
    font-size: 16px;
    font-weight: 400;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bestsellers_name a:hover
{
    color: #0e8ce4;
}
.bestsellers_rating
{
    margin-top: 9px;
}
.bestsellers_rating i::before
{
    font-size: 13px;
    margin-right: 8px;
}
.bestsellers_price
{
    font-size: 16px;
    font-weight: 500;
    margin-top: 10px;
}
.bestsellers_item.discount .bestsellers_price
{
    color: #df3b3b;
}
.bestsellers_price span
{
    position: relative;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.6);
    margin-left: 9px;
}
.bestsellers_price span::after
{
    display: block;
    position: absolute;
    left: -2px;
    top: 6px;
    width: calc(100% + 4px);
    height: 1px;
    background: #8d8d8d;
    z-index: 1;
    content: '';
}
.bestsellers_fav
{
    display: none;
    position: absolute;
    top: 30px;
    right: 29px;
}
.bestsellers_fav.active
{
    display: block;
}
.bestsellers_fav i
{
    font-size: 13px;
    color: #df3b3b;
}
.bestsellers_marks
{
    position: absolute;
    left: 18px;
    top: 18px;
}
.bestsellers_mark
{
    display: none;
    width: 36px;
    height: 36px;
    font-size: 10px;
    font-weight: 500;
    color: #FFFFFF;
    border-radius: 50%;
    line-height: 36px;
    text-align: center;
}
.bestsellers_discount
{
    background: #df3b3b;
}
.bestsellers_item.discount .bestsellers_discount,
.bestsellers_item.is_new .bestsellers_new
{
    display: block;
}
.bestsellers_new
{
    background: #0e8ce4;
}
.bestsellers_slider .slick-dots
{
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: -5px;
}
.bestsellers_slider .slick-dots li
{
    display: inline-block;
    width: 15px;
    height: 15px;
    border: none;
    outline: none;
    padding: 0px;
    margin: 0px;
    border-radius: 50%;
    content: '';
    background: #e8e8e8;
    margin-right: 20px;
    cursor: pointer;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bestsellers_slider .slick-dots li:hover
{
    background: #0e8ce4;
}
.bestsellers_slider .slick-dots li.slick-active
{
    background: #0e8ce4;
}
.bestsellers_slider .slick-dots li:last-child
{
    margin-right: 0px;
}
.bestsellers_slider .slick-dots li button
{
    display: none;
}

/*********************************
11. Adverts
*********************************/

.adverts
{
    width: 100%;
    padding-top: 80px;
    padding-bottom: 80px;
}
.advert
{
    width: 100%;
    height: 180px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}
.advert_content
{
    padding-left: 30px;
}
.advert_subtitle
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
    margin-bottom: 26px;
}
.advert_title a
{
    font-size: 18px;
    font-weight: 500;
    color: #000000;
}
.advert_title a:hover
{
    color: #0e8ce4;
}
.advert_title_2 a
{
    font-size: 18px;
    font-weight: 500;
    color: #0e8ce4;
}
.advert_title_2 a:hover
{
    opacity: 0.8;
}
.advert_text
{
    color: #828282;
    margin-top: 10px;
}
.advert_image
{
    width: 178px;
    height: 100%;
}
.advert_image img
{
    display: block;
    max-width: 100%;
}

/*********************************
12. Trends
*********************************/

.trends
{
    padding-top: 80px;
    padding-bottom: 80px;
}
.trends_overlay
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(203, 225, 238, 0.3);
}
.trends_background
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
.trends_container
{
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    padding-right: 40px;
}
.trends_title
{
    padding-right: 50px;
}
.trends_text
{
    margin-top: 17px;
}
.trends_text p:last-child
{
    margin-bottom: 0px;
}
.trends_slider_nav
{
    margin-top: 27px;
}
.trends_nav
{
    display: inline-block;
    width: 36px;
    height: 36px;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
    margin-right: 16px;
}
.trends_nav:last-child
{
    margin-right: 0px;
}
.trends_nav i
{
    line-height: 36px;
    color: #e5e5e5;
    font-size: 18px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.trends_nav:hover i
{
    color: #474747;
}
.trends_item
{
    background: #FFFFFF;
    border-radius: 8px;
    padding: 25px;
}
.trends_image
{
    width: 100%;
    height: 212px;
}
.trends_image img
{
    width: auto !important;
    max-width: 100% !important;
}
.trends_category a
{
    font-size: 12px;
    color: rgba(0,0,0,0.5);
}
.trends_category a:hover
{
    color: #0e8ce4;
}
.trends_content
{
    margin-top: 24px;
}
.trends_name
{
    float: left;
}
.trends_name a
{
    font-size: 16px;
    color: #000000;
}
.trends_name a:hover
{
    color: #0e8ce4;
}
.trends_price
{
    font-size: 16px;
    font-weight: 500;
    float: right;
}
.trends_fav
{
    position: absolute;
    top: 18px;
    right: 18px;
    width: 36px;
    height: 36px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    border-radius: 50%;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    cursor: pointer;
}
.trends_fav.active
{
    visibility: visible;
    opacity: 1;
}
.trends_fav:hover
{
    box-shadow: 0px 1px 5px rgba(0,0,0,0.3);
}
.trends_item:hover .trends_fav
{
    visibility: visible;
    opacity: 1;
    top: 18px;
}
.trends_fav i
{
    display: block;
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    color: #cccccc;
    line-height: 36px;
    pointer-events: none;
    z-index: 0;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.trends_fav.active i
{
    color: red;
}
.trends_item:hover .trends_fav
{
    visibility: visible;
    opacity: 1;
}
.trends_marks
{
    position: absolute;
    left: 18px;
    top: 18px;
}
.trends_mark
{
    display: none;
    width: 36px;
    height: 36px;
    font-size: 10px;
    font-weight: 500;
    color: #FFFFFF;
    border-radius: 50%;
    line-height: 36px;
    text-align: center;
}
.trends_discount
{
    background: #df3b3b;
}
.trends_item.discount .trends_discount,
.trends_item.is_new .trends_new
{
    display: block;
}
.trends_new
{
    background: #0e8ce4;
}

/*********************************
13. Latest Reviews
*********************************/

.reviews
{
    padding-top: 96px;
    padding-bottom: 125px;
}
.reviews_title_container
{
    border-bottom: solid 1px #dadada;
}
.reviews_title
{
    font-weight: 500;
    margin-bottom: 14px;
}
.reviews_all
{
    position: absolute;
    right: 0;
    bottom: 14px;
}
.reviews_all a
{
    font-size: 10px;
    color: #0e8ce4;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}
.reviews_all a:hover
{
    opacity: 0.8;
}
.reviews_slider_container
{
    padding-top: 37px;
}
.review
{
    width: 100%;
}
.review_image
{
    width: 115px;
    height: 115px;
}
.review_image img
{
    max-width: 100%;
}
.review_content
{
    padding-left: 30px;
    margin-top: -4px;
}
.review_name
{
    font-size: 16px;
    font-weight: 500;
}
.review_rating_container
{
    margin-top: 1px;
}
.review_rating
{
    display: inline-block;
}
.review_rating i::before
{
    font-size: 13px;
    margin-right: 8px;
}
.review_time
{
    display: inline-block;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.5);
}
.review_text
{
    margin-top: 12px;
}
.review_text p:last-child
{
    margin-bottom: 0px;
}
.reviews_dots
{
    position: absolute;
    bottom: -69px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    z-index: 10;
}
.reviews_dots .owl-dot
{
    display: inline-block;
    width: 15px;
    height: 15px;
    background: #e8e8e8;
    border-radius: 50%;
    margin-right: 16px;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    cursor: pointer;
}
.reviews_dots .owl-dot:last-child
{
    margin-right: 0px;
}
.reviews_dots .owl-dot.active
{
    background: #0e8ce4;
    box-shadow: none;
}

/*********************************
14. Recently Viewed
*********************************/

.viewed
{
    padding-top: 51px;
    padding-bottom: 60px;
    background: #eff6fa;
}
.viewed_title_container
{
    border-bottom: solid 1px #dadada;
}
.viewed_title
{
    margin-bottom: 14px;
}
.viewed_nav_container
{
    position: absolute;
    right: -5px;
    bottom: 14px;
}
.viewed_nav
{
    display: inline-block;
    cursor: pointer;
}
.viewed_nav i
{
    color: #dadada;
    font-size: 18px;
    padding: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.viewed_nav:hover i
{
    color: #606264;
}
.viewed_prev
{
    margin-right: 15px;
}
.viewed_slider_container
{
    padding-top: 50px;
}
.viewed_item
{
    width: 100%;
    background: #FFFFFF;
    border-radius: 8px;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-left: 15px;
    padding-right: 15px;
}
.viewed_image
{
    width: 115px;
    height: 115px;
}
.viewed_image img
{
    display: block;
    max-width: 100%;
}
.viewed_content
{
    width: 100%;
    margin-top: 25px;
}
.viewed_price
{
    font-size: 16px;
    color: #000000;
    font-weight: 500;
}
.viewed_item.discount .viewed_price
{
    color: #df3b3b;
}
.viewed_price span
{
    position: relative;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.6);
    margin-left: 8px;
}
.viewed_price span::after
{
    display: block;
    position: absolute;
    top: 6px;
    left: -2px;
    width: calc(100% + 4px);
    height: 1px;
    background: #8d8d8d;
    content: '';
}
.viewed_name
{
    margin-top: 3px;
}
.viewed_name a
{
    font-size: 14px;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.viewed_name a:hover
{
    color: #0e8ce4;
}
.item_marks
{
    position: absolute;
    top: 18px;
    left: 18px;
}
.item_mark
{
    display: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 36px;
    text-align: center;
}
.item_discount
{
    background: #df3b3b;
    margin-right: 5px;
}
.item_new
{
    background: #0e8ce4;
}
.viewed_item.discount .item_discount
{
    display: inline-block;
}
.viewed_item.is_new .item_new
{
    display: inline-block;
}

/*********************************
15. Brands
*********************************/

.brands
{
    width: 100%;
    padding-top: 90px;
    padding-bottom: 90px;
}
.brands_slider_container
{
    height: 130px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    padding-left: 97px;
    padding-right: 97px;
}
.brands_slider
{
    height: 100%;
}
.brands_item
{
    height: 100%;
}
.brands_item img
{
    max-width: 100%;
}
.brands_nav
{
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 5px;
    cursor: pointer;
}
.brands_nav i
{
    color: #e5e5e5;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.brands_nav:hover i
{
    color: #676767;
}
.brands_prev
{
    left: 40px;
}
.brands_next
{
    right: 40px;
}

/*********************************
16. Newsletter
*********************************/

.newsletter
{
    width: 100%;
    background: #fafafa;
    padding-top: 60px;
    padding-bottom: 60px;
    box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
}
.newsletter_container
{
    width: 100%;
}
.newsletter_title_container
{
    width: 40%;
    padding-left: 95px;
}
.newsletter_icon
{
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0;
}
.newsletter_title
{
    font-size: 18px;
    color: #000000;
}
.newsletter_text p:last-child
{
    margin-bottom: 0;
}
.newsletter_icon img
{
    max-width: 100%;
}
.newsletter_content
{
    width: 60%;
}
.newsletter_form
{
    position: relative;
    width: 569px;
    float: left;
}
.newsletter_input
{
    width: 100%;
    height: 50px;
    background: #FFFFFF;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    padding-left: 25px;
    font-size: 16px;
    outline: none;
    color: #0e8ce4;
}
.newsletter_input:focus
{
    border: solid 1px rgba(14, 140, 228, 0.3);
    box-shadow: 0px 1px 5px rgba(14, 140, 228, 0.3);
}
.newsletter_input::-webkit-input-placeholder
{
    font-size: 16px;
    color: rgba(0,0,0,0.3);
}
.newsletter_input:-moz-placeholder
{
    font-size: 16px;
    color: rgba(0,0,0,0.3);
}
.newsletter_input::-moz-placeholder
{
    font-size: 16px;
    color: rgba(0,0,0,0.3);
} 
.newsletter_input:-ms-input-placeholder
{ 
    font-size: 16px;
    color: rgba(0,0,0,0.3);
}
.newsletter_input::input-placeholder
{
    font-size: 16px;
    color: rgba(0,0,0,0.3);
}
.newsletter_button
{
    position: absolute;
    top: 0;
    right: 0;
    width: 153px;
    height: 50px;
    background: #0e8ce4;
    color: #FFFFFF;
    line-height: 50px;
    font-size: 18px;
    border: none;
    outline: none;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    cursor: pointer;
}
.newsletter_button:hover
{
    opacity: 0.8;
}
.newsletter_unsubscribe_link
{
    float: right;
    text-align: right;
    height: 50px;
}
.newsletter_unsubscribe_link a
{
    font-size: 10px;
    color: #0e8ce4;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    line-height: 50px;
}
.newsletter_unsubscribe_link a:hover
{
    color: #0d82d3;
}

/*********************************
17. Footer
*********************************/

.footer
{
    padding-top: 52px;
    padding-bottom: 40px;
}
.footer .logo_container
{
    height: auto;
    margin-bottom: 18px;
    margin-top: -10px;
}
.footer .logo
{
    top: auto;
    -webkit-transform: transform: none;
    -moz-transform: transform: none;
    -ms-transform: transform: none;
    -o-transform: transform: none;
    transform: none;
}
.footer .logo a
{
    color: #000000;
}
.footer_title
{
    font-size: 14px;
    font-weight: 500;
    color: #000000;
}
.footer_phone
{
    font-size: 18px;
    font-weight: 500;
    color: #0e8ce4;
    margin-top: 13px;
}
.footer_contact_text
{
    margin-top: 10px;
}
.footer_contact_text p
{
    margin-bottom: 0px;
}
.footer_social
{
    margin-top: 27px;
}
.footer_social ul li
{
    display: inline-block;
    width: 30px;
    height: 30px;
    background: #fafafa;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
    margin-right: 16px;
    text-align: center;
}
.footer_social ul li i
{
    color: #000000;
    line-height: 30px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.footer_social ul li:hover i
{
    color: #0e8ce4;
}
.footer_subtitle
{
    font-size: 12px;
    color: #000000;
}
.footer_column ul:first-of-type
{
    margin-top: 21px;
}
.footer_column ul
{
    margin-top: 7px;
}
.footer_list li
{
    margin-bottom: 6px;
}
.footer_list li a
{
    font-size: 12px;
    font-weight: 500;
    color: rgba(0,0,0,0.4);
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.footer_list li a:hover
{
    color: #0e8ce4;
}
.footer_list_2
{
    margin-top: 42px !important; 
}

.copyright
{
    width: 100%;
    background: #fafafa;
}
.copyright_container
{
    width: 100%;
    height: 56px;
}
.copyright_content
{
    font-size: 12px;
    color: rgba(0,0,0,0.6);
}
.copyright_content span
{
    font-weight: 500;
}
.logos
{
    
}
.logos_list li
{
    display: inline-block;
    margin-right: 16px;
}
.logos_list li:last-child
{
    margin-right: 0px;
}
</style>
@php 
 $featured=DB::table('products')->where('status',1)->orderBy('id','desc')->limit(24)->get(); 
 $trend=DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(24)->get();

 $hot=DB::table('products')->join('brands','products.brand_id','brands.id')->select('brands.brand_name','products.*')->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(4)->get();
@endphp
    <!-- Characteristics -->
    <div class="characteristics">
        <div class="container">
            <div class="row">
                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">              
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_1.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_2.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_3.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">                
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_4.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    
                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Deals of the Week</div>
                        <div class="deals_slider_container">
                            
                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">
                            @foreach($hot as $ht)
                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{ asset($ht->image_one) }}" style="width: 140px;"></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">{{ $ht->brand_name }}</a></div>
                                            @if($ht->discount_price == NULL)
                                            @else
                                            <div class="deals_item_price_a ml-auto">${{ $ht->selling_price }}</div>
                                            @endif
                                            
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">{{ $ht->product_name }}</div>
                                            @if($ht->discount_price == NULL)
                                              <div class="deals_item_price ml-auto">$ {{ $ht->selling_price }}</div>
                                            @else
                                            @endif
                                            @if($ht->discount_price != NULL)
                                              <div class="deals_item_price ml-auto">$ {{ $ht->discount_price }}</div>
                                            @else
                                            @endif
                                            
                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Available: <span>{{ $ht->product_quantity }}</span></div>
                                                <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                        <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Hurry Up</div>
                                                <div class="deals_timer_subtitle">Offer ends in:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                        <span>hours</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                        <span>mins</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                        <span>secs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               @endforeach 
    

                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>
                    
                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix" >
                                    <li class="active">New Featured</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active" >
                                <div class="featured_slider slider">
                                   @foreach($featured as $row) 
                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                                    {{ $row->product_name }}
                                                </a></div></div>



                                              {{--   <div class="product_extras">
                                                    <button class="product_cart_button addcart" data-id="{{ $row->id }}">Add to Cart</button>
                                                </div> --}}

                                                  <div class="product_extras">
                                                    <button data-id="{{ $row->id }}" class="product_cart_button addcart" {{-- data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)" --}}>Add to Cart</button>
                                                 
                                                </div>




                                            </div>
                                           <button  
                                               class="addwishlist" data-id="{{ $row->id }}"> 
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>  
                                               </div>
                                            </button>
                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: green;">NEW</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
                                                 <li class="product_mark product_discount">
                                               
                                               {{ intval($discount) }}%
                                                </li>
                                                 @endif
                                                
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

@php
 $category=DB::table('categories')->get();
@endphp
    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Popular Categories</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">full catalog</a></div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">
                           @foreach($category as $row) 
                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('public/frontend/images/popular_1.png') }}" alt=""></div>
                                    <div class="popular_category_text">{{ $row->category_name }}</div>
                                </div>
                            </div>
                           @endforeach 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->
@php 
    $mid=DB::table('products')->join('categories','products.category_id','categories.id')
        ->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name','categories.category_name')->where('products.mid_slider',1)->orderBy('id','DESC')->limit(4)->get();
@endphp
    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url({{ asset('public/frontend/images/banner_2_background.jpg') }})"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->
        <div class="owl-carousel owl-theme banner_2_slider">
            @foreach($mid as $row) 
                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">{{ $row->category_name }}</div>
                                        <div class="banner_2_title">{{ $row->product_name }}</div>
                                        <div class="banner_2_text">{{ $row->brand_name }} <br>Product Id: {{ $row->product_code }}.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="{{ asset($row->image_one) }}" style="height: 300px; width: 320px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
             @endforeach   
            

            </div>
        </div>
    </div>

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">New Trend</div>
                            <ul class="clearfix">
                                <li class="active"></li>
                              
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                @foreach($trend as $row)
                                        <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="#">
                                                    {{ $row->product_name }}
                                                </a></div></div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                             <button  
                                               class="addwishlist" data-id="{{ $row->id }}"> 
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>  
                                               </div>
                                            </button>
                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: green;">Trend</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
                                                 <li class="product_mark product_discount">
                                               
                                               {{ intval($discount) }}%
                                                </li>
                                                 @endif
                                                
                                               
                                            </ul>
                                        </div>
                                    </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                            </div> 
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>      
    </div>

<!--first category--->
@php 
$cats=DB::table('categories')->skip(5)->first();
$category_id=$cats->id;
$products=DB::table('products')->where('category_id',$category_id)->where('status',1)->limit(16)->orderBy('id','DESC')->get();

@endphp
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">{{ $cats->category_name }}</div>
                            <ul class="clearfix">
                                <li class="active"></li>
                              
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                @foreach($products as $row)
                                        <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="#">
                                                    {{ $row->product_name }}
                                                </a></div></div>
                                                <div class="product_extras">
                                                    <button class="product_cart_button">Add to Cart</button>
                                                </div>
                                            </div>
                                             <button  
                                               class="addwishlist" data-id="{{ $row->id }}"> 
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>  
                                               </div>
                                            </button>
                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: blue;">New</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
                                                 <li class="product_mark product_discount">
                                               
                                               {{ intval($discount) }}%
                                                </li>
                                                 @endif
                                                
                                               
                                            </ul>
                                        </div>
                                    </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>                  

                            </div>

                        </div>
                                
                    </div>
                </div>
            </div>
        </div>      
    </div>

    <!-- Adverts -->

    <div class="adverts">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 advert_col">
                    
                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
                        </div>
                        <div class="ml-auto"><div class="advert_image"><img src="{{ asset('public/frontend/images/adv_1.png') }}" alt=""></div></div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">
                    
                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_subtitle">Trends 2018</div>
                            <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto"><div class="advert_image"><img src="{{ asset('public/frontend/images/adv_1.png') }}" alt=""></div></div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">
                    
                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto"><div class="advert_image"><img src="{{ asset('public/frontend/images/adv_1.png') }}" alt=""></div></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Trends -->

    <div class="trends">
        <div class="trends_background" style="background-image:url({{ asset('public/frontend/images/trends_background.jpg') }})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Buy One Get One</h2>
                        <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>
@php
 $buyget=DB::table('products')->where('status',1)->where('buyone_getone',1)->orderBy('id','desc')->limit(12)->get();
@endphp
                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">
                        @foreach($buyget as $row)
                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 220px;"></div>
                                    <div class="trends_content">
                                       
                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="#">{{ $row->product_name }}</a></div><br>
                                            {{-- <div class="trends_price">$379</div> --}}
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                            <a href="" class="btn btn-danger btn-sm pull-right">add to cart</a>
                                        </div>

                                    </div>
                                    <ul class="trends_marks">
                                        {{-- <li class="trends_mark trends_discount">-25%</li> --}}
                                         @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: blue;">New</li>
                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
                                                 <li class="product_mark product_discount">
                                               
                                               {{ intval($discount) }}%
                                                </li>
                                        @endif

                                        <li class="trends_mark trends_new">Extra One</li>
                                    </ul>
                                 {{--    <button  
                                               class="addwishlist" data-id="{{ $row->id }}"> 
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>  
                                               </div>
                                            </button> --}}
                                     <button  class="addwishlist" data-id="{{ $row->id }}">      
                                       <div class="trends_fav"><i class="fa fa-heart text-danger"></i></div>
                                    </button> 
                                </div>
                            </div>
                           @endforeach 
                            

                         

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Reviews -->

    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Latest Reviews</h3>
                        <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                    </div>

                    <div class="reviews_slider_container">
                        
                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">
                            
                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">
                        
                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">
                            
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>

                        </div>
                        
                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="{{ asset('public/frontend/images/send.png') }}" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="{{ route('newslatter') }}" class="newsletter_form" method="post">
                                @csrf
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address" name="email">
                                <button class="newsletter_button" type="submit">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--product cart add modal-->

<!-- Modal -->
<div class="modal fade " id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Product Short Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
          <div class="col-md-4">
              <div class="card" style="width: 16rem;">
              <img src="" class="card-img-top" id="pimage" style="height: 240px;">
              <div class="card-body">
               
              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
              <ul class="list-group">
                <li class="list-group-item"> <h5 class="card-title" id="pname"></h5></span></li>
             <li class="list-group-item">Product code: <span id="pcode"> </span></li>
              <li class="list-group-item">Category:  <span id="pcat"> </span></li>
              <li class="list-group-item">SubCategory:  <span id="psubcat"> </span></li>
              <li class="list-group-item">Brand: <span id="pbrand"> </span></li>
              <li class="list-group-item">Stock: <span class="badge " style="background: green; color:white;">Available</span></li>
            </ul>
          </div>
          <div class="col-md-4 ">
              <form action="{{-- {{ route('insert.into.cart') }} --}}" method="post">
                @csrf
                <input type="hidden" name="product_id" id="product_id">
                <div class="form-group" id="colordiv">
                  <label for="">Color</label>
                  <select name="color" class="form-control">
                  </select>
                </div>
                 <div class="form-group" id="sizediv" >
                  <label for="exampleInputEmail1">Size</label>
                  <select name="size" class="form-control" id="size">
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <input type="number" class="form-control" value="1" name="qty">
                </div>
                <button type="submit" class="btn btn-primary">Add To Cart</button>
              </form>
           </div>
         </div>
      </div>  
    </div>
  </div>
</div>

<!--modal end-->

<script type="text/javascript">
      $(document).ready(function() {
            $('.addcart').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/cart/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },
                    
                 });
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>



<script type="text/javascript">
      $(document).ready(function() {
            $('.addwishlist').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/wishlist/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },
                    
                 });
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>



@endsection