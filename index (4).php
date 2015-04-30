<?php

// error_reporting(0);

header('Content-Type: application/json');

// 295ea6b44fca31cc
	class api_logger {

		protected $connection;
		private $superAdminKey = "!*f*lT2fKV7*Pl!5*S2U3WH&Tdkayo2nBxgjCKM7LN^Jh##bfIJsrloMFyvgTJyt";
		private $isSuperAdmin = false;

		protected $apiKey;
		protected $plan;
		protected $service;

		protected $isPost;

		protected $response = array();
		protected $responseObject;

		protected $debug = false;

		private $servername = "localhost";
		private $dbusername = "donbarry_testdb";
		private $password = "lastdon";
		private $dbname = "donbarry_testdb";

		public function __construct() {
             header('Access-Control-Allow-Origin: *');
             header("Access-Control-Allow-Credentials: true"); 
             header('Access-Control-Allow-Headers: X-Requested-With');
             header('Access-Control-Allow-Headers: Content-Type,X-Requested-With,accept,Origin,Access-Control-Request-Method,Access-Control-Request-Headers,Authorization');
             header('Access-Control-Allow-Methods: POST, GET, DELETE, OPTIONS, PUT'); // http://stackoverflow.com/a/7605119/578667
             header('Access-Control-Max-Age: 86400'); 
            $this->responseObject=(object) array('foo' => 'bar', 'property' => 'value');
            //$this->responseObject=new stdObject();
			$this->isPost = $_SERVER['REQUEST_METHOD'] === 'POST';

			$this->debug = $this->checkParamExists('debug');

			$this->msgLog("a message");

			//$this->connection=mysqli_connect("127.0.0.1","root","","api_logger_class");
			// Check connection
			// if (mysqli_connect_errno()) {
			// 	$this->error("connection to database failed");
			// }

			// $this->connection->close();

			//$this->response();

		}
		public function getcomedians($comedianID=null){
		
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			if ($comedianID==null)
				//$sql = "SELECT DISTINCT comedian FROM comedians";
				$sql="SELECT * FROM comedians";
			else	
				//$sql = "SELECT article_id,article_title,article_text,article_imagename FROM articles where article_id=" . $articleID;
				$sql="SELECT * FROM comedians where comedian_id=". $comedianID;
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    //output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			    }
			    $this->responseObject->response=$this->response;
			    //$this->response=$result->fetch_assoc();
			} else {
			    echo "0 results";
			}
			$conn->close();			
		}		
		public function getdata($articleID=null){
		
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			if ($articleID==null)
				//$sql = "SELECT article_id,article_title,article_text,article_imagename FROM articles";
				$sql="SELECT DISTINCT article_id, article_title, article_text, article_imagename, COUNT( item_id ) as likes FROM articles a LEFT OUTER JOIN likes l ON ( 	 a.article_id = l.item_id AND l.item_type =  'article' ) GROUP BY article_id";
			else	
				//$sql = "SELECT article_id,article_title,article_text,article_imagename FROM articles where article_id=" . $articleID;
				$sql="SELECT DISTINCT article_id, article_title, article_text, article_imagename, COUNT( item_id ) as likes FROM articles a LEFT OUTER JOIN likes l ON ( 	 a.article_id = l.item_id AND l.item_type =  'article' ) where article_id=". $articleID;
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    //output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			    }
			    $this->responseObject->response=$this->response;
			    //$this->response=$result->fetch_assoc();
			} else {
			    echo "0 results";
			}
			$conn->close();			
		}
		public function getvideo($videoID=null){
		
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			if ($videoID==null)
				$sql="SELECT DISTINCT video_id,video_name,comedian,video_url,kind,vnum, COUNT( item_id ) as likes FROM videos v LEFT OUTER JOIN likes l ON ( 	 v.video_id = l.item_id AND l.item_type =  'video' ) GROUP BY video_id"	;			
			else	
				//$sql = "SELECT video_id,video_name,comedian,video_url,kind,vnum FROM videos where video_id=" . $videoID;
				$sql="SELECT DISTINCT video_id,video_name,comedian,video_url,kind,vnum, COUNT( item_id ) as likes FROM videos v LEFT OUTER JOIN likes l ON ( 	 v.video_id = l.item_id AND l.item_type =  'video' ) where video_id=" . $videoID;								
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    //output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			    }
			    $this->responseObject->response=$this->response;
			    //$this->response=$result->fetch_assoc();
			} else {
			    echo "0 results";
			}
			$conn->close();			
		}
		public function getvideosOLD($searchKey="",$page=0,$pageSize=5){
			$limit1=($page*$pageSize);
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			$sql="SELECT DISTINCT video_id,video_name,comedian,video_url,kind,vnum, COUNT( item_id ) as likes FROM videos v LEFT OUTER JOIN likes l ON ( 	 v.video_id = l.item_id AND l.item_type =  'video' ) WHERE comedian LIKE '%$searchKey%' OR video_name LIKE '%$searchKey%' GROUP BY video_id LIMIT $limit1,$pageSize";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    //output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			    }
			    $this->responseObject->response=$this->response;
				$sql2="SELECT DISTINCT video_id,video_name,comedian,video_url,kind,vnum, COUNT( item_id ) as likes FROM videos v LEFT OUTER JOIN likes l ON ( 	 v.video_id = l.item_id AND l.item_type =  'video' ) WHERE comedian LIKE '%$searchKey%' OR video_name LIKE '%searchKey%' GROUP BY video_id";
		    		$result2=$conn->query($sql2);
			    $this->responseObject->videoCount=$result2->num_rows;
			    //$this->response=$result->fetch_assoc();
			} else {
			    //echo "0 results";
			    //echo $sql;
			    //echo $sql2;
			}
			$conn->close();			
		}	
		public function getvideos($searchKey="",$page=0,$pageSize=5,$username=""){
			$limit1=($page*$pageSize);
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			$sql="SELECT DISTINCT video_id,video_name,comedian,video_url,kind,vnum, item_id as fav FROM videos v LEFT OUTER JOIN favorites f ON ( 	 v.video_id = f.item_id AND f.item_type =  'video' AND f.username='$username' ) WHERE comedian LIKE '%$searchKey%' OR video_name LIKE '%$searchKey%' GROUP BY video_id LIMIT $limit1,$pageSize";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    //output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			    }
			    $this->responseObject->response=$this->response;
				$sql2="SELECT DISTINCT video_id,video_name,comedian,video_url,kind,vnum, item_id as fav FROM videos v LEFT OUTER JOIN favorites f ON ( 	 v.video_id = f.item_id AND f.item_type =  'video' AND f.username='$username' ) WHERE comedian LIKE '%$searchKey%' OR video_name LIKE '%$searchKey%' GROUP BY video_id";
		    		$result2=$conn->query($sql2);
			    $this->responseObject->videoCount=$result2->num_rows;
			    //$this->response=$result->fetch_assoc();
			} else {
			    //echo "0 results";
			    //echo $sql;
			    //echo $sql2;
			}
			$conn->close();			
		}			
		public function addLike($username,$type,$item_id){
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}		
			$sql="INSERT INTO likes(item_id,item_type,username) VALUES ($item_id,'$type','$username')";
			$result=$conn->query($sql);
			$sql="SELECT COUNT(item_id) as likes FROM likes WHERE item_id=$item_id AND item_type='$type'";
			$result=$conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			    }
			    $this->responseObject->response=$this->response;
			} else {
			    echo "0 results";
			}

			$conn->close();
		}
		public function addFavorite($username,$type,$item_id){
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}		
			$sql="INSERT INTO favorites(item_id,item_type,username) VALUES ($item_id,'$type','$username')";
			$result=$conn->query($sql);
			$sql="SELECT COUNT(item_id) as favs FROM favorites WHERE item_id=$item_id AND item_type='$type'";
			$result=$conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			    }
			    $this->responseObject->response=$this->response;
			} else {
			    echo "0 results";
			}

			$conn->close();
		}		
		public function addComment($username,$type,$item_id,$comment){
			// Create connection
			$conn = new mysqli($this->servername, $this->dbusername, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}		
			$sql="INSERT INTO comments(item_id,item_type,username,comment) VALUES ($item_id,'$type','$username','$comment')";
			$result=$conn->query($sql);
			$sql="SELECT COUNT(item_id) as comments FROM comments WHERE item_id=$item_id AND item_type='$type'";
			$result=$conn->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	$this->response[]=$row;
			    }
			    $this->responseObject->response=$this->response;
			} else {
			    echo "0 results";
			}

			$conn->close();
		}

		protected function error($errorMsg) {
			echo '{"error": "'.$errorMsg.'"}';
			die();
		}

		protected function msgLog($msg,$key=null) {
			if ($this->debug === true) {
				if ($key===null) {
					$key=$this->getTimestamp();
				}

				$logMsg = array($key=>$msg);

				if (isset($this->response["debug"])) {
					array_push($this->response["debug"], $logMsg);
				}
				else {
					$this->response["debug"]=array($logMsg);
				}
			}
		}

		public function getParam($param) {
			if ($this->checkParamExists($param)) {
				return $this->isPost ? $_POST[$param] : $_GET[$param];
			}
			else {
				return false;
			}
		}

		private function checkParamExists($param) {
			return $this->isPost ? isset($_POST[$param]) : isset($_GET[$param]);
		}

		private function getTimestamp() {
			$now = new DateTime("now");
			$now->setTimezone(new DateTimezone("America/Chicago"));
			return $now->format("Y-m-d H:i:s");
		}

		public function addResponse($key,$value) {
			$this->response[$key] = $value;
		}

		public function response() {
			//echo json_encode($this->response);
			echo json_encode($this->responseObject);
		}
	}

	$apiLogger = new api_logger();	
	if (!isset($_POST) && !isset($_GET)){
		$apiLogger->response();
	}else{
		$todo=$apiLogger->getParam("todo");
		if ($todo=="articles"){
			$apiLogger->getdata();
			$apiLogger->response();
		}elseif($todo=="article"){
			$articleID=$apiLogger->getParam("articleID");
			$apiLogger->getdata($articleID);
			$apiLogger->response();
		}elseif($todo=="videos"){
			$searchKey=$apiLogger->getParam("searchKey");
			$page=$apiLogger->getParam("page");
			$pageSize=$apiLogger->getParam("pageSize");
			$username=$apiLogger->getParam("username");
			$apiLogger->getvideos($searchKey,$page,$pageSize,$username); //changed to getvideos so as to handle paging
			$apiLogger->response();
		}elseif($todo=="video"){
			$videoID=$apiLogger->getParam("videoID");
			$apiLogger->getvideo($videoID);
			$apiLogger->response();
		}elseif($todo=="addlike"){
			$username=$apiLogger->getParam("username");
			$item_id=$apiLogger->getParam("id");
			$item_type=$apiLogger->getParam("type");
			$apiLogger->addLike($username,$item_type,$item_id);
			$apiLogger->response();
		}elseif($todo=="addfavorite"){
			$username=$apiLogger->getParam("username");
			$item_id=$apiLogger->getParam("id");
			$item_type=$apiLogger->getParam("type");
			$apiLogger->addLike($username,$item_type,$item_id);
			$apiLogger->response();
		}elseif($todo=="addcomment"){
			$username=$apiLogger->getParam("username");
			$item_id=$apiLogger->getParam("id");
			$item_type=$apiLogger->getParam("type");
			$comment=$apiLogger->getParam("comment");
			$apiLogger->addComment($username,$item_type,$item_id,$comment);
			$apiLogger->response();
		}elseif($todo=="comedians"){
			$apiLogger->getcomedians();
			$apiLogger->response();
		}elseif($todo=="comedian"){
			$comedianID=$apiLogger->getParam("comedianID");
			$apiLogger->getcomedians($comedianID);
			$apiLogger->response();
		}

	}
?>