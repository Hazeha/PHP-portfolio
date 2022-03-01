<?php

Class Link{
    public $title_dk;
    public $title_en;
    public $url;

    function __construct($_title_dk, $_title_en, $_url)
    {
        $this->title_dk = $_title_dk;
        $this->title_en = $_title_en;
        $this->url = $_url;
    }

    public function getTitle($_dk){
        if ($_dk){
            return ucfirst($this->title_dk);
        }
        else{
            return ucfirst($this->title_en);
        }
    }
    public function getUrl(){
        return $this->url;
    }
    public static function getLatest(){
        $db = mysqli_connect("localhost:3307", "bobshop", "bob123", "db_portfolio");
        $search = "select * from projects order by date limit 2";
        $res = $db->query($search);

        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (mysqli_num_rows($res) >= 0) {
            while($row = $res->fetch_assoc()) {
                echo '
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <img src="' . $row["languageImg"]. '" alt="' . $row["language"]. '" style="width: 50px; position: absolute;     margin-left: 100%;
                                        transform: translate(-85px, -15px);" class="">
                                <strong class="d-inline-block mb-2" style="color: '. $row["color"] .'">' . $row["area"]. ' - ' . $row["language"]. '</strong>
                                <h3 class="mb-0">' . $row["name"]. '</h3>
                                <div class="mb-1 text-muted">' . $row["date"]. '</div>
                                <p class="card-text mb-auto">' . $row["description"]. '</p>
                                <a href="' . $row["linkLive"]. '" class="stretched-link">Continue to Project</a>
                                </div>
                            <div class="col-auto d-none d-lg-block">
                                <img class="bd-placeholder-img" width="200" src="' . $row["img"]. '" alt="Nikolaj Drejer - '. $row["name"]. ' - ' . $row["description"]. '">
                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo "0 results";
        }
    }
    public static function getAll(){
        $db = mysqli_connect("localhost:3307", "bobshop", "bob123", "db_portfolio");
        $search = "select * from projects order by date";
        $res = $db->query($search);

        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (mysqli_num_rows($res) >= 0) {
            while($row = $res->fetch_assoc()) {
                echo '
                <li class="list-group-item">
                <p class="list-name">'. $row["name"] .'</p>
                <p class="list-lang">'. $row["language"] .'</p>
                <p class="list-date">'. $row["date"] .'</p>
                <p class="list-link">'. $row["area"] .'</p>   
            </li>
                                        
                            
                                
                            ';
            }
        } else {
            echo "0 results";
        }
    }
}



