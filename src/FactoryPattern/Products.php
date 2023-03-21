<?php 

class Products {
    protected $ten;
    protected $gia;
    protected $mausac;
    protected $soluong;

    protected function __construct() {}

    /**
     * Get the value of soluong
     */ 
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * Set the value of soluong
     *
     * @return  self
     */ 
    public function setSoluong($soluong)
    {
        $this->soluong = $soluong;

        return $this;
    }

    /**
     * Get the value of mausac
     */ 
    public function getMausac()
    {
        return $this->mausac;
    }

    /**
     * Set the value of mausac
     *
     * @return  self
     */ 
    public function setMausac($mausac)
    {
        $this->mausac = $mausac;

        return $this;
    }

    /**
     * Get the value of gia
     */ 
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * Set the value of gia
     *
     * @return  self
     */ 
    public function setGia($gia)
    {
        $this->gia = $gia;

        return $this;
    }

    /**
     * Get the value of ten
     */ 
    public function getTen()
    {
        return $this->ten;
    }

    /**
     * Set the value of ten
     *
     * @return  self
     */ 
    public function setTen($ten)
    {
        $this->ten = $ten;

        return $this;
    }
}