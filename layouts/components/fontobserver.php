<?php 

/* ==========================================================================
   FONT FACE OBSERVER 
   https://github.com/bramstein/fontfaceobserver
   https://www.filamentgroup.com/lab/font-events.html
   ========================================================================== */

?>
<script>
(function(){'use strict';function f(a){this.a=k;this.b=void 0;this.d=[];var b=this;try{a(function(a){l(b,a)},function(a){m(b,a)})}catch(c){m(b,c)}}var k=2;function n(a){return new f(function(b,c){c(a)})}function p(a){return new f(function(b){b(a)})}
function l(a,b){if(a.a===k){if(b===a)throw new TypeError("Promise resolved with itself.");var c=!1;try{var d=b&&b.then;if(null!==b&&"object"===typeof b&&"function"===typeof d){d.call(b,function(b){c||l(a,b);c=!0},function(b){c||m(a,b);c=!0});return}}catch(e){c||m(a,e);return}a.a=0;a.b=b;q(a)}}function m(a,b){if(a.a===k){if(b===a)throw new TypeError("Promise rejected with itself.");a.a=1;a.b=b;q(a)}}
function q(a){setTimeout(function(){if(a.a!==k)for(;a.d.length;){var b=a.d.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0===a.a?"function"===typeof c?e(c.call(void 0,a.b)):e(a.b):1===a.a&&("function"===typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(g){b(g)}}},0)}f.prototype.e=function(a){return this.c(void 0,a)};f.prototype.c=function(a,b){var c=this;return new f(function(d,e){c.d.push([a,b,d,e]);q(c)})};
function r(a){return new f(function(b,c){function d(c){return function(d){g[c]=d;e+=1;e===a.length&&b(g)}}var e=0,g=[];0===a.length&&b(g);for(var h=0;h<a.length;h+=1)a[h].c(d(h),c)})}function s(a){return new f(function(b,c){for(var d=0;d<a.length;d+=1)a[d].c(b,c)})};window.Promise||(window.Promise=f,window.Promise.resolve=p,window.Promise.reject=n,window.Promise.race=s,window.Promise.all=r,window.Promise.prototype.then=f.prototype.c,window.Promise.prototype["catch"]=f.prototype.e);}());

(function(){'use strict';function e(a){this.a=document.createElement("div");this.a.setAttribute("aria-hidden","true");this.a.appendChild(document.createTextNode(a));this.b=document.createElement("span");this.c=document.createElement("span");this.f=document.createElement("span");this.e=document.createElement("span");this.d=-1;this.b.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";this.c.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";
this.e.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";this.f.style.cssText="display:inline-block;width:200%;height:200%;";this.b.appendChild(this.f);this.c.appendChild(this.e);this.a.appendChild(this.b);this.a.appendChild(this.c)}function t(a,b,c){a.a.style.cssText="min-width:20px;min-height:20px;display:inline-block;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font-size:100px;font-family:"+b+";"+c}
function u(a){var b=a.a.offsetWidth,c=b+100;a.e.style.width=c+"px";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.d!==b?(a.d=b,!0):!1}function v(a,b){a.b.addEventListener("scroll",function(){u(a)&&null!==a.a.parentNode&&b(a.d)},!1);a.c.addEventListener("scroll",function(){u(a)&&null!==a.a.parentNode&&b(a.d)},!1);u(a)};function w(a,b){this.family=a;this.style=b.style||"normal";this.variant=b.variant||"normal";this.weight=b.weight||"normal";this.stretch=b.stretch||"stretch";this.featureSettings=b.featureSettings||"normal"}var x=null;
w.prototype.a=function(a,b){var c=a||"BESbswy",z=b||3E3,f="font-style:"+this.style+";font-variant:"+this.variant+";font-weight:"+this.weight+";font-stretch:"+this.stretch+";font-feature-settings:"+this.featureSettings+";-moz-font-feature-settings:"+this.featureSettings+";-webkit-font-feature-settings:"+this.featureSettings+";",g=document.createElement("div"),m=new e(c),n=new e(c),p=new e(c),h=-1,d=-1,k=-1,q=-1,r=-1,s=-1,l=this;t(m,"sans-serif",f);t(n,"serif",f);t(p,"monospace",f);g.appendChild(m.a);
g.appendChild(n.a);g.appendChild(p.a);document.body.appendChild(g);q=m.a.offsetWidth;r=n.a.offsetWidth;s=p.a.offsetWidth;return new Promise(function(a,b){function c(){null!==g.parentNode&&document.body.removeChild(g)}function y(){if(-1!==h&&-1!==d&&-1!==k&&h===d&&d===k){if(null===x){var b=/AppleWeb[kK]it\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);x=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))}x?h===q&&d===q&&k===q||h===r&&d===r&&k===r||h===s&&d===s&&
k===s||(c(),a(l)):(c(),a(l))}}setTimeout(function(){c();b(l)},z);v(m,function(a){h=a;y()});t(m,l.family+",sans-serif",f);v(n,function(a){d=a;y()});t(n,l.family+",serif",f);v(p,function(a){k=a;y()});t(p,l.family+",monospace",f)})};window.FontFaceObserver=w;window.FontFaceObserver.prototype.check=w.prototype.a;}());

(function( w ){
    // if the class is already set, we're good.
    if( w.document.documentElement.className.indexOf( "fonts-loaded" ) > -1 ){
        return;
    }
    var fontA = new w.FontFaceObserver( "Playfair+Display", {
        weight: 400
    });
    var fontB = new w.FontFaceObserver( "Playfair+Display", {
        weight: 400,
        style: "italic"
    });
    var fontC = new w.FontFaceObserver( "Playfair+Display", {
        weight: 700
    });
    var fontD = new w.FontFaceObserver( "Lato", {
        weight: 400,
    });
    w.Promise
        .all([fontA.check(), fontB.check(), fontC.check(), fontD.check()])
        .then(function(){
            w.document.documentElement.className += " fonts-loaded";
            document.cookie = "fonts-loaded=true; expires=Fri, 31 Dec 9999 23:59:59 GMT;";
        });
}( this ));
</script>