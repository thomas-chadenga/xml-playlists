<?PHP

// DETERMING TYPE OF XML - DVD or PLAYLIST
$XML_TYPE = $_GET['xml_type'];
if ($XML_TYPE=="DVD")  {
    $XML_TYPE="DVD";
    $video_location="main/video/";
}  else {$video_location='online_playlist_location';}

// DATABASE CONNECTION	
Function DB_Connection () {
    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="cms";
    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
    return $con;
}
$conn=  DB_Connection () ;


//create a new xmlwriter object
$xml = new XMLWriter();
$xml->openURI('c:/playlist.xml');
//using memory for string output
//$xml->openMemory();
//set the indentation to true (if false all the xml will be written on one line)
$xml->setIndent(true);
//create the document tag, you can specify the version and encoding here
$xml->startDocument();
$xml->encoding="UTF-8";

// SET LOGIC VARIABLES
$current_menu_section = 120;
$current_chapter="";
$close_chapter=0;
$firsttime=true;
$firsttime_c=true;
$menu_item_changed = false;
$closed_by_men = false;
//Create an element - unit

// CREATE XML TREE

$xml->startElement("ITEMS");
$xml->startElement("SIDEMENUS");
// FIRST MEN  ELEMENT
$xml->startElement("MEN");
$xml->writeAttribute("MID", 0);
$xml->startElement("MENUITEM");
$xml->startElement("P1");
$xml->startElement("CONTENT");
$xml->endElement();
$xml->endElement();
$xml->startElement("P2");
$xml->startElement("CONTENT");
$xml->endElement();
$xml->endElement();
$xml->startElement("P3");
$xml->startElement("POSITEM");
$xml->endElement();
$xml->endElement();
$xml->endElement();

$xml->startElement("MENUITEM");

$xml->endElement();

$xml->startElement("MENUITEM");
$xml->startElement("P1");
$xml->startElement("POSITEM");
$xml->endElement();
$xml->endElement();
$xml->endElement();
$xml->endElement();
// EDN FIRST MEN EELEMENT

$result = $conn->query("SELECT * FROM playlist_process ");
while ($row = $result->fetch_assoc()) {
    //SET VARIABLE TO BE USED IN XML ATTRIBUTES AND ELEMENTS
    $menu_section= $row['menu_section'];
    $TITLE=$row['title'];
    $DESCTIPTION =$row['chapter'];
    $chapter=$row['chapter'];
    $TYPE_I=$row['item_type'];
    $TYPE_P="list";
    $MENUTYPE ="";
    $CHILDMENUID= "";
    // SET THE LINK AS FROM VIMEEO CODE FOR VIDEO AND FROM ITEM LINK FIELD FOR OTHER TYPES
    if (trim($TYPE_I)=="Video") {
        $ICON ="main/images/icons/video.png";
        $ITEMLINK=$row['item_link'];
        $vimeo_code = $row['vimeo_code'];
        $ITEMLINK = $video_location . "". $vimeo_code ."mp4";
    }
    else {
        $ICON ="main/images/icons/PDF.png";
        $ITEMLINK=$row['item_link'];
    }
    $ITEMNAME =$TITLE=$row['cv_code'];
    $ITEMDESCRIPTION =$row['itemdescription'];

    // DETERMINE IF THE MEN ELEMENT NEEDS TO BE CHANGED
    if ($current_menu_section == $menu_section) {
        $firsttime=false; // SET THIS TO ALLOW CLOSING IN FUTURE BUT DO NOTHING ELSE
    }
    else {
        if($firsttime==true) {
            //IF IT IS THE FIRST TIME DONT CLOSE AS IT HAS NOT BEEN OPENED YET
            $firsttime=false;
        } else {
            $xml->endElement();		// close P1
            $xml->endElement();	    // close MENUITEM
            $xml->endElement();		// close Men
            $firsttime=false;
        }

        $menu_item_changed = true;  // SET THIS SO YOU DONT DOUBLE CLOSE THE P1 and MENUITEEM TAGS ON THEIR CHANGES
        $xml->startElement("MEN");  // OPEN NEW MEN ELEMENT
        $xml->writeAttribute("MID", $menu_section);
        $current_menu_section = $menu_section;
        $xml->startElement("MENUITEM");  // OPEN NEW MENUITEM ELEMENT
        $xml->writeAttribute("MENUTYPE", $MENUTYPE);
        $xml->writeAttribute("CHILDMENUID", $CHILDMENUID);
        $xml->writeAttribute("TITLE", $TITLE);
        $xml->writeAttribute("DESCTIPTION", $DESCTIPTION);

        //P1
        $xml->startElement("P1");   // OPEN NEW MENUITEM ELEMENTS
        $xml->writeAttribute("TITLE", $TITLE);
        $xml->writeAttribute("TYPE", $TYPE_P);
        $current_chapter = $chapter;

    }
    //  CHECK IF P! and MENUITEM NEED TO BE CLOSED WHEN THE MEN ITEM HAS NOT CHANGED
    if ($chapter == $current_chapter) {	}
    else {  //CHANGE THE CHAPTER AND CLOSE TAGS
        if ($closed_by_men==true) {
            // DO NOTHING SO AS NOT TO DOUBLE CLOSE THE P1 AND MENUITEM TAGS
            $closed_by_men==false;}
        else {
            // CLOSE THE TAGS AND REOPEN WITH NEW DETAILS
            $xml->endElement();		// Close P1
            $xml->endElement();		//close MenuItem
            $menu_item_changed = false;
            $current_chapter = $chapter;
            //MENUITEM
            $xml->startElement("MENUITEM");
            $xml->writeAttribute("MENUTYPE", $MENUTYPE);
            $xml->writeAttribute("CHILDMENUID", $CHILDMENUID);
            $xml->writeAttribute("TITLE", $TITLE);
            $xml->writeAttribute("DESCTIPTION", $DESCTIPTION);
            //P1
            $xml->startElement("P1");
            $xml->writeAttribute("TITLE", $TITLE);
            $xml->writeAttribute("TYPE", $TYPE_P);
            $current_chapter = $chapter;
        }
    }
    //POSITEM
    $xml->startElement("POSITEM");
    $xml->writeAttribute("ICON", $ICON);
    $xml->writeAttribute("ITEMNAME", $ITEMNAME);
    $xml->writeAttribute("ITEMDESCRIPTION", $ITEMDESCRIPTION);
    $xml->writeAttribute("ITEMLINK", $ITEMLINK);
    $xml->writeAttribute("TYPE", $TYPE_I);

    $xml->endElement();// End POSITEM

}
$xml->endElement();  // CLOSE FINAL P1
$xml->endElement();   //CLOSE FINAL MENUITEM
$xml->endElement();  // CLOSE FINAL MEN
$xml->endElement();   //CLOSE FINAL SIDEMENUS
$xml->endElement();  // CLOSE FINAL ITEMS
//output the xml (obviosly this output could be written to a file)

$xml-> flush();

echo htmlentities($xml->outputMemory());

?>

<h1>XML Playlist</h1>
<h2>Step One Complete<h2><BR>
        <h2>Step Two Complete<h2><BR>
                <h3><a href="c:/playlist.xml">View XML</a></h3>
