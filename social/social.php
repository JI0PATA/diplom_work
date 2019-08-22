<?php
/*
 * Plugin Name: Social plugin
 */

/*add_shortcode('social_plugin', function () {
    return "
<style>
.socials {
display: flex;
justify-content: center;
align-items: center;
}

.social-button {
margin: 0 10px;
    width: 60px;
    height: 60px;
    border-radius: 25%;
    border: 1px solid #ccc;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
}

.social-button:after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #fff;
    position: absolute;
    z-index: 2;
    transform: scale(1.2);
    transition: transform .3s;
}

.social-button:hover:after {
transition: transform 0s;
transform: scale(0);
}

.social-button:before {
content: '';
display: block;
transition: top 1.5s, left 1.5s;
top: 60%;
left: -170%;
width: 200%;
height: 200%;
position: absolute;
transform: rotate(45deg);
z-index: 1;
}

.social-button:hover:before {
top: -50%;
left: -50%;
}

.social-button.button-facebook:before {
background: #3d5998;
}

.social-button.button-pinterest:before {
background: #e50122;
}

.social-button.button-twitter:before {
background: #53acec;
}

.social-button.button-tumblr:before {
background: #314258;
}
</style>
    <div class='socials'>
    <div class='social-button button-facebook'>
    <i class='fab fa-facebook'>a</i>
</div>
<div class='social-button button-pinterest'>
    <i class='fab fa-pinterest'>b</i>
</div>
<div class='social-button button-twitter'>
    <i class='fab fa-twitter'>c</i>
</div>
<div class='social-button button-tumblr'>
    <i class='fab fa-tumblr'>d</i>
</div>
</div>
    ";
});*/

add_shortcode('social_plugin', function () {
    return "
<style>
.socials {
    display: flex;
    align-items: center;
    justify-content: center;
}

.social-button {
    width: 60px;
    height: 60px;
    border-radius: 25%;
    margin: 0 10px;
    border: 1px solid #ccc;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.social-button:after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    transform: scale(1.2);
    transition: transform .3s;
    background: #fff;
    border-radius: 50%;
}

.social-button:hover:after {
    transition: transform 0s;
    transform: scale(0);
}

.social-button:before {
    content: '';
    display: block;
    width: 200%;
    height: 200%;
    top: 60%;
    left: -170%;
    transform: rotate(45deg);
    transition: top 1.5s, left 1.5s;
    position: absolute;
}

.social-button:hover:before {
    top: -50%;
    left: -50%;
}

.social-button.button-facebook:before {
    background: #3d5998;
}

.social-button.button-pinterest:before {
    background: #e50122;
}

.social-button.button-twitter:before {
    background: #53acec;
}

.social-button.button-tumblr:before {
    background: #314258;
}
</style>
<div class='socials'>
<div class='social-button button-facebook'>
    <i class='fab fa-facebook'>a</i>
</div>
<div class='social-button button-pinterest'>
    <i class='fab fa-pinterest'>b</i>
</div>
<div class='social-button button-twitter'>
    <i class='fab fa-twitter'>c</i>
</div>
<div class='social-button button-tumblr'>
    <i class='fab fa-tumblr'>d</i>
</div>
</div>    
    ";
});