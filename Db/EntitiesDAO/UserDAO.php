<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/configPath.php';;
require_once SITE_ROOT."/Db/DatabaseDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'].'/Db/Connection.php';
require_once SITE_ROOT."/Model/Carro";
use model\Livro; 
use PDO;
use DB\Connection;
use ReflectionClass;

class CarroDao{

    private $connectionDb;
    
    //Construtor da classe
    public function __construct(){
        $this->connectionDb = Connection::getConnection();
    }

    function __clone(){}
    public function __destruct(){
        foreach ($this as $key => $value){
            unset($this->$key);
        }
        foreach(array_keys(get_defined_vars()) as $var){
            unset(${"$var"});
        }
    }
        
        public function Insert(Carro $carro){   
            
            // Inicializa variáveis
            $sqlInsert = "";
            $StringvalCampos= "";
            $campos = "";
            $valores = "";
            $CamposStatement = "";
            $contador = 0;
            $arrayChaveValor = array();
             // Loop para montar a instrução com os campos e valores
            foreach($livro as $chave => $valor):
                $campos .= $chave . ', ';
                $CamposStatement .= ':' .$chave. ', ';
                $arrayChaveValor[':'.$chave] = $valor;
                $contador++;
            endforeach;

            // Retira a , do final da string
            $StringvalCampos = $this->RetiraUltimaVirgula($campos);
            $StringvalStatement = $this->RetiraUltimaVirgula($CamposStatement);
      
            // Concatena todas as variáveis e finaliza a instrução
            $sqlInsert .= "INSERT INTO Livro (" .$StringvalCampos. ") VALUES (" .$StringvalStatement. ");";
            $stmt = $this->connectionDb->prepare($sqlInsert);
            $stmt->execute($arrayChaveValor);
            if($stmt){
                return true;
            }
        }

        public function SelectById($IdLivro){

            $sqlSelectById = "Select * from Livro WHERE IdLivro = " . $IdLivro;
            $result = $this->connectionDb->query($sqlSelectById);
            $assocDados = $result->fetchAll(PDO::FETCH_ASSOC);      
            return $assocDados;
        }

        public function SelectAll()
        {
           
            $result = "";
            $sqlSelect = "SELECT * FROM Livro";

            $result = $this->connectionDb->query($sqlSelect);

            $assocDados = $result->fetchAll(PDO::FETCH_ASSOC);
            return $assocDados;    
        }

        public function Update(Livro $o, $Id){

              // Inicializa variáveis
              $sqlUpdate = "";
              $StringvalCampos= "";
              $campos = "";
              $valores = "";
              $CamposStatement = "";
              $contador = 0;
              $arrayChaveValor = array();
              $stringValoresUpdate = "";

               // Loop para montar a instrução com os campos e valores
              foreach($o as $chave => $valor):
                $arrayChaveValor[':'.$chave] = $valor;
                $stringValoresUpdate .= $chave . " = " . ":".$chave. ", ";
              endforeach;

              // Retira a , do final da string
              $StringvalCampos = $this->RetiraUltimaVirgula($stringValoresUpdate);
              
            $sqlUpdate = "UPDATE Livro SET ". $StringvalCampos . " WHERE idLivro = ". $Id;
            
            $stmt = $this->connectionDb->prepare($sqlUpdate);
            $stmt->execute($arrayChaveValor);
            if($stmt){
                return true;
            }
            

        }

        public function Delete($id){
            $resultSelect = $this->SelectById($id);

            if(!$resultSelect){
                return false;
            }else{
                $result = "";
            
                $sqlSelect = "DELETE FROM Livro WHERE idLivro = ".$id;
                $result = $this->connectionDb->query($sqlSelect); 
                if($result){
                    return true;
                } 
            }    
        }

        public function DismountObject(Livro $l) {
            $reflectionClass = new ReflectionClass(get_class($l));
            $arrayDadosObjeto = array();
            foreach ($reflectionClass->getProperties() as $property) {
                $property->setAccessible(true);
                $arrayDadosObjeto[$property->getName()] = $property->getValue($l);
                $property->setAccessible(false);
            }
            return $arrayDadosObjeto;
        }

        private function RetiraUltimaVirgula($frase){
            $fraseSemUltimaVirgula = (substr($frase, -2) == ', ') ? trim(substr($frase, 0, (strlen($frase) - 2))) : $frase;
            return $fraseSemUltimaVirgula;
        }

        private function RetiraUltimoAND($valores){
            $valoresSemUltimoAND = (substr($valores, -4) == 'AND ') ? trim(substr($valores, 0, (strlen($valores) - 4))) : $valores;
            return $valoresSemUltimoAND;
        }
    }