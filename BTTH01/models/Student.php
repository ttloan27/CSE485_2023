<?php 
    declare(strict_types = 1);
    class SV{
        private string $hoten;
        private string $nganhhoc;
        private string $maSV;
        private string $lophoc;

        public function __construct(string $hoten, string $nganhhoc, string $maSV, string $lop)
        {
            $this->hoten = $hoten;
            $this->nganhhoc = $nganhhoc;
            $this->maSV = $maSV;
            $this->lophoc = $lophoc;
        }
        public function getHoten()
        {
            return $this->hoten;
        }
        public function setHoten(string $hoten)
        {
            $this->hoten = $hoten;
        }
        public function getNganhhoc()
        {
            return $this->nganhhoc;
        }
        public function setNganhhoc(string $nganhhoc)
        {
            $this->nganhhoc = $nganhhoc;
        }
        public function getMaSV()
        {
            return $this->maSV;
        }
        public function setMaSV(string $maSV)
        {
            $this->maSV = $hmaSV;
        }
        public function getLophoc()
        {
            return $this->lophoc;
        }
        public function setLophoc(string $lophoc)
        {
            $this->lophoc = $lophoc;
        }
    
    }
?>