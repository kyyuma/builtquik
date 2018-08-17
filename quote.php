<?php
include ('connect.php');
include ('LoggedBanner.php');

if(!empty($_POST['Floor']) && !empty($_POST['Wall']) && !empty($_POST['Roof']))
{

        $query = mysqli_query($con, "SELECT * FROM structures WHERE RoofType = '$_POST[bays]' AND FloorMaterial = '$_POST[Floor]' AND WallMaterial = '$_POST[Wall]' AND RoofMaterial = '$_POST[Roof]'") or die(mysqli_connect_error());    
    if(!$row = mysqli_fetch_array($query))
        {
            //add structure if it doesn't exist
			$fcheck = mysqli_query($con, "INSERT INTO structures (Rooftype, FloorMaterial, WallMaterial, RoofMaterial) VALUES ('$_POST[bays]','$_POST[Floor]','$_POST[Wall]','$_POST[Roof]')");
        }

        $query2 = mysqli_query($con, "SELECT * FROM structures WHERE Rooftype = '$_POST[bays]' AND FloorMaterial = '$_POST[Floor]' AND WallMaterial = '$_POST[Wall]' AND RoofMaterial = '$_POST[Roof]'") or die(mysqli_error());
        if($row = mysqli_fetch_array($query2))
        {
            $structureID = $row[0];
        }

}


?>
<link href="css/quotestyle.css" rel="stylesheet">
<div class="container text-center" style='padding-top:100px;'>
<div class="row">
<div class="col-lg-8 mx-auto">   
<div align=center>

