<?php
    if (isset($_POST['szamol'])){
        $V = $_POST['sebesseg'];
        $A = $_POST['keresztMetszet'];
        $W = $A * $V;
        echo "<p>Az adott kersztmetszetben átáramló folyadék térfogata: $W m3.</p>";
    }
?>