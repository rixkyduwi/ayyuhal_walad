(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
'use strict';var n;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var ba="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function ca(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var da=ca(this);function t(a,b){if(b)a:{var c=da;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&null!=b&&ba(c,a,{configurable:!0,writable:!0,value:b})}}
t("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}
function c(f,g){this.h=f;ba(this,"description",{configurable:!0,writable:!0,value:g})}
if(a)return a;c.prototype.toString=function(){return this.h};
var d="jscomp_symbol_"+(1E9*Math.random()>>>0)+"_",e=0;return b});
t("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=da[b[c]];"function"===typeof d&&"function"!=typeof d.prototype[a]&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return ea(aa(this))}})}return a});
function ea(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
function u(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:aa(a)}}
var fa="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},ha;
if("function"==typeof Object.setPrototypeOf)ha=Object.setPrototypeOf;else{var ia;a:{var ja={a:!0},ka={};try{ka.__proto__=ja;ia=ka.a;break a}catch(a){}ia=!1}ha=ia?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var la=ha;
function v(a,b){a.prototype=fa(b.prototype);a.prototype.constructor=a;if(la)la(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.G=b.prototype}
function ma(){this.o=!1;this.l=null;this.i=void 0;this.h=1;this.m=this.s=0;this.B=this.j=null}
function na(a){if(a.o)throw new TypeError("Generator is already running");a.o=!0}
ma.prototype.v=function(a){this.i=a};
function oa(a,b){a.j={ja:b,ka:!0};a.h=a.s||a.m}
ma.prototype.return=function(a){this.j={return:a};this.h=this.m};
function w(a,b,c){a.h=c;return{value:b}}
ma.prototype.u=function(a){this.h=a};
function pa(a,b,c){a.s=b;void 0!=c&&(a.m=c)}
function qa(a){a.s=0;var b=a.j.ja;a.j=null;return b}
function ra(a){a.B=[a.j];a.s=0;a.m=0}
function sa(a){var b=a.B.splice(0)[0];(b=a.j=a.j||b)?b.ka?a.h=a.s||a.m:void 0!=b.u&&a.m<b.u?(a.h=b.u,a.j=null):a.h=a.m:a.h=0}
function ta(a){this.h=new ma;this.i=a}
function ua(a,b){na(a.h);var c=a.h.l;if(c)return va(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.h.return);
a.h.return(b);return xa(a)}
function va(a,b,c,d){try{var e=b.call(a.h.l,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.h.o=!1,e;var f=e.value}catch(g){return a.h.l=null,oa(a.h,g),xa(a)}a.h.l=null;d.call(a.h,f);return xa(a)}
function xa(a){for(;a.h.h;)try{var b=a.i(a.h);if(b)return a.h.o=!1,{value:b.value,done:!1}}catch(c){a.h.i=void 0,oa(a.h,c)}a.h.o=!1;if(a.h.j){b=a.h.j;a.h.j=null;if(b.ka)throw b.ja;return{value:b.return,done:!0}}return{value:void 0,done:!0}}
function ya(a){this.next=function(b){na(a.h);a.h.l?b=va(a,a.h.l.next,b,a.h.v):(a.h.v(b),b=xa(a));return b};
this.throw=function(b){na(a.h);a.h.l?b=va(a,a.h.l["throw"],b,a.h.v):(oa(a.h,b),b=xa(a));return b};
this.return=function(b){return ua(a,b)};
this[Symbol.iterator]=function(){return this}}
function x(a,b){b=new ya(new ta(b));la&&a.prototype&&la(b,a.prototype);return b}
t("Reflect.setPrototypeOf",function(a){return a?a:la?function(b,c){try{return la(b,c),!0}catch(d){return!1}}:null});
function z(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
t("WeakMap",function(a){function b(k){this.h=(h+=Math.random()+1).toString();if(k){k=u(k);for(var l;!(l=k.next()).done;)l=l.value,this.set(l[0],l[1])}}
function c(){}
function d(k){var l=typeof k;return"object"===l&&null!==k||"function"===l}
function e(k){if(!z(k,g)){var l=new c;ba(k,g,{value:l})}}
function f(k){var l=Object[k];l&&(Object[k]=function(m){if(m instanceof c)return m;Object.isExtensible(m)&&e(m);return l(m)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),l=Object.seal({}),m=new a([[k,2],[l,3]]);if(2!=m.get(k)||3!=m.get(l))return!1;m.delete(k);m.set(l,4);return!m.has(k)&&4==m.get(l)}catch(p){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,l){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!z(k,g))throw Error("WeakMap key fail: "+k);k[g][this.h]=l;return this};
b.prototype.get=function(k){return d(k)&&z(k,g)?k[g][this.h]:void 0};
b.prototype.has=function(k){return d(k)&&z(k,g)&&z(k[g],this.h)};
b.prototype.delete=function(k){return d(k)&&z(k,g)&&z(k[g],this.h)?delete k[g][this.h]:!1};
return b});
t("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var l=h.h;return ea(function(){if(l){for(;l.head!=h.h;)l=l.previous;for(;l.next!=l.head;)return l=l.next,{done:!1,value:k(l)};l=null}return{done:!0,value:void 0}})}
function d(h,k){var l=k&&typeof k;"object"==l||"function"==l?f.has(k)?l=f.get(k):(l=""+ ++g,f.set(k,l)):l="p_"+k;var m=h.data_[l];if(m&&z(h.data_,l))for(h=0;h<m.length;h++){var p=m[h];if(k!==k&&p.key!==p.key||k===p.key)return{id:l,list:m,index:h,A:p}}return{id:l,list:m,index:-1,A:void 0}}
function e(h){this.data_={};this.h=b();this.size=0;if(h){h=u(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var h=Object.seal({x:4}),k=new a(u([[h,"s"]]));if("s"!=k.get(h)||1!=k.size||k.get({x:4})||k.set({x:4},"t")!=k||2!=k.size)return!1;var l=k.entries(),m=l.next();if(m.done||m.value[0]!=h||"s"!=m.value[1])return!1;m=l.next();return m.done||4!=m.value[0].x||"t"!=m.value[1]||!l.next().done?!1:!0}catch(p){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=0===h?0:h;var l=d(this,h);l.list||(l.list=this.data_[l.id]=[]);l.A?l.A.value=k:(l.A={next:this.h,previous:this.h.previous,head:this.h,key:h,value:k},l.list.push(l.A),this.h.previous.next=l.A,this.h.previous=l.A,this.size++);return this};
e.prototype.delete=function(h){h=d(this,h);return h.A&&h.list?(h.list.splice(h.index,1),h.list.length||delete this.data_[h.id],h.A.previous.next=h.A.next,h.A.next.previous=h.A.previous,h.A.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this.data_={};this.h=this.h.previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).A};
e.prototype.get=function(h){return(h=d(this,h).A)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var l=this.entries(),m;!(m=l.next()).done;)m=m.value,h.call(k,m[1],m[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
function za(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
t("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=za(this,b,"endsWith");b+="";void 0===c&&(c=d.length);c=Math.max(0,Math.min(c|0,d.length));for(var e=b.length;0<e&&0<c;)if(d[--c]!=b[--e])return!1;return 0>=e}});
t("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=za(this,b,"startsWith");b+="";var e=d.length,f=b.length;c=Math.max(0,Math.min(c|0,d.length));for(var g=0;g<f&&c<e;)if(d[c++]!=b[g++])return!1;return g>=f}});
t("Object.setPrototypeOf",function(a){return a||la});
var Aa="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)z(d,e)&&(a[e]=d[e])}return a};
t("Object.assign",function(a){return a||Aa});
t("Promise",function(a){function b(g){this.h=0;this.j=void 0;this.i=[];this.o=!1;var h=this.l();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.h=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.i=function(g){if(null==this.h){this.h=[];var h=this;this.j(function(){h.m()})}this.h.push(g)};
var e=da.setTimeout;c.prototype.j=function(g){e(g,0)};
c.prototype.m=function(){for(;this.h&&this.h.length;){var g=this.h;this.h=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(l){this.l(l)}}}this.h=null};
c.prototype.l=function(g){this.j(function(){throw g;})};
b.prototype.l=function(){function g(l){return function(m){k||(k=!0,l.call(h,m))}}
var h=this,k=!1;return{resolve:g(this.U),reject:g(this.m)}};
b.prototype.U=function(g){if(g===this)this.m(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.da(g);else{a:switch(typeof g){case "object":var h=null!=g;break a;case "function":h=!0;break a;default:h=!1}h?this.P(g):this.s(g)}};
b.prototype.P=function(g){var h=void 0;try{h=g.then}catch(k){this.m(k);return}"function"==typeof h?this.sa(h,g):this.s(g)};
b.prototype.m=function(g){this.v(2,g)};
b.prototype.s=function(g){this.v(1,g)};
b.prototype.v=function(g,h){if(0!=this.h)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.h);this.h=g;this.j=h;2===this.h&&this.V();this.B()};
b.prototype.V=function(){var g=this;e(function(){if(g.M()){var h=da.console;"undefined"!==typeof h&&h.error(g.j)}},1)};
b.prototype.M=function(){if(this.o)return!1;var g=da.CustomEvent,h=da.Event,k=da.dispatchEvent;if("undefined"===typeof k)return!0;"function"===typeof g?g=new g("unhandledrejection",{cancelable:!0}):"function"===typeof h?g=new h("unhandledrejection",{cancelable:!0}):(g=da.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.j;return k(g)};
b.prototype.B=function(){if(null!=this.i){for(var g=0;g<this.i.length;++g)f.i(this.i[g]);this.i=null}};
var f=new c;b.prototype.da=function(g){var h=this.l();g.X(h.resolve,h.reject)};
b.prototype.sa=function(g,h){var k=this.l();try{g.call(h,k.resolve,k.reject)}catch(l){k.reject(l)}};
b.prototype.then=function(g,h){function k(r,q){return"function"==typeof r?function(y){try{l(r(y))}catch(C){m(C)}}:q}
var l,m,p=new b(function(r,q){l=r;m=q});
this.X(k(g,l),k(h,m));return p};
b.prototype.catch=function(g){return this.then(void 0,g)};
b.prototype.X=function(g,h){function k(){switch(l.h){case 1:g(l.j);break;case 2:h(l.j);break;default:throw Error("Unexpected state: "+l.h);}}
var l=this;null==this.i?f.i(k):this.i.push(k);this.o=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var l=u(g),m=l.next();!m.done;m=l.next())d(m.value).X(h,k)})};
b.all=function(g){var h=u(g),k=h.next();return k.done?d([]):new b(function(l,m){function p(y){return function(C){r[y]=C;q--;0==q&&l(r)}}
var r=[],q=0;do r.push(void 0),q++,d(k.value).X(p(r.length-1),m),k=h.next();while(!k.done)})};
return b});
function Ba(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
t("Array.prototype.entries",function(a){return a?a:function(){return Ba(this,function(b,c){return[b,c]})}});
t("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)z(b,d)&&c.push([d,b[d]]);return c}});
t("Array.prototype.keys",function(a){return a?a:function(){return Ba(this,function(b){return b})}});
t("Array.prototype.values",function(a){return a?a:function(){return Ba(this,function(b,c){return c})}});
t("Array.from",function(a){return a?a:function(b,c,d){c=null!=c?c:function(h){return h};
var e=[],f="undefined"!=typeof Symbol&&Symbol.iterator&&b[Symbol.iterator];if("function"==typeof f){b=f.call(b);for(var g=0;!(f=b.next()).done;)e.push(c.call(d,f.value,g++))}else for(f=b.length,g=0;g<f;g++)e.push(c.call(d,b[g],g));return e}});
t("Number.isNaN",function(a){return a?a:function(b){return"number"===typeof b&&isNaN(b)}});
t("Number.MAX_SAFE_INTEGER",function(){return 9007199254740991});
t("Object.is",function(a){return a?a:function(b,c){return b===c?0!==b||1/b===1/c:b!==b&&c!==c}});
t("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length;c=c||0;for(0>c&&(c=Math.max(c+e,0));c<e;c++){var f=d[c];if(f===b||Object.is(f,b))return!0}return!1}});
t("String.prototype.includes",function(a){return a?a:function(b,c){return-1!==za(this,b,"includes").indexOf(b,c||0)}});
t("Set",function(a){function b(c){this.h=new Map;if(c){c=u(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.h.size}
if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(u([c]));if(!d.has(c)||1!=d.size||d.add(c)!=d||1!=d.size||d.add({x:4})!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||4!=f.value[0].x||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=0===c?0:c;this.h.set(c,c);this.size=this.h.size;return this};
b.prototype.delete=function(c){c=this.h.delete(c);this.size=this.h.size;return c};
b.prototype.clear=function(){this.h.clear();this.size=0};
b.prototype.has=function(c){return this.h.has(c)};
b.prototype.entries=function(){return this.h.entries()};
b.prototype.values=function(){return this.h.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.h.forEach(function(f){return c.call(d,f,f,e)})};
return b});
var B=this||self;function D(a,b){a=a.split(".");b=b||B;for(var c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function Ca(){}
function Da(a){var b=typeof a;b="object"!=b?b:a?Array.isArray(a)?"array":b:"null";return"array"==b||"object"==b&&"number"==typeof a.length}
function F(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function Ea(a){return Object.prototype.hasOwnProperty.call(a,Fa)&&a[Fa]||(a[Fa]=++Ga)}
var Fa="closure_uid_"+(1E9*Math.random()>>>0),Ga=0;function Ha(a,b,c){return a.call.apply(a.bind,arguments)}
function Ia(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Ja(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?Ja=Ha:Ja=Ia;return Ja.apply(null,arguments)}
function G(a,b){a=a.split(".");var c=B;a[0]in c||"undefined"==typeof c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function H(a,b){function c(){}
c.prototype=b.prototype;a.G=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Ya=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
function Ka(a){return a}
;function La(a,b){if(Error.captureStackTrace)Error.captureStackTrace(this,La);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a));b&&(this.wa=b)}
H(La,Error);La.prototype.name="CustomError";function Ma(a){a=a.url;var b=/[?&]dsh=1(&|$)/.test(a);this.j=!b&&/[?&]ae=1(&|$)/.test(a);this.l=!b&&/[?&]ae=2(&|$)/.test(a);if((this.h=/[?&]adurl=([^&]*)/.exec(a))&&this.h[1]){try{var c=decodeURIComponent(this.h[1])}catch(d){c=null}this.i=c}}
;function Na(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;var Oa=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if("string"===typeof a)return"string"!==typeof b||1!=b.length?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},I=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"===typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},Pa=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
I(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d};
function Qa(a,b){a:{for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]}
function Ra(a,b){b=Oa(a,b);var c;(c=0<=b)&&Array.prototype.splice.call(a,b,1);return c}
function Sa(a){return Array.prototype.concat.apply([],arguments)}
function Ta(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function Ua(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(Da(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function Va(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function Wa(a){var b=Xa,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function Ya(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function Za(a){if(!a||"object"!==typeof a)return a;if("function"===typeof a.clone)return a.clone();if("undefined"!==typeof Map&&a instanceof Map)return new Map(a);if("undefined"!==typeof Set&&a instanceof Set)return new Set(a);var b=Array.isArray(a)?[]:"function"!==typeof ArrayBuffer||"function"!==typeof ArrayBuffer.isView||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=Za(a[c]);return b}
var $a="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function ab(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<$a.length;f++)c=$a[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;var bb;var cb=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]},db=/&/g,eb=/</g,fb=/>/g,gb=/"/g,hb=/'/g,ib=/\x00/g,jb=/[\x00&<>"']/;var kb;a:{var lb=B.navigator;if(lb){var mb=lb.userAgent;if(mb){kb=mb;break a}}kb=""}function J(a){return-1!=kb.indexOf(a)}
;function nb(a){this.h=ob===ob?a:""}
nb.prototype.toString=function(){return this.h.toString()};
var ob={};var pb=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^\\/?#]*)@)?([^\\/?#]*?)(?::([0-9]+))?(?=[\\/?#]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function qb(a){return a?decodeURI(a):a}
function rb(a){return qb(a.match(pb)[3]||null)}
function sb(a){var b=a.match(pb);a=b[1];var c=b[2],d=b[3];b=b[4];var e="";a&&(e+=a+":");d&&(e+="//",c&&(e+=c+"@"),e+=d,b&&(e+=":"+b));return e}
function tb(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)tb(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function ub(a){var b=[],c;for(c in a)tb(c,a[c],b);return b.join("&")}
var vb=/#|$/;function wb(a,b){var c=a.search(vb);a:{var d=0;for(var e=b.length;0<=(d=a.indexOf(b,d))&&d<c;){var f=a.charCodeAt(d-1);if(38==f||63==f)if(f=a.charCodeAt(d+e),!f||61==f||38==f||35==f)break a;d+=e+1}d=-1}if(0>d)return null;e=a.indexOf("&",d);if(0>e||e>c)e=c;d+=b.length+1;return decodeURIComponent(a.substr(d,e-d).replace(/\+/g," "))}
;function K(a,b){var c=void 0;return new (c||(c=Promise))(function(d,e){function f(k){try{h(b.next(k))}catch(l){e(l)}}
function g(k){try{h(b["throw"](k))}catch(l){e(l)}}
function h(k){k.done?d(k.value):(new c(function(l){l(k.value)})).then(f,g)}
h((b=b.apply(a,void 0)).next())})}
;function xb(){return J("iPhone")&&!J("iPod")&&!J("iPad")}
;function yb(a){yb[" "](a);return a}
yb[" "]=Ca;var zb=J("Opera"),Ab=J("Trident")||J("MSIE"),Bb=J("Edge"),Cb=J("Gecko")&&!(-1!=kb.toLowerCase().indexOf("webkit")&&!J("Edge"))&&!(J("Trident")||J("MSIE"))&&!J("Edge"),Db=-1!=kb.toLowerCase().indexOf("webkit")&&!J("Edge");function Eb(){var a=B.document;return a?a.documentMode:void 0}
var Fb;a:{var Gb="",Hb=function(){var a=kb;if(Cb)return/rv:([^\);]+)(\)|;)/.exec(a);if(Bb)return/Edge\/([\d\.]+)/.exec(a);if(Ab)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(Db)return/WebKit\/(\S+)/.exec(a);if(zb)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
Hb&&(Gb=Hb?Hb[1]:"");if(Ab){var Ib=Eb();if(null!=Ib&&Ib>parseFloat(Gb)){Fb=String(Ib);break a}}Fb=Gb}var Jb=Fb,Kb;if(B.document&&Ab){var Lb=Eb();Kb=Lb?Lb:parseInt(Jb,10)||void 0}else Kb=void 0;var Mb=Kb;var Nb=xb()||J("iPod"),Ob=J("iPad"),Pb=J("Safari")&&!((J("Chrome")||J("CriOS"))&&!J("Edge")||J("Coast")||J("Opera")||J("Edge")||J("Edg/")||J("OPR")||J("Firefox")||J("FxiOS")||J("Silk")||J("Android"))&&!(xb()||J("iPad")||J("iPod"));var Qb={},Rb=null;var L=window;function Sb(a,b){this.width=a;this.height=b}
n=Sb.prototype;n.clone=function(){return new Sb(this.width,this.height)};
n.aspectRatio=function(){return this.width/this.height};
n.isEmpty=function(){return!(this.width*this.height)};
n.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
n.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
n.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function Tb(){var a=document;var b="IFRAME";"application/xhtml+xml"===a.contentType&&(b=b.toLowerCase());return a.createElement(b)}
function Ub(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;function Vb(a){var b=Wb;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a.call(void 0,b[c],c,b)}
function Xb(){var a=[];Vb(function(b){a.push(b)});
return a}
var Wb={La:"allow-forms",Ma:"allow-modals",Na:"allow-orientation-lock",Oa:"allow-pointer-lock",Pa:"allow-popups",Qa:"allow-popups-to-escape-sandbox",Ra:"allow-presentation",Sa:"allow-same-origin",Ta:"allow-scripts",Ua:"allow-top-navigation",Va:"allow-top-navigation-by-user-activation"},Yb=Na(function(){return Xb()});
function Zb(){var a=Tb(),b={};I(Yb(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
;var $b=(new Date).getTime();function ac(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));c=a.substring(0,a.indexOf("://"));if(!c)throw Error("URI is missing protocol: "+a);if("http"!==c&&"https"!==c&&"chrome-extension"!==c&&"moz-extension"!==c&&"file"!==c&&"android-app"!==c&&"chrome-search"!==c&&"chrome-untrusted"!==c&&"chrome"!==
c&&"app"!==c&&"devtools"!==c)throw Error("Invalid URI scheme in origin: "+c);a="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1);b=b.substring(0,d);if("http"===c&&"80"!==e||"https"===c&&"443"!==e)a=":"+e}return c+"://"+b+a}
;function bc(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;m=l=0}
function b(p){for(var r=g,q=0;64>q;q+=4)r[q/4]=p[q]<<24|p[q+1]<<16|p[q+2]<<8|p[q+3];for(q=16;80>q;q++)p=r[q-3]^r[q-8]^r[q-14]^r[q-16],r[q]=(p<<1|p>>>31)&4294967295;p=e[0];var y=e[1],C=e[2],A=e[3],Q=e[4];for(q=0;80>q;q++){if(40>q)if(20>q){var R=A^y&(C^A);var E=1518500249}else R=y^C^A,E=1859775393;else 60>q?(R=y&C|A&(y|C),E=2400959708):(R=y^C^A,E=3395469782);R=((p<<5|p>>>27)&4294967295)+R+Q+E+r[q]&4294967295;Q=A;A=C;C=(y<<30|y>>>2)&4294967295;y=p;p=R}e[0]=e[0]+p&4294967295;e[1]=e[1]+y&4294967295;e[2]=
e[2]+C&4294967295;e[3]=e[3]+A&4294967295;e[4]=e[4]+Q&4294967295}
function c(p,r){if("string"===typeof p){p=unescape(encodeURIComponent(p));for(var q=[],y=0,C=p.length;y<C;++y)q.push(p.charCodeAt(y));p=q}r||(r=p.length);q=0;if(0==l)for(;q+64<r;)b(p.slice(q,q+64)),q+=64,m+=64;for(;q<r;)if(f[l++]=p[q++],m++,64==l)for(l=0,b(f);q+64<r;)b(p.slice(q,q+64)),q+=64,m+=64}
function d(){var p=[],r=8*m;56>l?c(h,56-l):c(h,64-(l-56));for(var q=63;56<=q;q--)f[q]=r&255,r>>>=8;b(f);for(q=r=0;5>q;q++)for(var y=24;0<=y;y-=8)p[r++]=e[q]>>y&255;return p}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var l,m;a();return{reset:a,update:c,digest:d,xa:function(){for(var p=d(),r="",q=0;q<p.length;q++)r+="0123456789ABCDEF".charAt(Math.floor(p[q]/16))+"0123456789ABCDEF".charAt(p[q]%16);return r}}}
;function cc(a,b,c){var d=String(B.location.href);return d&&a&&b?[b,dc(ac(d),a,c||null)].join(" "):null}
function dc(a,b,c){var d=[],e=[];if(1==(Array.isArray(c)?2:1))return e=[b,a],I(d,function(h){e.push(h)}),ec(e.join(" "));
var f=[],g=[];I(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];I(d,function(h){e.push(h)});
a=ec(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function ec(a){var b=bc();b.update(a);return b.xa().toLowerCase()}
;var fc={};function gc(a){this.h=a||{cookie:""}}
n=gc.prototype;n.isEnabled=function(){if(!B.navigator.cookieEnabled)return!1;if(!this.isEmpty())return!0;this.set("TESTCOOKIESENABLED","1",{ea:60});if("1"!==this.get("TESTCOOKIESENABLED"))return!1;this.remove("TESTCOOKIESENABLED");return!0};
n.set=function(a,b,c){var d=!1;if("object"===typeof c){var e=c.eb;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.ea}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');void 0===h&&(h=-1);this.h.cookie=a+"="+b+(f?";domain="+f:"")+(g?";path="+g:"")+(0>h?"":0==h?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+1E3*h)).toUTCString())+(d?";secure":"")+(null!=e?";samesite="+e:"")};
n.get=function(a,b){for(var c=a+"=",d=(this.h.cookie||"").split(";"),e=0,f;e<d.length;e++){f=cb(d[e]);if(0==f.lastIndexOf(c,0))return f.substr(c.length);if(f==a)return""}return b};
n.remove=function(a,b,c){var d=void 0!==this.get(a);this.set(a,"",{ea:0,path:b,domain:c});return d};
n.isEmpty=function(){return!this.h.cookie};
n.clear=function(){for(var a=(this.h.cookie||"").split(";"),b=[],c=[],d,e,f=0;f<a.length;f++)e=cb(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));for(a=b.length-1;0<=a;a--)this.remove(b[a])};
var hc=new gc("undefined"==typeof document?null:document);function ic(a){return!!fc.FPA_SAMESITE_PHASE2_MOD||!(void 0===a||!a)}
function jc(a,b,c,d){(a=B[a])||(a=(new gc(document)).get(b));return a?cc(a,c,d):null}
function kc(a){var b=void 0===b?!1:b;var c=ac(String(B.location.href)),d=[];var e=b;e=void 0===e?!1:e;var f=B.__SAPISID||B.__APISID||B.__3PSAPISID||B.__OVERRIDE_SID;ic(e)&&(f=f||B.__1PSAPISID);if(f)e=!0;else{var g=new gc(document);f=g.get("SAPISID")||g.get("APISID")||g.get("__Secure-3PAPISID")||g.get("SID");ic(e)&&(f=f||g.get("__Secure-1PAPISID"));e=!!f}e&&(e=(c=0==c.indexOf("https:")||0==c.indexOf("chrome-extension:")||0==c.indexOf("moz-extension:"))?B.__SAPISID:B.__APISID,e||(e=new gc(document),
e=e.get(c?"SAPISID":"APISID")||e.get("__Secure-3PAPISID")),(e=e?cc(e,c?"SAPISIDHASH":"APISIDHASH",a):null)&&d.push(e),c&&ic(b)&&((b=jc("__1PSAPISID","__Secure-1PAPISID","SAPISID1PHASH",a))&&d.push(b),(a=jc("__3PSAPISID","__Secure-3PAPISID","SAPISID3PHASH",a))&&d.push(a)));return 0==d.length?null:d.join(" ")}
;function lc(){this.data_=[];this.h=-1}
lc.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&0===a%1&&this.data_[a]!=b&&(this.data_[a]=b,this.h=-1)};
lc.prototype.get=function(a){return!!this.data_[a]};
function mc(a){-1==a.h&&(a.h=Pa(a.data_,function(b,c,d){return c?b+Math.pow(2,d):b},0));
return a.h}
;function nc(a,b){this.j=a;this.l=b;this.i=0;this.h=null}
nc.prototype.get=function(){if(0<this.i){this.i--;var a=this.h;this.h=a.next;a.next=null}else a=this.j();return a};
function oc(a,b){a.l(b);100>a.i&&(a.i++,b.next=a.h,a.h=b)}
;var pc;function qc(){var a=B.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!J("Presto")&&(a=function(){var e=Tb();e.style.display="none";document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.close();var g="callImmediate"+Math.random(),h="file:"==f.location.protocol?"*":f.location.protocol+"//"+f.location.host;e=Ja(function(k){if(("*"==h||k.origin==h)&&k.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,h)}}});
if("undefined"!==typeof a&&!J("Trident")&&!J("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.ha;c.ha=null;e()}};
return function(e){d.next={ha:e};d=d.next;b.port2.postMessage(0)}}return function(e){B.setTimeout(e,0)}}
;function rc(a){B.setTimeout(function(){throw a;},0)}
;function sc(){this.i=this.h=null}
sc.prototype.add=function(a,b){var c=tc.get();c.set(a,b);this.i?this.i.next=c:this.h=c;this.i=c};
sc.prototype.remove=function(){var a=null;this.h&&(a=this.h,this.h=this.h.next,this.h||(this.i=null),a.next=null);return a};
var tc=new nc(function(){return new uc},function(a){return a.reset()});
function uc(){this.next=this.scope=this.h=null}
uc.prototype.set=function(a,b){this.h=a;this.scope=b;this.next=null};
uc.prototype.reset=function(){this.next=this.scope=this.h=null};function vc(a,b){wc||xc();yc||(wc(),yc=!0);zc.add(a,b)}
var wc;function xc(){if(B.Promise&&B.Promise.resolve){var a=B.Promise.resolve(void 0);wc=function(){a.then(Ac)}}else wc=function(){var b=Ac;
"function"!==typeof B.setImmediate||B.Window&&B.Window.prototype&&!J("Edge")&&B.Window.prototype.setImmediate==B.setImmediate?(pc||(pc=qc()),pc(b)):B.setImmediate(b)}}
var yc=!1,zc=new sc;function Ac(){for(var a;a=zc.remove();){try{a.h.call(a.scope)}catch(b){rc(b)}oc(tc,a)}yc=!1}
;function Bc(a,b){this.h=a[B.Symbol.iterator]();this.i=b;this.j=0}
Bc.prototype[Symbol.iterator]=function(){return this};
Bc.prototype.next=function(){var a=this.h.next();return{value:a.done?void 0:this.i.call(void 0,a.value,this.j++),done:a.done}};
function Cc(a,b){return new Bc(a,b)}
;function Dc(){this.blockSize=-1}
;function Ec(){this.blockSize=-1;this.blockSize=64;this.h=[];this.m=[];this.s=[];this.j=[];this.j[0]=128;for(var a=1;a<this.blockSize;++a)this.j[a]=0;this.l=this.i=0;this.reset()}
H(Ec,Dc);Ec.prototype.reset=function(){this.h[0]=1732584193;this.h[1]=4023233417;this.h[2]=2562383102;this.h[3]=271733878;this.h[4]=3285377520;this.l=this.i=0};
function Fc(a,b,c){c||(c=0);var d=a.s;if("string"===typeof b)for(var e=0;16>e;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;16>e;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(e=16;80>e;e++){var f=d[e-3]^d[e-8]^d[e-14]^d[e-16];d[e]=(f<<1|f>>>31)&4294967295}b=a.h[0];c=a.h[1];var g=a.h[2],h=a.h[3],k=a.h[4];for(e=0;80>e;e++){if(40>e)if(20>e){f=h^c&(g^h);var l=1518500249}else f=c^g^h,l=1859775393;else 60>e?(f=c&g|h&(c|g),l=2400959708):
(f=c^g^h,l=3395469782);f=(b<<5|b>>>27)+f+k+l+d[e]&4294967295;k=h;h=g;g=(c<<30|c>>>2)&4294967295;c=b;b=f}a.h[0]=a.h[0]+b&4294967295;a.h[1]=a.h[1]+c&4294967295;a.h[2]=a.h[2]+g&4294967295;a.h[3]=a.h[3]+h&4294967295;a.h[4]=a.h[4]+k&4294967295}
Ec.prototype.update=function(a,b){if(null!=a){void 0===b&&(b=a.length);for(var c=b-this.blockSize,d=0,e=this.m,f=this.i;d<b;){if(0==f)for(;d<=c;)Fc(this,a,d),d+=this.blockSize;if("string"===typeof a)for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.blockSize){Fc(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){Fc(this,e);f=0;break}}this.i=f;this.l+=b}};
Ec.prototype.digest=function(){var a=[],b=8*this.l;56>this.i?this.update(this.j,56-this.i):this.update(this.j,this.blockSize-(this.i-56));for(var c=this.blockSize-1;56<=c;c--)this.m[c]=b&255,b/=256;Fc(this,this.m);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.h[c]>>d&255,++b;return a};function Gc(a){var b=D("window.location.href");null==a&&(a='Unknown Error of type "null/undefined"');if("string"===typeof a)return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||B.$googDebugFname||b}catch(g){e="Not available",c=!0}b=Hc(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(null==
c){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,Ic[c])c=Ic[c];else{c=String(c);if(!Ic[c]){var f=/function\s+([^\(]+)/m.exec(c);Ic[c]=f?f[1]:"[Anonymous]"}c=Ic[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";"function"===typeof a.toString&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}a.stack=
b;return{message:a.message,name:a.name,lineNumber:a.lineNumber,fileName:a.fileName,stack:a.stack}}
function Hc(a,b){b||(b={});b[Jc(a)]=!0;var c=a.stack||"";(a=a.wa)&&!b[Jc(a)]&&(c+="\nCaused by: ",a.stack&&0==a.stack.indexOf(a.toString())||(c+="string"===typeof a?a:a.message+"\n"),c+=Hc(a,b));return c}
function Jc(a){var b="";"function"===typeof a.toString&&(b=""+a);return b+a.stack}
var Ic={};function Kc(){this.m=this.m;this.s=this.s}
Kc.prototype.m=!1;Kc.prototype.dispose=function(){this.m||(this.m=!0,this.R())};
Kc.prototype.R=function(){if(this.s)for(;this.s.length;)this.s.shift()()};var Lc="StopIteration"in B?B.StopIteration:{message:"StopIteration",stack:""};function Mc(){}
Mc.prototype.next=function(){throw Lc;};
Mc.prototype.C=function(){return this};function Nc(a){if(a instanceof Oc||a instanceof Pc||a instanceof Qc)return a;if("function"==typeof a.next)return new Oc(function(){return Rc(a)});
if("function"==typeof a[Symbol.iterator])return new Oc(function(){return a[Symbol.iterator]()});
if("function"==typeof a.C)return new Oc(function(){return Rc(a.C())});
throw Error("Not an iterator or iterable.");}
function Rc(a){if(!(a instanceof Mc))return a;var b=!1;return{next:function(){for(var c;!b;)try{c=a.next();break}catch(d){if(d!==Lc)throw d;b=!0}return{value:c,done:b}}}}
function Oc(a){this.i=a}
Oc.prototype.C=function(){return new Pc(this.i())};
Oc.prototype[Symbol.iterator]=function(){return new Qc(this.i())};
Oc.prototype.h=function(){return new Qc(this.i())};
function Pc(a){this.i=a}
v(Pc,Mc);Pc.prototype.next=function(){var a=this.i.next();if(a.done)throw Lc;return a.value};
Pc.prototype[Symbol.iterator]=function(){return new Qc(this.i)};
Pc.prototype.h=function(){return new Qc(this.i)};
function Qc(a){Oc.call(this,function(){return a});
this.j=a}
v(Qc,Oc);Qc.prototype.next=function(){return this.j.next()};function Sc(a,b){this.i={};this.h=[];this.j=this.size=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a)if(a instanceof Sc)for(c=Tc(a),d=0;d<c.length;d++)this.set(c[d],a.get(c[d]));else for(d in a)this.set(d,a[d])}
function Tc(a){Uc(a);return a.h.concat()}
n=Sc.prototype;n.has=function(a){return Vc(this.i,a)};
n.equals=function(a,b){if(this===a)return!0;if(this.size!=a.size)return!1;b=b||Wc;Uc(this);for(var c,d=0;c=this.h[d];d++)if(!b(this.get(c),a.get(c)))return!1;return!0};
function Wc(a,b){return a===b}
n.isEmpty=function(){return 0==this.size};
n.clear=function(){this.i={};this.j=this.size=this.h.length=0};
n.remove=function(a){return this.delete(a)};
n.delete=function(a){return Vc(this.i,a)?(delete this.i[a],--this.size,this.j++,this.h.length>2*this.size&&Uc(this),!0):!1};
function Uc(a){if(a.size!=a.h.length){for(var b=0,c=0;b<a.h.length;){var d=a.h[b];Vc(a.i,d)&&(a.h[c++]=d);b++}a.h.length=c}if(a.size!=a.h.length){var e={};for(c=b=0;b<a.h.length;)d=a.h[b],Vc(e,d)||(a.h[c++]=d,e[d]=1),b++;a.h.length=c}}
n.get=function(a,b){return Vc(this.i,a)?this.i[a]:b};
n.set=function(a,b){Vc(this.i,a)||(this.size+=1,this.h.push(a),this.j++);this.i[a]=b};
n.forEach=function(a,b){for(var c=Tc(this),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};
n.clone=function(){return new Sc(this)};
n.keys=function(){return Nc(this.C(!0)).h()};
n.values=function(){return Nc(this.C(!1)).h()};
n.entries=function(){var a=this;return Cc(this.keys(),function(b){return[b,a.get(b)]})};
n.C=function(a){Uc(this);var b=0,c=this.j,d=this,e=new Mc;e.next=function(){if(c!=d.j)throw Error("The map has changed since the iterator was created");if(b>=d.h.length)throw Lc;var f=d.h[b++];return a?f:d.i[f]};
return e};
function Vc(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
;var Xc=function(){if(!B.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{B.addEventListener("test",Ca,b),B.removeEventListener("test",Ca,b)}catch(c){}return a}();function Yc(a,b){this.type=a;this.currentTarget=this.target=b;this.defaultPrevented=this.i=!1}
Yc.prototype.stopPropagation=function(){this.i=!0};
Yc.prototype.preventDefault=function(){this.defaultPrevented=!0};function Zc(a,b){Yc.call(this,a?a.type:"");this.relatedTarget=this.currentTarget=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=this.offsetY=this.offsetX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.h=null;a&&this.init(a,b)}
H(Zc,Yc);var $c={2:"touch",3:"pen",4:"mouse"};
Zc.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.currentTarget=b;if(b=a.relatedTarget){if(Cb){a:{try{yb(b.nodeName);var e=!0;break a}catch(f){}e=!1}e||(b=null)}}else"mouseover"==c?b=a.fromElement:"mouseout"==c&&(b=a.toElement);this.relatedTarget=b;d?(this.clientX=void 0!==d.clientX?d.clientX:d.pageX,this.clientY=void 0!==d.clientY?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=
d.screenY||0):(this.offsetX=Db||void 0!==a.offsetX?a.offsetX:a.layerX,this.offsetY=Db||void 0!==a.offsetY?a.offsetY:a.layerY,this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||("keypress"==c?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=
a.pointerId||0;this.pointerType="string"===typeof a.pointerType?a.pointerType:$c[a.pointerType]||"";this.state=a.state;this.h=a;a.defaultPrevented&&Zc.G.preventDefault.call(this)};
Zc.prototype.stopPropagation=function(){Zc.G.stopPropagation.call(this);this.h.stopPropagation?this.h.stopPropagation():this.h.cancelBubble=!0};
Zc.prototype.preventDefault=function(){Zc.G.preventDefault.call(this);var a=this.h;a.preventDefault?a.preventDefault():a.returnValue=!1};var ad="closure_listenable_"+(1E6*Math.random()|0);var bd=0;function cd(a,b,c,d,e){this.listener=a;this.h=null;this.src=b;this.type=c;this.capture=!!d;this.aa=e;this.key=++bd;this.S=this.W=!1}
function dd(a){a.S=!0;a.listener=null;a.h=null;a.src=null;a.aa=null}
;function ed(a){this.src=a;this.listeners={};this.h=0}
ed.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.h++);var g=fd(a,b,d,e);-1<g?(b=a[g],c||(b.W=!1)):(b=new cd(b,this.src,f,!!d,e),b.W=c,a.push(b));return b};
ed.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=fd(e,b,c,d);return-1<b?(dd(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.listeners[a],this.h--),!0):!1};
function gd(a,b){var c=b.type;c in a.listeners&&Ra(a.listeners[c],b)&&(dd(b),0==a.listeners[c].length&&(delete a.listeners[c],a.h--))}
function fd(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.S&&f.listener==b&&f.capture==!!c&&f.aa==d)return e}return-1}
;var hd="closure_lm_"+(1E6*Math.random()|0),id={},jd=0;function kd(a,b,c,d,e){if(d&&d.once)ld(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)kd(a,b[f],c,d,e);else c=md(c),a&&a[ad]?a.ba(b,c,F(d)?!!d.capture:!!d,e):nd(a,b,c,!1,d,e)}
function nd(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=F(e)?!!e.capture:!!e,h=od(a);h||(a[hd]=h=new ed(a));c=h.add(b,c,d,g,f);if(!c.h){d=pd();c.h=d;d.src=a;d.listener=c;if(a.addEventListener)Xc||(e=g),void 0===e&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent(qd(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");jd++}}
function pd(){function a(c){return b.call(a.src,a.listener,c)}
var b=rd;return a}
function ld(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)ld(a,b[f],c,d,e);else c=md(c),a&&a[ad]?a.i.add(String(b),c,!0,F(d)?!!d.capture:!!d,e):nd(a,b,c,!0,d,e)}
function sd(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)sd(a,b[f],c,d,e);else(d=F(d)?!!d.capture:!!d,c=md(c),a&&a[ad])?a.i.remove(String(b),c,d,e):a&&(a=od(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=fd(b,c,d,e)),(c=-1<a?b[a]:null)&&td(c))}
function td(a){if("number"!==typeof a&&a&&!a.S){var b=a.src;if(b&&b[ad])gd(b.i,a);else{var c=a.type,d=a.h;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent(qd(c),d):b.addListener&&b.removeListener&&b.removeListener(d);jd--;(c=od(b))?(gd(c,a),0==c.h&&(c.src=null,b[hd]=null)):dd(a)}}}
function qd(a){return a in id?id[a]:id[a]="on"+a}
function rd(a,b){if(a.S)a=!0;else{b=new Zc(b,this);var c=a.listener,d=a.aa||a.src;a.W&&td(a);a=c.call(d,b)}return a}
function od(a){a=a[hd];return a instanceof ed?a:null}
var ud="__closure_events_fn_"+(1E9*Math.random()>>>0);function md(a){if("function"===typeof a)return a;a[ud]||(a[ud]=function(b){return a.handleEvent(b)});
return a[ud]}
;function vd(){Kc.call(this);this.i=new ed(this);this.da=this;this.M=null}
H(vd,Kc);vd.prototype[ad]=!0;n=vd.prototype;n.addEventListener=function(a,b,c,d){kd(this,a,b,c,d)};
n.removeEventListener=function(a,b,c,d){sd(this,a,b,c,d)};
n.dispatchEvent=function(a){var b=this.M;if(b){var c=[];for(var d=1;b;b=b.M)c.push(b),++d}b=this.da;d=a.type||a;if("string"===typeof a)a=new Yc(a,b);else if(a instanceof Yc)a.target=a.target||b;else{var e=a;a=new Yc(d,b);ab(a,e)}e=!0;if(c)for(var f=c.length-1;!a.i&&0<=f;f--){var g=a.currentTarget=c[f];e=wd(g,d,!0,a)&&e}a.i||(g=a.currentTarget=b,e=wd(g,d,!0,a)&&e,a.i||(e=wd(g,d,!1,a)&&e));if(c)for(f=0;!a.i&&f<c.length;f++)g=a.currentTarget=c[f],e=wd(g,d,!1,a)&&e;return e};
n.R=function(){vd.G.R.call(this);if(this.i){var a=this.i,b=0,c;for(c in a.listeners){for(var d=a.listeners[c],e=0;e<d.length;e++)++b,dd(d[e]);delete a.listeners[c];a.h--}}this.M=null};
n.ba=function(a,b,c,d){return this.i.add(String(a),b,!1,c,d)};
function wd(a,b,c,d){b=a.i.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.S&&g.capture==c){var h=g.listener,k=g.aa||g.src;g.W&&gd(a.i,g);e=!1!==h.call(k,d)&&e}}return e&&!d.defaultPrevented}
;var xd=B.JSON.stringify;function M(a){this.h=0;this.o=void 0;this.l=this.i=this.j=null;this.m=this.s=!1;if(a!=Ca)try{var b=this;a.call(void 0,function(c){yd(b,2,c)},function(c){yd(b,3,c)})}catch(c){yd(this,3,c)}}
function zd(){this.next=this.context=this.onRejected=this.i=this.h=null;this.j=!1}
zd.prototype.reset=function(){this.context=this.onRejected=this.i=this.h=null;this.j=!1};
var Ad=new nc(function(){return new zd},function(a){a.reset()});
function Bd(a,b,c){var d=Ad.get();d.i=a;d.onRejected=b;d.context=c;return d}
M.prototype.then=function(a,b,c){return Cd(this,"function"===typeof a?a:null,"function"===typeof b?b:null,c)};
M.prototype.$goog_Thenable=!0;M.prototype.cancel=function(a){if(0==this.h){var b=new Dd(a);vc(function(){Ed(this,b)},this)}};
function Ed(a,b){if(0==a.h)if(a.j){var c=a.j;if(c.i){for(var d=0,e=null,f=null,g=c.i;g&&(g.j||(d++,g.h==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.h&&1==d?Ed(c,b):(f?(d=f,d.next==c.l&&(c.l=d),d.next=d.next.next):Fd(c),Gd(c,e,3,b)))}a.j=null}else yd(a,3,b)}
function Hd(a,b){a.i||2!=a.h&&3!=a.h||Id(a);a.l?a.l.next=b:a.i=b;a.l=b}
function Cd(a,b,c,d){var e=Bd(null,null,null);e.h=new M(function(f,g){e.i=b?function(h){try{var k=b.call(d,h);f(k)}catch(l){g(l)}}:f;
e.onRejected=c?function(h){try{var k=c.call(d,h);void 0===k&&h instanceof Dd?g(h):f(k)}catch(l){g(l)}}:g});
e.h.j=a;Hd(a,e);return e.h}
M.prototype.B=function(a){this.h=0;yd(this,2,a)};
M.prototype.M=function(a){this.h=0;yd(this,3,a)};
function yd(a,b,c){if(0==a.h){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.h=1;a:{var d=c,e=a.B,f=a.M;if(d instanceof M){Hd(d,Bd(e||Ca,f||null,a));var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(l){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(F(d))try{var k=d.then;if("function"===typeof k){Jd(d,k,e,f,a);g=!0;break a}}catch(l){f.call(a,l);g=!0;break a}g=!1}}}g||(a.o=c,a.h=b,a.j=null,Id(a),3!=b||c instanceof Dd||Kd(a,c))}}
function Jd(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Id(a){a.s||(a.s=!0,vc(a.v,a))}
function Fd(a){var b=null;a.i&&(b=a.i,a.i=b.next,b.next=null);a.i||(a.l=null);return b}
M.prototype.v=function(){for(var a;a=Fd(this);)Gd(this,a,this.h,this.o);this.s=!1};
function Gd(a,b,c,d){if(3==c&&b.onRejected&&!b.j)for(;a&&a.m;a=a.j)a.m=!1;if(b.h)b.h.j=null,Ld(b,c,d);else try{b.j?b.i.call(b.context):Ld(b,c,d)}catch(e){Md.call(null,e)}oc(Ad,b)}
function Ld(a,b,c){2==b?a.i.call(a.context,c):a.onRejected&&a.onRejected.call(a.context,c)}
function Kd(a,b){a.m=!0;vc(function(){a.m&&Md.call(null,b)})}
var Md=rc;function Dd(a){La.call(this,a)}
H(Dd,La);Dd.prototype.name="cancel";function O(a){Kc.call(this);this.o=1;this.j=[];this.l=0;this.h=[];this.i={};this.v=!!a}
H(O,Kc);n=O.prototype;n.subscribe=function(a,b,c){var d=this.i[a];d||(d=this.i[a]=[]);var e=this.o;this.h[e]=a;this.h[e+1]=b;this.h[e+2]=c;this.o=e+3;d.push(e);return e};
function Nd(a,b,c){var d=Od;if(a=d.i[a]){var e=d.h;(a=Qa(a,function(f){return e[f+1]==b&&e[f+2]==c}))&&d.T(a)}}
n.T=function(a){var b=this.h[a];if(b){var c=this.i[b];0!=this.l?(this.j.push(a),this.h[a+1]=Ca):(c&&Ra(c,a),delete this.h[a],delete this.h[a+1],delete this.h[a+2])}return!!b};
n.O=function(a,b){var c=this.i[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.v)for(e=0;e<c.length;e++){var g=c[e];Pd(this.h[g+1],this.h[g+2],d)}else{this.l++;try{for(e=0,f=c.length;e<f;e++)g=c[e],this.h[g+1].apply(this.h[g+2],d)}finally{if(this.l--,0<this.j.length&&0==this.l)for(;c=this.j.pop();)this.T(c)}}return 0!=e}return!1};
function Pd(a,b,c){vc(function(){a.apply(b,c)})}
n.clear=function(a){if(a){var b=this.i[a];b&&(I(b,this.T,this),delete this.i[a])}else this.h.length=0,this.i={}};
n.R=function(){O.G.R.call(this);this.clear();this.j.length=0};function Qd(a){this.h=a}
Qd.prototype.set=function(a,b){void 0===b?this.h.remove(a):this.h.set(a,xd(b))};
Qd.prototype.get=function(a){try{var b=this.h.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Qd.prototype.remove=function(a){this.h.remove(a)};function Rd(a){this.h=a}
H(Rd,Qd);function Sd(a){this.data=a}
function Td(a){return void 0===a||a instanceof Sd?a:new Sd(a)}
Rd.prototype.set=function(a,b){Rd.G.set.call(this,a,Td(b))};
Rd.prototype.i=function(a){a=Rd.G.get.call(this,a);if(void 0===a||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Rd.prototype.get=function(a){if(a=this.i(a)){if(a=a.data,void 0===a)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function Ud(a){this.h=a}
H(Ud,Rd);Ud.prototype.set=function(a,b,c){if(b=Td(b)){if(c){if(c<Date.now()){Ud.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Date.now()}Ud.G.set.call(this,a,b)};
Ud.prototype.i=function(a){var b=Ud.G.i.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Date.now()||c&&c>Date.now())Ud.prototype.remove.call(this,a);else return b}};function Vd(){}
;function Wd(){}
H(Wd,Vd);Wd.prototype[Symbol.iterator]=function(){return Nc(this.C(!0)).h()};
Wd.prototype.clear=function(){var a=Array.from(this);a=u(a);for(var b=a.next();!b.done;b=a.next())this.remove(b.value)};function Xd(a){this.h=a}
H(Xd,Wd);n=Xd.prototype;n.isAvailable=function(){if(!this.h)return!1;try{return this.h.setItem("__sak","1"),this.h.removeItem("__sak"),!0}catch(a){return!1}};
n.set=function(a,b){try{this.h.setItem(a,b)}catch(c){if(0==this.h.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
n.get=function(a){a=this.h.getItem(a);if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
n.remove=function(a){this.h.removeItem(a)};
n.C=function(a){var b=0,c=this.h,d=new Mc;d.next=function(){if(b>=c.length)throw Lc;var e=c.key(b++);if(a)return e;e=c.getItem(e);if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return e};
return d};
n.clear=function(){this.h.clear()};
n.key=function(a){return this.h.key(a)};function Yd(){var a=null;try{a=window.localStorage||null}catch(b){}this.h=a}
H(Yd,Xd);function Zd(a,b){this.i=a;this.h=null;if(Ab&&!(9<=Number(Mb))){$d||($d=new Sc);this.h=$d.get(a);this.h||(b?this.h=document.getElementById(b):(this.h=document.createElement("userdata"),this.h.addBehavior("#default#userData"),document.body.appendChild(this.h)),$d.set(a,this.h));try{this.h.load(this.i)}catch(c){this.h=null}}}
H(Zd,Wd);var ae={".":".2E","!":".21","~":".7E","*":".2A","'":".27","(":".28",")":".29","%":"."},$d=null;function be(a){return"_"+encodeURIComponent(a).replace(/[.!~*'()%]/g,function(b){return ae[b]})}
n=Zd.prototype;n.isAvailable=function(){return!!this.h};
n.set=function(a,b){this.h.setAttribute(be(a),b);ce(this)};
n.get=function(a){a=this.h.getAttribute(be(a));if("string"!==typeof a&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
n.remove=function(a){this.h.removeAttribute(be(a));ce(this)};
n.C=function(a){var b=0,c=this.h.XMLDocument.documentElement.attributes,d=new Mc;d.next=function(){if(b>=c.length)throw Lc;var e=c[b++];if(a)return decodeURIComponent(e.nodeName.replace(/\./g,"%")).substr(1);e=e.nodeValue;if("string"!==typeof e)throw"Storage mechanism: Invalid value was encountered";return e};
return d};
n.clear=function(){for(var a=this.h.XMLDocument.documentElement,b=a.attributes.length;0<b;b--)a.removeAttribute(a.attributes[b-1].nodeName);ce(this)};
function ce(a){try{a.h.save(a.i)}catch(b){throw"Storage mechanism: Quota exceeded";}}
;function de(a,b){this.i=a;this.h=b+"::"}
H(de,Wd);de.prototype.set=function(a,b){this.i.set(this.h+a,b)};
de.prototype.get=function(a){return this.i.get(this.h+a)};
de.prototype.remove=function(a){this.i.remove(this.h+a)};
de.prototype.C=function(a){var b=this.i.C(!0),c=this,d=new Mc;d.next=function(){for(var e=b.next();e.substr(0,c.h.length)!=c.h;)e=b.next();return a?e.substr(c.h.length):c.i.get(e)};
return d};var ee,fe,ge=B.window,he=(null===(ee=null===ge||void 0===ge?void 0:ge.yt)||void 0===ee?void 0:ee.config_)||(null===(fe=null===ge||void 0===ge?void 0:ge.ytcfg)||void 0===fe?void 0:fe.data_)||{};G("yt.config_",he);function ie(a){for(var b=0;b<arguments.length;++b);b=arguments;1<b.length?he[b[0]]=b[1]:1===b.length&&Object.assign(he,b[0])}
function P(a,b){return a in he?he[a]:b}
;var je=[];function ke(a){je.forEach(function(b){return b(a)})}
function le(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){me(b)}}:a}
function me(a){var b=D("yt.logging.errors.log");b?b(a,"ERROR",void 0,void 0,void 0):(b=P("ERRORS",[]),b.push([a,"ERROR",void 0,void 0,void 0]),ie("ERRORS",b));ke(a)}
function ne(a){var b=D("yt.logging.errors.log");b?b(a,"WARNING",void 0,void 0,void 0):(b=P("ERRORS",[]),b.push([a,"WARNING",void 0,void 0,void 0]),ie("ERRORS",b))}
;var oe=0;G("ytDomDomGetNextId",D("ytDomDomGetNextId")||function(){return++oe});var pe={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function qe(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.rotation=this.clientY=this.clientX=0;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in pe||(this[b]=a[b]);this.rotation=a.rotation;var c=a.target||a.srcElement;c&&3==c.nodeType&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;if(d)try{d=d.nodeName?
d:null}catch(e){d=null}else"mouseover"==this.type?d=a.fromElement:"mouseout"==this.type&&(d=a.toElement);this.relatedTarget=d;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey}}catch(e){}}
qe.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
qe.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
qe.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var Xa=B.ytEventsEventsListeners||{};G("ytEventsEventsListeners",Xa);var re=B.ytEventsEventsCounter||{count:0};G("ytEventsEventsCounter",re);
function se(a,b,c,d){d=void 0===d?{}:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return Wa(function(e){var f="boolean"===typeof e[4]&&e[4]==!!d,g=F(e[4])&&F(d)&&Ya(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
function te(a){a&&("string"==typeof a&&(a=[a]),I(a,function(b){if(b in Xa){var c=Xa[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?ue()||"boolean"===typeof c?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete Xa[b]}}))}
var ue=Na(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});
function ve(a,b,c){var d=void 0===d?{}:d;if(a&&(a.addEventListener||a.attachEvent)){var e=se(a,b,c,d);if(!e){e=++re.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new qe(h);if(!Ub(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new qe(h);
h.currentTarget=a;return c.call(a,h)};
g=le(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),ue()||"boolean"===typeof d?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);Xa[e]=[a,b,c,g,d]}}}
;function we(a,b){"function"===typeof a&&(a=le(a));return window.setTimeout(a,b)}
function xe(a){"function"===typeof a&&(a=le(a));return window.setInterval(a,250)}
;var ye=/^[\w.]*$/,ze={q:!0,search_query:!0};function Ae(a,b){b=a.split(b);for(var c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(1==f.length&&f[0]||2==f.length)try{var g=Be(f[0]||""),h=Be(f[1]||"");g in c?Array.isArray(c[g])?Ua(c[g],h):c[g]=[c[g],h]:c[g]=h}catch(p){var k=p,l=f[0],m=String(Ae);k.args=[{key:l,value:f[1],query:a,method:Ce==m?"unchanged":m}];ze.hasOwnProperty(l)||ne(k)}}return c}
var Ce=String(Ae);function De(a){var b=[];Va(a,function(c,d){var e=encodeURIComponent(String(d)),f;Array.isArray(c)?f=c:f=[c];I(f,function(g){""==g?b.push(e):b.push(e+"="+encodeURIComponent(String(g)))})});
return b.join("&")}
function Ee(a){"?"==a.charAt(0)&&(a=a.substr(1));return Ae(a,"&")}
function Fe(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=Ee(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);b=a;a=ub(e);a?(c=b.indexOf("#"),0>c&&(c=b.length),f=b.indexOf("?"),0>f||f>c?(f=c,e=""):e=b.substring(f+1,c),b=[b.substr(0,f),e,b.substr(c)],c=b[1],b[1]=a?c?c+"&"+a:a:c,a=b[0]+(b[1]?"?"+b[1]:"")+b[2]):a=b;return a+d}
function Ge(a){if(!b)var b=window.location.href;var c=a.match(pb)[1]||null,d=rb(a);c&&d?(a=a.match(pb),b=b.match(pb),a=a[3]==b[3]&&a[1]==b[1]&&a[4]==b[4]):a=d?rb(b)==d&&(Number(b.match(pb)[4]||null)||null)==(Number(a.match(pb)[4]||null)||null):!0;return a}
function Be(a){return a&&a.match(ye)?a:decodeURIComponent(a.replace(/\+/g," "))}
;function S(a){a=He(a);return"string"===typeof a&&"false"===a?!1:!!a}
function Ie(a,b){a=He(a);return void 0===a&&void 0!==b?b:Number(a||0)}
function He(a){var b=P("EXPERIMENTS_FORCED_FLAGS",{});return void 0!==b[a]?b[a]:P("EXPERIMENT_FLAGS",{})[a]}
;function Je(){}
function Ke(a,b){return Le(a,0,b)}
function Me(a,b){return Le(a,1,b)}
;function Ne(){Je.apply(this,arguments)}
v(Ne,Je);function Le(a,b,c){void 0!==c&&Number.isNaN(Number(c))&&(c=void 0);var d=D("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):we(a,c||0)}
function Oe(a){if(void 0===a||!Number.isNaN(Number(a))){var b=D("yt.scheduler.instance.cancelJob");b?b(a):window.clearTimeout(a)}}
Ne.prototype.start=function(){var a=D("yt.scheduler.instance.start");a&&a()};Ne.h||(Ne.h=new Ne);function Pe(a){var b=Qe;a=void 0===a?D("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=$b;e.flash="0";a:{try{var f=b.h.top.location.href}catch(wa){f=2;break a}f=f?f===b.i.location.href?0:1:2}e=(e.frm=f,e);e.u_tz=-(new Date).getTimezoneOffset();var g=void 0===g?L:g;try{var h=g.history.length}catch(wa){h=0}e.u_his=h;e.u_java=!!L.navigator&&"unknown"!==typeof L.navigator.javaEnabled&&!!L.navigator.javaEnabled&&L.navigator.javaEnabled();L.screen&&(e.u_h=L.screen.height,e.u_w=L.screen.width,
e.u_ah=L.screen.availHeight,e.u_aw=L.screen.availWidth,e.u_cd=L.screen.colorDepth);L.navigator&&L.navigator.plugins&&(e.u_nplug=L.navigator.plugins.length);L.navigator&&L.navigator.mimeTypes&&(e.u_nmime=L.navigator.mimeTypes.length);h=b.h;try{var k=h.screenX;var l=h.screenY}catch(wa){}try{var m=h.outerWidth;var p=h.outerHeight}catch(wa){}try{var r=h.innerWidth;var q=h.innerHeight}catch(wa){}try{var y=h.screenLeft;var C=h.screenTop}catch(wa){}try{r=h.innerWidth,q=h.innerHeight}catch(wa){}try{var A=
h.screen.availWidth;var Q=h.screen.availTop}catch(wa){}k=[y,C,k,l,A,Q,m,p,r,q];l=b.h.top;try{var R=(l||window).document,E="CSS1Compat"==R.compatMode?R.documentElement:R.body;var N=(new Sb(E.clientWidth,E.clientHeight)).round()}catch(wa){N=new Sb(-12245933,-12245933)}R=N;N={};E=new lc;B.SVGElement&&B.document.createElementNS&&E.set(0);l=Zb();l["allow-top-navigation-by-user-activation"]&&E.set(1);l["allow-popups-to-escape-sandbox"]&&E.set(2);B.crypto&&B.crypto.subtle&&E.set(3);B.TextDecoder&&B.TextEncoder&&
E.set(4);E=mc(E);N.bc=E;N.bih=R.height;N.biw=R.width;N.brdim=k.join();b=b.i;b=(N.vis={visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""]||0,N.wgl=!!L.WebGLRenderingContext,N);c=d.call(c,e,b);c.ca_type="image";a&&(c.bid=a);return c}
var Qe=new function(){var a=window.document;this.h=window;this.i=a};
G("yt.ads_.signals_.getAdSignalsString",function(a){return De(Pe(a))});var Re="XMLHttpRequest"in B?function(){return new XMLHttpRequest}:null;
function Se(){if(!Re)return null;var a=Re();return"open"in a?a:null}
;var Te={Authorization:"AUTHORIZATION","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-Youtube-Chrome-Connected":"CHROME_CONNECTED_HEADER","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL","X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},
Ue="app debugcss debugjs expflag force_ad_params force_ad_encrypted force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address client_dev_root_url".split(" "),Ve=!1;
function We(a,b){b=void 0===b?{}:b;var c=Ge(a),d=S("web_ajax_ignore_global_headers_if_set"),e;for(e in Te){var f=P(Te[e]);!f||!c&&rb(a)||d&&void 0!==b[e]||(b[e]=f)}if(c||!rb(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());if(c||!rb(a)){try{var g=(new Intl.DateTimeFormat).resolvedOptions().timeZone}catch(h){}g&&(b["X-YouTube-Time-Zone"]=g)}if(c||!rb(a))b["X-YouTube-Ad-Signals"]=De(Pe(void 0));return b}
function Xe(a){var b=window.location.search,c=rb(a);S("debug_handle_relative_url_for_query_forward_killswitch")||c||!Ge(a)||(c=document.location.hostname);var d=qb(a.match(pb)[5]||null);d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=Ee(b),f={};I(Ue,function(g){e[g]&&(f[g]=e[g])});
return Fe(a,f||{},!1)}
function Ye(a,b){var c=b.format||"JSON";a=Ze(a,b);var d=$e(a,b),e=!1,f=af(a,function(k){if(!e){e=!0;h&&window.clearTimeout(h);a:switch(k&&"status"in k?k.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:var l=!0;break a;default:l=!1}var m=null,p=400<=k.status&&500>k.status,r=500<=k.status&&600>k.status;if(l||p||r)m=bf(a,c,k,b.convertToSafeHtml);if(l)a:if(k&&204==k.status)l=!0;else{switch(c){case "XML":l=0==parseInt(m&&m.return_code,10);break a;case "RAW":l=!0;break a}l=
!!m}m=m||{};p=b.context||B;l?b.onSuccess&&b.onSuccess.call(p,k,m):b.onError&&b.onError.call(p,k,m);b.onFinish&&b.onFinish.call(p,k,m)}},b.method,d,b.headers,b.responseType,b.withCredentials);
if(b.onTimeout&&0<b.timeout){var g=b.onTimeout;var h=we(function(){e||(e=!0,f.abort(),window.clearTimeout(h),g.call(b.context||B,f))},b.timeout)}}
function Ze(a,b){b.includeDomain&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=P("XSRF_FIELD_NAME",void 0);if(b=b.urlParams)b[c]&&delete b[c],a=Fe(a,b||{},!0);return a}
function $e(a,b){var c=P("XSRF_FIELD_NAME",void 0),d=P("XSRF_TOKEN",void 0),e=b.postBody||"",f=b.postParams,g=P("XSRF_FIELD_NAME",void 0),h;b.headers&&(h=b.headers["Content-Type"]);b.excludeXsrf||rb(a)&&!b.withCredentials&&rb(a)!=document.location.hostname||"POST"!=b.method||h&&"application/x-www-form-urlencoded"!=h||b.postParams&&b.postParams[g]||(f||(f={}),f[c]=d);f&&"string"===typeof e&&(e=Ee(e),ab(e,f),e=b.postBodyFormat&&"JSON"==b.postBodyFormat?JSON.stringify(e):ub(e));if(!(a=e)&&(a=f)){a:{for(var k in f){f=
!1;break a}f=!0}a=!f}!Ve&&a&&"POST"!=b.method&&(Ve=!0,me(Error("AJAX request with postData should use POST")));return e}
function bf(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,ne(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&0<=a.indexOf("json")&&(")]}'\n"===f.substring(0,5)&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?cf(a):null)e={},I(a.getElementsByTagName("*"),function(g){e[g.tagName]=df(g)})}d&&ef(e);
return e}
function ef(a){if(F(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d=a[b];if(void 0===bb){var e=null;var f=B.trustedTypes;if(f&&f.createPolicy){try{e=f.createPolicy("goog#html",{createHTML:Ka,createScript:Ka,createScriptURL:Ka})}catch(g){B.console&&B.console.error(g.message)}bb=e}else bb=e}d=(e=bb)?e.createHTML(d):d;a[c]=new nb(d)}else ef(a[b])}}
function cf(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function df(a){var b="";I(a.childNodes,function(c){b+=c.nodeValue});
return b}
function af(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&le(b)(k)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var k=Se();if(!k)return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;S("debug_forward_web_query_parameters")&&(a=Xe(a));k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);c="POST"==c&&(void 0===window.FormData||!(d instanceof FormData));if(e=We(a,e))for(var l in e)k.setRequestHeader(l,e[l]),"content-type"==l.toLowerCase()&&(c=!1);c&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);
return k}
;var ff=Nb||Ob;var gf={},hf=0;function jf(a,b,c){c=void 0===c?"":c;if(kf(a,c))b&&b();else if(c=void 0===c?"":c,a)if(c)af(a,b,"POST",c,void 0);else if(P("USE_NET_AJAX_FOR_PING_TRANSPORT",!1))af(a,b,"GET","",void 0);else{b:{try{var d=new Ma({url:a});if(d.j&&d.i||d.l){var e=qb(a.match(pb)[5]||null);var f=!(!e||!e.endsWith("/aclk")||"1"!==wb(a,"ri"));break b}}catch(g){}f=!1}f?kf(a)?(b&&b(),f=!0):f=!1:f=!1;f||lf(a,b)}}
function kf(a,b){try{if(window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,void 0===b?"":b))return!0}catch(c){}return!1}
function lf(a,b){var c=new Image,d=""+hf++;gf[d]=c;c.onload=c.onerror=function(){b&&gf[d]&&b();delete gf[d]};
c.src=a}
;var mf=B.ytPubsubPubsubInstance||new O,nf=B.ytPubsubPubsubSubscribedKeys||{},of=B.ytPubsubPubsubTopicToKeys||{},pf=B.ytPubsubPubsubIsSynchronous||{};O.prototype.subscribe=O.prototype.subscribe;O.prototype.unsubscribeByKey=O.prototype.T;O.prototype.publish=O.prototype.O;O.prototype.clear=O.prototype.clear;G("ytPubsubPubsubInstance",mf);G("ytPubsubPubsubTopicToKeys",of);G("ytPubsubPubsubIsSynchronous",pf);G("ytPubsubPubsubSubscribedKeys",nf);var qf=window,T=qf.ytcsi&&qf.ytcsi.now?qf.ytcsi.now:qf.performance&&qf.performance.timing&&qf.performance.now&&qf.performance.timing.navigationStart?function(){return qf.performance.timing.navigationStart+qf.performance.now()}:function(){return(new Date).getTime()};var rf=Ie("initial_gel_batch_timeout",2E3),sf=Math.pow(2,16)-1,tf=null,uf=0,vf=void 0,wf=0,xf=0,yf=0,zf=!0,Af=B.ytLoggingTransportGELQueue_||new Map;G("ytLoggingTransportGELQueue_",Af);var Bf=B.ytLoggingTransportTokensToCttTargetIds_||{};G("ytLoggingTransportTokensToCttTargetIds_",Bf);
function Cf(a,b){if("log_event"===a.endpoint){var c="";a.Y?c="visitorOnlyApprovedKey":a.H&&(Bf[a.H.token]=Df(a.H),c=a.H.token);var d=Af.get(c)||[];Af.set(c,d);d.push(a.payload);b&&(vf=new b);a=Ie("tvhtml5_logging_max_batch")||Ie("web_logging_max_batch")||100;b=T();d.length>=a?Ef({writeThenSend:!0}):10<=b-yf&&(Ff(),yf=b)}}
function Gf(a,b){if("log_event"===a.endpoint){var c="";a.Y?c="visitorOnlyApprovedKey":a.H&&(Bf[a.H.token]=Df(a.H),c=a.H.token);var d=new Map;d.set(c,[a.payload]);b&&(vf=new b);return new M(function(e){vf&&vf.isReady()?Hf(d,e,{bypassNetworkless:!0}):e()})}}
function Ef(a){a=void 0===a?{}:a;new M(function(b){window.clearTimeout(wf);window.clearTimeout(xf);xf=0;vf&&vf.isReady()?(Hf(Af,b,a),Af.clear()):(Ff(),b())})}
function Ff(){S("web_gel_timeout_cap")&&!xf&&(xf=we(function(){Ef({writeThenSend:!0})},6E4));
window.clearTimeout(wf);var a=P("LOGGING_BATCH_TIMEOUT",Ie("web_gel_debounce_ms",1E4));S("shorten_initial_gel_batch_timeout")&&zf&&(a=rf);wf=we(function(){Ef({writeThenSend:!0})},a)}
function Hf(a,b,c){var d=vf;c=void 0===c?{}:c;var e=Math.round(T()),f=a.size;a=u(a);for(var g=a.next();!g.done;g=a.next()){var h=u(g.value);g=h.next().value;var k=h.next().value;h=Za({context:If(d.config_||Jf())});h.events=k;(k=Bf[g])&&Kf(h,g,k);delete Bf[g];g="visitorOnlyApprovedKey"===g;Lf(h,e,g);S("send_beacon_before_gel")&&window.navigator&&window.navigator.sendBeacon&&!c.writeThenSend&&jf("/generate_204");Mf(d,"log_event",h,{retry:!0,onSuccess:function(){f--;f||b();uf=Math.round(T()-e)},
onError:function(){f--;f||b()},
na:c,Y:g});zf=!1}}
function Lf(a,b,c){a.requestTimeMs=String(b);S("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);!c&&(b=P("EVENT_ID",void 0))&&((c=P("BATCH_CLIENT_COUNTER",void 0)||0)||(c=Math.floor(Math.random()*sf/2)),c++,c>sf&&(c=1),ie("BATCH_CLIENT_COUNTER",c),b={serializedEventId:b,clientCounter:String(c)},a.serializedClientEventId=b,tf&&uf&&S("log_gel_rtt_web")&&(a.previousBatchInfo={serializedClientEventId:tf,roundtripMs:String(uf)}),tf=b,uf=0)}
function Kf(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
function Df(a){var b={};a.videoId?b.videoId=a.videoId:a.playlistId&&(b.playlistId=a.playlistId);return b}
;var Nf=B.ytLoggingGelSequenceIdObj_||{};G("ytLoggingGelSequenceIdObj_",Nf);function Of(){if(!B.matchMedia)return"WEB_DISPLAY_MODE_UNKNOWN";try{return B.matchMedia("(display-mode: standalone)").matches?"WEB_DISPLAY_MODE_STANDALONE":B.matchMedia("(display-mode: minimal-ui)").matches?"WEB_DISPLAY_MODE_MINIMAL_UI":B.matchMedia("(display-mode: fullscreen)").matches?"WEB_DISPLAY_MODE_FULLSCREEN":B.matchMedia("(display-mode: browser)").matches?"WEB_DISPLAY_MODE_BROWSER":"WEB_DISPLAY_MODE_UNKNOWN"}catch(a){return"WEB_DISPLAY_MODE_UNKNOWN"}}
;G("ytglobal.prefsUserPrefsPrefs_",D("ytglobal.prefsUserPrefsPrefs_")||{});var Pf={bluetooth:"CONN_DISCO",cellular:"CONN_CELLULAR_UNKNOWN",ethernet:"CONN_WIFI",none:"CONN_NONE",wifi:"CONN_WIFI",wimax:"CONN_CELLULAR_4G",other:"CONN_UNKNOWN",unknown:"CONN_UNKNOWN","slow-2g":"CONN_CELLULAR_2G","2g":"CONN_CELLULAR_2G","3g":"CONN_CELLULAR_3G","4g":"CONN_CELLULAR_4G"},Qf={"slow-2g":"EFFECTIVE_CONNECTION_TYPE_SLOW_2G","2g":"EFFECTIVE_CONNECTION_TYPE_2G","3g":"EFFECTIVE_CONNECTION_TYPE_3G","4g":"EFFECTIVE_CONNECTION_TYPE_4G"};
function Rf(){var a=B.navigator;return a?a.connection:void 0}
;function Sf(){return"INNERTUBE_API_KEY"in he&&"INNERTUBE_API_VERSION"in he}
function Jf(){return{innertubeApiKey:P("INNERTUBE_API_KEY",void 0),innertubeApiVersion:P("INNERTUBE_API_VERSION",void 0),Aa:P("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),Ba:P("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),innertubeContextClientVersion:P("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0),Da:P("INNERTUBE_CONTEXT_HL",void 0),Ca:P("INNERTUBE_CONTEXT_GL",void 0),Ea:P("INNERTUBE_HOST_OVERRIDE",void 0)||"",Ga:!!P("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),Fa:!!P("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:P("SERIALIZED_CLIENT_CONFIG_DATA",void 0)}}
function If(a){var b={client:{hl:a.Da,gl:a.Ca,clientName:a.Ba,clientVersion:a.innertubeContextClientVersion,configInfo:a.Aa}};S("web_include_ua_it_context")&&navigator.userAgent&&(b.client.userAgent=String(navigator.userAgent));var c=B.devicePixelRatio;c&&1!=c&&(b.client.screenDensityFloat=String(c));c=P("EXPERIMENTS_TOKEN","");""!==c&&(b.client.experimentsToken=c);c=[];var d=P("EXPERIMENTS_FORCED_FLAGS",{});for(e in d)c.push({key:e,value:String(d[e])});var e=P("EXPERIMENT_FLAGS",{});for(var f in e)f.startsWith("force_")&&
void 0===d[f]&&c.push({key:f,value:String(e[f])});0<c.length&&(b.request={internalExperimentFlags:c});f=b.client.clientName;if("WEB"===f||"MWEB"===f||1===f||2===f){if(!S("web_include_display_mode_killswitch")){var g;b.client.mainAppWebInfo=null!=(g=b.client.mainAppWebInfo)?g:{};b.client.mainAppWebInfo.webDisplayMode=Of()}}else if(g=b.client.clientName,("WEB_REMIX"===g||76===g)&&!S("music_web_display_mode_killswitch")){var h;b.client.ma=null!=(h=b.client.ma)?h:{};b.client.ma.webDisplayMode=Of()}a.appInstallData&&
(b.client.configInfo=b.client.configInfo||{},b.client.configInfo.appInstallData=a.appInstallData);P("DELEGATED_SESSION_ID")&&!S("pageid_as_header_web")&&(b.user={onBehalfOfUser:P("DELEGATED_SESSION_ID")});a:{if(h=Rf()){a=Pf[h.type||"unknown"]||"CONN_UNKNOWN";h=Pf[h.effectiveType||"unknown"]||"CONN_UNKNOWN";"CONN_CELLULAR_UNKNOWN"===a&&"CONN_UNKNOWN"!==h&&(a=h);if("CONN_UNKNOWN"!==a)break a;if("CONN_UNKNOWN"!==h){a=h;break a}}a=void 0}a&&(b.client.connectionType=a);S("web_log_effective_connection_type")&&
(a=Rf(),a=null!==a&&void 0!==a&&a.effectiveType?Qf.hasOwnProperty(a.effectiveType)?Qf[a.effectiveType]:"EFFECTIVE_CONNECTION_TYPE_UNKNOWN":void 0,a&&(b.client.effectiveConnectionType=a));a=Object;h=a.assign;g=b.client;f={};e=u(Object.entries(Ee(P("DEVICE",""))));for(c=e.next();!c.done;c=e.next())d=u(c.value),c=d.next().value,d=d.next().value,"cbrand"===c?f.deviceMake=d:"cmodel"===c?f.deviceModel=d:"cbr"===c?f.browserName=d:"cbrver"===c?f.browserVersion=d:"cos"===c?f.osName=d:"cosver"===c?f.osVersion=
d:"cplatform"===c&&(f.platform=d);b.client=h.call(a,g,f);return b}
function Tf(a,b,c){c=void 0===c?{}:c;var d={"X-Goog-Visitor-Id":c.visitorData||P("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;(b=c.Xa||P("AUTHORIZATION"))||(a?b="Bearer "+D("gapi.auth.getToken")().Wa:b=kc([]));b&&(d.Authorization=b,d["X-Goog-AuthUser"]=P("SESSION_INDEX",0),S("pageid_as_header_web")&&(d["X-Goog-PageId"]=P("DELEGATED_SESSION_ID")));return d}
;function Uf(a){a=Object.assign({},a);delete a.Authorization;var b=kc();if(b){var c=new Ec;c.update(P("INNERTUBE_API_KEY",void 0));c.update(b);b=c.digest();c=3;Da(b);void 0===c&&(c=0);if(!Rb){Rb={};for(var d="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),e=["+/=","+/","-_=","-_.","-_"],f=0;5>f;f++){var g=d.concat(e[f].split(""));Qb[f]=g;for(var h=0;h<g.length;h++){var k=g[h];void 0===Rb[k]&&(Rb[k]=h)}}}c=Qb[c];d=[];for(e=0;e<b.length;e+=3){var l=b[e],m=(f=e+1<b.length)?
b[e+1]:0;k=(g=e+2<b.length)?b[e+2]:0;h=l>>2;l=(l&3)<<4|m>>4;m=(m&15)<<2|k>>6;k&=63;g||(k=64,f||(m=64));d.push(c[h],c[l],c[m]||"",c[k]||"")}a.hash=d.join("")}return a}
;function Vf(a){var b=new Yd;(b=b.isAvailable()?a?new de(b,a):b:null)||(a=new Zd(a||"UserDataSharedStore"),b=a.isAvailable()?a:null);this.h=(a=b)?new Ud(a):null;this.i=document.domain||window.location.hostname}
Vf.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.h)try{this.h.set(a,b,Date.now()+1E3*c);return}catch(f){}var e="";if(d)try{e=escape(xd(b))}catch(f){return}else e=escape(b);b=this.i;hc.set(""+a,e,{ea:c,path:"/",domain:void 0===b?"youtube.com":b,secure:!1})};
Vf.prototype.get=function(a,b){var c=void 0,d=!this.h;if(!d)try{c=this.h.get(a)}catch(e){d=!0}if(d&&(c=hc.get(""+a,void 0))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
Vf.prototype.remove=function(a){this.h&&this.h.remove(a);var b=this.i;hc.remove(""+a,"/",void 0===b?"youtube.com":b)};var Wf;function Xf(){Wf||(Wf=new Vf("yt.innertube"));return Wf}
function Yf(a,b,c,d){if(d)return null;d=Xf().get("nextId",!0)||1;var e=Xf().get("requests",!0)||{};e[d]={method:a,request:b,authState:Uf(c),requestTime:Math.round(T())};Xf().set("nextId",d+1,86400,!0);Xf().set("requests",e,86400,!0);return d}
function Zf(a){var b=Xf().get("requests",!0)||{};delete b[a];Xf().set("requests",b,86400,!0)}
function $f(a){var b=Xf().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(6E4>Math.round(T())-d.requestTime)){var e=d.authState,f=Uf(Tf(!1));Ya(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(T())),Mf(a,d.method,e,{}));delete b[c]}}Xf().set("requests",b,86400,!0)}}
;var ag=D("ytPubsub2Pubsub2Instance")||new O;O.prototype.subscribe=O.prototype.subscribe;O.prototype.unsubscribeByKey=O.prototype.T;O.prototype.publish=O.prototype.O;O.prototype.clear=O.prototype.clear;G("ytPubsub2Pubsub2Instance",ag);G("ytPubsub2Pubsub2SubscribedKeys",D("ytPubsub2Pubsub2SubscribedKeys")||{});G("ytPubsub2Pubsub2TopicToKeys",D("ytPubsub2Pubsub2TopicToKeys")||{});G("ytPubsub2Pubsub2IsAsync",D("ytPubsub2Pubsub2IsAsync")||{});G("ytPubsub2Pubsub2SkipSubKey",null);function bg(){}
;var cg=function(){var a;return function(){a||(a=new Vf("ytidb"));return a}}();
function dg(){var a;return null===(a=cg())||void 0===a?void 0:a.get("LAST_RESULT_ENTRY_KEY",!0)}
function eg(a){this.h=void 0===a?!1:a;(a=dg())||(a={hasSucceededOnce:this.h});this.i=a;var b,c;S("ytidb_analyze_is_supported")&&(null===(c=cg())||void 0===c?0:c.h)&&(c={hasSucceededOnce:this.i.hasSucceededOnce||this.h},null===(b=cg())||void 0===b?void 0:b.set("LAST_RESULT_ENTRY_KEY",c,2592E3,!0))}
eg.prototype.isSupported=function(){return this.h};var fg=[],gg=!1;function hg(a){gg||(fg.push({type:"ERROR",payload:a}),10<fg.length&&fg.shift())}
function ig(a,b){gg||(fg.push({type:"EVENT",eventType:a,payload:b}),10<fg.length&&fg.shift())}
;function jg(a,b){for(var c=[],d=1;d<arguments.length;++d)c[d-1]=arguments[d];d=Error.call(this,a);this.message=d.message;"stack"in d&&(this.stack=d.stack);d=[];var e=d.concat;if(!(c instanceof Array)){c=u(c);for(var f,g=[];!(f=c.next()).done;)g.push(f.value);c=g}this.args=e.call(d,c)}
v(jg,Error);function kg(){if(void 0!==P("DATASYNC_ID",void 0))return P("DATASYNC_ID",void 0);throw new jg("Datasync ID not set","unknown");}
;function lg(a){if(0<=a.indexOf(":"))throw Error("Database name cannot contain ':'");}
function mg(a){return a.substr(0,a.indexOf(":"))||a}
;var ng={},og=(ng.AUTH_INVALID="No user identifier specified.",ng.EXPLICIT_ABORT="Transaction was explicitly aborted.",ng.IDB_NOT_SUPPORTED="IndexedDB is not supported.",ng.MISSING_OBJECT_STORE="Object store not created.",ng.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",ng.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",ng.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",ng.EXECUTE_TRANSACTION_ON_CLOSED_DB=
"Can't start a transaction on a closed database",ng),pg={},qg=(pg.AUTH_INVALID="ERROR",pg.EXECUTE_TRANSACTION_ON_CLOSED_DB="WARNING",pg.EXPLICIT_ABORT="IGNORED",pg.IDB_NOT_SUPPORTED="ERROR",pg.MISSING_OBJECT_STORE="ERROR",pg.QUOTA_EXCEEDED="WARNING",pg.QUOTA_MAYBE_EXCEEDED="WARNING",pg.UNKNOWN_ABORT="WARNING",pg),rg={},sg=(rg.AUTH_INVALID=!1,rg.EXECUTE_TRANSACTION_ON_CLOSED_DB=!1,rg.EXPLICIT_ABORT=!1,rg.IDB_NOT_SUPPORTED=!1,rg.MISSING_OBJECT_STORE=!1,rg.QUOTA_EXCEEDED=!1,rg.QUOTA_MAYBE_EXCEEDED=!0,
rg.UNKNOWN_ABORT=!0,rg);function U(a,b,c,d,e){b=void 0===b?{}:b;c=void 0===c?og[a]:c;d=void 0===d?qg[a]:d;e=void 0===e?sg[a]:e;jg.call(this,c,Object.assign({name:"YtIdbKnownError",isSw:void 0===self.document,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;this.level=d;this.h=e;Object.setPrototypeOf(this,U.prototype)}
v(U,jg);function tg(a){U.call(this,"MISSING_OBJECT_STORE",{bb:a},og.MISSING_OBJECT_STORE);Object.setPrototypeOf(this,tg.prototype)}
v(tg,U);var ug=["The database connection is closing","Can't start a transaction on a closed database","A mutation operation was attempted on a database that did not allow mutations"];
function vg(a,b,c){b=mg(b);var d=a instanceof Error?a:Error("Unexpected error: "+a);if(d instanceof U)return d;if("QuotaExceededError"===d.name)return new U("QUOTA_EXCEEDED",{objectStoreNames:c,dbName:b});if(Pb&&"UnknownError"===d.name)return new U("QUOTA_MAYBE_EXCEEDED",{objectStoreNames:c,dbName:b});if("InvalidStateError"===d.name&&ug.some(function(e){return d.message.includes(e)}))return new U("EXECUTE_TRANSACTION_ON_CLOSED_DB",{objectStoreNames:c,
dbName:b});if("AbortError"===d.name)return new U("UNKNOWN_ABORT",{objectStoreNames:c,dbName:b},d.message);d.args=[{name:"IdbError",cb:d.name,dbName:b,objectStoreNames:c}];d.level="WARNING";return d}
;function wg(a){if(!a)throw Error();throw a;}
function xg(a){return a}
function V(a){function b(e){if("PENDING"===d.state.status){d.state={status:"REJECTED",reason:e};e=u(d.onRejected);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
function c(e){if("PENDING"===d.state.status){d.state={status:"FULFILLED",value:e};e=u(d.h);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
var d=this;this.i=a;this.state={status:"PENDING"};this.h=[];this.onRejected=[];try{this.i(c,b)}catch(e){b(e)}}
V.all=function(a){return new V(function(b,c){var d=[],e=a.length;0===e&&b(d);for(var f={N:0};f.N<a.length;f={N:f.N},++f.N)yg(V.resolve(a[f.N]).then(function(g){return function(h){d[g.N]=h;e--;0===e&&b(d)}}(f)),function(g){c(g)})})};
V.resolve=function(a){return new V(function(b,c){a instanceof V?a.then(b,c):b(a)})};
V.reject=function(a){return new V(function(b,c){c(a)})};
V.prototype.then=function(a,b){var c=this,d=null!==a&&void 0!==a?a:xg,e=null!==b&&void 0!==b?b:wg;return new V(function(f,g){"PENDING"===c.state.status?(c.h.push(function(){zg(c,c,d,f,g)}),c.onRejected.push(function(){Ag(c,c,e,f,g)})):"FULFILLED"===c.state.status?zg(c,c,d,f,g):"REJECTED"===c.state.status&&Ag(c,c,e,f,g)})};
function yg(a,b){a.then(void 0,b)}
function zg(a,b,c,d,e){try{if("FULFILLED"!==a.state.status)throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof V?Bg(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Ag(a,b,c,d,e){try{if("REJECTED"!==a.state.status)throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof V?Bg(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Bg(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof V?Bg(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Cg(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Dg(a){return new Promise(function(b,c){Cg(a,b,c)})}
function W(a){return new V(function(b,c){Cg(a,b,c)})}
;function Eg(a,b){return new V(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()})}
;function Fg(a,b){this.h=a;this.options=b;this.transactionCount=0;this.j=Math.round(T());this.i=!1}
n=Fg.prototype;n.add=function(a,b,c){return Gg(this,[a],{mode:"readwrite",D:!0},function(d){return Hg(d,a).add(b,c)})};
n.clear=function(a){return Gg(this,[a],{mode:"readwrite",D:!0},function(b){return Hg(b,a).clear()})};
n.close=function(){var a;this.h.close();(null===(a=this.options)||void 0===a?0:a.closed)&&this.options.closed()};
n.count=function(a,b){return Gg(this,[a],{mode:"readonly",D:!0},function(c){return Hg(c,a).count(b)})};
function Ig(a,b,c){a=a.h.createObjectStore(b,c);return new Jg(a)}
n.delete=function(a,b){return Gg(this,[a],{mode:"readwrite",D:!0},function(c){return Hg(c,a).delete(b)})};
n.get=function(a,b){return Gg(this,[a],{mode:"readonly",D:!0},function(c){return Hg(c,a).get(b)})};
function Kg(a,b){return Gg(a,["LogsRequestsStore"],{mode:"readwrite",D:!0},function(c){c=Hg(c,"LogsRequestsStore");return W(c.h.put(b,void 0))})}
n.objectStoreNames=function(){return Array.from(this.h.objectStoreNames)};
function Gg(a,b,c,d){return K(a,function f(){var g=this,h,k,l,m,p,r,q,y,C,A,Q,R;return x(f,function(E){switch(E.h){case 1:var N={mode:"readonly",D:!1};"string"===typeof c?N.mode=c:N=c;h=N;g.transactionCount++;k=h.D?Ie("ytidb_transaction_try_count",1):1;l=0;case 2:if(m){E.u(3);break}l++;p=Math.round(T());pa(E,4);r=g.h.transaction(b,h.mode);N=new Lg(r);N=Mg(N,d);return w(E,N,6);case 6:return q=E.i,y=Math.round(T()),Ng(g,p,y,l,void 0,b.join(),h),E.return(q);case 4:C=qa(E);A=Math.round(T());Q=vg(C,g.h.name,
b.join());if((R=Q instanceof U&&!Q.h)||l>=k)Ng(g,p,A,l,Q,b.join(),h),m=Q;E.u(2);break;case 3:return E.return(Promise.reject(m))}})})}
function Ng(a,b,c,d,e,f,g){b=c-b;e?(e instanceof U&&("QUOTA_EXCEEDED"===e.type||"QUOTA_MAYBE_EXCEEDED"===e.type)&&ig("QUOTA_EXCEEDED",{dbName:mg(a.h.name),objectStoreNames:f,transactionCount:a.transactionCount,transactionMode:g.mode}),e instanceof U&&"UNKNOWN_ABORT"===e.type&&(ig("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:f,transactionDuration:b,transactionCount:a.transactionCount,dbDuration:c-a.j}),a.i=!0),Og(a,!1,d,f,b),hg(e)):Og(a,!0,d,f,b)}
function Og(a,b,c,d,e){ig("TRANSACTION_ENDED",{objectStoreNames:d,connectionHasUnknownAbortedTransaction:a.i,duration:e,isSuccessful:b,tryCount:c})}
n.getName=function(){return this.h.name};
function Jg(a){this.h=a}
n=Jg.prototype;n.add=function(a,b){return W(this.h.add(a,b))};
n.autoIncrement=function(){return this.h.autoIncrement};
n.clear=function(){return W(this.h.clear()).then(function(){})};
n.count=function(a){return W(this.h.count(a))};
function Pg(a,b){return Qg(a,{query:b},function(c){return c.delete().then(function(){return c.continue()})}).then(function(){})}
n.delete=function(a){return a instanceof IDBKeyRange?Pg(this,a):W(this.h.delete(a))};
n.get=function(a){return W(this.h.get(a))};
n.index=function(a){return new Rg(this.h.index(a))};
n.getName=function(){return this.h.name};
n.keyPath=function(){return this.h.keyPath};
function Qg(a,b,c){a=a.h.openCursor(b.query,b.direction);return Sg(a).then(function(d){return Eg(d,c)})}
function Lg(a){var b=this;this.h=a;this.i=new Map;this.aborted=!1;this.done=new Promise(function(c,d){b.h.addEventListener("complete",function(){c()});
b.h.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.h.error)});
b.h.addEventListener("abort",function(){var e=b.h.error;if(e)d(e);else if(!b.aborted){e=U;for(var f=b.h.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(null===k)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e("UNKNOWN_ABORT",{objectStoreNames:g.join(),dbName:b.h.db.name,mode:b.h.mode});d(e)}})})}
function Mg(a,b){var c=new Promise(function(d,e){try{yg(b(a).then(function(f){d(f)}),e)}catch(f){e(f),a.abort()}});
return Promise.all([c,a.done]).then(function(d){return u(d).next().value})}
Lg.prototype.abort=function(){this.h.abort();this.aborted=!0;throw new U("EXPLICIT_ABORT");};
function Hg(a,b){b=a.h.objectStore(b);var c=a.i.get(b);c||(c=new Jg(b),a.i.set(b,c));return c}
function Rg(a){this.h=a}
n=Rg.prototype;n.count=function(a){return W(this.h.count(a))};
n.delete=function(a){return Tg(this,{query:a},function(b){return b.delete().then(function(){return b.continue()})})};
n.get=function(a){return W(this.h.get(a))};
n.getKey=function(a){return W(this.h.getKey(a))};
n.keyPath=function(){return this.h.keyPath};
n.unique=function(){return this.h.unique};
function Tg(a,b,c){a=a.h.openCursor(void 0===b.query?null:b.query,void 0===b.direction?"next":b.direction);return Sg(a).then(function(d){return Eg(d,c)})}
function Ug(a,b){this.request=a;this.cursor=b}
function Sg(a){return W(a).then(function(b){return null===b?null:new Ug(a,b)})}
n=Ug.prototype;n.advance=function(a){this.cursor.advance(a);return Sg(this.request)};
n.continue=function(a){this.cursor.continue(a);return Sg(this.request)};
n.delete=function(){return W(this.cursor.delete()).then(function(){})};
n.getKey=function(){return this.cursor.key};
n.update=function(a){return W(this.cursor.update(a))};function Vg(a,b,c){return new Promise(function(d,e){function f(){r||(r=new Fg(g.result,{closed:p}));return r}
var g=self.indexedDB.open(a,b),h=c.blocked,k=c.blocking,l=c.Ja,m=c.upgrade,p=c.closed,r;g.addEventListener("upgradeneeded",function(q){try{if(null===q.newVersion)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");if(null===g.transaction)throw Error("Invariant: transaction on IDbOpenDbRequest is null");q.dataLoss&&"none"!==q.dataLoss&&ig("IDB_DATA_CORRUPTED",{reason:q.dataLossMessage||"unknown reason",dbName:mg(a)});var y=f(),C=new Lg(g.transaction);m&&m(y,q.oldVersion,q.newVersion,
C);C.done.catch(function(A){e(A)})}catch(A){e(A)}});
g.addEventListener("success",function(){var q=g.result;k&&q.addEventListener("versionchange",function(){k(f())});
q.addEventListener("close",function(){ig("IDB_UNEXPECTEDLY_CLOSED",{dbName:mg(a),dbVersion:q.version});l&&l()});
d(f())});
g.addEventListener("error",function(){e(g.error)});
h&&g.addEventListener("blocked",function(){h()})})}
function Wg(a,b,c){c=void 0===c?{}:c;return Vg(a,b,c)}
function Xg(a,b){b=void 0===b?{}:b;return K(this,function d(){var e,f,g;return x(d,function(h){e=self.indexedDB.deleteDatabase(a);f=b;(g=f.blocked)&&e.addEventListener("blocked",function(){g()});
return w(h,Dg(e),0)})})}
;function Yg(a,b){this.name=a;this.options=b;this.j=!1}
Yg.prototype.i=function(a,b,c){c=void 0===c?{}:c;return Wg(a,b,c)};
Yg.prototype.delete=function(a){a=void 0===a?{}:a;return Xg(this.name,a)};
Yg.prototype.open=function(){var a=this;if(!this.h){var b,c=function(){a.h===b&&(a.h=void 0)},d={blocking:function(f){f.close()},
closed:c,Ja:c,upgrade:this.options.upgrade},e=function(){return K(a,function g(){var h=this,k,l,m;return x(g,function(p){switch(p.h){case 1:return pa(p,2),w(p,h.i(h.name,h.options.version,d),4);case 4:k=p.i;a:{var r=u(Object.keys(h.options.oa));for(var q=r.next();!q.done;q=r.next())if(q=q.value,!k.h.objectStoreNames.contains(q)){r=q;break a}r=void 0}l=r;if(void 0===l){p.u(5);break}if(h.j){p.u(6);break}h.j=!0;return w(p,h.delete(),7);case 7:return p.return(e());case 6:throw new tg(l);case 5:return p.return(k);
case 2:m=qa(p);if(m instanceof DOMException?"VersionError"===m.name:"DOMError"in self&&m instanceof DOMError?"VersionError"===m.name:m instanceof Object&&"message"in m&&"An attempt was made to open a database using a lower version than the existing version."===m.message)return p.return(h.i(h.name,void 0,Object.assign(Object.assign({},d),{upgrade:void 0})));c();throw m;}})})};
this.h=b=e()}return this.h};var Zg=new Yg("YtIdbMeta",{oa:{databases:!0},upgrade:function(a,b){1>b&&Ig(a,"databases",{keyPath:"actualName"})}});
function $g(a){return K(this,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,Zg.open(),2);d=e.i;return e.return(Gg(d,["databases"],{D:!0,mode:"readwrite"},function(f){var g=Hg(f,"databases");return g.get(a.actualName).then(function(h){if(h?a.actualName!==h.actualName||a.publicName!==h.publicName||a.userIdentifier!==h.userIdentifier||a.clearDataOnAuthChange!==h.clearDataOnAuthChange:1)return W(g.h.put(a,void 0)).then(function(){})})}))})})}
function ah(a){return K(this,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,Zg.open(),2);d=e.i;return e.return(d.delete("databases",a))})})}
;var bh;
function ch(){return K(this,function b(){var c,d,e;return x(b,function(f){switch(f.h){case 1:if(S("ytidb_is_supported_cache_success_result")&&(c=dg(),null===c||void 0===c?0:c.hasSucceededOnce))return f.return(new eg(!0));var g;if(g=ff)g=/WebKit\/([0-9]+)/.exec(kb),g=!!(g&&600<=parseInt(g[1],10));g&&(g=/WebKit\/([0-9]+)/.exec(kb),g=!(g&&602<=parseInt(g[1],10)));if(g||Bb)return f.return(new eg(!1));try{if(d=self,!(d.indexedDB&&d.IDBIndex&&d.IDBKeyRange&&d.IDBObjectStore))return f.return(new eg(!1))}catch(h){return f.return(new eg(!1))}if(!("IDBTransaction"in self&&
"objectStoreNames"in IDBTransaction.prototype))return f.return(new eg(!1));pa(f,2);e={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0};return w(f,$g(e),4);case 4:return w(f,ah("yt-idb-test-do-not-use"),5);case 5:return f.return(new eg(!0));case 2:return qa(f),f.return(new eg(!1))}})})}
function dh(){if(void 0!==bh)return bh;gg=!0;return bh=ch().then(function(a){gg=!1;return a.isSupported()})}
;function eh(a){try{kg();var b=!0}catch(c){b=!1}if(!b)throw a=new U("AUTH_INVALID"),hg(a),a;b=kg();return{actualName:a+":"+b,publicName:a,userIdentifier:b}}
function fh(a,b,c,d){var e,f;return K(this,function h(){var k,l;return x(h,function(m){switch(m.h){case 1:return w(m,gh({caller:"openDbImpl",publicName:a,version:b}),2);case 2:return lg(a),k=c?{actualName:a,publicName:a,userIdentifier:void 0}:eh(a),k.clearDataOnAuthChange=S("remove_clear_data_on_auth_change_killswitch")?null!==(e=d.clearDataOnAuthChange)&&void 0!==e?e:!1:null!==(f=d.clearDataOnAuthChange)&&void 0!==f?f:!0,pa(m,3),w(m,$g(k),5);case 5:return w(m,Wg(k.actualName,b,d),6);case 6:return m.return(m.i);
case 3:return l=qa(m),pa(m,7),w(m,ah(k.actualName),9);case 9:m.h=8;m.s=0;break;case 7:qa(m);case 8:throw l;}})})}
function gh(a){return K(this,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,dh(),2);if(!e.i)throw d=new U("IDB_NOT_SUPPORTED",{context:a}),hg(d),d;e.h=0})})}
function hh(a,b,c){c=void 0===c?{}:c;return fh(a,b,!1,c)}
function ih(a,b,c){c=void 0===c?{}:c;return fh(a,b,!0,c)}
function jh(a,b){b=void 0===b?{}:b;return K(this,function d(){var e;return x(d,function(f){if(1==f.h)return w(f,dh(),2);if(3!=f.h){if(!f.i)return f.return();lg(a);e=eh(a);return w(f,Xg(e.actualName,b),3)}return w(f,ah(e.actualName),0)})})}
function kh(a,b){b=void 0===b?{}:b;return K(this,function d(){return x(d,function(e){if(1==e.h)return w(e,dh(),2);if(3!=e.h){if(!e.i)return e.return();lg(a);return w(e,Xg(a,b),3)}return w(e,ah(a),0)})})}
;function lh(){V.call(this,function(){});
throw Error("Not allowed to instantiate the thennable outside of the core library.");}
v(lh,V);lh.reject=V.reject;lh.resolve=V.resolve;lh.all=V.all;function mh(a,b){Yg.call(this,a,b);this.options=b;lg(a)}
v(mh,Yg);function nh(a){var b;return function(){b||(b=new mh("LogsDatabaseV2",a));return b}}
mh.prototype.i=function(a,b,c){c=void 0===c?{}:c;return(this.options.ra?ih:hh)(a,b,Object.assign(Object.assign({},c),{clearDataOnAuthChange:this.options.clearDataOnAuthChange}))};
mh.prototype.delete=function(a){a=void 0===a?{}:a;return(this.options.ra?kh:jh)(this.name,a)};var oh;
function ph(){if(oh)return oh();var a={};oh=nh({oa:(a.LogsRequestsStore=!0,a.sapisid=!0,a.SWHealthLog=!0,a),ra:!S("nwl_use_ytidb_partitioning"),clearDataOnAuthChange:S("nwl_use_ytidb_partitioning"),upgrade:function(b,c,d){2>c&&2<=d&&(Ig(b,"LogsRequestsStore",{keyPath:"id",autoIncrement:!0}).h.createIndex("newRequest",["status","authHash","interface","timestamp"],{unique:!1}),Ig(b,"sapisid"));3>c&&3<=d&&Ig(b,"SWHealthLog",{keyPath:"id",autoIncrement:!0}).h.createIndex("swHealthNewRequest",["interface","timestamp"],
{unique:!1})},
version:3});return oh()}
;function qh(a){return K(this,function c(){var d,e,f,g,h;return x(c,function(k){switch(k.h){case 1:return d={startTime:T(),transactionType:"YT_IDB_TRANSACTION_TYPE_WRITE"},w(k,rh(),2);case 2:return e=k.i,w(k,ph().open(),3);case 3:return f=k.i,g=Object.assign(Object.assign({},a),{options:JSON.parse(JSON.stringify(a.options)),authHash:e,interface:P("INNERTUBE_CONTEXT_CLIENT_NAME",0)}),w(k,Kg(f,g),4);case 4:return h=k.i,d.Ka=T(),sh(d),k.return(h)}})})}
function th(){return K(this,function b(){var c,d,e,f,g,h,k,l;return x(b,function(m){switch(m.h){case 1:return c={startTime:T(),transactionType:"YT_IDB_TRANSACTION_TYPE_READ"},w(m,rh(),2);case 2:return d=m.i,e=P("INNERTUBE_CONTEXT_CLIENT_NAME",0),f=["NEW",d,e,0],g=["NEW",d,e,T()],h=IDBKeyRange.bound(f,g),w(m,ph().open(),3);case 3:return k=m.i,l=void 0,w(m,Gg(k,["LogsRequestsStore"],{mode:"readwrite",D:!0},function(p){return Tg(Hg(p,"LogsRequestsStore").index("newRequest"),{query:h,direction:"prev"},
function(r){r.cursor.value&&(l=r.cursor.value,l.status="QUEUED",r.update(l))})}),4);
case 4:return c.Ka=T(),sh(c),m.return(l)}})})}
function uh(a){return K(this,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,ph().open(),2);d=e.i;return e.return(Gg(d,["LogsRequestsStore"],{mode:"readwrite",D:!0},function(f){var g=Hg(f,"LogsRequestsStore");return g.get(a).then(function(h){if(h)return h.status="QUEUED",W(g.h.put(h,void 0)).then(function(){return h})})}))})})}
function vh(a){return K(this,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,ph().open(),2);d=e.i;return e.return(Gg(d,["LogsRequestsStore"],{mode:"readwrite",D:!0},function(f){var g=Hg(f,"LogsRequestsStore");return g.get(a).then(function(h){return h?(h.status="NEW",h.sendCount+=1,W(g.h.put(h,void 0)).then(function(){return h})):lh.resolve(void 0)})}))})})}
function wh(a){return K(this,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,ph().open(),2);d=e.i;return e.return(d.delete("LogsRequestsStore",a))})})}
function rh(){return K(this,function b(){var c;return x(b,function(d){if(1==d.h){bg.h||(bg.h=new bg);var e={};var f=kc([]);f&&(e.Authorization=f,f=void 0,void 0===f&&(f=Number(P("SESSION_INDEX",0)),f=isNaN(f)?0:f),e["X-Goog-AuthUser"]=f,"INNERTUBE_HOST_OVERRIDE"in he||(e["X-Origin"]=window.location.origin),S("pageid_as_header_web")&&"DELEGATED_SESSION_ID"in he&&(e["X-Goog-PageId"]=P("DELEGATED_SESSION_ID")));e instanceof M||(f=new M(Ca),yd(f,2,e),e=f);return w(d,e,2)}c=d.i;e=d.return;f=Uf(c);var g=
new Ec;g.update(JSON.stringify(f,Object.keys(f).sort()));f=g.digest();g="";for(var h=0;h<f.length;h++)g+="0123456789ABCDEF".charAt(Math.floor(f[h]/16))+"0123456789ABCDEF".charAt(f[h]%16);return e.call(d,g)})})}
function sh(a){var b=Ie("nwl_latency_sampling_rate",.01);!(.02<b)&&Math.random()<=b&&(b=D("ytPubsub2Pubsub2Instance"))&&b.publish.call(b,"nwl_transaction_latency_payload".toString(),"nwl_transaction_latency_payload",a)}
;var xh;function yh(){xh||(xh=new Vf("yt.offline"));return xh}
function zh(a){if(S("offline_error_handling")){var b=yh().get("errors",!0)||{};b[a.message]={name:a.name,stack:a.stack};a.level&&(b[a.message].level=a.level);yh().set("errors",b,2592E3,!0)}}
function Ah(){if(S("offline_error_handling")){var a=yh().get("errors",!0);if(a){for(var b in a)if(a[b]){var c=new jg(b,"sent via offline_errors");c.name=a[b].name;c.stack=a[b].stack;c.level=a[b].level;me(c)}yh().set("errors",{},2592E3,!0)}}}
;var Bh=Ie("network_polling_interval",3E4);function X(){vd.call(this);this.V=0;this.o=this.j=!1;this.v=0;this.l=this.P=!1;this.h=this.Z();this.l=S("validate_network_status");Ch(this);Dh(this)}
v(X,vd);function Eh(){if(!X.h){var a=D("yt.networkStatusManager.instance")||new X;G("yt.networkStatusManager.instance",a);X.h=a}return X.h}
n=X.prototype;n.J=function(){this.l||this.h===this.Z()||ne(new jg("NetworkStatusManager isOnline does not match window status"));return this.h};
n.Ia=function(a){this.j=!0;if(void 0===a?0:a)this.V||Fh(this)};
n.Z=function(){var a=window.navigator.onLine;return void 0===a?!0:a};
n.ya=function(){this.P=!0};
n.ba=function(a,b){return vd.prototype.ba.call(this,a,b)};
function Dh(a){window.addEventListener("online",function(){return K(a,function c(){var d=this;return x(c,function(e){if(1==e.h)return d.l?w(e,d.L(),2):(d.h=!0,d.j&&d.dispatchEvent("ytnetworkstatus-online"),e.u(2));Gh(d);d.P&&Ah();e.h=0})})})}
function Ch(a){window.addEventListener("offline",function(){return K(a,function c(){var d=this;return x(c,function(e){if(1==e.h)return d.l?w(e,d.L(),2):(d.h=!1,d.j&&d.dispatchEvent("ytnetworkstatus-offline"),e.u(2));Gh(d);e.h=0})})})}
function Fh(a){a.V=Ke(function(){return K(a,function c(){var d=this;return x(c,function(e){if(1==e.h){if(S("trigger_nsm_validation_checks_with_nwl")&&!d.h)return w(e,d.L(),3);if(d.Z()){if(!1!==d.h)return e.u(3);d.o=!0;d.v=T();return d.j?d.l?w(e,d.L(),11):(d.h=!0,d.dispatchEvent("ytnetworkstatus-online"),e.u(11)):e.u(11)}if(!0!==d.h)return e.u(3);d.o=!0;d.v=T();return d.j?d.l?w(e,d.L(),3):(d.h=!1,d.dispatchEvent("ytnetworkstatus-offline"),e.u(3)):e.u(3)}if(3!=e.h)return d.P&&Ah(),e.u(3);Fh(d);e.h=
0})})},Bh)}
function Gh(a){a.o&&(ne(new jg("NetworkStatusManager state did not match poll",T()-a.v)),a.o=!1)}
n.L=function(a){var b=this;return this.B?this.B:this.B=new Promise(function(c){return K(b,function e(){var f,g,h,k=this;return x(e,function(l){switch(l.h){case 1:return f=window.AbortController?new window.AbortController:void 0,g=null===f||void 0===f?void 0:f.signal,h=!1,pa(l,2,3),f&&(k.U=Me(function(){f.abort()},a||2E4)),w(l,fetch("/generate_204",{method:"HEAD",
signal:g}),5);case 5:h=!0;case 3:ra(l);k.B=void 0;k.U&&Oe(k.U);h!==k.h&&(k.h=h,k.h&&k.j?k.dispatchEvent("ytnetworkstatus-online"):k.j&&k.dispatchEvent("ytnetworkstatus-offline"));c(h);sa(l);break;case 2:qa(l),h=!1,l.u(3)}})})})};
X.prototype.sendNetworkCheckRequest=X.prototype.L;X.prototype.listen=X.prototype.ba;X.prototype.enableErrorFlushing=X.prototype.ya;X.prototype.getWindowStatus=X.prototype.Z;X.prototype.monitorNetworkStatusChange=X.prototype.Ia;X.prototype.isNetworkAvailable=X.prototype.J;X.getInstance=Eh;function Hh(a){a=void 0===a?{}:a;vd.call(this);var b=this;this.j=this.o=0;this.h=Eh();var c=D("yt.networkStatusManager.instance.monitorNetworkStatusChange").bind(this.h);c&&c(a.za);a.Ha&&(c=D("yt.networkStatusManager.instance.enableErrorFlushing").bind(this.h))&&c();if(c=D("yt.networkStatusManager.instance.listen").bind(this.h))a.ca?(this.ca=a.ca,c("ytnetworkstatus-online",function(){Ih(b,"publicytnetworkstatus-online")}),c("ytnetworkstatus-offline",function(){Ih(b,"publicytnetworkstatus-offline")})):
(c("ytnetworkstatus-online",function(){b.dispatchEvent("publicytnetworkstatus-online")}),c("ytnetworkstatus-offline",function(){b.dispatchEvent("publicytnetworkstatus-offline")}))}
v(Hh,vd);Hh.prototype.J=function(){var a=D("yt.networkStatusManager.instance.isNetworkAvailable").bind(this.h);return a?a():!0};
Hh.prototype.L=function(a){return K(this,function c(){var d=this,e;return x(c,function(f){return(e=D("yt.networkStatusManager.instance.sendNetworkCheckRequest").bind(d.h))?f.return(e(a)):f.return(!0)})})};
function Ih(a,b){a.ca?a.j?(Oe(a.o),a.o=Me(function(){a.l!==b&&(a.dispatchEvent(b),a.l=b,a.j=T())},a.ca-(T()-a.j))):(a.dispatchEvent(b),a.l=b,a.j=T()):a.dispatchEvent(b)}
;var Jh=0,Kh=0,Lh,Mh=B.ytNetworklessLoggingInitializationOptions||{isNwlInitialized:!1,isIdbSupported:!1,potentialEsfErrorCounter:Kh};S("export_networkless_options")&&G("ytNetworklessLoggingInitializationOptions",Mh);function Nh(a,b){function c(d){var e=Oh().J();if(!Ph()||!d||e&&S("vss_networkless_bypass_write"))Qh(a,b);else{var f={url:a,options:b,timestamp:T(),status:"NEW",sendCount:0};qh(f).then(function(g){f.id=g;(Oh().J()||S("networkless_always_online"))&&Rh(f)}).catch(function(g){Rh(f);
Oh().J()?me(g):zh(g)})}}
b=void 0===b?{}:b;S("skip_is_supported_killswitch")?dh().then(function(d){c(d)}):c(Sh())}
function Th(a,b){function c(d){if(Ph()&&d){var e={url:a,options:b,timestamp:T(),status:"NEW",sendCount:0},f=!1,g=b.onSuccess?b.onSuccess:function(){};
e.options.onSuccess=function(h,k){void 0!==e.id?wh(e.id):f=!0;g(h,k)};
Qh(e.url,e.options);qh(e).then(function(h){e.id=h;f&&wh(e.id)}).catch(function(h){Oh().J()?me(h):zh(h)})}else Qh(a,b)}
b=void 0===b?{}:b;S("skip_is_supported_killswitch")?dh().then(function(d){c(d)}):c(Sh())}
function Uh(){var a=this;Jh||(Jh=Me(function(){return K(a,function c(){var d;return x(c,function(e){if(1==e.h)return w(e,th(),2);if(3!=e.h)return d=e.i,d?w(e,Rh(d),3):(Oe(Jh),Jh=0,e.return());if(!S("nwl_throttling_race_fix")||Jh)Jh=0,Uh();e.h=0})})},100))}
function Rh(a){return K(this,function c(){var d;return x(c,function(e){switch(e.h){case 1:if(void 0===a.id){e.u(2);break}return w(e,uh(a.id),3);case 3:(d=e.i)?a=d:ne(Error("The request cannot be found in the database."));case 2:var f=a.timestamp;if(!(2592E6<=T()-f)){e.u(4);break}ne(Error("Networkless Logging: Stored logs request expired age limit"));if(void 0===a.id){e.u(5);break}return w(e,wh(a.id),5);case 5:return e.return();case 4:f=a=Vh(a);var g,h;if(null===(h=null===(g=null===f||void 0===f?void 0:
f.options)||void 0===g?void 0:g.postParams)||void 0===h?0:h.requestTimeMs)f.options.postParams.requestTimeMs=Math.round(T());(a=f)&&Qh(a.url,a.options);e.h=0}})})}
function Vh(a){var b=this,c=a.options.onError?a.options.onError:function(){};
a.options.onError=function(e,f){return K(b,function h(){return x(h,function(k){switch(k.h){case 1:if(!(S("trigger_nsm_validation_checks_with_nwl")&&(D("ytNetworklessLoggingInitializationOptions")?Mh.potentialEsfErrorCounter:Kh)<=Ie("potential_esf_error_limit",10))){k.u(2);break}return w(k,Oh().L(),3);case 3:if(Oh().J())D("ytNetworklessLoggingInitializationOptions")&&Mh.potentialEsfErrorCounter++,Kh++;else return c(e,f),k.return();case 2:if(void 0===(null===a||void 0===a?void 0:a.id)){k.u(4);break}return 1>
a.sendCount?w(k,vh(a.id),8):w(k,wh(a.id),4);case 8:Me(function(){Oh().J()&&Uh()},5E3);
case 4:c(e,f),k.h=0}})})};
var d=a.options.onSuccess?a.options.onSuccess:function(){};
a.options.onSuccess=function(e,f){return K(b,function h(){return x(h,function(k){if(1==k.h)return void 0===(null===a||void 0===a?void 0:a.id)?k.u(2):w(k,wh(a.id),2);d(e,f);k.h=0})})};
return a}
function Oh(){Lh||(Lh=new Hh({Ha:!0,za:S("trigger_nsm_validation_checks_with_nwl")}));return Lh}
function Qh(a,b){if(S("networkless_with_beacon")){var c=["method","postBody"];if(Object.keys(b).length>c.length)var d=!0;else{d=0;c=u(c);for(var e=c.next();!e.done;e=c.next())b.hasOwnProperty(e.value)&&d++;d=Object.keys(b).length!==d}d?Ye(a,b):jf(a,void 0,b.postBody)}else Ye(a,b)}
function Ph(){return D("ytNetworklessLoggingInitializationOptions")?Mh.isNwlInitialized:!1}
function Sh(){return D("ytNetworklessLoggingInitializationOptions")?Mh.isIdbSupported:!1}
;function Wh(a){var b=this;this.config_=null;a?this.config_=a:Sf()&&(this.config_=Jf());Ke(function(){$f(b)},5E3)}
Wh.prototype.isReady=function(){!this.config_&&Sf()&&(this.config_=Jf());return!!this.config_};
function Mf(a,b,c,d){function e(r){r=void 0===r?!1:r;var q;if(d.retry&&"www.youtube-nocookie.com"!=h&&(r||(q=Yf(b,c,l,k)),q)){var y=g.onSuccess,C=g.onFetchSuccess;g.onSuccess=function(A,Q){Zf(q);y(A,Q)};
c.onFetchSuccess=function(A,Q){Zf(q);C(A,Q)}}try{r&&d.retry&&!d.na.bypassNetworkless?(g.method="POST",!d.na.writeThenSend&&S("nwl_send_fast_on_unload")?Th(p,g):Nh(p,g)):(g.method="POST",g.postParams||(g.postParams={}),Ye(p,g))}catch(A){if("InvalidAccessError"==A.name)q&&(Zf(q),q=0),ne(Error("An extension is blocking network request."));
else throw A;}q&&Ke(function(){$f(a)},5E3)}
!P("VISITOR_DATA")&&"visitor_id"!==b&&.01>Math.random()&&ne(new jg("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var f=new jg("innertube xhrclient not ready",b,c,d);me(f);throw f;}var g={headers:{"Content-Type":"application/json"},method:"POST",postParams:c,postBodyFormat:"JSON",onTimeout:function(){d.onTimeout()},
onFetchTimeout:d.onTimeout,onSuccess:function(r,q){if(d.onSuccess)d.onSuccess(q)},
onFetchSuccess:function(r){if(d.onSuccess)d.onSuccess(r)},
onError:function(r,q){if(d.onError)d.onError(q)},
onFetchError:function(r){if(d.onError)d.onError(r)},
timeout:d.timeout,withCredentials:!0},h="";(f=a.config_.Ea)&&(h=f);var k=a.config_.Ga||!1,l=Tf(k,h,d);Object.assign(g.headers,l);g.headers.Authorization&&!h&&(g.headers["x-origin"]=window.location.origin);f="/youtubei/"+a.config_.innertubeApiVersion+"/"+b;var m={alt:"json"};a.config_.Fa&&g.headers.Authorization||(m.key=a.config_.innertubeApiKey);var p=Fe(""+h+f,m||{},!0);Ph()?dh().then(function(r){e(r)}):e(!1)}
;function Xh(a,b){var c=void 0===c?{}:c;var d=Wh;P("ytLoggingEventsDefaultDisabled",!1)&&Wh==Wh&&(d=null);c=void 0===c?{}:c;var e={},f=Math.round(c.timestamp||T());e.eventTimeMs=f<Number.MAX_SAFE_INTEGER?f:0;e[a]=b;a=D("_lact",window);a=null==a?-1:Math.max(Date.now()-a,0);e.context={lastActivityMs:String(c.timestamp||!isFinite(a)?-1:a)};S("log_sequence_info_on_gel_web")&&c.qa&&(a=e.context,b=c.qa,Nf[b]=b in Nf?Nf[b]+1:0,a.sequence={index:Nf[b],groupKey:b},c.Za&&delete Nf[c.qa]);(c.fb?Gf:Cf)({endpoint:"log_event",
payload:e,H:c.H,Y:c.Y},d)}
;var Yh=[{la:function(a){return"Cannot read property '"+a.key+"'"},
fa:{TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,
groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]}],Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}]}},{la:function(a){return"Cannot call '"+a.key+"'"},
fa:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}}];var $h={K:[],I:[{va:Zh,weight:500}]};function Zh(a){a=a.stack;return a.includes("chrome://")||a.includes("chrome-extension://")||a.includes("moz-extension://")}
;function ai(){this.I=[];this.K=[]}
var bi;function ci(){if(!bi){var a=bi=new ai;a.K.length=0;a.I.length=0;$h.K&&a.K.push.apply(a.K,$h.K);$h.I&&a.I.push.apply(a.I,$h.I)}return bi}
;var di=new O;function ei(a){function b(){return a.charCodeAt(d++)}
var c=a.length,d=0;do{var e=fi(b);if(Infinity===e)break;var f=e>>3;switch(e&7){case 0:e=fi(b);if(2===f)return e;break;case 1:if(2===f)return;d+=8;break;case 2:e=fi(b);if(2===f)return a.substr(d,e);d+=e;break;case 5:if(2===f)return;d+=4;break;default:return}}while(d<c)}
function fi(a){var b=a(),c=b&127;if(128>b)return c;b=a();c|=(b&127)<<7;if(128>b)return c;b=a();c|=(b&127)<<14;if(128>b)return c;b=a();return 128>b?c|(b&127)<<21:Infinity}
;function gi(a,b,c,d){if(a)if(Array.isArray(a)){var e=d;for(d=0;d<a.length&&!(a[d]&&(e+=hi(d,a[d],b,c),500<e));d++);d=e}else if("object"===typeof a)for(e in a){if(a[e]){var f=e;var g=a[e],h=b,k=c;f="string"!==typeof g||"clickTrackingParams"!==f&&"trackingParams"!==f?0:(g=ei(atob(g.replace(/-/g,"+").replace(/_/g,"/"))))?hi(f+".ve",g,h,k):0;d+=f;d+=hi(e,a[e],b,c);if(500<d)break}}else c[b]=ii(a),d+=c[b].length;else c[b]=ii(a),d+=c[b].length;return d}
function hi(a,b,c,d){c+="."+a;a=ii(b);d[c]=a;return c.length+a.length}
function ii(a){return("string"===typeof a?a:String(JSON.stringify(a))).substr(0,500)}
;var ji=new Set,ki=0,li=0,mi=0,ni=[],oi=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];var pi={};function qi(a){return pi[a]||(pi[a]=String(a).replace(/\-([a-z])/g,function(b,c){return c.toUpperCase()}))}
;var ri={},si=[],Od=new O,ti={};function ui(){for(var a=u(si),b=a.next();!b.done;b=a.next())b=b.value,b()}
function vi(a,b){var c;"yt:"===a.tagName.toLowerCase().substr(0,3)?c=a.getAttribute(b):c=a?a.dataset?a.dataset[qi(b)]:a.getAttribute("data-"+b):null;return c}
function wi(a,b){for(var c=1;c<arguments.length;++c);Od.O.apply(Od,arguments)}
;function xi(a){this.j=this.h=!1;this.i=a||{};a=document.getElementById("www-widgetapi-script");if(this.h=!!("https:"===document.location.protocol||a&&0===a.src.indexOf("https:"))){a=[this.i,window.YTConfig||{}];for(var b=0;b<a.length;b++)a[b].host&&(a[b].host=a[b].host.toString().replace("http://","https://"))}}
function Y(a,b){a=[a.i,window.YTConfig||{}];for(var c=0;c<a.length;c++){var d=a[c][b];if(void 0!==d)return d}return null}
function yi(a,b,c){zi||(zi={},ve(window,"message",function(d){a:{if(d.origin===Y(a,"host")||d.origin===Y(a,"host").toString().replace(/^http:/,"https:")){try{var e=JSON.parse(d.data)}catch(f){e=void 0;break a}a.j=!0;a.h||0!==d.origin.indexOf("https:")||(a.h=!0);if(d=zi[e.id])d.o=!0,d.o&&(I(d.s,d.sendMessage,d),d.s.length=0),d.ga(e)}e=void 0}return e}));
zi[c]=b}
var zi=null;function Z(a,b,c){this.m=this.h=this.i=null;this.j=0;this.o=!1;this.s=[];this.l=null;this.B={};if(!a)throw Error("YouTube player element ID required.");this.id=Ea(this);this.v=c;this.setup(a,b)}
n=Z.prototype;n.setSize=function(a,b){this.h.width=a.toString();this.h.height=b.toString();return this};
n.ta=function(){return this.h};
n.ga=function(a){Ai(this,a.event,a)};
n.addEventListener=function(a,b){var c=b;"string"===typeof b&&(c=function(){window[b].apply(window,arguments)});
if(!c)return this;this.l.subscribe(a,c);Bi(this,a);return this};
function Ci(a,b){b=b.split(".");if(2===b.length){var c=b[1];a.v===b[0]&&Bi(a,c)}}
n.destroy=function(){this.h&&this.h.id&&(ri[this.h.id]=null);var a=this.l;a&&"function"==typeof a.dispose&&a.dispose();if(this.m){a=this.h;var b=a.parentNode;b&&b.replaceChild(this.m,a)}else(a=this.h)&&a.parentNode&&a.parentNode.removeChild(a);zi&&(zi[this.id]=null);this.i=null;a=this.h;for(var c in Xa)Xa[c][0]==a&&te(c);this.m=this.h=null};
n.ia=function(){return{}};
function Di(a,b,c){c=c||[];c=Array.prototype.slice.call(c);b={event:"command",func:b,args:c};a.o?a.sendMessage(b):a.s.push(b)}
function Ai(a,b,c){a.l.m||(c={target:a,data:c},a.l.O(b,c),wi(a.v+"."+b,c))}
function Ei(a,b){var c=document.createElement("iframe");b=b.attributes;for(var d=0,e=b.length;d<e;d++){var f=b[d].value;null!=f&&""!==f&&"null"!==f&&c.setAttribute(b[d].name,f)}c.setAttribute("frameBorder","0");c.setAttribute("allowfullscreen","1");c.setAttribute("allow","accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture");c.setAttribute("title","YouTube "+Y(a.i,"title"));(b=Y(a.i,"width"))&&c.setAttribute("width",b.toString());(b=Y(a.i,"height"))&&c.setAttribute("height",
b.toString());var g=a.ia();g.enablejsapi=window.postMessage?1:0;window.location.host&&(g.origin=window.location.protocol+"//"+window.location.host);g.widgetid=a.id;window.location.href&&I(["debugjs","debugcss"],function(h){var k=wb(window.location.href,h);null!==k&&(g[h]=k)});
window.yt_embedsTokenValue&&(g.embedsTokenValue=encodeURIComponent(window.yt_embedsTokenValue),delete window.yt_embedsTokenValue);c.src=Y(a.i,"host")+("/embed/"+Y(a.i,"videoId"))+"?"+ub(g);return c}
n.pa=function(){this.h&&this.h.contentWindow?this.sendMessage({event:"listening"}):window.clearInterval(this.j)};
function Fi(a){yi(a.i,a,a.id);a.j=xe(a.pa.bind(a));ve(a.h,"load",function(){window.clearInterval(a.j);a.j=xe(a.pa.bind(a))})}
n.setup=function(a,b){var c=document;if(a="string"===typeof a?c.getElementById(a):a)if(c="iframe"===a.tagName.toLowerCase(),b.host||(b.host=c?sb(a.src):"https://www.youtube.com"),this.i=new xi(b),c||(b=Ei(this,a),this.m=a,(c=a.parentNode)&&c.replaceChild(b,a),a=b),this.h=a,this.h.id||(this.h.id="widget"+Ea(this.h)),ri[this.h.id]=this,window.postMessage){this.l=new O;Fi(this);b=Y(this.i,"events");for(var d in b)b.hasOwnProperty(d)&&this.addEventListener(d,b[d]);for(var e in ti)ti.hasOwnProperty(e)&&
Ci(this,e)}};
function Bi(a,b){a.B[b]||(a.B[b]=!0,Di(a,"addEventListener",[b]))}
n.sendMessage=function(a){a.id=this.id;a.channel="widget";a=xd(a);var b=this.i;var c=sb(this.h.src||"");b=0===c.indexOf("https:")?[c]:b.h?[c.replace("http:","https:")]:b.j?[c]:[c,c.replace("http:","https:")];if(this.h.contentWindow)for(c=0;c<b.length;c++)try{this.h.contentWindow.postMessage(a,b[c])}catch(A){if(A.name&&"SyntaxError"===A.name){if(!(A.message&&0<A.message.indexOf("target origin ''"))){var d=void 0,e=A;d=void 0===d?{}:d;d.name=P("INNERTUBE_CONTEXT_CLIENT_NAME",1);d.version=P("INNERTUBE_CONTEXT_CLIENT_VERSION",
void 0);var f=d||{};d="WARNING";d=void 0===d?"ERROR":d;if(e){e.hasOwnProperty("level")&&e.level&&(d=e.level);if(S("console_log_js_exceptions")){var g=e,h=[];h.push("Name: "+g.name);h.push("Message: "+g.message);g.hasOwnProperty("params")&&h.push("Error Params: "+JSON.stringify(g.params));g.hasOwnProperty("args")&&h.push("Error args: "+JSON.stringify(g.args));h.push("File name: "+g.fileName);h.push("Stacktrace: "+g.stack);window.console.log(h.join("\n"),g)}if(!(5<=ki)){g=void 0;var k=f,l=Gc(e);f=l.message||
"Unknown Error";h=l.name||"UnknownError";var m=l.stack||e.i||"Not available";if(m.startsWith(h+": "+f)){var p=m.split("\n");p.shift();m=p.join("\n")}p=l.lineNumber||"Not available";l=l.fileName||"Not available";var r=0;if(e.hasOwnProperty("args")&&e.args&&e.args.length)for(g=0;g<e.args.length&&!(r=gi(e.args[g],"params."+g,k,r),500<=r);g++);else if(e.hasOwnProperty("params")&&e.params){var q=e.params;if("object"===typeof e.params)for(g in q){if(q[g]){var y="params."+g,C=ii(q[g]);k[y]=C;r+=y.length+
C.length;if(500<r)break}}else k.params=ii(q)}if(ni.length)for(g=0;g<ni.length&&!(r=gi(ni[g],"params.context."+g,k,r),500<=r);g++);navigator.vendor&&!k.hasOwnProperty("vendor")&&(k["device.vendor"]=navigator.vendor);g={message:f,name:h,lineNumber:p,fileName:l,stack:m,params:k,sampleWeight:1};f=Number(e.columnNumber);isNaN(f)||(g.lineNumber=g.lineNumber+":"+f);if("IGNORED"===e.level)e=0;else a:{e=ci();f=u(e.K);for(h=f.next();!h.done;h=f.next())if(h=h.value,g.message&&g.message.match(h.ab)){e=h.weight;
break a}e=u(e.I);for(f=e.next();!f.done;f=e.next())if(f=f.value,f.va(g)){e=f.weight;break a}e=1}g.sampleWeight=e;e=g;g=u(Yh);for(f=g.next();!f.done;f=g.next())if(f=f.value,f.fa[e.name])for(p=u(f.fa[e.name]),h=p.next();!h.done;h=p.next())if(l=h.value,h=e.message.match(l.regexp)){e.params["params.error.original"]=h[0];p=l.groups;l={};for(m=0;m<p.length;m++)l[p[m]]=h[m+1],e.params["params.error."+p[m]]=h[m+1];e.message=f.la(l);break}e.params||(e.params={});g=ci();e.params["params.errorServiceSignature"]=
"msg="+g.K.length+"&cb="+g.I.length;e.params["params.serviceWorker"]="false";B.document&&B.document.querySelectorAll&&(e.params["params.fscripts"]=String(document.querySelectorAll("script:not([nonce])").length));window.yterr&&"function"===typeof window.yterr&&window.yterr(e);if(0!==e.sampleWeight&&!ji.has(e.message)){"ERROR"===d?(di.O("handleError",e),S("record_app_crashed_web")&&0===mi&&1===e.sampleWeight&&(mi++,Xh("appCrashed",{appCrashType:"APP_CRASH_TYPE_BREAKPAD"})),li++):"WARNING"===d&&di.O("handleWarning",
e);if(S("kevlar_gel_error_routing")){g=d;h=e;b:{f=u(oi);for(p=f.next();!p.done;p=f.next())if((l=kb)&&0<=l.toLowerCase().indexOf(p.value.toLowerCase())){f=!0;break b}f=!1}if(f)f=void 0;else{p={stackTrace:h.stack};h.fileName&&(p.filename=h.fileName);f=h.lineNumber&&h.lineNumber.split?h.lineNumber.split(":"):[];0!==f.length&&(1!==f.length||isNaN(Number(f[0]))?2!==f.length||isNaN(Number(f[0]))||isNaN(Number(f[1]))||(p.lineNumber=Number(f[0]),p.columnNumber=Number(f[1])):p.lineNumber=Number(f[0]));f={level:"ERROR_LEVEL_UNKNOWN",
message:h.message,errorClassName:h.name,sampleWeight:h.sampleWeight};"ERROR"===g?f.level="ERROR_LEVEL_ERROR":"WARNING"===g&&(f.level="ERROR_LEVEL_WARNNING");p={isObfuscated:!0,browserStackInfo:p};l={pageUrl:window.location.href,kvPairs:[]};P("FEXP_EXPERIMENTS")&&(l.experimentIds=P("FEXP_EXPERIMENTS"));if(h=h.params)for(m=u(Object.keys(h)),k=m.next();!k.done;k=m.next())k=k.value,l.kvPairs.push({key:"client."+k,value:String(h[k])});h=P("SERVER_NAME",void 0);m=P("SERVER_VERSION",void 0);h&&m&&(l.kvPairs.push({key:"server.name",
value:h}),l.kvPairs.push({key:"server.version",value:m}));f={errorMetadata:l,stackTrace:p,logMessage:f}}f&&(Xh("clientError",f),("ERROR"===g||S("errors_flush_gel_always_killswitch"))&&Ef())}if(!S("suppress_error_204_logging")){f=e;g=f.params||{};d={urlParams:{a:"logerror",t:"jserror",type:f.name,msg:f.message.substr(0,250),line:f.lineNumber,level:d,"client.name":g.name},postParams:{url:P("PAGE_NAME",window.location.href),file:f.fileName},method:"POST"};g.version&&(d["client.version"]=g.version);if(d.postParams){f.stack&&
(d.postParams.stack=f.stack);f=u(Object.keys(g));for(h=f.next();!h.done;h=f.next())h=h.value,d.postParams["client."+h]=g[h];if(g=P("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS",void 0))for(f=u(Object.keys(g)),h=f.next();!h.done;h=f.next())h=h.value,d.postParams[h]=g[h];g=P("SERVER_NAME",void 0);f=P("SERVER_VERSION",void 0);g&&f&&(d.postParams["server.name"]=g,d.postParams["server.version"]=f)}Ye(P("ECATCHER_REPORT_HOST","")+"/error_204",d)}ji.add(e.message);ki++}}}}}else throw A;}else console&&console.warn&&
console.warn("The YouTube player is not attached to the DOM. API calls should be made after the onReady event. See more: https://developers.google.com/youtube/iframe_api_reference#Events")};function Gi(a){return(0===a.search("cue")||0===a.search("load"))&&"loadModule"!==a}
function Hi(a){return 0===a.search("get")||0===a.search("is")}
;function Ii(a,b){Z.call(this,a,Object.assign({title:"video player",videoId:"",width:640,height:360},b||{}),"player");this.F={};this.playerInfo={}}
v(Ii,Z);n=Ii.prototype;n.ia=function(){var a=Y(this.i,"playerVars");if(a){var b={},c;for(c in a)b[c]=a[c];a=b}else a={};window!==window.top&&document.referrer&&(a.widget_referrer=document.referrer.substring(0,256));if(c=Y(this.i,"embedConfig")){if(F(c))try{c=JSON.stringify(c)}catch(d){console.error("Invalid embed config JSON",d)}a.embed_config=c}return a};
n.ga=function(a){var b=a.event;a=a.info;switch(b){case "apiInfoDelivery":if(F(a))for(var c in a)a.hasOwnProperty(c)&&(this.F[c]=a[c]);break;case "infoDelivery":Ji(this,a);break;case "initialDelivery":F(a)&&(window.clearInterval(this.j),this.playerInfo={},this.F={},Ki(this,a.apiInterface),Ji(this,a));break;default:Ai(this,b,a)}};
function Ji(a,b){if(F(b))for(var c in b)b.hasOwnProperty(c)&&(a.playerInfo[c]=b[c])}
function Ki(a,b){I(b,function(c){this[c]||("getCurrentTime"===c?this[c]=function(){var d=this.playerInfo.currentTime;if(1===this.playerInfo.playerState){var e=(Date.now()/1E3-this.playerInfo.currentTimeLastUpdated_)*this.playerInfo.playbackRate;0<e&&(d+=Math.min(e,1))}return d}:Gi(c)?this[c]=function(){this.playerInfo={};
this.F={};Di(this,c,arguments);return this}:Hi(c)?this[c]=function(){var d=0;
0===c.search("get")?d=3:0===c.search("is")&&(d=2);return this.playerInfo[c.charAt(d).toLowerCase()+c.substr(d+1)]}:this[c]=function(){Di(this,c,arguments);
return this})},a)}
n.getVideoEmbedCode=function(){var a=Y(this.i,"host")+("/embed/"+Y(this.i,"videoId")),b=Number(Y(this.i,"width")),c=Number(Y(this.i,"height"));if(isNaN(b)||isNaN(c))throw Error("Invalid width or height property");b=Math.floor(b);c=Math.floor(c);jb.test(a)&&(-1!=a.indexOf("&")&&(a=a.replace(db,"&amp;")),-1!=a.indexOf("<")&&(a=a.replace(eb,"&lt;")),-1!=a.indexOf(">")&&(a=a.replace(fb,"&gt;")),-1!=a.indexOf('"')&&(a=a.replace(gb,"&quot;")),-1!=a.indexOf("'")&&(a=a.replace(hb,"&#39;")),-1!=a.indexOf("\x00")&&
(a=a.replace(ib,"&#0;")));return'<iframe width="'+b+'" height="'+c+'" src="'+a+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'};
n.getOptions=function(a){return this.F.namespaces?a?this.F[a]?this.F[a].options||[]:[]:this.F.namespaces||[]:[]};
n.getOption=function(a,b){if(this.F.namespaces&&a&&b&&this.F[a])return this.F[a][b]};
function Li(a){if("iframe"!==a.tagName.toLowerCase()){var b=vi(a,"videoid");b&&(b={videoId:b,width:vi(a,"width"),height:vi(a,"height")},new Ii(a,b))}}
;G("YT.PlayerState.UNSTARTED",-1);G("YT.PlayerState.ENDED",0);G("YT.PlayerState.PLAYING",1);G("YT.PlayerState.PAUSED",2);G("YT.PlayerState.BUFFERING",3);G("YT.PlayerState.CUED",5);G("YT.get",function(a){return ri[a]});
G("YT.scan",ui);G("YT.subscribe",function(a,b,c){Od.subscribe(a,b,c);ti[a]=!0;for(var d in ri)ri.hasOwnProperty(d)&&Ci(ri[d],a)});
G("YT.unsubscribe",function(a,b,c){Nd(a,b,c)});
G("YT.Player",Ii);Z.prototype.destroy=Z.prototype.destroy;Z.prototype.setSize=Z.prototype.setSize;Z.prototype.getIframe=Z.prototype.ta;Z.prototype.addEventListener=Z.prototype.addEventListener;Ii.prototype.getVideoEmbedCode=Ii.prototype.getVideoEmbedCode;Ii.prototype.getOptions=Ii.prototype.getOptions;Ii.prototype.getOption=Ii.prototype.getOption;
si.push(function(a){var b=a;b||(b=document);a=Ta(b.getElementsByTagName("yt:player"));var c=b||document;if(c.querySelectorAll&&c.querySelector)b=c.querySelectorAll(".yt-player");else{var d;c=document;b=b||c;if(b.querySelectorAll&&b.querySelector)b=b.querySelectorAll(".yt-player");else if(b.getElementsByClassName){var e=b.getElementsByClassName("yt-player");b=e}else{e=b.getElementsByTagName("*");var f={};for(c=d=0;b=e[c];c++){var g=b.className,h;if(h="function"==typeof g.split)h=0<=Oa(g.split(/\s+/),
"yt-player");h&&(f[d++]=b)}f.length=d;b=f}}b=Ta(b);I(Sa(a,b),Li)});
"undefined"!=typeof YTConfig&&YTConfig.parsetags&&"onload"!=YTConfig.parsetags||ui();var Mi=B.onYTReady;Mi&&Mi();var Ni=B.onYouTubeIframeAPIReady;Ni&&Ni();var Oi=B.onYouTubePlayerAPIReady;Oi&&Oi();}).call(this);
