<?php
class page
{
    //class page's attributes
    public $content;
    private $title = "TLA consulting pty Ltd";
    private $keywords = "TLA Consulting, Three Letter Abreviation,
                        some of my best friends are search engines";
    public $buttons = array("Home" => "home.php",
        "Contact" => "contact.php",
        "Services" => "services.php",
        "Site Map" => "map.php"
    );

    //class page's operations
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }

    public function Display()
    {
        echo "<html>\n<head>\n";
        $this->DisplayTile();
        $this->DisplayKeywords();
        $this->DisplayStyles();
        echo "</head>\n<body>\n";
        $this->DisplayHeader();
        $this->DisplayMenu($this->buttons);
        echo $this->content;
        $this->DisplayFooter();
        echo "</body>\n</html>\n";
    }

    public function DisplayTile()
    {
        echo "<title>" . $this->title . "</title>";
    }

    public function DisplayKeywords()
    {
        echo "<meta name=\"keyword\" content=\"" . $this->keywords . "\"/>";
    }

    public function DisplayHeader()
    {
        ?>
        <table width="100%" cellpadding="12"
               cellspacing="0" border="0">
            <tr bgcolor="black">
                <td align="left"><img src="logo.gif"/></td>
                <td>
                    <h1>TLA Consulting Pty Ltd</h1>
                </td>
                <td align="right"><img src="logo.gif"/></td>
            </tr>
        </table>
        <?php
    }

    public function DisplayMenu($buttons)
    {
        echo "<table width=\"100%\" bgcolor=\"white\" cellpadding=\"4\" cellspacing=\"4\">\n";
        echo "<tr>\n";

        $width = 100 / count($buttons);

        while (list($name, $url) = each($buttons)) {
            $this->DisplayButtons($width, $name, $url, !$this->IsURLCurrentPage($url));
        }

        echo "</tr>\n</table>\n";
    }

    public function IsURLCurrentPage($url)
    {
        if (strpos($_SERVER['PHP_SELF'], $url) == false) {
            return false;
        } else {
            return true;
        }
    }

    public function DisplayButtons($width, $name, $url, $active)
    {
        if ($active) {
            echo "<td width=\"" . $width . "\">
            <a href=\"" . $url . "\">
            <img src=\"s-logo.gif\" alt=\"" . $name . "\" border=\"0\" /></a>
            <a href=\"" . $url . "\"><span class=\"menu\">" . $name . "</span></a>
            </td>";
        } else {
            echo "<td width=\"" . $width . "%\">
            <img src=\"side-logo.gif\">
            <span class=\"menu\">" . $name . "</span>
            </td>";
        }
    }

    public function DisplayFooter()
    {
        ?>
        <table width="100%" bgcolor="black" cellpadding="12" border="0">
            <tr>
                <td>
                    <p class="foot">&copy;TLA Consulting Pty Ltd.</p>
                    <p class="foot">Please see our<a href="">Legal information page</a></p>
                </td>
            </tr>
        </table>
        <?php
    }

    public function DisplayStyles()
    {
        ?>
        <style>
            h1 {
                color: white;
                font-size: 24pt;
                text-align: center;
                font-family: Arial, sans-serif;
            }
            .menu {
                color: white;
                font-size:12pt;
                text-align: center;
                font-family: Arial,sans-serif;
                font-weight: bold;
            }
            td {
                background: black;
            }
            p {
                color: black;
                font-size: 12pt;
                text-align: justify;
                font-family:Arial,sans-serif;
            }
            p.foot {
                color: white;
                font-size: 9pt;
                text-align: center;
                font-family:Arial,sans-serif;
                font-weight:bold;

            }
            a:link,a:visited,a:active {
                color: white;
            }

        </style>
        <?php
    }
}
?>
