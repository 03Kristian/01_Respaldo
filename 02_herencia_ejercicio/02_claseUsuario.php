<?php
    require_once("01_claseCliente.php");
    //
    class Usuario extends Cliente{

        private $email;
        private $password;

        function __construct(int $vrcedula,string $vrnombre,float $vrsalario, string $vremail, string $vrpassword)
        {
            parent::__construct($vrcedula, $vrnombre, $vrsalario);
            $this->email = $vremail;
            $this->password = $vrpassword;
        }

        public function getEmail()
        {
            return $this->email;
        }
        public function setEmail($vremail)
        {
            $this->email = $vremail;
        }
    }

?>