<table >
 <tr>
  <td>
  <p class=MsoTitle><span lang=EN-US>BQ Quote</span></p>
  </td>
  <td width=224 colspan=3 valign=top style='width:168.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:43.2pt;mso-height-rule:exactly'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 colspan=2 valign=bottom style='width:99.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:43.2pt;mso-height-rule:exactly'></td>
  <td width=178 style='width:133.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:43.2pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US style='mso-no-proof:yes'><img width=120 height=58
  src="img/image002.png" v:shapes="Picture_x0020_4"><![endif]></span><span
  lang=EN-US style='color:black;mso-themecolor:text1'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:46.8pt'>
  <td width=166 valign=top style='width:124.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoDate><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=158 colspan=2 valign=top style='width:118.45pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoDate><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=66 valign=top style='width:49.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoNormal><span lang=EN-US style='color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 colspan=2 valign=top style='width:99.35pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:12.0pt;line-height:130%;
  mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:"Microsoft Sans Serif";
  mso-bidi-font-family:"Microsoft Sans Serif";color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=178 valign=top style='width:133.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoNormal><span lang=EN-US style='font-size:12.0pt;line-height:130%;
  font-family:"Franklin Gothic Demi",sans-serif;color:black;mso-themecolor:
  text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="2CDF128783D243BDB066130BA2CA8641" Title="Invoice number:"
   SdtTag="Invoice number:" ID="-647741014">INVOICE NO</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='font-size:12.0pt;line-height:130%;
  mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:"Microsoft Sans Serif";
  mso-bidi-font-family:"Microsoft Sans Serif";color:black;mso-themecolor:text1'>001</span><span
  lang=EN-US style='font-size:12.0pt;line-height:130%;font-family:"Franklin Gothic Demi",sans-serif;
  color:black;mso-themecolor:text1'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:187.2pt;mso-height-rule:
  exactly'>
  <td width=166 valign=top style='width:124.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:187.2pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:12.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="A802E7B48859485C8B4225689FC07456" Title="Enter your company name:"
   SdtTag="Enter your company name:" ID="667059952">Your Company Name</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:12.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="FAF56671BBB7475DB418E66C1D6FC372" Title="Enter street address:"
   SdtTag="Enter street address:" ID="-119988914">Street Address</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:12.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="D9EED90C54CD4DC69E3CBE0AB13D96DE" Title="Enter City, ST ZIP Code:"
   SdtTag="Enter City, ST ZIP Code:" ID="-1166163437">City, ST ZIP Code</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:12.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="FAE3383098114A0BA7F3814C91276B5C" Title="Enter phone:"
   SdtTag="Enter phone:" ID="1778050793">Phone</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:12.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="8D72EBB87A454850BA0331C508BF2EAE" Title="Fax:" SdtTag="Fax:"
   ID="1047421049">Fax:</w:Sdt> <w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="53F83907DC33455E8E011ABB0F1F6148" Title="Enter fax:"
   SdtTag="Enter fax:" ID="-1832595828">Fax</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:12.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="7E57C44CB044478EA51FD3C8ED7D279F" Title="Enter email:"
   SdtTag="Enter email:" ID="-176732462">Email</w:Sdt></span><span lang=EN-US
  style='font-size:12.0pt;line-height:130%;color:black;mso-themecolor:text1'><o:p></o:p></span></p>
  </td>
  <td width=101 valign=top style='width:75.7pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:187.2pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US style='font-size:12.0pt;line-height:130%;
  font-family:"Franklin Gothic Demi",sans-serif;color:black;mso-themecolor:
  text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=172 colspan=3 valign=top style='width:129.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:187.2pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US style='color:black;mso-themecolor:text1'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:62.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:187.2pt;mso-height-rule:exactly'>
  <p class=MsoNormal align=right style='text-align:right'><span lang=EN-US
  style='font-size:12.0pt;line-height:130%;font-family:"Franklin Gothic Demi",sans-serif;
  color:black;mso-themecolor:text1'>For:</span><span lang=EN-US
  style='font-size:12.0pt;line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";
  mso-hansi-font-family:"Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><o:p></o:p></span></p>
  </td>
  <td width=178 valign=top style='width:133.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:187.2pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:10.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="4B6A55129D3146EAA8A1E4E930EDF905" Title="Enter recipient name:"
   SdtTag="Enter recipient name:" ID="596843693">Name</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:10.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="03284B61E1C84192A186031B8CCBF84A"
   Title="Enter recipient company name:" SdtTag="Enter recipient company name:"
   ID="-1327660344">Company Name</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:10.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="172C6C55029A4EBB8E974262FFF267CB"
   Title="Enter recipient street address:"
   SdtTag="Enter recipient street address:" ID="1161659107">Street Address</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:10.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="E966C4063C114168B3E6274189FBE105"
   Title="Enter recipient City, ST ZIP Code:"
   SdtTag="Enter recipient City, ST ZIP Code:" ID="821245033">City, ST ZIP Code</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:10.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="8186F3F04DDB4821A297E5F11F48D73F" Title="Enter recipient phone:"
   SdtTag="Enter recipient phone:" ID="-2110803403">Phone</w:Sdt><o:p></o:p></span></p>
  <p class=MsoNormal><span lang=EN-US style='mso-bidi-font-size:10.0pt;
  line-height:130%;mso-ascii-font-family:"Microsoft Sans Serif";mso-hansi-font-family:
  "Microsoft Sans Serif";mso-bidi-font-family:"Microsoft Sans Serif";
  color:black;mso-themecolor:text1'><w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="D1D39D7FF1344E9DA95DFF8F855BA58B" Title="Recipient customer ID:"
   SdtTag="Recipient customer ID:" ID="-1581433713">Customer ID:</w:Sdt> <w:Sdt
   ShowingPlcHdr="t" Temporary="t" DocPart="E9D81707EB1340819F93F3782EA644E9"
   Title="Enter recipient Customer ID:" SdtTag="Enter recipient Customer ID:"
   ID="844357036">ID</w:Sdt></span><span lang=EN-US style='font-size:12.0pt;
  line-height:130%;color:black;mso-themecolor:text1'><o:p></o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=238 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <td width=11 style='border:none'></td>
  <td width=39 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=90 style='border:none'></td>
  <td width=277 style='border:none'></td>
 </tr>
 <![endif]>
