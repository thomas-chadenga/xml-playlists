<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

    // DETERMING TYPE OF XML - DVD or PLAYLIST
    $XML_TYPE = $_GET['xml_type'];
    //get all variables from the form
    $XML_doc_tagline = $_GET['xml_doc_tagline'];
    $XML_doc_title = $_GET['xml_doc_title'];
    $xml_flash_colors = $_GET['colors'];
    $xml_content = $_GET['content'];
    $xml_client = $_GET['client'];
    $xml_client_url = $_GET['clienturl'];
    $xml_aid = $_GET['aid'];
    $xml_sku = $_GET['sku'];
    $xml_client = trim(strtolower($xml_client));
    $xml_client_upper = trim(strtoupper($xml_client));
    if(isset($_GET['xmlID'])){
        $xmlID=$_GET['xmlID'];
    }

    if ($XML_TYPE == "DVD") {
        $XML_TYPE = "DVD";
        $video_location = "main/video/";
    } else {
        $video_location = 'online_playlist_location/';
    }

    // DATABASE CONNECTION
    Function DB_Connection()
    {
        $host = "dedi791.jnb1.host-h.net";
        $port = 3306;
        $socket = "";
        $user = "server_178";
        $password = "RCZLTVE8";
        $dbname = "server_staging";
        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
        return $con;
    }

    $conn = DB_Connection();

    $result = $conn->query("SELECT * FROM playlist_process ");


    $title = array();
    $title_id = array();
    $parent_id = array();
    $video_code = array();
    $video_title = array();
    $vimeo_code = array();

    while ($row = $result->fetch_assoc()) {
        //SET VARIABLE TO BE USED IN XML ATTRIBUTES AND ELEMENTS
        $title[] = $row['unit_title'];
        $title_id[] = $row['unit_id'];
        $parent_id[] = $row['parent_unit_id'];
        $video_code[] = $row['video_code'];
        $video_title[] = $row['video_title'];
        $vimeo_code[] = $row['vimeo_code'];
    }

    //START XML Creation///////////
    //generate ID
    $string = $XML_doc_title . $XML_doc_tagline;
    $xml_id = md5($string);
    $year = date("Y");

    $XML = "<?xml version='1.0' encoding='UTF-8'?>
";
    $XML .= "<MAIN>
";
    $XML .= "    <APP REGGROUP='default' REG='false' TRAININGPROVIDER='false' ID='$xml_id' TITLE='$XML_doc_title' TAGLINE='$XML_doc_tagline' HEADERIMAGE='main/images/logo-interface.png' COBRANDING='main/images/upload-$xml_client.png' REGHEADER='main/images/logo_reg.png' COPYRIGHT='Copyright Edge CC $year' MENUTITLE='Menu' REGURL='http://register.upload-media.com/modules/mod_edgemediaAPI/helpers/registration.php?' AID='$xml_aid' SKU='$xml_sku'/>
";
    $XML .= "    <STYLE HEADERBACK1MC='$xml_flash_colors[0]' HEADERBACK2MC='$xml_flash_colors[1]' MENUBACKMC='$xml_flash_colors[2]' CRUMBSBACKMC='$xml_flash_colors[3]' AREA1MC='$xml_flash_colors[4]' AREA2MC='$xml_flash_colors[5]' AREA3MC='$xml_flash_colors[6]' FOOTERBACKMC='$xml_flash_colors[7]'/>
";
    $XML .= "    <ITEMS>
";
    $XML .= "        <SIDEMENUS>
