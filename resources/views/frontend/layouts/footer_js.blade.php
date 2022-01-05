<script type="text/javascript">
    var tWidth='1200px';                  // width (in pixels)
    var tHeight='20px';                  // height (in pixels)
    var tcolour='#000000';               // background colour:
    var moStop=true;                     // pause on mouseover (true or false)
    var fontfamily = 'arial,sans-serif'; // font for content
    var tSpeed=3;                        // scroll speed (1 = slow, 5 = fast)
    
    // enter your ticker content here (use \/ and \' in place of / and ' respectively)
    var content='⦿ ঢাবিতে কাল থেকে টিকাদান শুরু  ⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  ⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল ⦿ ঢাবিতে কাল থেকে টিকাদান শুরু  ⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  ⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল ⦿ ঢাবিতে কাল থেকে টিকাদান শুরু  ⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  ⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল';
    
    var cps=-tSpeed; var aw, mq; var fsz = parseInt(tHeight) - 4; function startticker(){if (document.getElementById) {var tick = '<div style="position:relative;width:'+tWidth+';height:'+tHeight+';overflow:hidden;background-color:'+tcolour+'"'; if (moStop) tick += ' onmouseover="cps=0" onmouseout="cps=-tSpeed"'; tick +='><div id="mq" style="position:absolute;left:0px;top:0px;font-family:'+fontfamily+';font-size:'+fsz+'px;white-space:nowrap;"><\/div><\/div>'; document.getElementById('ticker').innerHTML = tick; mq = document.getElementById("mq"); mq.style.left=(10+parseInt(tWidth))+"px"; mq.innerHTML='<span id="tx">'+content+'<\/span>'; aw = document.getElementById("tx").offsetWidth; lefttime=setInterval("scrollticker()",50);}} function scrollticker(){mq.style.left = (parseInt(mq.style.left)>(-10 - aw)) ?
    mq.style.left = parseInt(mq.style.left)+cps+"px": parseInt(tWidth)+10+"px";} window.onload=startticker;
    </script>
{{-- 
<script id="hello-world" type="text/javascript" target="amp-script">
    var tWidth='1200px';                  // width (in pixels)
    var tHeight='20px';                  // height (in pixels)
    var tcolour='#000000';               // background colour:
    var moStop=true;                     // pause on mouseover (true or false)
    var fontfamily = 'arial,sans-serif'; // font for content
    var tSpeed=3;                        // scroll speed (1 = slow, 5 = fast)
    
    // enter your ticker content here (use \/ and \' in place of / and ' respectively)
    var content='⦿ ঢাবিতে কাল থেকে টিকাদান শুরু  ⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  ⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল ⦿ ঢাবিতে কাল থেকে টিকাদান শুরু  ⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  ⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল ⦿ ঢাবিতে কাল থেকে টিকাদান শুরু  ⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  ⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল';
    
    var cps=-tSpeed; var aw, mq; var fsz = parseInt(tHeight) - 4; function startticker(){if (document.getElementById) {var tick = '<div style="position:relative;width:'+tWidth+';height:'+tHeight+';overflow:hidden;background-color:'+tcolour+'"'; if (moStop) tick += ' onmouseover="cps=0" onmouseout="cps=-tSpeed"'; tick +='><div id="mq" style="position:absolute;left:0px;top:0px;font-family:'+fontfamily+';font-size:'+fsz+'px;white-space:nowrap;"><\/div><\/div>'; document.getElementById('ticker').innerHTML = tick; mq = document.getElementById("mq"); mq.style.left=(10+parseInt(tWidth))+"px"; mq.innerHTML='<span id="tx">'+content+'<\/span>'; aw = document.getElementById("tx").offsetWidth; lefttime=setInterval("scrollticker()",50);}} function scrollticker(){mq.style.left = (parseInt(mq.style.left)>(-10 - aw)) ?
    mq.style.left = parseInt(mq.style.left)+cps+"px": parseInt(tWidth)+10+"px";} window.onload=startticker;
  </script> --}}
  