</table>

</div>

<table class=Contenttable border=1 cellspacing=0 cellpadding=0
 summary="Layout table to enter Logo, Invoice number, Date, Expiration Date, Company Name, Slogan, and contact details, To Name and contact details, and Customer ID"
 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
 mso-border-themeshade:191;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:-1;mso-yfti-firstrow:yes;mso-yfti-lastfirstrow:yes;
  height:21.6pt'>
  <td width=97 valign=top style='width:72.95pt;border:none;border-bottom:solid #0D0D0D 1.0pt;
  mso-border-bottom-themecolor:text1;mso-border-bottom-themetint:242;
  mso-border-bottom-alt:solid #0D0D0D .5pt;mso-border-bottom-themecolor:text1;
  mso-border-bottom-themetint:242;padding:5.75pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=Style1 style='mso-yfti-cnfc:1;mso-element:frame;mso-element-frame-hspace:
  0cm;mso-element-wrap:auto;mso-element-anchor-vertical:margin;mso-element-anchor-horizontal:
  column;mso-element-left:left;mso-element-top:0cm;mso-height-rule:exactly'><span
  lang=EN-US style='text-transform:uppercase'>Item</span></p>
  </td>
  <td width=120 valign=top style='width:89.85pt;border:none;border-bottom:solid #0D0D0D 1.0pt;
  mso-border-bottom-themecolor:text1;mso-border-bottom-themetint:242;
  mso-border-bottom-alt:solid #0D0D0D .5pt;mso-border-bottom-themecolor:text1;
  mso-border-bottom-themetint:242;padding:5.75pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=Style1 style='mso-yfti-cnfc:1;mso-element:frame;mso-element-frame-hspace:
  0cm;mso-element-wrap:auto;mso-element-anchor-vertical:margin;mso-element-anchor-horizontal:
  column;mso-element-left:left;mso-element-top:0cm;mso-height-rule:exactly'><span
  lang=EN-US style='text-transform:uppercase'>Item Type<o:p></o:p></span></p>
  </td>
  <td width=130 valign=top style='width:97.45pt;border:none;border-bottom:solid #0D0D0D 1.0pt;
  mso-border-bottom-themecolor:text1;mso-border-bottom-themetint:242;
  mso-border-bottom-alt:solid #0D0D0D .5pt;mso-border-bottom-themecolor:text1;
  mso-border-bottom-themetint:242;padding:5.75pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=Style1 style='mso-yfti-cnfc:1;mso-element:frame;mso-element-frame-hspace:
  0cm;mso-element-wrap:auto;mso-element-anchor-vertical:margin;mso-element-anchor-horizontal:
  column;mso-element-left:left;mso-element-top:0cm;mso-height-rule:exactly'><span
  lang=EN-US style='text-transform:uppercase'>Cost of Material (M^2)</span></p>
  </td>
  <td width=113 valign=top style='width:85.1pt;border:none;border-bottom:solid #0D0D0D 1.0pt;
  mso-border-bottom-themecolor:text1;mso-border-bottom-themetint:242;
  mso-border-bottom-alt:solid #0D0D0D .5pt;mso-border-bottom-themecolor:text1;
  mso-border-bottom-themetint:242;padding:5.75pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=Style1 style='mso-yfti-cnfc:1;mso-element:frame;mso-element-frame-hspace:
  0cm;mso-element-wrap:auto;mso-element-anchor-vertical:margin;mso-element-anchor-horizontal:
  column;mso-element-left:left;mso-element-top:0cm;mso-height-rule:exactly'><span
  lang=EN-US style='text-transform:uppercase'>M^2 Cladding Required<o:p></o:p></span></p>
  </td>
  <td width=108 valign=top style='width:80.85pt;border:none;border-bottom:solid #0D0D0D 1.0pt;
  mso-border-bottom-themecolor:text1;mso-border-bottom-themetint:242;
  mso-border-bottom-alt:solid #0D0D0D .5pt;mso-border-bottom-themecolor:text1;
  mso-border-bottom-themetint:242;padding:5.75pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=Style1 style='mso-yfti-cnfc:1;mso-element:frame;mso-element-frame-hspace:
  0cm;mso-element-wrap:auto;mso-element-anchor-vertical:margin;mso-element-anchor-horizontal:
  column;mso-element-left:left;mso-element-top:0cm;mso-height-rule:exactly'><span
  lang=EN-US style='text-transform:uppercase'><w:Sdt ShowingPlcHdr="t"
   Temporary="t" DocPart="9A9119DD4B624D12920074F7C451AEDB" Title="Unit price:"
   SdtTag="Unit price:" ID="-67812516">unit price</w:Sdt> (per m^2)<o:p></o:p></span></p>
  </td>
  <w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="D264CED4E64540779BA0BE8053FC89DC" Title="Line total:"
   SdtTag="Line total:" ID="290171483">
   <td width=132 valign=top style='width:98.85pt;border:none;border-bottom:
   solid #0D0D0D 1.0pt;mso-border-bottom-themecolor:text1;mso-border-bottom-themetint:
   242;mso-border-bottom-alt:solid #0D0D0D .5pt;mso-border-bottom-themecolor:
   text1;mso-border-bottom-themetint:242;padding:5.75pt 5.75pt 0cm 5.75pt;
   height:21.6pt'>
   <p class=Style1 style='mso-yfti-cnfc:1;mso-element:frame;mso-element-frame-hspace:
   0cm;mso-element-wrap:auto;mso-element-anchor-vertical:margin;mso-element-anchor-horizontal:
   column;mso-element-left:left;mso-element-top:0cm;mso-height-rule:exactly'><span
   lang=EN-US style='text-transform:uppercase'>Line Total<o:p></o:p><w:sdtPr></w:sdtPr></span></p>
   </td>
  </w:Sdt>
 </tr>
 <tr style='mso-yfti-irow:0;height:21.6pt'>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  solid #A6A6A6 1.0pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
  166;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid #A6A6A6 .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:166;mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:166;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US>Bay</span></p>
  </td>
  <td width=120 valign=top style='width:89.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid #A6A6A6 .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:166;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:166;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p><span lang=EN-US><?php
                
        if(!empty($_POST['baysnum']) && !empty($_POST['bays']))
	        echo $_POST['baysnum']." Bay with ". $_POST['bays'] . " Roof";
        Else
            echo "No Selection made for this option"
	?></span></p>
  </td>
  <td width=130 valign=top style='width:97.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid #A6A6A6 .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:166;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:166;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=113 valign=top style='width:85.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid #A6A6A6 .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:166;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:166;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=108 valign=top style='width:80.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid #A6A6A6 .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:166;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:166;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:98.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid #A6A6A6 .5pt;mso-border-top-themecolor:background1;
  mso-border-top-themeshade:166;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:166;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.6pt'>
  <td width=97 valign=top style='width:72.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US>Roof Material</span></p>
  </td>
  <td width=120 valign=top style='width:89.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p><span class=SpellE><span
  lang=EN-US>
      	<?php
        if(!empty($_POST['Roof']))
            echo $_POST['Roof']; 
        Else
            echo "No Selection made for this option"
    ?></span></span></p>
  </td>
  <td width=130 valign=top style='width:97.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=113 valign=top style='width:85.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=108 valign=top style='width:80.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:98.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:21.6pt'>
  <td width=97 valign=top style='width:72.95pt;border-top:none;border-left:
  solid #A6A6A6 1.0pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
  166;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:windowtext;
  mso-border-left-alt:#A6A6A6;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:166;mso-border-bottom-alt:windowtext;mso-border-right-alt:
  #A6A6A6;mso-border-right-themecolor:background1;mso-border-right-themeshade:
  166;mso-border-style-alt:solid;mso-border-width-alt:.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US>Floor Material</span></p>
  </td>
  <td width=120 valign=top style='width:89.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-top-alt:windowtext;mso-border-left-alt:#A6A6A6;mso-border-left-themecolor:
  background1;mso-border-left-themeshade:166;mso-border-bottom-alt:windowtext;
  mso-border-right-alt:#A6A6A6;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:166;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p><span lang=EN-US>	<?php
        if(!empty($_POST['Floor']))
            echo $_POST['Floor']; 
        Else
            echo "No Selection made for this option"
    ?></span></p>
  </td>
  <td width=130 valign=top style='width:97.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-top-alt:windowtext;mso-border-left-alt:#A6A6A6;mso-border-left-themecolor:
  background1;mso-border-left-themeshade:166;mso-border-bottom-alt:windowtext;
  mso-border-right-alt:#A6A6A6;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:166;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=113 valign=top style='width:85.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-top-alt:windowtext;mso-border-left-alt:#A6A6A6;mso-border-left-themecolor:
  background1;mso-border-left-themeshade:166;mso-border-bottom-alt:windowtext;
  mso-border-right-alt:#A6A6A6;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:166;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=108 valign=top style='width:80.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-top-alt:windowtext;mso-border-left-alt:#A6A6A6;mso-border-left-themecolor:
  background1;mso-border-left-themeshade:166;mso-border-bottom-alt:windowtext;
  mso-border-right-alt:#A6A6A6;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:166;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:98.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid #A6A6A6 .5pt;
  mso-border-left-themecolor:background1;mso-border-left-themeshade:166;
  mso-border-top-alt:windowtext;mso-border-left-alt:#A6A6A6;mso-border-left-themecolor:
  background1;mso-border-left-themeshade:166;mso-border-bottom-alt:windowtext;
  mso-border-right-alt:#A6A6A6;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:166;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.6pt'>
  <td width=97 valign=top style='width:72.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US>Wall Material</span></p>
  </td>
  <td width=120 valign=top style='width:89.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p><span class=SpellE><span
  lang=EN-US><?php
                
        if(!empty($_POST['Wall']))
	        echo $_POST['Wall'];
        Else
            echo "No Selection made for this option"
	?></span></span></p>
  </td>
  <td width=130 valign=top style='width:97.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=113 valign=top style='width:85.1pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=108 valign=top style='width:80.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:98.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:128'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:21.6pt'>
  <td width=97 valign=top style='width:72.95pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=120 valign=top style='width:89.85pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=130 valign=top style='width:97.45pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=113 valign=top style='width:85.1pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=108 valign=top style='width:80.85pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=132 valign=top style='width:98.85pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=Normalright style='mso-yfti-cnfc:64'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 summary="Layout table to enter Logo, Invoice number, Date, Expiration Date, Company Name, Slogan, and contact details, To Name and contact details, and Customer ID"
 style='border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.75pt 0cm 5.75pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:21.6pt'>
  <td width=450 style='width:337.65pt;padding:8.65pt 5.75pt 0cm 5.75pt;
  height:21.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:9.0pt;line-height:130%'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=102 style='width:76.3pt;border:none;border-right:solid #BFBFBF 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
  mso-border-right-alt:solid #BFBFBF .5pt;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:191;padding:8.65pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=MsoNormal align=right style='text-align:right'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:9.0pt;line-height:130%'>Shipping
  (estimate)<o:p></o:p></span></p>
  </td>
  <td width=149 style='width:111.7pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
  solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
  191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:191;padding:8.65pt 5.75pt 0cm 5.75pt;height:21.6pt'>
  <p class=MsoNormal align=right style='text-align:right'><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<div align=center>

