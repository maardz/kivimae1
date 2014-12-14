/*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 * Copyright 2014 Twitter, Inc.
 * Licensed under the Creative Commons Attribution 3.0 Unported License. For
 * details, see http://creativecommons.org/licenses/by/3.0/.
 */

// See the Getting Started docs for more information:
// http://getbootstrap.com/getting-started/#support-ie10-width

(function () {
  'use strict';
  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
      document.createTextNode(
        '@-ms-viewport{width:auto!important}'
      )
    )
    document.querySelector('head').appendChild(msViewportStyle)
  }
})();


// Linking JS and CSS media queries (Check the index.html, style.css and sizedetect.js)
/*
var detector;

$(function (){
    detector = new SizeDetect();

    detector.bind(function (size){
        // Do stuff here
        // console.log(size); 
    })

    detector.trigger(); 
})
*/

// Document Ready
$(function (){
    // Do something
});

// Document Resize
$(window).resize(function (){
    // Do something
});