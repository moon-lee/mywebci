!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=10)}({10:function(e,t,n){n(19),e.exports=n(11)},11:function(e,t,n){},19:function(e,t,n){"use strict";n.r(t),$(document).ready(function(){console.log("sidebar list add active class!!!"),$(".sidebar-list > ul > li").find("a").click(function(e){var t=$(this).parent();t.is(".active")?t.removeClass("active"):t.addClass("active")}),console.log("sidebar toggle ready!!!"),$("#sidebarCollapse").on("click",function(){$("#sidebar").toggleClass("active")}),console.log("Calendar events loaded!!!"),$("#event_load").on("click",function(){$.ajax({type:"POST",url:"dashboard/eventslist",dataType:"json"}).done(function(e){$.each(e,function(e,t){$("<div>").text(t.name+","+t.age).appendTo("body")})}).fail(function(e,t,n){alert("Sorry, there was a problem!"),console.log("Error: "+n),console.log("Status: "+t),console.dir(e)}).always(function(e,t){console.log("The request is complete!")})})})}});
//# sourceMappingURL=custom.js.map