<table class=TotalTable border=1 cellspacing=0 cellpadding=0
 summary="Layout table to enter Logo, Invoice number, Date, Expiration Date, Company Name, Slogan, and contact details, To Name and contact details, and Customer ID"
 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-top-alt:solid #BFBFBF .5pt;mso-border-top-themecolor:background1;
 mso-border-top-themeshade:191;mso-border-bottom-alt:solid #BFBFBF .5pt;
 mso-border-bottom-themecolor:background1;mso-border-bottom-themeshade:191;
 mso-border-right-alt:solid #BFBFBF .5pt;mso-border-right-themecolor:background1;
 mso-border-right-themeshade:191;mso-yfti-tbllook:416;mso-padding-alt:0cm 5.75pt 0cm 0cm;
 mso-border-insideh:.5pt solid #BFBFBF;mso-border-insideh-themecolor:background1;
 mso-border-insideh-themeshade:191;mso-border-insidev:.5pt solid #BFBFBF;
 mso-border-insidev-themecolor:background1;mso-border-insidev-themeshade:191'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt;mso-height-rule:
  exactly'>
  <td width=552 style='width:413.95pt;border:none;border-right:solid #BFBFBF 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
  mso-border-right-alt:solid #BFBFBF .5pt;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:18.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal align=right style='text-align:right;mso-yfti-cnfc:68'><span
  lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:9.0pt;line-height:130%'><w:Sdt
   ShowingPlcHdr="t" Temporary="t" DocPart="5CD877E2909F4C66A9F17697A7A8D6D9"
   Title="Subtotal:" SdtTag="Subtotal:" ID="275756768">Subtotal</w:Sdt><o:p></o:p></span></p>
  </td>
  <td width=149 style='width:111.7pt;border:solid #BFBFBF 1.0pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;border-left:none;mso-border-left-alt:
  solid #BFBFBF .5pt;mso-border-left-themecolor:background1;mso-border-left-themeshade:
  191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:background1;
  mso-border-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:18.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal align=right style='text-align:right;mso-yfti-cnfc:72'><span
  lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt;mso-height-rule:exactly'>
  <w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="EA0ED94CF3944D9981954AFCF1028432" Title="Sales Tax:"
   SdtTag="Sales Tax:" ID="1931165688">
   <td width=552 style='width:413.95pt;border:none;border-right:solid #BFBFBF 1.0pt;
   mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
   mso-border-right-alt:solid #BFBFBF .5pt;mso-border-right-themecolor:background1;
   mso-border-right-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:18.0pt;
   mso-height-rule:exactly'>
   <p class=MsoNormal align=right style='text-align:right;mso-yfti-cnfc:4'><span
   lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:9.0pt;line-height:
   130%'>Sales Tax<o:p></o:p><w:sdtPr></w:sdtPr></span></p>
   </td>
  </w:Sdt>
  <td width=149 style='width:111.7pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:18.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal align=right style='text-align:right;mso-yfti-cnfc:8'><span
  lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:18.0pt;mso-height-rule:
  exactly'>
  <w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="7FE3D87F247242ACA8564D9CE166F1B8" Title="Total:" SdtTag="Total:"
   ID="-601961919">
   <td width=552 style='width:413.95pt;border:none;border-right:solid #BFBFBF 1.0pt;
   mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
   mso-border-right-alt:solid #BFBFBF .5pt;mso-border-right-themecolor:background1;
   mso-border-right-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:18.0pt;
   mso-height-rule:exactly'>
   <p class=MsoNormal align=right style='text-align:right;mso-yfti-cnfc:68'><b
   style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:12.0pt;
   mso-bidi-font-size:9.0pt;line-height:130%'>Total<o:p></o:p><w:sdtPr></w:sdtPr></span></b></p>
   </td>
  </w:Sdt>
  <td width=149 style='width:111.7pt;border-top:none;border-left:none;
  border-bottom:solid #BFBFBF 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:191;border-right:solid #BFBFBF 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:191;mso-border-top-alt:solid #BFBFBF .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:191;
  mso-border-left-alt:solid #BFBFBF .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:191;mso-border-alt:solid #BFBFBF .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:18.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal align=right style='text-align:right;mso-yfti-cnfc:72'><span
  lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>

