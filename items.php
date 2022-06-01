<?php
    include('bd.php');
    echo "<head><link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\"></head>";
    echo "<script src = \"utils.js\"></script>";
    echo "<div id=\"content\">";

    function build_table($array){
        $html = '<table>';
        $html .= '<tr>';
        foreach($array[0] as $key=>$value){
                $html .= '<th>' . htmlspecialchars($key) . '</th>';
            }
        $html .= '</tr>';
    
        foreach( $array as $key=>$value){
            $html .= '<tr>';
            foreach($value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }
        
        $html .= '</table>';
        return $html;
    }
    


    switch ($_POST['type']) {
        case "vendor":
            echo build_table(gen_vendors());
            break;
        case "category":
            echo build_table(gen_out_of_stock());
            break;
        case "price":
            $price_low = intval($_POST['price_low']);
            $price_high = intval($_POST['price_high']);
            echo build_table(find_price_range($price_low, $price_high));
            break;
    }

    echo "</div>";


    echo "<button onclick=\"GetLastSearches()\">
    Show last searches
    </button>
    <button onclick=\"SaveSearch()\">
    Save search
    </button>";

    
    
?>