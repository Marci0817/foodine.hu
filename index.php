<?php
    session_start();
    include('dbConnection.php');
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: index.php");
    }
    if (isset($_GET['kategoria'])){
        $kat_keres = base64_encode($_GET['kategoria']);
    }else{
        
    }

    $Húsételek = base64_encode("Húsételek");
    $Édes_sütik = base64_encode("Édes sütik");
    $Levesek = base64_encode("Levesek");
    $Egytálétel = base64_encode("Egytálétel");
    $Főzelék = base64_encode("Főzelék");
    $Tészta = base64_encode("Tészta");
    $Sós_süti = base64_encode("Sós süti");
    $Saláta = base64_encode("Saláta");
    $Szósz = base64_encode("Szósz");
    $Sós_krémek = base64_encode("Sós krémek");
    $Édes_krémek = base64_encode("Édes krémek");
    $Köret = base64_encode("Köret");
    $Befőtt = base64_encode("Befőtt");
    $Halételek = base64_encode("Halételek");
    $Szendvicsek = base64_encode("Szendvicsek");
    $Lekvárok_dzsemek = base64_encode("Lekvárok-dzsemek");
    $Gluténmentes = base64_encode("Gluténmentes");
    $Egyéb = base64_encode("Egyéb");

    $count = "SELECT COUNT(*) FROM recept";
    $stmt = $db->prepare($count);
    //$stmt->bind_param("s", $Húsételek);
    $stmt->execute();
    $stmt->bind_result($db_all);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Húsételek);
    $stmt->execute();
    $stmt->bind_result($db_Húsételek);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Édes_sütik);
    $stmt->execute();
    $stmt->bind_result($db_Édes_sütik);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Levesek);
    $stmt->execute();
    $stmt->bind_result($db_Levesek);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Egytálétel);
    $stmt->execute();
    $stmt->bind_result($db_Egytálétel);
    $stmt->fetch();
    $stmt->close();
    
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Főzelék);
    $stmt->execute();
    $stmt->bind_result($db_Főzelék);
    $stmt->fetch();
    $stmt->close();
    
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Tészta);
    $stmt->execute();
    $stmt->bind_result($db_Tészta);
    $stmt->fetch();
    $stmt->close();
    
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Sós_süti);
    $stmt->execute();
    $stmt->bind_result($db_Sós_süti);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Saláta);
    $stmt->execute();
    $stmt->bind_result($db_Saláta);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Szósz);
    $stmt->execute();
    $stmt->bind_result($db_Szósz);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Sós_krémek);
    $stmt->execute();
    $stmt->bind_result($db_Sós_krémek);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Édes_krémek);
    $stmt->execute();
    $stmt->bind_result($db_Édes_krémek);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Köret);
    $stmt->execute();
    $stmt->bind_result($db_Köret);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Befőtt);
    $stmt->execute();
    $stmt->bind_result($db_Befőtt);
    $stmt->fetch();
    $stmt->close();
    
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Halételek);
    $stmt->execute();
    $stmt->bind_result($db_Halételek);
    $stmt->fetch();
    $stmt->close();
    
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Szendvicsek);
    $stmt->execute();
    $stmt->bind_result($db_Szendvicsek);
    $stmt->fetch();
    $stmt->close();
    
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Lekvárok_dzsemek);
    $stmt->execute();
    $stmt->bind_result($db_Lekvárok_dzsemek);
    $stmt->fetch();
    $stmt->close();

    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Gluténmentes);
    $stmt->execute();
    $stmt->bind_result($db_Gluténmentes);
    $stmt->fetch();
    $stmt->close();
        
    $count = "SELECT COUNT(*) FROM recept WHERE kategoria=?";
    $stmt = $db->prepare($count);
    $stmt->bind_param("s", $Egyéb);
    $stmt->execute();
    $stmt->bind_result($db_Egyéb);
    $stmt->fetch();
    $stmt->close();
        
    


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Foodine</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel = "icon" href ="img/logo2.png" type = "image/x-icon"> 
        <script data-ad-client="ca-pub-3053200278324643" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <meta name="description" content="Recept feltöltés, főzés-sütés, főzés, sütés, receptek, recept, szakácskönyv, foodine" />
        <!-- purpleads hirdetes -->
        <script src="https://cdn.purpleads.io/load.js?publisherId=3a77ebfb7ff9e51bb2e497c8e1f4d30a:f969591a7808552b34674c3cce88cb62c37e552aef664c28d0c37c4afd385af5e910892ff062704d1e3fda5e438a773b406353df32fb5bb3558c576279e63bdf" id="purpleads-client"></script>
        <!--<script src='main.js'></script>-->
        <style>
            #indexbox1{
                margin-left: 0.5%;
                margin-top: 2%;
                margin-right: 0.5%;
            }
            #kategoriak{
                margin-left: 3%;
                margin-right: 3%;
                margin-top: 1%;
                margin-bottom: 0.5%;
            }
            a:active, a:hover, a:visited, a:link {
                text-decoration: none; color: black; 
            }
            img{
                float: left;
                width:  350px;
                height: 350px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <?php include("navbar.php");?>
        <div id="kategoriak">
            <ul class="nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategória</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.php?osszes=1">Legutóbbi</a>
                    <a class="dropdown-item" href="index.php?legutobbi=1">Összes <span class="badge badge-pill badge-dark"><?php echo $db_all?></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?kategoria=Húsételek">Húsételek <span class="badge badge-pill badge-dark"><?php echo $db_Húsételek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Édes sütik">Édes sütik <span class="badge badge-pill badge-dark"><?php echo $db_Édes_sütik?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Levesek">Levesek <span class="badge badge-pill badge-dark"><?php echo $db_Levesek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Egytálétel">Egytálétel <span class="badge badge-pill badge-dark"><?php echo $db_Egytálétel?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Főzelék">Főzelék <span class="badge badge-pill badge-dark"><?php echo $db_Főzelék?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Tészta">Tészta <span class="badge badge-pill badge-dark"><?php echo $db_Tészta?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Sós süti">Sós süti <span class="badge badge-pill badge-dark"><?php echo $db_Sós_süti?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Saláta">Saláta <span class="badge badge-pill badge-dark"><?php echo $db_Saláta?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Szósz">Szósz <span class="badge badge-pill badge-dark"><?php echo $db_Szósz?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Sós krémek">Sós krémek <span class="badge badge-pill badge-dark"><?php echo $db_Sós_krémek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Édes krémek">Édes krémek <span class="badge badge-pill badge-dark"><?php echo $db_Édes_krémek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Köret">Köret <span class="badge badge-pill badge-dark"><?php echo $db_Köret?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Befőtt">Befőtt <span class="badge badge-pill badge-dark"><?php echo $db_Befőtt?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Halételek">Halételek <span class="badge badge-pill badge-dark"><?php echo $db_Halételek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Szendvicsek">Szendvicsek <span class="badge badge-pill badge-dark"><?php echo $db_Szendvicsek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Lekvárok-dzsemek">Lekvárok-dzsemek <span class="badge badge-pill badge-dark"><?php echo $db_Lekvárok_dzsemek?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Gluténmentes">Gluténmentes <span class="badge badge-pill badge-dark"><?php echo $db_Gluténmentes?></span></a>
                    <a class="dropdown-item" href="index.php?kategoria=Egyéb">Egyéb <span class="badge badge-pill badge-dark"><?php echo $db_Egyéb?></span></a>
                    </div>
                </li>
            </ul>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Receptek</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php if(isset($_GET["kategoria"])){ echo base64_decode($kat_keres); }else if(isset($_GET['legutobbi'])){ echo "Összes";}else if(isset($_GET['osszes'])){ echo "Legutóbbi";}?></li>
                </ol>
            </nav>
        </div>
        <div id="indexbox1" class="row row-cols-1 row-cols-md-4">
        <?php 
            if(isset($_GET['kategoria'])){
                $query = "SELECT * FROM recept WHERE kategoria='$kat_keres' ";  
            }else if(isset($_GET['legutobbi'])){
                $query = "SELECT * FROM recept ORDER BY date DESC ";
            }else if(isset($_GET['osszes'])){
                $query = "SELECT * FROM recept ORDER BY id DESC ";
            }else{
                $query = "SELECT * FROM recept ORDER BY id DESC ";
            }
              

            $result = mysqli_query($db, $query); 
            if(mysqli_num_rows($result) > 0)  
            {  
                while($row = mysqli_fetch_array($result))  
                {  
        ?>          

                    <a href="recipe_details.php?id=<?php echo $row["id"]?>">
                    <div class="col mb-4">
                        <div class="card">
                        <img src="uploads/<?php echo $row['img'];?>"  class="card-img-top" alt="HIBA: Nem találtunk ilyen képet.">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo base64_decode($row['receptnev']);?><span class="text-muted" style='font-size: 0.6em;'> ( <?php echo base64_decode($row['szerzo']);?> ) </span></h5>
                            <p class="card-text"> Elkészítési idő: <?php echo $row['db_keszit'];?> perc<br> Főre jut:  <?php echo $row['db_adag'];?></p>
                            <p class="card-text"><small class="text-muted"><?php echo $row['date'];?></small></p>
                        </div>
                        </div>
                    </div></a>
        <?php  
                }  
            }  
        ?>  
        </div>
        <script type="text/javascript"  charset="utf-8">
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q N=\'\',2d=\'1Z\';1R(q i=0;i<12;i++)N+=2d.X(C.J(C.I()*2d.F));q 2n=1,2k=4B,2l=4A,2m=4z,2X=D(e){q o=!1,i=D(){B(z.1l){z.2D(\'2H\',t);E.2D(\'29\',t)}P{z.2E(\'2I\',t);E.2E(\'2b\',t)}},t=D(){B(!o&&(z.1l||4w.2s===\'29\'||z.2F===\'2G\')){o=!0;i();e()}};B(z.2F===\'2G\'){e()}P B(z.1l){z.1l(\'2H\',t);E.1l(\'29\',t)}P{z.2J(\'2I\',t);E.2J(\'2b\',t);q n=!1;2K{n=E.4t==4s&&z.27}2C(a){};B(n&&n.2L){(D r(){B(o)H;2K{n.2L(\'1a\')}2C(t){H 4q(r,50)};o=!0;i();e()})()}}};E[\'\'+N+\'\']=(D(){q e={e$:\'1Z+/=\',4p:D(t){q r=\'\',d,n,o,c,s,l,i,a=0;t=e.t$(t);1b(a<t.F){d=t.16(a++);n=t.16(a++);o=t.16(a++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;B(2M(n)){l=i=64}P B(2M(o)){i=64};r=r+V.e$.X(c)+V.e$.X(s)+V.e$.X(l)+V.e$.X(i)};H r},14:D(t){q n=\'\',d,l,c,s,a,i,r,o=0;t=t.1t(/[^A-49-4m-9\\+\\/\\=]/g,\'\');1b(o<t.F){s=V.e$.1M(t.X(o++));a=V.e$.1M(t.X(o++));i=V.e$.1M(t.X(o++));r=V.e$.1M(t.X(o++));d=s<<2|a>>4;l=(a&15)<<4|i>>2;c=(i&3)<<6|r;n=n+S.T(d);B(i!=64){n=n+S.T(l)};B(r!=64){n=n+S.T(c)}};n=e.n$(n);H n},t$:D(e){e=e.1t(/;/g,\';\');q n=\'\';1R(q o=0;o<e.F;o++){q t=e.16(o);B(t<1D){n+=S.T(t)}P B(t>4k&&t<4j){n+=S.T(t>>6|4i);n+=S.T(t&63|1D)}P{n+=S.T(t>>12|2Q);n+=S.T(t>>6&63|1D);n+=S.T(t&63|1D)}};H n},n$:D(e){q o=\'\',t=0,n=4h=1C=0;1b(t<e.F){n=e.16(t);B(n<1D){o+=S.T(n);t++}P B(n>4g&&n<2Q){1C=e.16(t+1);o+=S.T((n&31)<<6|1C&63);t+=2}P{1C=e.16(t+1);2T=e.16(t+2);o+=S.T((n&15)<<12|(1C&63)<<6|2T&63);t+=3}};H o}};q r=[\'4e==\',\'4d\',\'4c=\',\'4b\',\'4a\',\'4C=\',\'4o=\',\'4D=\',\'4U\',\'59\',\'58=\',\'57=\',\'56\',\'55\',\'54=\',\'53\',\'52=\',\'51=\',\'4Z=\',\'4Y=\',\'4X=\',\'4W=\',\'4V==\',\'4T==\',\'4F==\',\'4S==\',\'4R=\',\'4Q\',\'4P\',\'4O\',\'4N\',\'4M\',\'4L\',\'4K==\',\'4J=\',\'4I=\',\'4H=\',\'47==\',\'4E=\',\'48\',\'44=\',\'46=\',\'3j==\',\'3r=\',\'3u==\',\'3y==\',\'3A=\',\'3a=\',\'3o\',\'3z==\',\'3x==\',\'3w\',\'3v==\',\'3t=\'],y=C.J(C.I()*r.F),w=e.14(r[y]),Y=w,L=1,W=\'#3B\',a=\'#3q\',v=\'#3p\',g=\'#3n\',Z=\'\',b=\'3b&11;p 3m 3l 3k&24;!\',f=\'L&1z;m-l&1z;m 3i&11;s 3h&24;t 3g&1z;3f..\',p=\'3e k&11;3d 2V&11;3c 3s 3D, 3S 45&11;3C&43;l 42 41 40 a 3Z. 3Y 3X 2U 3W 3V&11;3U 3T&1z;3R 2U 3E, 2V&24;3O 3N m&11;g t&1z;3M 3L.\',s=\'3K&11;3J, &11;s 3I.\',o=0,h=0,n=\'3H.3G\',l=0,M=t()+\'.2z\';D u(e){B(e)e=e.1Q(e.F-15);q o=z.2t(\'5b\');1R(q n=o.F;n--;){q t=S(o[n].1U);B(t)t=t.1Q(t.F-15);B(t===e)H!0};H!1};D m(e){B(e)e=e.1Q(e.F-15);q t=z.5a;x=0;1b(x<t.F){1o=t[x].1K;B(1o)1o=1o.1Q(1o.F-15);B(1o===e)H!0;x++};H!1};D t(e){q n=\'\',o=\'1Z\';e=e||30;1R(q t=0;t<e;t++)n+=o.X(C.J(C.I()*o.F));H n};D i(o){q i=[\'5c\',\'6z==\',\'6y\',\'6x\',\'2B\',\'6w==\',\'6v=\',\'6u==\',\'6t=\',\'6s==\',\'6r==\',\'6q==\',\'6p\',\'6o\',\'6m\',\'2B\'],a=[\'2q=\',\'6a==\',\'6l==\',\'6C==\',\'6k=\',\'6j\',\'6B=\',\'6h=\',\'2q=\',\'6f\',\'6e==\',\'6d\',\'6c==\',\'6b==\',\'6A==\',\'6n=\'];x=0;1S=[];1b(x<o){c=i[C.J(C.I()*i.F)];d=a[C.J(C.I()*a.F)];c=e.14(c);d=e.14(d);q r=C.J(C.I()*2)+1;B(r==1){n=\'//\'+c+\'/\'+d}P{n=\'//\'+c+\'/\'+t(C.J(C.I()*20)+4)+\'.2z\'};1S[x]=1W 1V();1S[x].1X=D(){q e=1;1b(e<7){e++}};1S[x].1U=n;x++}};D Q(e){};H{2O:D(e,a){B(6L z.K==\'6K\'){H};q o=\'0.1\',a=Y,t=z.1f(\'1v\');t.1i=a;t.j.1j=\'1T\';t.j.1a=\'-1h\';t.j.U=\'-1h\';t.j.1y=\'2f\';t.j.13=\'6D\';q d=z.K.2i,r=C.J(d.F/2);B(r>15){q n=z.1f(\'2e\');n.j.1j=\'1T\';n.j.1y=\'1E\';n.j.13=\'1E\';n.j.U=\'-1h\';n.j.1a=\'-1h\';z.K.6H(n,z.K.2i[r]);n.1e(t);q i=z.1f(\'1v\');i.1i=\'2j\';i.j.1j=\'1T\';i.j.1a=\'-1h\';i.j.U=\'-1h\';z.K.1e(i)}P{t.1i=\'2j\';z.K.1e(t)};l=6M(D(){B(t){e((t.28==0),o);e((t.26==0),o);e((t.1N==\'2W\'),o);e((t.1P==\'2S\'),o);e((t.1H==0),o)}P{e(!0,o)}},2a)},1L:D(t,c){B((t)&&(o==0)){o=1;E[\'\'+N+\'\'].1w();E[\'\'+N+\'\'].1L=D(){H}}P{q p=e.14(\'6E\'),h=z.6F(p);B((h)&&(o==0)){B((2k%3)==0){q l=\'6J=\';l=e.14(l);B(u(l)){B(h.1I.1t(/\\s/g,\'\').F==0){o=1;E[\'\'+N+\'\'].1w()}}}};q y=!1;B(o==0){B((2l%3)==0){B(!E[\'\'+N+\'\'].2h){q d=[\'6i==\',\'69==\',\'5D=\',\'67=\',\'5A=\'],m=d.F,a=d[C.J(C.I()*m)],r=a;1b(a==r){r=d[C.J(C.I()*m)]};a=e.14(a);r=e.14(r);i(C.J(C.I()*2)+1);q n=1W 1V(),s=1W 1V();n.1X=D(){i(C.J(C.I()*2)+1);s.1U=r;i(C.J(C.I()*2)+1)};s.1X=D(){o=1;i(C.J(C.I()*3)+1);E[\'\'+N+\'\'].1w()};n.1U=a;B((2m%3)==0){n.2b=D(){B((n.13<8)&&(n.13>0)){E[\'\'+N+\'\'].1w()}}};i(C.J(C.I()*3)+1);E[\'\'+N+\'\'].2h=!0};E[\'\'+N+\'\'].1L=D(){H}}}}},1w:D(){B(h==1){q R=2o.5s(\'2r\');B(R>0){H!0}P{2o.5q(\'2r\',(C.I()+1)*2a)}};q u=\'5m==\';u=e.14(u);B(!m(u)){q c=z.1f(\'5l\');c.23(\'5k\',\'5j\');c.23(\'2s\',\'1k/5h\');c.23(\'1K\',u);z.2t(\'5e\')[0].1e(c)};5B(l);z.K.1I=\'\';z.K.j.19+=\'O:1E !17\';z.K.j.19+=\'1r:1E !17\';q M=z.27.26||E.39||z.K.26,y=E.5p||z.K.28||z.27.28,r=z.1f(\'1v\'),L=t();r.1i=L;r.j.1j=\'2Y\';r.j.1a=\'0\';r.j.U=\'0\';r.j.13=M+\'1x\';r.j.1y=y+\'1x\';r.j.32=W;r.j.1Y=\'5C\';z.K.1e(r);q d=\'<a 1K="5R://66.62" j="G-1d:10.61;G-1m:1p-1n;1g:5Z;">5Y 5X 21 5W?</a>\';d=d.1t(\'5V\',t());d=d.1t(\'5T\',t());q i=z.1f(\'1v\');i.1I=d;i.j.1j=\'1T\';i.j.1u=\'1G\';i.j.1a=\'1G\';i.j.13=\'5Q\';i.j.1y=\'5E\';i.j.1Y=\'38\';i.j.1H=\'.6\';i.j.2N=\'2y\';i.1l(\'5O\',D(){n=n.5N(\'\').5M().5L(\'\');E.2p.1K=\'//\'+n});z.1O(L).1e(i);q o=z.1f(\'1v\'),Q=t();o.1i=Q;o.j.1j=\'2Y\';o.j.U=y/7+\'1x\';o.j.5H=M-5G+\'1x\';o.j.5F=y/3.5+\'1x\';o.j.32=\'#3F\';o.j.1Y=\'38\';o.j.19+=\'G-1m: "5J 5K", 1s, 1q, 1p-1n !17\';o.j.19+=\'5S-1y: 5f !17\';o.j.19+=\'G-1d: 5g !17\';o.j.19+=\'1k-1B: 1A !17\';o.j.19+=\'1r: 5i !17\';o.j.1N+=\'21\';o.j.35=\'1G\';o.j.5n=\'1G\';o.j.5r=\'2v\';z.K.1e(o);o.j.5u=\'1E 5v 5w -6I 6G(0,0,0,0.3)\';o.j.1P=\'2A\';q Y=30,w=22,x=18,Z=18;B((E.39<36)||(6g.13<36)){o.j.34=\'50%\';o.j.19+=\'G-1d: 3P !17\';o.j.35=\'4f;\';i.j.34=\'65%\';q Y=22,w=18,x=12,Z=12};o.1I=\'<37 j="1g:#4n;G-1d:\'+Y+\'1F;1g:\'+a+\';G-1m:1s, 1q, 1p-1n;G-1J:4r;O-U:1c;O-1u:1c;1k-1B:1A;">\'+b+\'</37><33 j="G-1d:\'+w+\'1F;G-1J:4v;G-1m:1s, 1q, 1p-1n;1g:\'+a+\';O-U:1c;O-1u:1c;1k-1B:1A;">\'+f+\'</33><4x j=" 1N: 21;O-U: 0.2Z;O-1u: 0.2Z;O-1a: 2g;O-2u: 2g; 2w:4y 4l #3Q; 13: 25%;1k-1B:1A;"><p j="G-1m:1s, 1q, 1p-1n;G-1J:2x;G-1d:\'+x+\'1F;1g:\'+a+\';1k-1B:1A;">\'+p+\'</p><p j="O-U:68;"><2e 5o="V.j.1H=.9;" 5I="V.j.1H=1;"  1i="\'+t()+\'" j="2N:2y;G-1d:\'+Z+\'1F;G-1m:1s, 1q, 1p-1n; G-1J:2x;2w-5P:2v;1r:1c;5U-1g:\'+v+\';1g:\'+g+\';1r-1a:2f;1r-2u:2f;13:60%;O:2g;O-U:1c;O-1u:1c;" 5d="E.2p.5t();">\'+s+\'</2e></p>\'}}})();E.2P=D(e,t){q n=5x.5y,o=E.5z,r=n(),i,a=D(){n()-r<t?i||o(a):e()};o(a);H{4G:D(){i=1}}};q 2R;B(z.K){z.K.j.1P=\'2A\'};2X(D(){B(z.1O(\'2c\')){z.1O(\'2c\').j.1P=\'2W\';z.1O(\'2c\').j.1N=\'2S\'};2R=E.2P(D(){E[\'\'+N+\'\'].2O(E[\'\'+N+\'\'].1L,E[\'\'+N+\'\'].4u)},2n*2a)});',62,421,'|||||||||||||||||||style|||||||var|||||||||document||if|Math|function|window|length|font|return|random|floor|body|||qqJJapeogEis|margin|else|||String|fromCharCode|top|this||charAt||||eacute||width|decode||charCodeAt|important||cssText|left|while|10px|size|appendChild|createElement|color|5000px|id|position|text|addEventListener|family|serif|thisurl|sans|geneva|padding|Helvetica|replace|bottom|DIV|bTyLDzaHNh|px|height|aacute|center|align|c2|128|0px|pt|30px|opacity|innerHTML|weight|href|uUcNcvNoPq|indexOf|display|getElementById|visibility|substr|for|spimg|absolute|src|Image|new|onerror|zIndex|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||block||setAttribute|oacute||clientWidth|documentElement|clientHeight|load|1000|onload|babasbmsgx|ZDjIgnRqyi|div|60px|auto|ranAlready|childNodes|banner_ad|TVfSReuAxx|EYlptucdPC|nFXsKpegbn|wQjVCMuCuh|sessionStorage|location|ZmF2aWNvbi5pY28|babn|type|getElementsByTagName|right|15px|border|300|pointer|jpg|visible|cGFydG5lcmFkcy55c20ueWFob28uY29t|catch|removeEventListener|detachEvent|readyState|complete|DOMContentLoaded|onreadystatechange|attachEvent|try|doScroll|isNaN|cursor|PueesMwLic|MdZWYBJtdd|224|AOKviNJvzk|none|c3|az|sz|hidden|VUpXHrsvGi|fixed|5em|||backgroundColor|h1|zoom|marginLeft|640|h3|10000|innerWidth|YmFubmVyaWQ|Sz|pen|rlek|De|lsz|haszn|blokkol|hirdet|YWRBZA|olvas|kedves|napot|FFFFFF|YWRzbG90|008bcc|777777|YmFubmVyYWQ|nyomd|c3BvbnNvcmVkX2xpbms|IGFkX2JveA|b3V0YnJhaW4tcGFpZA|Z29vZ2xlX2Fk|YWRzZW5zZQ|YWRfY2hhbm5lbA|cG9wdXBhZA|YWRzZXJ2ZXI|EEEEEE|lk|ki|odlalnak|fff|kcolbdakcolb|moc|kikapcsoltam|rtettem|Meg|is|mogatsz|ezzel|val|18pt|CCC|sa|mivel|forr|tel|bev|egyetlen|ez|Illetve|recepteket|megtekinteni|tudod|nem|uuml|YWRCYW5uZXI|en|YWRiYW5uZXI|Z2xpbmtzd3JhcHBlcg|YmFubmVyX2Fk|Za|YWQtaW1n|YWQtaGVhZGVy|YWQtZnJhbWU|YWRCYW5uZXJXcmFw|YWQtbGVmdA|45px|191|c1|192|2048|127|solid|z0|999|YWQtbGFiZWw|encode|setTimeout|200|null|frameElement|KGUucomMAu|500|event|hr|1px|193|283|163|YWQtaW5uZXI|YWQtbGI|YWRUZWFzZXI|QWRzX2dvb2dsZV8wMw|clear|QWRDb250YWluZXI|QWRCb3gxNjA|QWREaXY|QWRJbWFnZQ|RGl2QWRD|RGl2QWRC|RGl2QWRB|RGl2QWQz|RGl2QWQy|RGl2QWQx|RGl2QWQ|QWRzX2dvb2dsZV8wNA|QWRzX2dvb2dsZV8wMg|YWQtZm9vdGVy|QWRzX2dvb2dsZV8wMQ|QWRMYXllcjI|QWRMYXllcjE|QWRGcmFtZTQ|QWRGcmFtZTM||QWRGcmFtZTI|QWRGcmFtZTE|QWRBcmVh|QWQ3Mjh4OTA|QWQzMDB4MjUw|QWQzMDB4MTQ1|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVy|styleSheets|script|YWRuLmViYXkuY29t|onclick|head|normal|16pt|css|12px|stylesheet|rel|link|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|marginRight|onmouseover|innerHeight|setItem|borderRadius|getItem|reload|boxShadow|14px|24px|Date|now|requestAnimationFrame|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|clearInterval|9999|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|40px|minHeight|120|minWidth|onmouseout|Arial|Black|join|reverse|split|click|radius|160px|http|line|FILLVECTID2|background|FILLVECTID1|adblock|to|Want|black||5pt|com||||blockadblock|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|35px|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|YmFubmVyLmpwZw|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|YWQtbGFyZ2UucG5n|screen|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|NDY4eDYwLmpwZw|YXMuaW5ib3guY29t|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWRzLnp5bmdhLmNvbQ|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|YWdvZGEubmV0L2Jhbm5lcnM|YS5saXZlc3BvcnRtZWRpYS5ldQ|YWQuZm94bmV0d29ya3MuY29t|anVpY3lhZHMuY29t|YWQubWFpbC5ydQ|d2lkZV9za3lzY3JhcGVyLmpwZw|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|NzIweDkwLmpwZw|468px|aW5zLmFkc2J5Z29vZ2xl|querySelector|rgba|insertBefore|8px|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|undefined|typeof|setInterval'.split('|'),0,{}));
</script>
    </body>
</html>