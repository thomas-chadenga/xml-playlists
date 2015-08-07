<html>
<head>
    <meta charset="UTF-8">
    <title>Edge Learning CMS</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://edgemanagementsystem.co.za/mantis/css1/app.min.css" />
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
    <a class="icon-distraction-free" href="load_file.php">Create New XML</a>
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
            <div class="col_1-2"> XML Playlist</div>
            <!--<div class="col_1-2 txt_r"><a class="btn icon-add" onclick="" href="issue_single.php?issue=<?php echo $issue_id; ?>&cat=<?php echo $cat; ?>">View</a></div>-->
        </div>
    </div>
    <div class="page-holder">
        <form enctype="multipart/form-data" method="post" role="form">
            <div class="form-group">
                <div class="row">
                    <div class="col_1-2"><label for="file">File Upload</label><input type="file" name="file" id="file" size="150"><p class="help-block">Only CSV File Import.</p></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="client">Enter Client Name</label><input type="text" name="client" id="client" size="150"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="clienturl">Enter Client URL</label><input type="text" name="clienturl" id="clienturl" size="150"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="aid">Enter AID</label><input type="text" name="aid" id="aid" size="150"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="sku">Enter SKU</label><input type="text" name="sku" id="sku" size="150"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="xmlID">Enter XML FileID for Online</label><input type="text" name="xmlID" id="xmlID" size="150"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color1">Select Color HEADERBACK1MC</label><input type="text" name="color1" id="color1" size="150" value="0xFFFFFF"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color2">Select Color HEADERBACK2MC</label><input type="text" name="color2" id="color2" size="150" value="0xFFFFFF"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color3">Select Color MENUBACKMC</label><input type="text" name="color3" id="color3" size="150" value="0x024a74"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color4">Select Color CRUMBSBACKMC</label><input type="text" name="color4" id="color4" size="150" value="0xc8dce8"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color5">Select Color AREA1MC</label><input type="text" name="color5" id="color5" size="150" value="0xFFFFFF"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color6">Select Color AREA2MC</label><input type="text" name="color6" id="color6" size="150" value="0x076fb4"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color7">Select Color AREA3MC</label><input type="text" name="color7" id="color7" size="150" value="0xaabdc8"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="color8">Select Color FOOTERBACKMC</label><input type="text" name="color8" id="color8" size="150" value="0x076fb4"></div>
                </div>
                <div class="row">
                    <div class="col_1-2"><label for="content">Enter Description for Playlist</label><textarea rows="4" cols="50" name="content" id="content"></textarea></div>
                </div>
            </div>
            <div class="row">
                <div class="col_1-2 txt_r"><button type="submit" class="icon-save" name="Import" value="Import">Upload</button></div>
            </div>
        </form>
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

        <?PHP

        if(isset($_POST["Import"])) {
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
            $strSQL = "Truncate playlist_process";
            $result = $conn->query($strSQL);
            //$strSQL = "LOAD DATA INFILE '/playlist_sourceb.csv' INTO TABLE playlist_process COLUMNS TERMINATED BY ';' IGNORE 1 LINES;";

            //echo $strSQL;
            //$result = $conn->query($strSQL);

            $xmlID = $_POST["xmlID"];
            $titlemain = $_POST["title"];
            $tagline = $_POST["tagline"];
            $colors = array();
            $colors[] = $_POST["color1"];
            $colors[] = $_POST["color2"];

            $filename = $_FILES["file"]["tmp_name"];
            if ($_FILES["file"]["size"] > 0) {
                $file = fopen($filename, "r");

                $id = 1;

                $parent_id = 0;

                $count=0;

                while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
                    //print_r($emapData);
                    //exit();
                    if($count >= 5) {
                        $ctr = count($emapData) - 3;
                        $video_code = $emapData[count($emapData) - 3];
                        $video_title = $emapData[count($emapData) - 2];
                        $vimeo_code = $emapData[count($emapData) - 1];
                        if(trim($vimeo_code)!="") {
                            for ($i = 1; $i < $ctr; $i++) {

                                if ($i > 1) {
                                    if(trim($emapData[$i-1])!="") {
                                        $parent_id = $prev_id;
                                    }
                                } else {
                                    if(trim($emapData[$i])!="") {
                                        $parent_id = 0;
                                    }
                                }

                                $title = $emapData[$i];
                                $title_id = $id;

                                if ($ctr - $i > 1) {
                                    if(trim($emapData[$i]) != "") {
                                        $sql = "INSERT into playlist_process(unit_title,unit_id,parent_unit_id,video_code,video_title,vimeo_code) values ('$title','$title_id','$parent_id','','','')";
                                        $conn->query($sql);
                                        $prev_id = $id;
                                        $id += 1;
                                    }

                                } else if (($ctr - $i == 1) || ($ctr -$i == 0)) {
                                    $sql = "INSERT into playlist_process(unit_title,unit_id,parent_unit_id,video_code,video_title,vimeo_code) values ('$title','$title_id','$parent_id','$video_code','$video_title','$vimeo_code')";
                                    $conn->query($sql);
                                    $prev_id = $id;
                                    $id += 1;

                                }

                            }//close for loop on i
                        }
                    }//close if count >=6
                    $count+=1;
                }
                fclose($file);
                echo 'CSV File has been successfully Imported';

                $content = $_POST["content"];
                echo "<h3>
                    <a href='output_playlist_new.php?xml_type=playlist&xml_doc_tagline=$tagline&xml_doc_title=$titlemain&colors[]=$colors[0]&colors[]=$colors[1]&content=$content&xmlID=$xmlID'>Create Playlist XML</a></h3>
                    <a href='output_playlist_new.php?xml_type=DVD&xml_doc_tagline=$tagline&xml_doc_title=$title&colors[]=$colors[0]&colors[]=$colors[1]&content=$content'>Create DVD XML</a></h3>";
            } else {
                echo 'Invalid File:Please Upload CSV File';
            }
        }
        ?>



