<?php
require_once("core/Database.php");

class Router {

    private $routes = [];
    private $basePath = 'bymquiz/';

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }


    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = str_replace($this->basePath, '', $uri);
        $uri[strlen($uri)-1] = $uri[strlen($uri)-1]=='/' ? ' ' : $uri[strlen($uri)-1];
        $uri = trim($uri);
                
        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo json_encode(['error'=>'Route not found']);
            return;
        }
		if(!(str_starts_with($uri, "/constants/")))
			$this->preparingAccount();

        $action = $this->routes[$method][$uri];

        list($controller, $method) = explode('@', $action);

        $body = json_decode(file_get_contents("php://input"), true);

        $controller = new $controller();
        echo json_encode($controller->$method($body));
    }

    private function preparingAccount() {
        $pdo = Database::connect();
        $body = json_decode(file_get_contents("php://input"), true);
        $mode = $body['mode'] ;
        $langue = $body['language'];
        $sessionId = $body['session_id'];
        
        $sqlAccount = "SELECT * FROM users WHERE code = ? ";
        $stmt = $pdo->prepare($sqlAccount);
        $stmt->execute([$sessionId]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($mode == 'guess') {
            $account = $this->preparingAccountGuess($account, $pdo, $body, $sqlAccount);
        }
        else {
            $account = $this->preparingAccountUser($account, $pdo, $body, $sqlAccount);
        }
        $GLOBALS['USER'] = $account;
    }
    
    private function preparingAccountGuess($account, $pdo, $body, $sqlAccount):array {
        if($account) {
            $stmt = $pdo->prepare("UPDATE users SET lastConnexion = now() WHERE code = ? ");
            $stmt->execute([ $body['session_id'] ]);
        }
        else {
            $stmt = $pdo->prepare("INSERT INTO users(user_code, code, email, 
                    theme, language, user_type, 
                    createdOn, lastConnexion) 
                    
                    VALUES(NULL, ?, NULL, 
                    1, ?, ?, 
                    now(), now()) ");
            $stmt->execute([$body['session_id'], $body['langue'], $body['mode']]);
            $stmt = $pdo->prepare($sqlAccount);

            $stmt->execute([$body['session_id']]);
            $account = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return $account;
    }

    private function preparingAccountUser($account, $pdo, $body, $sqlAccount):array {
        if($account) {
            $stmt = $pdo->prepare("UPDATE users SET lastConnexion = now() WHERE code = ? ");
            $stmt->execute([ $body['session_id'] ]);
        }
        else {
            $stmt = $pdo->prepare("INSERT INTO users(user_code, code, email, 
            theme, language, user_type, 
            createdOn, lastConnexion) 
            
            VALUES(NULL, ?, ?,
             1, ?, ?, 
             now(), now()) ");
            $stmt->execute([ $body['session_id'], $body['session_id'], $body['langue'],  $body['mode']]);

            $stmt = $pdo->prepare($sqlAccount);
            $stmt->execute([ $body['session_id'] ]);
            $account = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $account;
    }
}