#!/usr/bin/php
<?php
function usage()
{
    return "Usage: php convert.php /path/to/opml_file.opml > output.html\r\n";
}

#from: https://gist.github.com/anthonygelibert/6e533280534ccafb74c2a99fc35f06ea

# Print usage if need be.
if(count($argv) < 2) die(usage());
# Grab the file path.
$f = $argv[1];
# Load it into a SimpleXML.
$xml = simplexml_load_file($f);
# Output buffer
$out = '';
# Run through the nodes in the OPML and buffer the Netscape output
foreach($xml->xpath("//outline") as $outline )
{
    $title = htmlspecialchars($outline['description'], ENT_QUOTES);
    $feed = htmlspecialchars($outline['xmlUrl']);
    if($feed)
    {
        $out .= "\r\n\t" . '<DT><A HREF="' . str_replace("http://", "feed://", $feed) . '">' . $title . '</A>'; }
        else
        {
            $out .= "</DL><p>\r\n<DT><H3>$title</H3><DL><p>";
        }
    }
    $out .= "\r\n"
        ?>
        <!DOCTYPE NETSCAPE-Bookmark-file-1>
        <HTML>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
        <TITLE>Bookmarks</TITLE>
        <H1>Bookmarks</H1>
        <DL><p>
        <?php echo $out; ?>