";

    //all entries with parent id 0 go into the root level menu
    $arr = array_values(array_unique($parent_id));

    for($j=0;$j<count($arr);$j++){
        $XML .= "            <MEN MID='$arr[$j]'>
";
        if($arr[$j] == 0) {
            $XML .= "                <MENUITEM MENUTYPE='CONTENT' CHILDMENUMID='null' TITLE='Welcome' DESCTIPTION='Welcome to Upload Media'>
                    <P1 TITLE='Welcome' TYPE='CONTENT'>
                        <CONTENT>
                            <![CDATA[$xml_content]]>
                        </CONTENT>
                    </P1>
                    <P2 TITLE='Revision Video' TYPE='LIST' LOCK='true'>
                        <POSITEM ICON='main/images/icons/pdf.png' ITEMNAME='' ITEMDESCRIPTION='Questions and Answer Templates' ITEMLINK='main/pdfs/bktb_section_a.pdf' TYPE='HTTP'/>
                    </P2>
                    <P3 TITLE='Websites' TYPE='LIST' LOCK='true'>
                        <POSITEM ICON='main/images/icons/http.png' ITEMNAME='' ITEMDESCRIPTION='Visit EDGE Learning Media' ITEMLINK='http://www.edgelearningmedia.com' TYPE='HTTP'/>
                        <POSITEM ICON='main/images/icons/http.png' ITEMNAME='' ITEMDESCRIPTION='Visit Upload Media' ITEMLINK='http://www.upload-media.com' TYPE='HTTP'/>
                        <POSITEM ICON='main/images/icons/http.png' ITEMNAME='' ITEMDESCRIPTION='Visit $xml_client_upper' ITEMLINK='$xml_client_url' TYPE='HTTP'/>
                    </P3>
                </MENUITEM>
";
        }
        //go rhtu all first level menu items
        for($i=0;$i<count($title_id);$i++) {
            if((in_array($title_id[$i],$parent_id)&&($parent_id[$i] == $arr[$j]))) {
                $tit = explode("-",$title[$i]);
                $XML .= "                <MENUITEM MENUTYPE='MENU' CHILDMENUMID='$title_id[$i]' TITLE='$tit[0]' DESCTIPTION='$tit[1]'/>
";

            }
            else if($parent_id[$i] == $arr[$j]){
                if(trim($title[$i])!=""){
                    $title_unit = explode("-",$title[$i]);
                    $unit_title = trim($title_unit[0]);
                    if(isset($title_unit[1])){
                        $unit_desc = trim($title_unit[1]);
                    }
                    else{
                        $unit_desc = $title[$i];
                    }
                    $XML .= "                <MENUITEM MENUTYPE='CONTENT' CHILDMENUMID='null' TITLE='$unit_title' DESCTIPTION='$unit_desc'>
                    <P1 TITLE='$unit_title' TYPE='LIST'>
";
                }
                //get type
                if((trim($vimeo_code[$i]) == "")&&(trim($video_code[$i])!="")){
                    $type = "HTTP";
                    $thefile = $video_code[$i];
                    if($XML_TYPE == 'DVD') {
                        $video_location = "main/pdfs/";
                    }else{
                        $video_location = "application_content/".$xmlID."/pdf/".$thefile;
                    }
                    $icons=explode(".",$video_code[$i]);
                    $icon = $icons[count($icons)-1];
                    if (strpos($icons[0],'http://') !== false) {
                        $icon = "http";
                    }
                }
                else{
                    $type = "VIDEO";

                    if($XML_TYPE == 'DVD') {
                        $video_location = "main/video/";
                        $thefile = $vimeo_code[$i].".mp4";
                    }else{
                        $video_location = "";
                        $thefile = $vimeo_code[$i];
                        $type = "VIMEO";
                    }
                    $icon = "video";
                }
                if($icon != "http") {
                    $XML .= "                        <POSITEM ICON='main/images/icons/$icon.png' ITEMNAME='$video_code[$i]' ITEMDESCRIPTION='$video_title[$i]' ITEMLINK='$video_location$thefile' TYPE='$type'/>
";
                }else{
                    $XML .= "                        <POSITEM ICON='main/images/icons/$icon.png' ITEMNAME='$video_code[$i]' ITEMDESCRIPTION='$video_title[$i]' ITEMLINK='$thefile' TYPE='$type'/>
";
                }
                 if(((trim($title[$i])=="") &&($i>=count($title_id)-1))||((isset($title[$i+1]))&&(trim($title[$i+1])!=""))){
                    $XML .= "                    </P1>
                </MENUITEM>
";
                }else if($i>=count($title_id)-1){//close of if its the last item
                    $XML .= "                    </P1>
                </MENUITEM>
";
                }
            }
        }
        $XML .= "            </MEN>
";
    }

    $XML .= "        </SIDEMENUS>
    </ITEMS>
