var swfobject=function(){var At="undefined",Ay="object",Z="Shockwave Flash",Ad="ShockwaveFlash.ShockwaveFlash",AB="application/x-shockwave-flash",Y="SWFObjectExprInst",Aw="onreadystatechange",Al=window,AG=document,AE=navigator,Ae=false,Af=[AI],AL=[],Ak=[],Aj=[],AM,Ab,Au,Ao,Ag=false,AQ=false,AK,As,AN=true,An=function(){var B=typeof AG.getElementById!=At&&typeof AG.getElementsByTagName!=At&&typeof AG.createElement!=At,I=AE.userAgent.toLowerCase(),G=AE.platform.toLowerCase(),K=G?/win/.test(G):/win/.test(I),J=G?/mac/.test(G):/mac/.test(I),A=/webkit/.test(I)?parseFloat(I.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,F=!+"\v1",E=[0,0,0],D=null;if(typeof AE.plugins!=At&&typeof AE.plugins[Z]==Ay){D=AE.plugins[Z].description;if(D&&!(typeof AE.mimeTypes!=At&&AE.mimeTypes[AB]&&!AE.mimeTypes[AB].enabledPlugin)){Ae=true;F=false;D=D.replace(/^.*\s+(\S+\s+\S+$)/,"$1");E[0]=parseInt(D.replace(/^(.*)\..*$/,"$1"),10);E[1]=parseInt(D.replace(/^.*\.(.*)\s.*$/,"$1"),10);E[2]=/[a-zA-Z]/.test(D)?parseInt(D.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof Al.ActiveXObject!=At){try{var C=new ActiveXObject(Ad);if(C){D=C.GetVariable("$version");if(D){F=true;D=D.split(" ")[1].split(",");E=[parseInt(D[0],10),parseInt(D[1],10),parseInt(D[2],10)]}}}catch(H){}}}return{w3:B,pv:E,wk:A,ie:F,win:K,mac:J}}(),AH=function(){if(!An.w3){return}if((typeof AG.readyState!=At&&AG.readyState=="complete")||(typeof AG.readyState==At&&(AG.getElementsByTagName("body")[0]||AG.body))){AR()}if(!Ag){if(typeof AG.addEventListener!=At){AG.addEventListener("DOMContentLoaded",AR,false)}if(An.ie&&An.win){AG.attachEvent(Aw,function(){if(AG.readyState=="complete"){AG.detachEvent(Aw,arguments.callee);AR()}});if(Al==top){(function(){if(Ag){return}try{AG.documentElement.doScroll("left")}catch(A){setTimeout(arguments.callee,0);return}AR()})()}}if(An.wk){(function(){if(Ag){return}if(!/loaded|complete/.test(AG.readyState)){setTimeout(arguments.callee,0);return}AR()})()}Az(AR)}}();function AR(){if(Ag){return}try{var A=AG.getElementsByTagName("body")[0].appendChild(Ap("span"));A.parentNode.removeChild(A)}catch(D){return}Ag=true;var B=Af.length;for(var C=0;C<B;C++){Af[C]()}}function Ah(A){if(Ag){A()}else{Af[Af.length]=A}}function Az(B){if(typeof Al.addEventListener!=At){Al.addEventListener("load",B,false)}else{if(typeof AG.addEventListener!=At){AG.addEventListener("load",B,false)}else{if(typeof Al.attachEvent!=At){AJ(Al,"onload",B)}else{if(typeof Al.onload=="function"){var A=Al.onload;Al.onload=function(){A();B()}}else{Al.onload=B}}}}}function AI(){if(Ae){Ac()}else{Ai()}}function Ac(){var B=AG.getElementsByTagName("body")[0];var D=Ap(Ay);D.setAttribute("type",AB);var A=B.appendChild(D);if(A){var C=0;(function(){if(typeof A.GetVariable!=At){var E=A.GetVariable("$version");if(E){E=E.split(" ")[1].split(",");An.pv=[parseInt(E[0],10),parseInt(E[1],10),parseInt(E[2],10)]}}else{if(C<10){C++;setTimeout(arguments.callee,10);return}}B.removeChild(D);A=null;Ai()})()}else{Ai()}}function Ai(){var A=AL.length;if(A>0){for(var L=0;L<A;L++){var F=AL[L].id;var D=AL[L].callbackFn;var B={success:false,id:F};if(An.pv[0]>0){var K=AP(F);if(K){if(Ar(AL[L].swfVersion)&&!(An.wk&&An.wk<312)){AD(F,true);if(D){B.success=true;B.ref=Av(F);D(B)}}else{if(AL[L].expressInstall&&Aq()){var I={};I.data=AL[L].expressInstall;I.width=K.getAttribute("width")||"0";I.height=K.getAttribute("height")||"0";if(K.getAttribute("class")){I.styleclass=K.getAttribute("class")}if(K.getAttribute("align")){I.align=K.getAttribute("align")}var H={};var E=K.getElementsByTagName("param");var J=E.length;for(var C=0;C<J;C++){if(E[C].getAttribute("name").toLowerCase()!="movie"){H[E[C].getAttribute("name")]=E[C].getAttribute("value")}}Aa(I,H,F,D)}else{AA(K);if(D){D(B)}}}}}else{AD(F,true);if(D){var G=Av(F);if(G&&typeof G.SetVariable!=At){B.success=true;B.ref=G}D(B)}}}}}function Av(D){var B=null;var C=AP(D);if(C&&C.nodeName=="OBJECT"){if(typeof C.SetVariable!=At){B=C}else{var A=C.getElementsByTagName(Ay)[0];if(A){B=A}}}return B}function Aq(){return !AQ&&Ar("6.0.65")&&(An.win||An.mac)&&!(An.wk&&An.wk<312)}function Aa(B,C,E,D){AQ=true;Au=D||null;Ao={success:false,id:E};var H=AP(E);if(H){if(H.nodeName=="OBJECT"){AM=AS(H);Ab=null}else{AM=H;Ab=E}B.id=Y;if(typeof B.width==At||(!/%$/.test(B.width)&&parseInt(B.width,10)<310)){B.width="310"}if(typeof B.height==At||(!/%$/.test(B.height)&&parseInt(B.height,10)<137)){B.height="137"}AG.title=AG.title.slice(0,47)+" - Flash Player Installation";var A=An.ie&&An.win?"ActiveX":"PlugIn",G="MMredirectURL="+Al.location.toString().replace(/&/g,"%26")+"&MMplayerType="+A+"&MMdoctitle="+AG.title;if(typeof C.flashvars!=At){C.flashvars+="&"+G}else{C.flashvars=G}if(An.ie&&An.win&&H.readyState!=4){var F=Ap("div");E+="SWFObjectNew";F.setAttribute("id",E);H.parentNode.insertBefore(F,H);H.style.display="none";(function(){if(H.readyState==4){H.parentNode.removeChild(H)}else{setTimeout(arguments.callee,10)}})()}AF(B,C,E)}}function AA(B){if(An.ie&&An.win&&B.readyState!=4){var A=Ap("div");B.parentNode.insertBefore(A,B);A.parentNode.replaceChild(AS(B),A);B.style.display="none";(function(){if(B.readyState==4){B.parentNode.removeChild(B)}else{setTimeout(arguments.callee,10)}})()}else{B.parentNode.replaceChild(AS(B),B)}}function AS(A){var F=Ap("div");if(An.win&&An.ie){F.innerHTML=A.innerHTML}else{var E=A.getElementsByTagName(Ay)[0];if(E){var D=E.childNodes;if(D){var C=D.length;for(var B=0;B<C;B++){if(!(D[B].nodeType==1&&D[B].nodeName=="PARAM")&&!(D[B].nodeType==8)){F.appendChild(D[B].cloneNode(true))}}}}}return F}function AF(I,A,G){var F,B=AP(G);if(An.wk&&An.wk<312){return F}if(B){if(typeof I.id==At){I.id=G}if(An.ie&&An.win){var H="";for(var K in I){if(I[K]!=Object.prototype[K]){if(K.toLowerCase()=="data"){A.movie=I[K]}else{if(K.toLowerCase()=="styleclass"){H+=' class="'+I[K]+'"'}else{if(K.toLowerCase()!="classid"){H+=" "+K+'="'+I[K]+'"'}}}}}var L="";for(var C in A){if(A[C]!=Object.prototype[C]){L+='<param name="'+C+'" value="'+A[C]+'" />'}}B.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+H+">"+L+"</object>";Ak[Ak.length]=I.id;F=AP(I.id)}else{var E=Ap(Ay);E.setAttribute("type",AB);for(var J in I){if(I[J]!=Object.prototype[J]){if(J.toLowerCase()=="styleclass"){E.setAttribute("class",I[J])}else{if(J.toLowerCase()!="classid"){E.setAttribute(J,I[J])}}}}for(var D in A){if(A[D]!=Object.prototype[D]&&D.toLowerCase()!="movie"){X(E,D,A[D])}}B.parentNode.replaceChild(E,B);F=E}}return F}function X(A,B,C){var D=Ap("param");D.setAttribute("name",B);D.setAttribute("value",C);A.appendChild(D)}function Ax(B){var A=AP(B);if(A&&A.nodeName=="OBJECT"){if(An.ie&&An.win){A.style.display="none";(function(){if(A.readyState==4){AO(B)}else{setTimeout(arguments.callee,10)}})()}else{A.parentNode.removeChild(A)}}}function AO(A){var C=AP(A);if(C){for(var B in C){if(typeof C[B]=="function"){C[B]=null}}C.parentNode.removeChild(C)}}function AP(A){var B=null;try{B=AG.getElementById(A)}catch(C){}return B}function Ap(A){return AG.createElement(A)}function AJ(A,B,C){A.attachEvent(B,C);Aj[Aj.length]=[A,B,C]}function Ar(A){var C=An.pv,B=A.split(".");B[0]=parseInt(B[0],10);B[1]=parseInt(B[1],10)||0;B[2]=parseInt(B[2],10)||0;return(C[0]>B[0]||(C[0]==B[0]&&C[1]>B[1])||(C[0]==B[0]&&C[1]==B[1]&&C[2]>=B[2]))?true:false}function AC(B,F,E,A){if(An.ie&&An.mac){return}var G=AG.getElementsByTagName("head")[0];if(!G){return}var D=(E&&typeof E=="string")?E:"screen";if(A){AK=null;As=null}if(!AK||As!=D){var C=Ap("style");C.setAttribute("type","text/css");C.setAttribute("media",D);AK=G.appendChild(C);if(An.ie&&An.win&&typeof AG.styleSheets!=At&&AG.styleSheets.length>0){AK=AG.styleSheets[AG.styleSheets.length-1]}As=D}if(An.ie&&An.win){if(AK&&typeof AK.addRule==Ay){AK.addRule(B,F)}}else{if(AK&&typeof AG.createTextNode!=At){AK.appendChild(AG.createTextNode(B+" {"+F+"}"))}}}function AD(A,B){if(!AN){return}var C=B?"visible":"hidden";if(Ag&&AP(A)){AP(A).style.visibility=C}else{AC("#"+A,"visibility:"+C)}}function Am(C){var A=/[\\\"<>\.;]/;var B=A.exec(C)!=null;return B&&typeof encodeURIComponent!=At?encodeURIComponent(C):C}var AT=function(){if(An.ie&&An.win){window.attachEvent("onunload",function(){var B=Aj.length;for(var A=0;A<B;A++){Aj[A][0].detachEvent(Aj[A][1],Aj[A][2])}var C=Ak.length;for(var F=0;F<C;F++){Ax(Ak[F])}for(var E in An){An[E]=null}An=null;for(var D in swfobject){swfobject[D]=null}swfobject=null})}}();return{registerObject:function(A,C,E,B){if(An.w3&&A&&C){var D={};D.id=A;D.swfVersion=C;D.expressInstall=E;D.callbackFn=B;AL[AL.length]=D;AD(A,false)}else{if(B){B({success:false,id:A})}}},getObjectById:function(A){if(An.w3){return Av(A)}},embedSWF:function(I,H,J,A,F,B,D,C,K,E){var G={success:false,id:H};if(An.w3&&!(An.wk&&An.wk<312)&&I&&H&&J&&A&&F){AD(H,false);Ah(function(){J+="";A+="";var O={};if(K&&typeof K===Ay){for(var Q in K){O[Q]=K[Q]}}O.data=I;O.width=J;O.height=A;var L={};if(C&&typeof C===Ay){for(var P in C){L[P]=C[P]}}if(D&&typeof D===Ay){for(var M in D){if(typeof L.flashvars!=At){L.flashvars+="&"+M+"="+D[M]}else{L.flashvars=M+"="+D[M]}}}if(Ar(F)){var N=AF(O,L,H);if(O.id==H){AD(H,true)}G.success=true;G.ref=N}else{if(B&&Aq()){O.data=B;Aa(O,L,H,E);return}else{AD(H,true)}}if(E){E(G)}})}else{if(E){E(G)}}},switchOffAutoHideShow:function(){AN=false},ua:An,getFlashPlayerVersion:function(){return{major:An.pv[0],minor:An.pv[1],release:An.pv[2]}},hasFlashPlayerVersion:Ar,createSWF:function(A,C,B){if(An.w3){return AF(A,C,B)}else{return undefined}},showExpressInstall:function(A,D,B,C){if(An.w3&&Aq()){Aa(A,D,B,C)}},removeSWF:function(A){if(An.w3){Ax(A)}},createCSS:function(D,A,C,B){if(An.w3){AC(D,A,C,B)}},addDomLoadEvent:Ah,addLoadEvent:Az,getQueryParamValue:function(D){var A=AG.location.search||AG.location.hash;if(A){if(/\?/.test(A)){A=A.split("?")[1]}if(D==null){return Am(A)}var C=A.split("&");for(var B=0;B<C.length;B++){if(C[B].substring(0,C[B].indexOf("="))==D){return Am(C[B].substring((C[B].indexOf("=")+1)))}}}return""},expressInstallCallback:function(){if(AQ){var A=AP(Y);if(A&&AM){A.parentNode.replaceChild(AM,A);if(Ab){AD(Ab,true);if(An.ie&&An.win){AM.style.display="block"}}if(Au){Au(Ao)}}AQ=false}}}}();