<p class=Normalright><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 summary="Enter Quotation prepared by person name, declaration, and Signature to accept in this table"
 style='border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <w:Sdt ShowingPlcHdr="t" Temporary="t"
   DocPart="72EFFB7B89E94EFA815532357DE1E702" Title="Quotation prepared by:"
   SdtTag="Quotation prepared by:" ID="-1831602927">
   <td width=138 valign=top style='width:103.3pt;border:none;border-right:solid #A6A6A6 1.0pt;
   mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
   mso-border-right-alt:solid #A6A6A6 .5pt;mso-border-right-themecolor:background1;
   mso-border-right-themeshade:166;padding:0cm 0cm 0cm 0cm'>
   <p class=MsoNormal><span lang=EN-US>Quotation prepared by:<o:p></o:p><w:sdtPr></w:sdtPr></span></p>
   </td>
  </w:Sdt>
  <td width=564 valign=top style='width:422.8pt;border:solid #A6A6A6 1.0pt;
  mso-border-themecolor:background1;mso-border-themeshade:166;border-left:none;
  mso-border-left-alt:solid #A6A6A6 .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:166;mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:166;padding:0cm 0cm 0cm 0cm'>
  <p class=MsoNormal><span class=SpellE><span lang=EN-US>BuiltQuik</span></span><span
  lang=EN-US> Online Systems</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:11.1pt'>
  <td width=138 valign=top style='width:103.3pt;border:none;border-right:solid #A6A6A6 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:166;
  mso-border-right-alt:solid #A6A6A6 .5pt;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:166;padding:0cm 0cm 0cm 0cm;height:11.1pt'></td>
  <td width=564 valign=top style='width:422.8pt;border-top:none;border-left:
  none;border-bottom:solid #A6A6A6 1.0pt;mso-border-bottom-themecolor:background1;
  mso-border-bottom-themeshade:166;border-right:solid #A6A6A6 1.0pt;mso-border-right-themecolor:
  background1;mso-border-right-themeshade:166;mso-border-top-alt:solid #A6A6A6 .5pt;
  mso-border-top-themecolor:background1;mso-border-top-themeshade:166;
  mso-border-left-alt:solid #A6A6A6 .5pt;mso-border-left-themecolor:background1;
  mso-border-left-themeshade:166;mso-border-alt:solid #A6A6A6 .5pt;mso-border-themecolor:
  background1;mso-border-themeshade:166;padding:0cm 0cm 0cm 0cm;height:11.1pt'>
  <p class=MsoNormal><span lang=EN-US>This Quotation is just an estimate and is
  subject to change</span><span lang=EN-US style='font-size:12.0pt;mso-bidi-font-size:
  9.0pt;line-height:130%'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<div align=center>

<table class=TotalTable border=0 cellspacing=0 cellpadding=0
 summary="Enter Quotation prepared by person name, declaration, and Signature to accept in this table"
 width=702 style='border-collapse:collapse;mso-table-layout-alt:fixed;
 mso-yfti-tbllook:416;mso-padding-alt:0cm 5.75pt 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  height:14.4pt'>
  <td width=312 style='width:233.9pt;border:none;border-right:solid #BFBFBF 1.0pt;
  mso-border-right-themecolor:background1;mso-border-right-themeshade:191;
  mso-border-right-alt:solid #BFBFBF .5pt;mso-border-right-themecolor:background1;
  mso-border-right-themeshade:191;padding:0cm 5.75pt 0cm 0cm;height:14.4pt'>
  <p class=MsoNormal align=left style='text-align:left;mso-yfti-cnfc:68'><span
  lang=EN-US>To accept this quotation, return to [example@email.com]</span></p>
  </td>
 </tr>
</table>

</div>
</div>
</div>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>