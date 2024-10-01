<?php include 'header.php';?>
<link rel="stylesheet" href="assets/css/style.css">
<!-- <link rel="stylesheet" href="assets/css/screen.css"> -->
  <script type="text/javascript">
  function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
  }

  function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
  }

  function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

  function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
  }
  </script>
    <div class="hero-main">
        <h2>栽培日記</h2>
    </div><br>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #198754;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .corn-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #198754;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .back-button:hover {
            background-color: #14422d;
        }
        
    </style>
    <div class="container">
        <h1>「埼玉青ナスサブレ」発売前後の畑の様子</h1>
        <p>「埼玉青ナスサブレ」発売後の畑のめざましい変化をご報告いたします。リリース前、私たちの作物は着実に成長していましたが、それ以来、収量と品質の両方において目覚ましい急増を目の当たりにしました。新しい技術と手入れにより、元気で健康なナスが収穫の準備が整いました。私たちは畑を育て、最高の農産物をお届けし続けますので、さらなる最新情報をお楽しみに！</p>
        
        <img src="./assets/images/eggplant.png" alt="Fresh Corn" class="corn-image">

        <a href="./news-announcements.php" class="back-button">← ニュースに戻る</a>
    </div>
    <?php include 'footer.php';?>