!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}([function(e,t,n){n(1),e.exports=n(2)},function(e,t){console.log("Hello"),document.getElementById("menu-icon").addEventListener("click",(function(e){document.getElementById("menu-list").classList.toggle("top-bar")}));var n=document.querySelectorAll(".top-bar .menu-item");Array.prototype.slice.call(n).map((function(e){document.getElementById(e.id).addEventListener("click",(function(e){document.getElementById("menu-list").classList.toggle("top-bar")}))}));var o=document.body,r=(document.querySelector(".page-header"),0);window.addEventListener("scroll",(function(){var e=window.pageYOffset;e<=0?o.classList.remove("scroll-up"):(e>r&&!o.classList.contains("scroll-down")?(o.classList.remove("scroll-up"),o.classList.add("scroll-down")):e<r&&o.classList.contains("scroll-down")&&(o.classList.remove("scroll-down"),o.classList.add("scroll-up")),r=e)}))},function(e,t){}]);