</MAIN>";
    //echo '<pre>'.htmlspecialchars(print_r($XML, true)).'</pre>';

    $date = new DateTime();

    $rand =$date->getTimestamp();
    $name = "main.xml";

    //replace single quotes with double
    $XML = str_replace("'","\"",$XML);

    file_put_contents("xml/".$name, $XML);

    //download this file
    //echo "<a href='download.php?filename=$name'>Download The XML File</a>";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Edge Learning Media</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://edgemanagementsystem.co.za/mantis/css1/app.min.css" />
    <script type="text/javascript" src="js/vimeo.js"></script>
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script type="text/javascript">
        var flashVars = { folderID: "xml", proxyLocation: "http://upload-media.com/application/proxy.php" };
        var flashParams = { menu: "false"};
        var flashID = { id : "swfContent" };
        swfobject.embedSWF("main.swf", "swfContent", "1024", "768", "11.3.0", "", flashVars, flashParams, flashID);
    </script>
</head>
<body class="" style="padding:10px !important">
<div id="top">
    <img src="edgelogo.jpg" alt="logo" width="160"/>
    <ul id="gn-menu" class="gn-menu-main" style="display:none !important">
        <li class="gn-trigger">
            <a class="gn-icon gn-icon-menu"><span>Home</span></a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu">
                        <li>
                        <li><a onclick="ajax_load_file('#left-content','inc/left-learning-area.php'); open_panel('left');"; class="icon-learning-area">Learning Area</a></li>
                        <li><a onclick="ajax_load_file('#left-content','modules/admin/menu.php'); open_panel('left');"; href="##" class="icon-admin">Admin</a></li>
                        <li><a class="icon-contact">Media</a></li>
                        <li><a class="icon-help"></a></li>
        </li>
    </ul>

</div>
</nav>
</li>
</ul>
<div class="top-menu-options">
    <a class="icon-distraction-free" href="load_file.php">Create XML</a>
    <!--<a class="icon-logout" href="login_test.php">Logout</a>-->
</div>
</div>
<div id="left" class="hidden" style="display:none !important;">
    <div id="left-content"><div class="list_tab_holder">

        </div>
    </div>
    <span onclick="toggle_panel('left');" class="handle hidden" style="display:none"></span>
</div>
<!-- MIDDLE PANEL -->
<div id="middle" class="panel-open" style="font-size:10px !important; width:100%">

    <div class="page-header">
        <div class="row">
            <div class="col_1-2"> XML Playlist Download</div>
            <!--<div class="col_1-2 txt_r"><a class="btn icon-add" onclick="" href="issue_single.php?issue=<?php echo $issue_id; ?>&cat=<?php echo $cat; ?>">View</a></div>-->
        </div>
    </div>
    <div class="page-holder">
        <div class="row">
            <div class="col_1-2"><a href='download.php?filename=<?php echo $name; ?>'>Download The XML File</a></div>
        </div>
        <div class="row">
            <div class="col_1-2">
                <!--<div id="swfContent">
                </div>
                <div id="vimeo">
                </div>
                <div id="closeVimeo"><img src="http://upload-media.com/application/images/close.png" alt="Close"/></div>-->
            </div>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div id="right" class="hidden" style="display:none !important">
        <div class="slide-tab-holder">
            <div class="slide-trigger">Details <span class="btn-icon-down"></span></div>
            <div class="slide-tab">
                <input placeholder="Client" />
                <input placeholder="Status" />
                <input placeholder="MQF" />
                <input placeholder="Complied by:" />
                <input placeholder="Approved by: " />
            </div>
        </div>
        <span onclick="toggle_panel('right');" class="handle hidden" style="display:none"></span>
    </div>
    <div class="clear"></div>
</body>

<script src="http://edgemanagementsystem.co.za/mantis/js/scripts.min.js"></script>
</html>
